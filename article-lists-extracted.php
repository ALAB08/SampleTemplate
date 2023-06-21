<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Extracted Posts</title>
    <link rel="icon" href="images/metropost-icon.jpg">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style-mobile.css"/>

	<script src="https://kit.fontawesome.com/18939acf28.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</head>


<body>

    <div class="d-flex">

        <div class="flex-fill">
            <?php include("masterpage/sidenav.php"); ?>
        </div>

        <div class="flex-fill w-100">
            <div class="mainDiv">

                <div class="d-flex mb-4">
                    <?php include("masterpage/header.php"); ?>
                </div>


                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card shadow-sm mb-3">
                            
                            <h5>Extracted Posts</h5>

                           
                            <table class="table table-striped mt-4">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col" width="10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tbl-body-article">
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
                
            </div>

        </div>

    </div>

   
</body>


<style>
    a.btn {
        color: white !important;
        margin-right: 5px;
    }
</style>


<script type="text/javascript">

$(document).ready(function(){  

    $.ajax({ 
        method:"GET", 
        url:"model/get-articles-extracted",
        success:function(data){ 

            var tableBody = $('#tbl-body-article');
            tableBody.empty();

            data.forEach(function(row, index) {
                var row_number = index + 1;
                var article_id = row.article_id;
                var title = row.title;
                var category = row.category;
                var author = row.author;
                var link = row.article_link;
                var image = row.article_image;
                var date = row.article_date;
                var date_added = row.date_added;

                
                var action_container = $('<div>');

                var btn_view = $('<a>');
                var icon = $('<i>').addClass('fa-solid fa-eye');
                btn_view.append(icon);
                btn_view.attr('class', 'btn btn-info btn-sm');
                btn_view.attr('href', 'article-view?id='+ article_id +'');
                //btn_view.attr('target', '_blank');
                action_container.append(btn_view);

                var btn_migrate = $('<a>');
                var icon = $('<i>').addClass('fa-solid fa-arrow-right-arrow-left');
                btn_migrate.append(icon);
                btn_migrate.attr('class', 'btn btn-warning btn-sm');
                btn_migrate.click(function() {
                    MigratePost(article_id);
                });
                action_container.append(btn_migrate);

                if(image == "") image = "-";
                if(author == "") author = "-";

                // Create a new table row
                var newRow = $('<tr>');

                var cell_number = $('<td>').text(row_number);
                var cell_title = $('<td>').text(title);
                var cell_category = $('<td>').text(category);
                var cell_author = $('<td>').text(author);
                var cell_link = $('<td>').text(link);
                var cell_image = $('<td>').text(image);
                var cell_date = $('<td>').text(date);
                var cell_date_added = $('<td>').text(date_added);
                var cell_actions = $('<td>').html(action_container);

                newRow.append(cell_number, cell_title, cell_category, cell_author, cell_link, cell_image, cell_date, cell_date_added, cell_actions);

                tableBody.append(newRow);
            });
    
        }  
    });


    function MigratePost(article_id){
        const postData = {
            article_id
        };

        $.ajax({ 
            method:"POST", 
            url:"model/insert-article-wp",
            data: postData,
            success:function(data){  
                console.log("Post successful");
            }
            // error: function(error) {
            //     console.error("Error:", error);
            // }
        });  

    }


}); 

</script>


</html>


