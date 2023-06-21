<?php  

include("connection.php");

session_start();

$output = '';  

 $query = "SELECT article_id, title, category, author, article_link, article_image, article_date, date_added 
            FROM articles 
            WHERE status = 0
            ORDER BY article_date DESC
            LIMIT 200
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