<?php 
include('db.php');
if(isset($_POST['submit'])){

$name= mysqli_real_escape_string($db, $_POST['name']);
$password= mysqli_real_escape_string($db, $_POST['password']);
$designation= mysqli_real_escape_string($db, $_POST['designation']);
$dob= mysqli_real_escape_string($db, $_POST['dob']);
$email= mysqli_real_escape_string($db, $_POST['email']);
$phone= mysqli_real_escape_string($db, $_POST['phone']);
$batch= mysqli_real_escape_string($db, $_POST['batch']);
$cv= mysqli_real_escape_string($db, $_POST['cv']);
$inistitution= mysqli_real_escape_string($db, $_POST['inistitution']);
$description= mysqli_real_escape_string($db, $_POST['description']);
$facebook= mysqli_real_escape_string($db, $_POST['facebook']);
$twitter= mysqli_real_escape_string($db, $_POST['twitter']);
$instagram= mysqli_real_escape_string($db, $_POST['instagram']);
$linkedin= mysqli_real_escape_string($db, $_POST['linkedin']);
       
$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$img_path="members/".$imgfile;
// get the image extension

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

// allowed extensions

$allowed_extensions = array(".jpg",".jpeg",".png");
$user_check_query = "SELECT * FROM members WHERE image='$imgfile' LIMIT 1";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
		$result = mysqli_query($db, $user_check_query);
		$check = mysqli_fetch_assoc($result);

		if ($check) { // if user exists
		
			if ($check['image'] === $imgfile) {
                echo "<script>alert('Image already exists with same name');</script>";
			}
		}
        elseif(!in_array($extension,$allowed_extensions)){
        
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png format allowed');</script>";
        
        }
        elseif($file_size > 2097152){
            echo "<script>alert('File is too Large');</script>";

            
        }else{
              	
//rename the image file

$imgnewfile=$imgfile;  

// Code for move image into directory

if(move_uploaded_file($_FILES["image"]["tmp_name"],$img_path)){

// Query for insertion data into database  


$query = mysqli_query($db, "INSERT INTO members (image, name, password, designation, inistitution, email, phone, batch, dob, linkedin, twitter, facebook, instagram,description, cv) VALUES ('$imgnewfile', '$name', '$password', '$designation', '$inistitution', '$email', '$phone', '$batch', '$dob', '$linkedin', '$twitter', '$facebook', '$instagram','$description', '$cv')");







if($query){     

       echo "<script>alert('Data inserted successfully');</script>";
}
else{
    echo  "<script>alert('Data failed to insert in database');</script>";
}

        }else{
            echo "<script>alert('Image not inserted ');</script>";

        }   
    } 
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Upload User Information</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <!-- Vendor CSS Files -->
   <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  


</head>

<body>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Upload Member Information</h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us">
      <div class="container">

     

     

          <div class="col-lg-8 mt-5 mt-lg-0">

          <div class="form-box">
  
  <form action="upload_member.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Username</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="name">Batch</label>
      <select name="batch" class="form-control form-control-sm">
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
      <input class="form-control" id="name" type="text" name="cv">
    </div>
    <div class="form-group">
      <label for="name">Image</label>
      <input class="form-control" id="name" type="file" name="image">
    </div>

    <div class="form-group">
      <label for="name">Birth</label>
      <input class="form-control" id="name" type="date" name="dob">
    </div>
    <div class="form-group">
      <label for="name">Student / Employee</label>
      <input class="form-control" id="name" type="text" name="designation">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" id="email" type="email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Phone</label>
      <input class="form-control" id="email" type="text" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Inistitution</label>
      <input class="form-control" id="name" type="text" name="inistitution">
    </div>
    <div class="form-group">
      <label for="email">Facebook</label>
      <input class="form-control" id="name" type="text" name="facebook">
    </div>
    <div class="form-group">
      <label for="email">Instagram</label>
      <input class="form-control" id="name" type="text" name="instagram">
    </div>
    <div class="form-group">
      <label for="email">Twitter</label>
      <input class="form-control" id="name" type="text" name="twitter">
    </div>
    <div class="form-group">
      <label for="email">Linkedin</label>
      <input class="form-control" id="name" type="text" name="linkedin">
    </div>
   
    <div class="form-group">
      <label for="message">Description</label>
      <textarea class="form-control" id="message" name="description"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
    </div>
    <div class="form-group"  style="visibility:hidden;">
      <label for="email">Password</label>
      <input class="form-control" id="name" type="text" name="password" required value="TOOSA@2018">
    </div>
  </form>
</div>

          </div>

        </div>

     
    </section><!-- End Contact Us Section -->
    </main><!-- End #main -->



<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>



</body>

</html>