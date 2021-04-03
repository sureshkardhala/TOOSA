
<?php

include('db.php');
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$query=mysqli_query($db, "INSERT INTO contact (name, email,  message) VALUES('$name', '$email', '$message')");
if($query){     

  echo "<script>alert('Message Sent Successfully');</script>";
}
else{
echo  "<script>alert('Message  Fialed to  Sent');</script>";
}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Us </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>


<?php include('header.php'); ?>

<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
               
                <!-- contact address -->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">
                            
                           <div class="cont-add-rgt">
                            <h4>Address:</h4>
                            <p class="contact-text-sub">Market Centre,, Vetlapalem, Andhra Pradesh 533434</p>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add add-2">
                            
                           <div class="cont-add-rgt">
                            <h4>Email:</h4>
                            <a href="mailto:info@example.com">
                                <p class="contact-text-sub">origin4edu@gmail.com</p>
                            </a>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add">
                           
                            <div class="cont-add-rgt">
                                 <h4>Phone:</h4>
                                 <a href="tel:+7-800-999-800">
                                    <p class="contact-text-sub">+91 9948227622</p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                        </div>
                        <div class="cont-add add-3">
                           
                            <div class="cont-add-rgt">
                                 <h4>Find Us On</h4>
                                 <div class="main-social-1 mt-2">
                                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="cont-add-lft">
                               
                           </div>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">
                   
                    <form action="toosa_contact.php" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="name" id="w3lName" required="">
                            <br><br><br>
                            <input type="email" name="email" placeholder="email" id="w3lSender" required="">
                        </div>
                        
                        <textarea placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary" name="submit">Submit Now</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
      
    </div>
    <?php include('footer.php'); ?>
</section>
<!-- //contact -->
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->


