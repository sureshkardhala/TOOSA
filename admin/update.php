

<?php 
include('../db.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($db, "SELECT * FROM members WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update User Information</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <!-- Vendor CSS Files -->
   <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  


</head>

<body>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Member Information</h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us">
      <div class="container">

     

     

          <div class="col-lg-8 mt-5 mt-lg-0">

          <div class="form-box">
  
  <form action="update_data.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Username</label>
      <input class="form-control" id="name" type="text" name="name" required value="<?php echo $row['name']; ?>">
    </div>
    <div class="form-group" >
      <label for="email">Password</label>
      <input class="form-control" id="name" type="text" name="password" required value="<?php echo $row['password']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Batch</label>
      <select name="batch" class="form-control form-control-sm" required value="<?php echo $row['batch']; ?>">
      <option value="2014-2015">Batch 2014-2015</option>
      <option value="2015-2016">Batch 2015-2016</option>
      <option value="2016-2017">Batch 2016-2017</option>
      <option value="2017-2018">Batch 2017-2018</option>
      <option value="2018-2019">Batch 2018-2019</option>
      <option value="2019-2020">Batch 2019-2020</option>
      <option value="2020-2021">Batch 2020-2021</option>
      <option value="2021-2022">Batch 2021-2022</option>
      </select>
      
    </div>
    <div class="form-group">
      <label for="name">CV</label>
      <input class="form-control" id="name" type="text" name="cv" required value="<?php echo $row['cv']; ?>">
    </div>
  

    <div class="form-group">
      <label for="name">Birth</label>
      <input class="form-control" id="name" type="date" name="dob" required value="<?php echo $row['dob']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Student / Employee</label>
      <input class="form-control" id="name" type="text" name="designation" required value="<?php echo $row['designation']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" id="email" type="email" name="email" required value="<?php echo $row['email']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Phone</label>
      <input class="form-control" id="email" type="text" name="phone" required value="<?php echo $row['phone']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Inistitution</label>
      <input class="form-control" id="name" type="text" name="inistitution" required value="<?php echo $row['inistitution']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Facebook</label>
      <input class="form-control" id="name" type="text" name="facebook" required value="<?php echo $row['facebook']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Instagram</label>
      <input class="form-control" id="name" type="text" name="instagram" required value="<?php echo $row['instagram']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Twitter</label>
      <input class="form-control" id="name" type="text" name="twitter" required value="<?php echo $row['twitter']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Linkedin</label>
      <input class="form-control" id="name" type="text" name="linkedin" required value="<?php echo $row['linkedin']; ?>">
    </div>
   
    <div class="form-group">
      <label for="message">Description</label>
      <textarea class="form-control" id="message" name="description"><?php echo $row['description']; ?></textarea>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
    </div>
    <div class="form-group" style="visibility:hidden;" >
      <label for="name">ID</label>
      <input class="form-control" id="name" type="text" name="id" required value="<?php echo $row['id']; ?>">
    </div>
    <div class="form-group" style="visibility:hidden;" >
      <label for="name" >Image</label>
      <input class="form-control" id="name" type="text" name="image" required value="<?php echo $row['image']; ?>">
    </div>
  
  </form>
</div>

          </div>

        </div>

     
    </section><!-- End Contact Us Section -->
    </main><!-- End #main -->



<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>



</body>

</html>
<?php
}
?>