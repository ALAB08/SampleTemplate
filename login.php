<?php  

include("connection.php");

session_start();

 if(isset($_POST["username"]) && isset($_POST["password"]))  
 {  
    $username = $_POST["username"];
    $password = $_POST["password"];
    $output = '';  

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn_new, $query);  


    if(mysqli_num_rows($result) > 0){
        $_SESSION['logged'] = $username;

        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user_id'] = $row['user_id'];
        }
        
        $output = "success";
        
    }else{
        $output = "errorsss";
    }
    
    
    // if($username == "admin" && $password == "1@@@"){
    //     $_SESSION['logged'] = $username;
    //     $output = "success";
    // }else{
    //     $output = "errorsss";
    // }

       echo $output;  
 }  else{
     echo "error";
 }
 ?>