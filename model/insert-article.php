<?php  

include("connection.php");

session_start();

$title = $_POST["title"];
$category = $_POST["category"];
$author = $_POST["author"];
$date = $_POST["date"];
$body = $_POST["body"];
$slug = $_POST["slug"];
$link = $_POST["link"];
$image = $_POST["image"];
$user_id = $_SESSION["user_id"];

 if(isset($title) && isset($category) && isset($author) && isset($date) && isset($body) && isset($slug) && isset($link))  
 {  
    SaveImages($link);

    $output = '';

    $query = "INSERT INTO articles (title, category, author, article_date, article_body, article_link, slug, article_image, user_id) VALUES ('$title','$category','$author','$date','$body', '$link', '$slug', '$image', '$user_id')";
    $result = mysqli_query($conn_new, $query);


    if(mysqli_num_rows($result) > 0){
        $output = "success";
        
    }else{
        $output = "failed";
    }

    echo $output;  
 }  else{
     echo "errorsssss";
 }



 function SaveImages($url){

    $dir = '../images/article-images/'; // Directory to save images in
    $imgClass = 'pagephoto layout_pagephoto'; // Class of images to download

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get HTML content of webpage
    $html = curl_exec($ch);

    // Create DOM document and load HTML content
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    // Find all <img> tags with the specified class and download their "src" attribute to the specified directory
    $xpath = new DOMXPath($dom);
    $imgs = $xpath->query('//img[@class="'.$imgClass.'"]');
    //$imgs = $dom->getElementsByTagName('img');

    foreach ($imgs as $img) {
        $src = $img->getAttribute('src');
        if (strpos($src, 'http') === 0) {
            $filename = basename($src);
            $file = $dir . $filename;
            file_put_contents($file, file_get_contents($src));
            echo $file;
        }

    }

    // Close cURL session
    curl_close($ch);
 }


//  $article_details = array(
//     'title' => $title,
//     'category' => $category,
//     'author' => $author,
//     'date' => $date,
//     'body' => $body,
//     'slug' => $slug,
//     'link' => $link,
//     'user_id' => $user_id,
// );

// echo json_encode($article_details);


 ?>