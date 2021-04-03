<?php 
include('db.php');
if(isset($_POST['submit'])){

$title=$_POST['title'];
$link=$_POST['link'];
$choice=$_POST['choice'];
       
$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$img_path="photos/".$imgfile;
// get the image extension

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

// allowed extensions

$allowed_extensions = array(".jpg",".jpeg",".png");
$user_check_query = "SELECT * FROM photos WHERE title='$title' 
								OR image='$imgfile' LIMIT 1";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
		$result = mysqli_query($db, $user_check_query);
		$check = mysqli_fetch_assoc($result);

		if ($check) { // if user exists
			if ($check['title'] === $title) {
                echo "<script>alert('Title already exists');</script>";
			}
			if ($check['image'] === $imgfile) {
                echo "<script>alert('Image already exists with same name');</script>";
			}
		}
        elseif(!in_array($extension,$allowed_extensions)){
        
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png format allowed');</script>";
        
        }
        elseif($file_size > 20971520){
            echo "<script>alert('File is too Large');</script>";

            
        }else{
              	
//rename the image file

$imgnewfile=$imgfile;  

// Code for move image into directory

if(move_uploaded_file($_FILES["image"]["tmp_name"],$img_path)){

// Query for insertion data into database  

$query = mysqli_query($db, "INSERT INTO photos (image, title, link, choice) VALUES ('$imgnewfile', '$title', '$link', '$choice')");






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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    
     <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
@import "compass/css3";

/* ===================== FILE INPUT ===================== */
.file-area {
  width: 100%;
  position: relative;
  
  input[type=file] {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    cursor: pointer;
  }
  
  .file-dummy {
    width: 100%;
    padding: 30px;
    background: rgba(255,255,255,0.2);
    border: 2px dashed rgba(255,255,255,0.2);
    text-align: center;
    transition: background 0.3s ease-in-out;
    
    .success {
      display: none;
    }
  }
  
  &:hover .file-dummy {
    background: rgba(255,255,255,0.1);
  }
  
  input[type=file]:focus + .file-dummy {
    outline: 2px solid rgba(255,255,255,0.5);
    outline: -webkit-focus-ring-color auto 5px;
  }
  
  input[type=file]:valid + .file-dummy {
    border-color: rgba(0,255,0,0.4);
    background-color: rgba(0,255,0,0.3);

    .success {
      display: inline-block;
    }
    .default {
      display: none;
    }
  }
}









/* ===================== BASIC STYLING ===================== */

* {
  box-sizing: border-box;
  font-family: 'Lato', sans-serif;
}

html,
body {
  margin: 0;
  padding: 0;
  font-weight: 300;
  height: 100%;
  background: #053777;
  color: #fff;
  font-size: 16px;
  overflow: hidden;
  background: -moz-linear-gradient(top, #053777 0%, #00659b 100%);
  /* FF3.6+ */
  
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #053777), color-stop(100%, #00659b));
  /* Chrome,Safari4+ */
  
  background: -webkit-linear-gradient(top, #053777 0%, #00659b 100%);
  /* Chrome10+,Safari5.1+ */
  
  background: -o-linear-gradient(top, #053777 0%, #00659b 100%);
  /* Opera 11.10+ */
  
  background: -ms-linear-gradient(top, #053777 0%, #00659b 100%);
  /* IE10+ */
  
  background: linear-gradient(to bottom, #053777 0%, #00659b 100%);
  /* W3C */
  
}

h1 {
  text-align: center;
  margin: 50px auto;
  font-weight: 100;
}

label {
  font-weight: 500;
  display: block;
  margin: 4px 0;
  text-transform: uppercase;
  font-size: 13px;
  overflow: hidden;
  
  span {
    float: right;
    text-transform: none;
    font-weight: 200;
    line-height: 1em;
    font-style: italic;
    opacity: 0.8;
  }
}

.form-controll {
  display: block;
  padding: 8px 16px;
  width: 100%;
  font-size: 16px;
  background-color: rgba(255,255,255,0.2);
  border: 1px solid rgba(255,255,255,0.3);
  color: #fff;
  font-weight: 200;
  
  &:focus {
    outline: 2px solid rgba(255,255,255,0.5);
    outline: -webkit-focus-ring-color auto 5px;
  }
}

button {
  padding: 8px 30px;
  background: rgba(255,255,255,0.8);
  color: #053777;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 11px;
  border: 0;
  text-shadow: 0 1px 2px #fff;
  cursor: pointer;
}

.form-group {
  max-width: 500px;
  margin: auto;
  margin-bottom: 30px;
}

.back-to-article {
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
  position: absolute;
  right: 20px;
  top: 20px;
  text-decoration: none;
  display: inline-block;
  background: rgba(0,0,0,0.6);
  padding: 10px 18px;
  transition: all 0.3s ease-in-out;
  opacity: 0.6;
  
  &:hover {
    opacity: 1;
    background: rgba(0,0,0,0.8);
  }
}</style>



<form  action="upload_photo.php" method="POST"  enctype="multipart/form-data">
  
  <h1><strong>Image upload</strong>  </h1>




  
  <div class="form-group">
    <label for="title">Title <span></span></label>
    <input type="text" name="title" id="title" class="form-controll"/>
  </div>
 
  

  <div class="form-group file-area">
        <label for="images">Images <span></span></label>
    <input type="file" name="image" id="images" required="required" multiple="multiple"/>
   
  </div>
  

  
  
  <div class="form-group">
    <button type="submit" name="submit">Upload</button>
  </div>
  <div class="form-group" style="visibility:hidden;">
    <label for="caption">Choice <span></span></label>
    <input type="text" name="choice" id="caption" required value="photo" class="form-controll"/>
  </div>

  <div class="form-group " style="visibility:hidden;">
    <label for="caption">Link <span></span></label>
    <input type="text" name="link" id="caption" required value="Video link" class="form-controll"/>
  </div>
  
</form>











</body>
</html>
