<?php

include('toosa_header.php');
include('db.php');
$choice="video";
$result=mysqli_query($db, "SELECT * FROM photos WHERE choice='$choice' ORDER BY uploaded_on DESC");
?>


<html>

<head>
  <title>TOOSA Video Gallery</title>
</head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/youtube.js">

<body>
<style>
 /* First make sure the video thumbnail images are responsive. */

 img {
    max-width: 100%;
    height: auto;
  }
  
  /* 
  This is the starting grid for each video with thumbnails 4 across for the largest screen size.
  It's important to use percentages or there may be gaps on the right side of the page. 
  */

  .video {
    background: #fff;
    padding-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    width: 23%; /* Thumbnails 4 across */
    margin: 1%;
    float: left;
  }

   /* 
   These keep the height of each video thumbnail consistent between YouTube and Vimeo.
   Each can have thumbnail sizes that vary by 1px and are likely break your layout. 
   */

  .video figure {
    height: 0;
    padding-bottom: 56.25%;
    overflow: hidden;

    .video figure a {
      display: block;
      margin: 0;
      padding: 0;
      border: none;
      line-height: 0;
    }
  }

  /* Media Queries - This is the responsive grid. */

  @media (max-width: 1024px) {
    .video {
      width: 31.333%; /* Thumbnails 3 across */
    }
  }

  @media (max-width: 600px) {
    .video {
      width: 48%; /* Thumbnails 2 across */
    }
  }

  @media (max-width: 360px) {
    .video {
      display: block;
      width: 96%; /* Single column view. */
      margin: 2%; /* The smaller the screen, the smaller the percentage actually is. */
      float: none;
    }
  }

  /* These are my preferred rollover styles. */

  .video img {
    width: 100%;
    opacity: 1;
  }

  .video img:hover, .video img:active, .video img:focus {
    opacity: 0.75;
  }
</style>
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="text-align:center;">Videos</h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <br><br>




  <?php if(mysqli_num_rows($result)>0){

  ?>
  
    <?php
    while ($row= mysqli_fetch_array($result)) {
        $image="admin/uploads/photos/".$row['image'];

        
    ?>  <article class="video">
    <figure>
      <a class="fancybox fancybox.iframe" href="<?php echo $row['link']; ?>">
      <img class="videoThumb" src="<?php echo $image; ?>"></a>
    </figure>
    <p class="videoTitle"><?php echo $row['title']; ?></p>
  </article>
          
      
       
     
      <?php
    }
    ?>
  
    
  
    <?php
  }else {
      echo "NO images Found";
  }
  ?>
  

  
  <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.fancybox').fancybox({
        padding   : 0,
        maxWidth  : '100%',
        maxHeight : '100%',
        width   : 560,
        height    : 315,
        autoSize  : true,
        closeClick  : true,
        openEffect  : 'elastic',
        closeEffect : 'elastic'
      });
    });
  </script>

    
</body>

</html>