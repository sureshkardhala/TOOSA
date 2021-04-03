<?php 

include('../db.php');

if(isset($_POST['submit'])){

$id=$_POST['id'];
$image1=$_POST['image1'];   
$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$img_path="../members/".$imgfile;
// get the image extension

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

// allowed extensions

$allowed_extensions = array(".jpg","jpeg",".png");



$user_check_query = "SELECT * FROM members WHERE image='$imgfile'  LIMIT 1";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
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
            echo "<script>alert('File is too small');</script>";

            
        }else{
              	
//rename the image file

$imgnewfile=$imgfile;  

// Code for move image into directory

if(move_uploaded_file($_FILES["image"]["tmp_name"],$img_path)){

// Query for insertion data into database  

$query = mysqli_query($db, "UPDATE members SET image='$imgnewfile' WHERE id='$id'");






if( unlink('../members/'.$image1)){
if($query){ 
      

       echo "<script>alert('Data inserted successfully');</script>";
       ?><script>window.location="profile_pic.php?id=<?php echo $id ; ?>";</script>';
       <?php
    }
      
else{
    echo  "<script>alert('Data not inserted');</script>";
    ?><script>window.location="profile_pic.php?id=<?php echo $id ; ?>";</script>';
    <?php
}
}else{

    echo "<script>alert('Image Failed To Delte');</script>";
    ?><script>window.location="profile_pic.php?id=<?php echo $id ; ?>";</script>';
    <?php

}

        }else{
            echo "<script>alert('Image not Uploaded ');</script>";
            ?><script>window.location="profile_pic.php?id=<?php echo $id ; ?>";</script>';
            <?php

        }   
    } 
  }






?>