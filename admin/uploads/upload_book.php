<?php 
include('db.php');
if(isset($_POST['submit'])){

$name= mysqli_real_escape_string($db, $_POST['name']);
$author= mysqli_real_escape_string($db, $_POST['author']);
$subject= mysqli_real_escape_string($db, $_POST['subject']);
$link= mysqli_real_escape_string($db, $_POST['link']);
$publisher= mysqli_real_escape_string($db, $_POST['publisher']);
$edition= mysqli_real_escape_string($db, $_POST['edition']);
$description= mysqli_real_escape_string($db, $_POST['description']);
$categories= mysqli_real_escape_string($db, $_POST['categories']);

       
$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$img_path="books/".$imgfile;
// get the image extension

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

// allowed extensions

$allowed_extensions = array(".jpg",".jpeg",".png");
$user_check_query = "SELECT * FROM books WHERE image='$imgfile' LIMIT 1";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
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


$query = mysqli_query($db, "INSERT INTO books (image, name, author, subject, link, description, publisher, edition, categories) VALUES ('$imgnewfile', '$name', '$author', '$subject', '$link', '$description', '$publisher', '$edition', '$categories')");







if($query){     

       echo "<script>alert('Data inserted successfully');</script>";
}
else{
    echo  "<script>alert('Data not inserted');</script>";
}

        }else{
            echo "<script>alert('Data not inserted successfully');</script>";

        }   
    } 
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Upload Book Information</title>
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
          <h2>Upload Book Information</h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us">
      <div class="container">

     

     

          <div class="col-lg-8 mt-5 mt-lg-0">

          <div class="form-box">
  
  <form action="upload_book.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Book Name</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
  
    <div class="form-group">
      <label for="name">Author</label>
      <input class="form-control" id="name" type="text" name="author">
    </div>
    <div class="form-group">
      <label for="name">Subject</label>
      <input class="form-control" id="name" type="text" name="subject">
    </div>
    <div class="form-group">
      <label for="name">Categories</label>
      <select name="categories" class="form-control form-control-sm">
      <option value="Acadamics">Acadamics</option>
                                       <option value="Offline">Offline</option>

                                        <option value="Languages">Languages</option>
                                        
                                        <option value="Competative">Competative</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Fantasy">Fantasy</option>
                                        <option value="Self-Development">Self-Development</option>
                                      
                                        <option value="Mystery">Mystery</option>
                                        
                                        <option value="History">History</option>
     
      </select>
      
    </div>
    <div class="form-group">
      <label for="name">Uploaded Link</label>
      <input class="form-control" id="name" type="text" name="link">
    </div>
  
    <div class="form-group">
      <label for="name">Image</label>
      <input class="form-control" id="name" type="file" name="image">
    </div>
    <div class="form-group">
      <label for="name">Publications</label>
      <input class="form-control" id="name" type="text" name="publisher">
    </div>
    <div class="form-group">
      <label for="name">Edition</label>
      <input class="form-control" id="name" type="text" name="edition">
    </div>
  

    
   
    <div class="form-group">
      <label for="message">Description</label>
      <textarea class="form-control" id="message" name="description"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
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