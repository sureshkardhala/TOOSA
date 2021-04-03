<?php


include('db.php');
$result=mysqli_query($db, "SELECT * FROM books ORDER BY uploaded_on DESC");


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
        <title>Welcome to TOOSA Library</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="library/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="library/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="library/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="library/style.css" rel="stylesheet" type="text/css" />

       

    </head>

    <body>

       

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-full-width">
                        <div class="container">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="filter-box">
                                    <h3>What are you looking for at the library?</h3>
                                    <div class="menu">
                            <div class="dropdown"style=" margin-left:40%; margin-top:5%;" id="x">
                               
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="cat.php?categories=Offline">Offline</a>
    <a class="dropdown-item" href="cat.php?categories=Acadamics">Acadamics</a>
    <a class="dropdown-item" href="cat.php?categories=Languages">Languages</a>
    <a class="dropdown-item" href="cat.php?categories=Competative">Competative</a>
    <a class="dropdown-item" href="cat.php?categories=Technology">Technology</a>
    <a class="dropdown-item" href="cat.php?categories=Fantasy">Fantasy</a>
    <a class="dropdown-item" href="cat.php?categories=Self-Development">Self-Development</a>
    <a class="dropdown-item" href="cat.php?categories=Mystry">Mystry</a>
    <a class="dropdown-item" href="cat.php?categories=History">History</a>
   
  </div>
</div>
</div>
<br><br>

<style>
#sub-btn{
    margin-left:40%;
}
@media only screen and (max-width:480px){
    .menu{
        margin-right:35%;
        
    }
    #sub-btn{
        margin-left:-.5%;
    }

}

</style>
           
                                    <form action="search.php" method="get">
                                       
                                        <div class="active-pink-3 active-pink-4 mb-4">
                                               <input class="form-control" type="text" placeholder="Search here for best results" aria-label="Search" name="search">
                                        </div>
                                        <br>
                                        <div class="col-md-2 col-sm-6"id="sub-btn">
                                            <div class="form-group"style="background-color:#ff723;">
                                                <input class="btn btn-success" type="submit" value="Submit">
                                            </div>
                                        </div>
                                        
                                    </form>
                                    
                              
                                </div>

                               
                                
                            </section>
                            <!-- End: Search Section -->
                   
         
                            
                     <div class="booksmedia-fullwidth">
                                <?php 
                                if(mysqli_num_rows($result)){
                                ?>
                                <ul>
                                    <?php
                                    while($row=mysqli_fetch_array($result)){
                                        $image="admin/uploads/books/".$row['image'];

                                    ?>
                                    <li>
                                       
                                        <figure>
                                            <a href="single.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $image; ?>" alt="Book"></a>
                                            <figcaption>
                                                <header>
                                                    <h4><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h4>
                                                    <p><strong>Author:</strong>  <?php echo $row['author']; ?></p>
                                                    <p><strong>Subject:</strong> <?php echo $row['subject']; ?></p>
                                                </header>
                                                <p><?php echo $row['description']; ?></p>
                                              
                                            </figcaption>
                                        </figure>                                                
                                    </li>
                                    <?php
                                    }
                                    ?>
                                   
                                 
                                </ul>
                                <?php
                                }
                                ?>
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