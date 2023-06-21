<?php  

include("connection.php");

session_start();


// $title = $_POST["title"];
// $category = $_POST["category"];
// $author = $_POST["author"];
// $date = $_POST["date"];
// $body = $_POST["body"];
// $slug = $_POST["slug"];
// $link = $_POST["link"];
// $image = $_POST["image"];
// $user_id = $_SESSION["user_id"];

//  if(isset($title) && isset($category) && isset($author) && isset($date) && isset($body) && isset($slug) && isset($link))  
//  {  
//     SaveImages($link);

//     $output = '';

//     $query = "INSERT INTO articles (title, category, author, article_date, article_body, article_link, slug, article_image, user_id) VALUES ('$title','$category','$author','$date','$body', '$link', '$slug', '$image', '$user_id')";
//     $result = mysqli_query($conn_new, $query);


//     if(mysqli_num_rows($result) > 0){
//         $output = "success";
        
//     }else{
//         $output = "failed";
//     }

//     echo $output;  
//  }  else{
//      echo "errorsssss";
//  }

 

$output = '';  

 $query = "SELECT *
            FROM wp_users
        ";
 $result = mysqli_query($conn_wp, $query);  



if(mysqli_num_rows($result) > 0){

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($data);

}else{
    $output = "errorsss";
}

 ?>