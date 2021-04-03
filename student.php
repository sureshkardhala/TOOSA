<?php include('toosa_header.php'); ?>

<?php

include('db.php');

if($_GET['id']){

$id=$_GET['id'];
$result=mysqli_query($db, "SELECT * FROM members WHERE id='$id' ");
$row=mysqli_fetch_array($result);
$image="admin/uploads/members/".$row['image'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to TOOSA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<!------ Include the above in your HEAD tag ---------->

</head>

<body>



<main id="main">
<br><br><br>
<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    display: inline-block;
  width: 150px;
  height: 150px;
  border-radius: 50%;

  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

#myTab{
    margin-top:50px;
}


  @media only screen and (max-width: 320px){
    #myTabContent{
    margin-top:-5%;
}
  }
@media only screen and (max-width:500px){

      
#x{
  margin-left:40%;
  color:red;
}
#x1{
  margin-left:5%;
 
}




}

  }

</style>
<br>




<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo $image; ?>" alt=""/>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head"  >
                                    <h5  id="x">
                                        <?php echo $row['name']; ?>
                                    </h5>
                                    <h6 id="x1"> 
                                        <?php echo $row['designation']; ?> at <?php echo $row['inistitution']; ?>
                                    </h6>
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Social Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2" >

<a  href="update.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary" style="visibility:hidden;"></button></a>

    
</div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="profile-work">
                    <br>
                            <h5 style="text-align:center;">About Me</h5>
                            <p><?php echo $row['description']; ?></p>
                           
                            
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['name']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['phone']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['dob']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>View CV</label>
                                            </div>
                                            <div class="col-md-6">
                                            <a href="<?php echo $row['link']; ?>"> <p><?php echo $row['name']; ?></p></a>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Facebook</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><a href="<?php echo $row['facebook']; ?>"><?php echo $row['facebook']; ?></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Twitter</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><a href="<?php echo $row['twitter']; ?>"><?php echo $row['twitter']; ?></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Instagram</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><a href="<?php echo $row['instagram']; ?>"><?php echo $row['instagram']; ?></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>LinkedIn</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><a href="<?php echo $row['linkedin']; ?>"><?php echo $row['linkedin']; ?></a></p>
                                            </div>
                                        </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
  
</main><!-- End #main -->



<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>

</html>
<?php 
}
?>