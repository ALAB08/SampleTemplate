<?php

session_start();

session_unset();
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, shrink-to-fit=no" />

    <title>MetroPost Migration</title> 
    <link rel="icon" href="images/metropost-icon.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/18939acf28.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>

<style>

    * {
        font-family: 'Poppins';
        font-size: 14px;
    }

    body{
        background: white;
    }

    .container {
        margin: 0;
        padding: 0;
        max-width: 100%;
    }

    .left-panel{
        min-width: 55%;
        background: #145fb6;
        height: 100vh;
    }

    .login-form {
        width: 100%;
        padding: 20px;
        background: blue;
    }

    .sys-name, .sys-name2 {
        color: #145fb6;
    }

    .sys-name {
        font-size: 47px;
        font-weight: 600;
    }

    .sys-name2 {
        font-family: Allura;
        font-size: 72px;
        margin-right: 10px;
    }

    .publisher-logo{
        width: 55%;
    }

    .controls {
        width: 55%;
        margin-top: 30px
    }

    .text-field {
        border-radius: 50px;
        padding: 15px 30px;
        font-size: 16px;
        max-width: 100%;
        font-weight: normal;
    }

    .login-button {
        width: 100%;
        border-radius: 50px;
        margin-top: 30px;
        padding: 15px 30px;
        font-size: 16px;
        background: #145fb6;
    }
    
</style>

<body>

    <div class="container">

        <div class="d-flex">

            <div class="left-panel">
                
            </div>

            <div class="flex-fill flex-grow-1 align-self-center">

                <div class="d-flex flex-column align-items-center">
                    
                    <img class="publisher-logo" src='images/metropost-logo.jpg'>
                    <p><span class="sys-name2">Post</span> <span class="sys-name">Migration</span></p>
                    
                    <div class="d-flex flex-column align-items-center controls">

                        <input type="text" id="txtUsername" placeholder="Username" class="form-control text-field"/>
                        <input type="password" id="txtPassword" placeholder="Password" class="form-control text-field mt-3"/>
                        
                        <input type="button" value="Login" class="btn btn-primary login-button" />    
                    </div>
                    
                </div>

            </div>
        </div>
            
    </div>


</body>

<script type="text/javascript">

$(document).ready(function(){  

    $('.login-button').click(function(){  
        var username = $("#txtUsername").val();  
        var password = $("#txtPassword").val();  

        $.ajax({ 
            method:"POST", 
            url:"model/login", 
            data:{username:username, password:password},  
            success:function(data){  
                if(data.includes("success")){
                    window.location.href = "dashboard";
                }else{
                    alert("credentials incorrect!");
                } 

               // alert(data);
            }  
        });  
    });  

}); 

</script>

</html>