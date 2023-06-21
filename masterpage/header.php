<?php  
    session_start();

    if(!isset($_SESSION['logged'])){
        header("Location: ./");
        exit();
    }
?>

<style>
    .chev {
        font-size: 25px;
        margin-right: 10px;
        color: #145fb6;
    }
</style>


<div class="flex-grow-1 ms-3 align-self-center">
    <div class="lh-1">
        <h2><a href="javascript:history.go(-1)" class="btn-go-back d-none"><i class="fa-solid fa-chevron-left chev"></i></a> MIGRATION <span>

        <?php
            // $url = $_SERVER['REQUEST_URI'];
            // $parts = explode('/', $url);
		    // $last_part = end($parts);


            $url = $_SERVER['REQUEST_URI'];
            $urlWithoutParams = explode('?', $url)[0];
            $parts = explode('/', trim($urlWithoutParams, '/'));
            $last_part = end($parts);

            if ($last_part == 'dashboard') {
                echo "DASHBOARD";
            } else if ($last_part == 'article-extraction-single') {
                echo "SINGLE POST";
            }else if ($last_part == 'article-extraction-multiple') {
                echo "MULTIPLE POSTS";
            }else if ($last_part == 'article-lists-migrated') {
                echo "MIGRATED POSTS";
            }else if ($last_part == 'article-lists-extracted') {
                echo "EXTRACTED POSTS";
            }else if ($last_part == 'logs') {
                echo "LOGS";
            }

            if ($last_part == 'article-view') {
                echo "VIEW ARTICLE";
            }
        ?>

        </span></h2>
    </div>
</div>


<div id="divProfile" class="flex-shrink-0 align-self-center">
    <div class="d-flex">
        <!-- <div class="flex-fill profile-name">
            <p class="mb-0 fw-bold"><?php echo $_SESSION['logged']; ?></p>
            <small style="color:gray">Neitiviti Studios, Admin</small>
        </div>
        <img src="images/icon-profile.png" class="profile-login"> -->

        <div id="divProfile" class="flex-shrink-0 align-self-center">
            <div class="d-flex">
                <div class="dropdowns">
                    <img src="images/icon-profile.png" class="profile-login dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                    <ul class="dropdown-menu shadow border-0">

                        <div class="p-4">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="images/icon-profile.png" class="profile-login2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="max-width:100px"> 
                                <span class="fw-bold mt-3"><?php echo $_SESSION['logged']; ?></span>
                                <span>Neitiviti Studios, Admin</span>
                                
                                <a href="./" class="btn btn-danger mt-3 w-100" type="button">Logout</a>

                            </div>
                        </div>

                    </ul>
                </div>

            </div>
        </div>
  

    </div>
</div>
