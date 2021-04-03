<?php include('header.php'); ?>

<?php

include('db.php');
$team="ourpride";
$result=mysqli_query($db, "SELECT * FROM team WHERE choice='$team' ORDER BY uploaded_on DESC ");
$choice="event";


$result1=mysqli_query($db, "SELECT * FROM events WHERE choice='$choice' ORDER BY uploaded_on desc");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>WELCOME TO ORIGN E.M SCHOOL</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>



<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
    <?php include('header.php');?>
 
</section>

 
   <section>
       

<div class="toosa_logo">
<img src="images/Logo.jpg" alt="" >
<br><br>
<h1 >THE ORIGIN E.M SCHOOL</h1>
</div>


<style>

.toosa_logo img{
  
    margin-left:auto;
    margin-right:auto;
    display:block;
    align:center;
    height:25%;
    width:25%;
  

}
.toosa_logo h1{
  text-align:center;
  
}
.toosa_logo{
  margin-top:-5%;
  
}
#features{
    background:black;
    margin-top:2%;

}
#features .container{
     margin-top:15%;
}
@media only screen and (max-width: 480px){


  
.toosa_logo img{
  
  margin-left:auto;
  margin-right:auto;
  display:block;
  align:center;
  height:50%;
  width:50%;


}
.toosa_logo h1{
text-align:center;
font-size:20px;
margin-top:-25px;
font-weight:20px;
}
.toosa_logo{
margin-top:-25%;
}

}
#features{
    style="background:black;
    margin-top:2%;"

}
#features .container{
    style="background:black; margin-top:2%;"
}
</style>
   </section>
 


   
<!-- features-4 block -->
<section class="w3l-index1" id="about" style="margin-top:-7%;">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
		
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-6 pr-lg-5">
					<h5 class="editContent">Welcome To Our Campus</h5>
					<p class="more-gap editContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
						architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum
						odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias</p>
						<p class="more-gap editContent">Numquam
							architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum
							odit veniam voluptas provident </p>
							<a class="btn btn-secondary btn-theme2 mt-3" href="about.php"> Read More</a>
				</div>
				<div class="column ccont-left col-lg-6">
					<img src="assets/images/g1.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-feature-3" id="features">
	<div class="grid top-bottom mb-lg-5 pb-lg-5">
		<div class="container">
			
			<div class="middle-section grid-column text-center" >
				<div class="three-grids-columns">
					<span class="fa fa-laptop"></span>
					<h4>Learn Courses Online</h4>
					<p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
					<a href="services.html" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-users"></span>
					<h4>Highly Qualified Teachers</h4>
					<p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
					<a href="services.html" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-book"></span>
					<h4>Book Library & Stores</h4>
					<p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
					<a href="services.html" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="w3l-price-2" id="news">
    <div class="price-main py-5">
        <div class="container py-md-3">
             <div class="pricing-style-w3ls row py-md-5">
              <div class="pricing-chart col-lg-6">
                <h3 class="">Latest Posts</h3>
               <?php if(mysqli_num_rows($result)>0){

               ?>
                <div class="tatest-top mt-md-5 mt-4">
                <?php while($row=mysqli_fetch_array($result)){
                  $image="admin/uploads/team/".$row['image'];

                ?>
                <br>
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                    <div class="column-6">
                                            <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                                        </div>
                                <div class="column1">
                                   
                                    <div class="job-info">
                                        <h6 class="pricehead"><a href="ourpride.php"><?php echo $row['title']; ?> </a></h6>
                                        <h5><?php echo $row['uploaded_on']; ?></h5>
                                        <p><?php echo $row['name']; ?></p>
                                        <p><?php echo $row['designation']; ?></p>
                                        
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <?php }?>
                      
                      
                    </div>
                    <?php }?>
                    <div class="text-right mt-4">
                        <a class="btn btn-secondary btn-theme2" href="ourpride.php"> View All</a>
                      </div>
                    </div>
                    <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                        <h3 class="">Upcoming Events</h3>
                        <?php if(mysqli_num_rows($result1)>0){
                          ?>
                        
                        <div class="events-top mt-md-5 mt-4">
                        <?php while($row=mysqli_fetch_array($result1)){?>
                            <div class="events-top-left">
                                    <div class="icon-top">
                                        <h3>14</h3>
                                        <p>Nov</p>
                                        <span>2020</span>
                                    </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead"><a href="events.php">	
                                    <?php echo $row['event']; ?></a></h6>
                                    <p class="mb-2 mt-3"><?php echo $row['description']; ?></p>
                                   
                                    <li class="melb"><?php echo $row['date']; ?></li>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                      
                        <div class="text-right mt-4">
                          <a class="btn btn-secondary btn-theme2" href="events.php"> View All</a>
                        </div>
                      </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
 
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>


</body>

</html>
<!-- // grids block 5 -->