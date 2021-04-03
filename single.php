<?php
include('db.php');
if($_GET['id']){

$id=$_GET['id'];
$result=mysqli_query($db, "SELECT * FROM books WHERE id='$id' ");
$row=mysqli_fetch_array($result);
$image="admin/uploads/books/".$row['image'];


?>

<?php

include('header.php');
?>




<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title><?php echo $row['name']; ?> </title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="library/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="library/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="library/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <!-- Stylesheet -->
        <link href="library/style.css" rel="stylesheet" type="text/css" />

     
    </head>

    <body>

       

        <!-- End: Page Banner -->


        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                           
                                           
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>

                            <div class="booksmedia-detail-box">
                                <div class="detailed-box">
                                    <div class="col-xs-12 col-sm-5 col-md-3">
                                        <div class="post-thumbnail" >
                                           
                                            <img src="<?php echo $image; ?>" alt="Book Image"  style="width:100%;height:100%; border-radius:2px;">
                                        </div>
                                    </div>
                                <div class="content">
                               
                                            <h2><?php echo $row['name']; ?></h2>
                                            <p><strong>Author:</strong> <?php echo $row['author']; ?></p>
                                            <p><strong>Subject: </strong><?php echo $row['subject']; ?></p>
                                           
                                            <p><strong>Edition:</strong><?php echo $row['edition'];  ?> Edition</p>
                                            <p><strong>Publisher:</strong><?php echo $row['publisher']; ?>   Publications</p>
                                           
                                           
                                            <p><strong>Genre :</strong> <?php echo $row['categories']; ?></p>
                                            <p><strong>Uplaoded_on :</strong> <?php echo $row['uploaded_on']; ?></p>
                                            <br>
                                            <a download href="<?php echo $row['link']; ?>" class="btn btn-success" style="text-align:center;">Download</a> 
                               
                                           
                                      
                                </div>
                                     

                                     <style>
                                     .content{

                                         margin-left:45%;
                                        
                                     }
                                    @media only screen and (max-width: 480px) {
                                        .content{

                                             margin-left:5%;


                                        }
                                        .content h2{
                                            margin-top:2%;
                                            font-size:25px;
                                        }

                                     }
                                     </style>
                                   
                                 
                                  
                                   
                                <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <p><strong>Summary:</strong><?php echo $row['description']; ?> </p>
                               
                                             
                                

                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
            </div>
        </div>

      
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="library/js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="library/js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="library/js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="library/js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="library/js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="library/js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="library/js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="library/js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="library/js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="library/js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="library/js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="library/js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="library/js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="library/js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="library/js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="library/js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="library/js/main.js"></script>

    </body>


</html>
<?php
}
?>