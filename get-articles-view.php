<?php  

include("connection.php");

session_start();

$article_id = $_POST["article_id"];

$output = '';  

 $query = "SELECT article_id, title, category, article_link, article_image, article_date, date_added, article_body, author, slug
            FROM articles 
            WHERE article_id = '$article_id'
            LIMIT 1
        ";
 $result = mysqli_query($conn_new, $query);  



if(mysqli_num_rows($result) > 0){

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($data);

}else{
    $output = "errorsss";
}

 ?>