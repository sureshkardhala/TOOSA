<?php include('header.php'); ?>

<?php

include('db.php');
$team="ourpride";
$result=mysqli_query($db, "SELECT * FROM team WHERE choice='$team' ORDER BY uploaded_on DESC ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TOOSA Alumini</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">




</head>

<body>



  <main id="main">
      <br><br><br>
      <style>
          /*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
  position: relative;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 10px;
  background: #fff;
}

.team .member .pic {
  overflow: hidden;
  width: 180px;
  border-radius: 50%;
}

.team .member .pic img {
  transition: ease-in-out 0.3s;
}

.team .member:hover img {
  transform: scale(1.1);
}

.team .member .member-info {
  padding-left: 30px;
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #05579e;
}

.team .member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .member span::after {
  content: '';
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #bfe0fd;
  bottom: 0;
  left: 0;
}

.team .member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.team .member .social a {
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 32px;
  height: 32px;
  background: #ecf6fe;
  color: #0665b7;
}

.team .member .social a i {
  font-size: 16px;
  margin: 0 2px;
}

.team .member .social a:hover {
  background: #0880e8;
  color: #fff;
}

.team .member .social a + a {
  margin-left: 8px;
}
      </style>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Our Pride</h2>
            <p>“I alone cannot change the world, but I can cast a stone across the waters to create many ripples.” </p>
          </div>
          <?php
          if(mysqli_num_rows($result)>0){

          ?>
  
          <div class="row">
          <?php
          while($row=mysqli_fetch_array($result)){
            $image="admin/uploads/team/".$row['image'];

          ?>
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?php echo $image; ?>" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <a href="student1.php?name=<?php echo $row['name']; ?>"><h4><?php echo $row['name']; ?></h4></a>
                  <span><?php echo $row['title']; ?></span>
                  <p><?php echo $row['description']; ?></p>
                  <div class="social">
                    <a href="<?php echo $row['twitter']; ?>"><i class="ri-twitter-fill"></i></a>
                    <a href="<?php echo $row['facebook']; ?>"><i class="ri-facebook-fill"></i></a>
                    <a href="<?php echo $row['instagram']; ?>"><i class="ri-instagram-fill"></i></a>
                    <a href="<?php echo $row['likedin']; ?>"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
              <p>    </p>
            </div>
            <?php
          }
          ?>
  
          
  
            
  
  
          </div>
          <?php
          }else{
            echo "No team Found";
          }
          ?>
  
        </div>
      </section><!-- End Team Section -->
      

  </main><!-- End #main -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>

</html>
