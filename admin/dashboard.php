<?php

include('../db.php');
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php  if (isset($_SESSION['username'])) : ?>
    <?php $name=$_SESSION['username']; ?>
    	
    	
    <?php endif ?>

    <?php $result=mysqli_query($db, "SELECT * FROM members WHERE name='$name' ");
$row=mysqli_fetch_array($result);
$image="uploads/members/".$row['image'];
?>
     
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dash Board</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">TOOSA</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
               
                   
                </div>
            </form>
            <!-- Navbar-->
          
            <ul class="navbar-nav ml-auto ml-md-0">
            <a  href="dashboard.php?logout='1'"><button type="button" class="btn btn-primary">Logout</button></a>
            </ul>
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                         
                            <div class="sb-sidenav-menu-heading">Upload</div>
                           
                            <a class="nav-link" href="../lib.php">
                                <div class="sb-nav-link-icon"> <i class="fas fa-book-open"></i></div>
                                Books
                            </a>
                            <a class="nav-link" href="../grid.php">
                                <div class="sb-nav-link-icon"> <i class="fas fa-images"></i></div>
                                Photos
                            </a>
                            <a class="nav-link" href="../videos.php">
                                <div class="sb-nav-link-icon"> <i class="fab fa-youtube"></i></div>
                                Videos
                            </a>
                            <a class="nav-link" href="../events.php">
                                <div class="sb-nav-link-icon"> <i class="fas fa-users"></i></div>
                                Events
                            </a>
                            
                            <a class="nav-link" href="update.php?id=<?php echo $row['id']; ?>">
                                <div class="sb-nav-link-icon"> <i class="fas fa-edit"></i></div>
                                Edit Profile
                            </a>
                           
                            
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <br><br>
                     <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <?php $name=$_SESSION['username']; ?>
    	<h4 style="text-align:center;">Welcome <strong><?php echo $name; ?></strong></h4>
    	
    <?php endif ?>
                       
                        <div class="row">


                         
                            
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


</style>
<br>




<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo $image; ?>" alt="" height="200px"/>
                            <br><br><br>
                            <div class="file btn btn-lg btn-primary">
                            <a  href="Profile_pic.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-light">Change Photo</button></a>
                            
                             <div class="col-md-2">

                   
                    
                        
                    </div>
                        </form>
                                
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 id="x">
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
                    
                    <div class="col-md-2" id="x" >

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
                        </div>

                      
                   
                
         
                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
