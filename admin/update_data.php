<?php
include('../db.php');
if(isset($_POST['submit'])){

   
 
         $id=$_POST['id'];
        $name=$_POST['name'];
        $description=$_POST['description'];
        $cv=$_POST['cv'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $image=$_POST['image'];
        
        $batch=$_POST['batch'];
        $dob=$_POST['dob'];
        $linkedin=$_POST['linkedin'];
        $instagram=$_POST['instagram'];
        $twitter=$_POST['twitter'];
        $facebook=$_POST['facebook'];
        $password=$_POST['password'];
        $designation=$_POST['designation'];
        $inistitution=$_POST['inistitution'];
               
        
        $query = mysqli_query($db, "UPDATE members SET image='$image', name='$name', email='$email', phone='$phone', designation='$designation', description='$description', inistitution='$inistitution', password='$password',  batch='$batch', dob='$dob', linkedin='$linkedin', facebook='$facebook', instagram='$instagram', twitter='$twitter',  cv='$cv'  WHERE id='$id'");
        
        
        
        
        
        
        if($query){     
               
               echo "<script>alert('Data Updated Successfully');</script>";
               ?><script>window.location="update.php?id=<?php echo $id ; ?>";</script>';
               <?php
              
        }
        else{
            echo  "<script>alert('Data  Failed To Update');</script>";
            ?><script>window.location="update.php?id=<?php echo $id ; ?>";</script>';
            <?php

        }
        
                
       
        
        
}