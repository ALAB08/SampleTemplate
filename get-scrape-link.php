<?php  

include("connection.php");

session_start();

 if(isset($_POST["link"]))  
 {  
    $link = $_POST["link"];
    $output = '';  

    $query = "SELECT * FROM articles WHERE article_link = '$link'";
    $result = mysqli_query($conn_new, $query);  


    if(mysqli_num_rows($result) > 0){
        $output = "exists";
    }else{
        GetScrapeData($link);
    }

    echo $output;  

 }  else{
     echo "error";
 }

//GetScrapeData("https://metropost-online.com/coco-farmers-urged-to-register-for-benefits-p15807-422.htm");


 function GetScrapeData($url){

    $link_category = "";
    $link_title = "";
    $link_date = "";
    $link_body = "";
    $link_slug = "";
    $link_image = "";

    // The target URL to scrape
    //$url = "https://metropost-online.com/coco-farmers-urged-to-register-for-benefits-p15807-422.htm";

    $dom = new DOMDocument();
    $dom->loadHTMLFile($url);

    // Create a new DOMXPath object
    $xpath = new DOMXPath($dom);

    //==== GET TITLE ====//
    $class_name_title = "pageheading layout_pageheading";
    $element_title = $xpath->query("//h1[contains(@class, '$class_name_title')]")->item(0);
    if ($element_title) $link_title = $element_title->nodeValue;
    //==== END OF GET TITLE ====//
    
    //==== GET CATEGORY ====//
    $class_name_category = "sub-menu_DEF";
    $element_category = $xpath->query("//span[contains(@class, '$class_name_category')]")->item(0);
    if ($element_category) $link_category = $element_category->nodeValue;
    //==== END OF GET CATEGORY ====//

    //==== GET AUTHOR ====//
    $class_name_author = "pagebyline layout_pagebyline";
    $element_author = $xpath->query("//div[contains(@class, '$class_name_author')]")->item(0);
    if ($element_author) $link_author = $element_author->nodeValue;
    //==== END OF GET AUTHOR ====//

    //==== GET DATE ====//
    $class_name_date = "pageissuedate layout_pageissuedate";
    $element_date = $xpath->query("//div[contains(@class, '$class_name_date')]")->item(0);
    if ($element_date) $link_date = str_replace('GetArticleDate("', "", $element_date->nodeValue);
    $link_date = str_replace('");', "", $link_date);
    $link_date = date('Y-m-d', strtotime($link_date));
    //==== END OF GET DATE ====//

    //==== GET IMAGE ====//
    $class_name_image = "pagephoto layout_pagephoto";
    $element_image = $xpath->query("//img[contains(@class, '$class_name_image')]")->item(0);
    if ($element_image) $link_image = $element_image->getAttribute('src');
    //==== END OF GET IMAGE ====//

    //==== GET SLUG ====//
    $link_slug = str_replace('https://metropost-online.com/', "", $url);
    $link_slug = str_replace('.htm', "", $link_slug);
    //==== END OF GET SLUG ====//


    //==== GET BODY ====//

    $body_searchClass = "pagebody layout_pagebody";

    $finder = new DomXPath($dom);
    $classname = $body_searchClass;
    $nodes = $finder->query("//*[contains(@class, '$classname')]");
    foreach ($nodes as $node) {

        //REMOVE DATE
        $divs = $finder->query(".//div[@class='pageissuedate layout_pageissuedate']", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }

        //REMOVE AUTHOR
        $divs = $finder->query(".//div[@class='pagebyline layout_pagebyline']", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }

        // Find the tags with a text of "author"
        $divs = $finder->query("//em[contains(text(), 'email:')]", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }

        //REMOVE BOTTOM
        $divs = $finder->query(".//span[@class='pagesourceline layout_pagesourceline']", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }

        $divs = $finder->query(".//div[@class='sharebody layout_sharebody bottom_share']", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }

        $divs = $finder->query(".//a[@style='font-weight: bold;']", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }

        $divs = $finder->query(".//span[@style='font-style: italic; color: #1826ff;']", $node);
        foreach ($divs as $div) {
            $div->parentNode->removeChild($div);
        }


        //REMOVE DIV SOCIAL MEDIA
        $divs = $dom->getElementsByTagName('div');

        for ($i = $divs->length - 1; $i >= 0; $i--) {
            $div = $divs->item($i);
            
            // Check if the <div> element has no class attribute
            if (!$div->hasAttribute('class')) {
                // Remove the <div> element
                $div->parentNode->removeChild($div);
            }
        }


        // Get the innerHTML of the element
        $innerHTML = '';

        foreach ($node->childNodes as $child) {
            $innerHTML .= $dom->saveHTML($child);
        }

        // Output the scraped data
        $link_body = $innerHTML . PHP_EOL;
    }


    //==== GET OF BODY ====//


    $article_details = array(
        'title' => $link_title,
        'category' => $link_category,
        'author' => $link_author,
        'date' => $link_date,
        'body' => $link_body,
        'slug' => $link_slug,
        'image' => $link_image
    );

    echo json_encode($article_details);



 }
 ?>