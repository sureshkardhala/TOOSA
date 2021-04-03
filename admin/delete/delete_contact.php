<?php
include('db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($db, "SELECT * FROM contact WHERE id='$id'");
    $row=mysqli_fetch_array($result);
 
    $query =mysqli_query($db, "DELETE  FROM contact WHERE id='$id'");

    if($query){
         ;
          echo  "<script>alert('Data Deleted Succesfully !.');</script>";
          header("location:../contact.php");  

    }else{

         echo  "<script>alert('Data Failed TO Delete !.');</script>";
    
   }

}

?>