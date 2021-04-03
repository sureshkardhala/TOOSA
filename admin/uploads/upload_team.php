<?php 
include('db.php');
if(isset($_POST['submit'])){

$name= mysqli_real_escape_string($db, $_POST['name']);
$designation= mysqli_real_escape_string($db, $_POST['designation']);
$choice= mysqli_real_escape_string($db, $_POST['choice']);
$title= mysqli_real_escape_string($db, $_POST['title']);
$description= mysqli_real_escape_string($db, $_POST['description']);
$facebook= mysqli_real_escape_string($db, $_POST['facebook']);
$twitter= mysqli_real_escape_string($db, $_POST['twitter']);
$instagram= mysqli_real_escape_string($db, $_POST['instagram']);
$linkedin= mysqli_real_escape_string($db, $_POST['linkedin']);
       
$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$img_path="team/".$imgfile;
// get the image extension

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

// allowed extensions

$allowed_extensions = array(".jpg",".jpeg",".png");
$user_check_query = "SELECT * FROM team WHERE image='$imgfile' LIMIT 1";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
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


$query = mysqli_query($db, "INSERT INTO team (image, name, title, designation, choice, linkedin, twitter, facebook, instagram, description) VALUES ('$imgnewfile', '$name', '$title', '$designation', '$choice', '$linkedin', '$twitter', '$facebook', '$instagram', '$description')");







if($query){     

       echo "<script>alert('Data inserted successfully');</script>";
}
else{
    echo  "<script>alert('Data failed to insert into database');</script>";
}

        }else{
            echo "<script>alert('Image failed to insert');</script>";

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
  
  <form action="upload_team.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
   
    <div class="form-group">
      <label for="name">Image</label>
      <input class="form-control" id="name" type="file" name="image">
    </div>

   
    <div class="form-group">
      <label for="name">Designation</label>
      <input class="form-control" id="name" type="text" name="designation">
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
    <div class="form-group" style="visibility:hidden;">
      <label for="name">Choice</label>
      <input class="form-control" id="name" type="text" name="choice" required value="team">
    </div>
    <div class="form-group" style="visibility:hidden;">
      <label for="name">Title</label>
      <input class="form-control" id="name" type="text" name="title" required value="team">
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