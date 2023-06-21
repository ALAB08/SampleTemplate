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


<style>
    a.btn {
        color: white !important;
        margin-right: 5px;
    }
</style>


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
                            
                            <h5>Articles</h5>

                           
                            <table id="tbl-article" class="table table-striped mt-4">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" width="10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <!--   <tr>
                                        <td>1</td>
                                        <td>To postpone or not to postpone</td>
                                        <td>Editorial</td>
                                        <td>-</td>
                                        <td>https://metropost-online.com/to-postpone-or-not-to-postpone-p15823-76.htm</td>
                                        <td>https://metropost-online.com/18-05-2023-06-55-15-am-8508494.jpg</td>
                                        <td>2023-05-14</td>
                                        <td>
                                            <a class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                                            <a class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </td>
                                    </tr> -->

                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
                
            </div>

        </div>

    </div>

   
</body>



<script type="text/javascript">

$(document).ready(function(){
    
    $.getJSON('js/json/file0.json', function(data) {


       
        var tbody = $('#tbl-article tbody');
        var num = 1;
        var limit = 10000;

        $.each(data, function(index, item) {

            var row = '';
            var article_id = item.article_id;

            if(article_id !== null && (num <= limit)){

                var menu = item.menu;
                var heading = item.heading;
                var url = item.url;
                var author = item.by_line;
                // var body = item.body;
                // var picture_location = item.picture_location;
                var issue_date = item.issue_date;
                var starting_date = item.starting_date;
                var active = item.active;

                row += '<tr>';
                row += '<td>'+ num +'</td>';
                row += '<td>'+ heading +'</td>';
                row += '<td>'+ menu +'</td>';
                row += '<td>'+ author +'</td>';
                row += '<td>'+ url +'</td>';
                row += '<td>'+ issue_date +'</td>';
                row += '<td>';
                row += '<a class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>';
                row += '<a class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>';
                row += '</td>';
                row += '</tr>';


                tbody.append(row);

                num++;

                //console.log(article_id);

            }


            
        });

       // console.log(data);

    })
    .fail(function(jqxhr, textStatus, error) {
        var err = textStatus + ", " + error;
        console.log("Request Failed: " + err);

    });


}); 

</script>


</html>


