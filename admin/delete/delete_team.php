<?php
include('db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($db, "SELECT * FROM team WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    $image=$row['image'];
    $query =mysqli_query($db, "DELETE  FROM team WHERE id='$id'");

    if($query){
          unlink('../uploads/team/' . $image);
          echo  "<script>alert('Data Deleted Succesfully !.');</script>";
          header("location:../team.php");  

    }else{

         echo  "<script>alert('Data Failed TO Delete !.');</script>";
    
   }

}

?>