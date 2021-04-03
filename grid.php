<?php

include('toosa_header.php');
include('db.php');
$choice="photo";
$result=mysqli_query($db, "SELECT * FROM photos WHERE choice='$choice' ORDER BY uploaded_on DESC");
?>


<html>

<head>
  <title>TOOSA Gallery</title>
</head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<body>
<style>
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 33.3%;
  padding: 0 4px;
}

.column img {
 
  vertical-align: middle;
  width: 100%;
  height:95%;

  filter: grayscale(0) ;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s linear;
}
.column img:hover {
  filter: grayscale(0);
}
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
  .column img {
    filter: grayscale(0) brightness(1);
  }
}
</style>
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="text-align:center;">Gallery</h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <br><br>


  <div class="container-fluid">

  <?php if(mysqli_num_rows($result)>0){

  ?>
    <div class="row">
    <?php
    while ($row= mysqli_fetch_array($result)) {
        $image="admin/uploads/photos/".$row['image'];

        
    ?>
      <div class="column">
          <a href="<?php echo $image; ?>">  <img src="<?php echo $image; ?>" /></a>
      
       
      </div>
      <?php
    }
    ?>
  
    
    </div>
    <?php
  }else {
      echo "NO images Found";
  }
  ?>
  </div>

  
    <!-- JQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>

        $(document).ready(function () {
            $(".list").click(function () {

                let value = $(this).attr("data-filter");

                if (value == "all") {
                    $(".items").show(1000);
                }
                else {
                    $(".items").not("." + value).hide(1000);
                    $(".items").filter("." + value).show(1000);
                }

                $(".list").removeClass("active");
                $(this).addClass("active");
            });


            $('.row').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                // other options

                gallery: {
                    enabled: true, // set to true to enable gallery

                    preload: [0, 2], // read about this option in next Lazy-loading section

                    navigateByImgClick: true,

                    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button

                    tPrev: 'Previous (Left arrow key)', // title for left button
                    tNext: 'Next (Right arrow key)', // title for right button
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
                },

                mainClass: 'mfp-with-zoom', // this class is for CSS animation below

                zoom: {
                    enabled: true, // By default it's false, so don't forget to enable it

                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function

                    // The "opener" function should return the element from which popup will be zoomed in
                    // and to which popup will be scaled down
                    // By defailt it looks for an image tag:
                    opener: function (openerElement) {
                        // openerElement is the element on which popup was initialized, in this case its <a> tag
                        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        });

    </script>
</body>

</html>
