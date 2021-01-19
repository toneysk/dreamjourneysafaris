<?php
$message_sent=false;
if(isset($_POST['email']) && $_POST['email'] !=''){
    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
          //submit the form
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];

            $to="info@dreamjourney-safaris.com";
            $body="";

            $body .="From: ".$name. "\r\n"; 
            $body .="Email: ".$email. "\r\n"; 
            $body .="Message: ".$message. "\r\n"; 

            mail($to,$subject,$body);

            $message_sent=true;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Dream Journey Safaris|Contact</title>
<link rel="shortcut icon" href="https://www.fly5rivers.com/s/FiveRiversIcon-lohz.jpg" sizes="250x400">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->
<body>
	<div class="header_main">
		<div class="logo">
                <a href="index.html"><img src="images/logo.jpg"></a>
                <h1>Dream Journey Safaris</h1>
    </div>
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                       <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item ">
                                <a class="nav-link" href="index.php">HOME</a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about.html">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="service.html">SERVICES</a></li>
                               <li class="nav-item active">
      	                        <a class="nav-link" href="contact.php">CONTACT</a></li>
                              
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->
    <div class="contact_main">
    <!--touch_section start -->

    <div class="touch_section">
        <div class="container">
            <h1 class="touch_text">Tailor-make your safari</h1>
            <center>            
                <p style="font-size: 20px">Let us <b> customize</b> your perfect <b>dream</b> Safari Holiday.</br>Give us your <b>requirements</b> and we will do the rest.</p>
            </center>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="input_main">
                       <div class="container">
                  <?php 
                    if ($message_sent):

                  ?>
                                <h3>Thanks, we'll be in touch</h3>

                   <?php
                            else:
                 ?>
                          <form action="" method="post">
                            <div class="form-group">
                              <input type="text"  placeholder="Name" name="name" required="" title="Please enter your name">
                            </div>
                            <div class="form-group">
                              <input type="email"  placeholder="Email" name="email" required="" title="Please enter your email address">
                            </div>
                            <div class="form-group">
                              <input type="text"  placeholder="Subject" name="subject" required="" title="Please enter mail subject">
                            </div>
                            
                                <div class="form-group">
                                  <textarea placeholder="Message" rows="7" id="comment" name="message" required="" title="Type your message here"></textarea>
                                </div>
                           
                          
                       </div> 
                       <div class="send_btn">
                        <button type="submit" class="main_bt">Send email</button>
                       </div>
                       </form>  
                       <?php
                        endif;
                       ?>                 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-12">
                            <br><img style="border-radius: 20px;width: 100%;" src="images/logo1.png">
                            <p class="lorem_text">
                                <h4 style="color: white;">Dream journey safaris</h4>
                                <i style="font-size: 0.8em; color: white;">Explore cozily</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!--touch_section end -->
    <!--Contact_section start -->
    <div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="#"><i class="fa fa-phone fa-3x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">+254 719 398 927</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="mailto:info@dreamjourney-safaris.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">email</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="https://www.facebook.com/dreamjourneysafaris/"><i class="fa fa-facebook fa-3x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">facebook</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="https://www.instagram.com/dreamjourney_safaris/"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">instagram</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="https://mobile.twitter.com/journey_safaris/"><i class="fa fa-twitter fa-3x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">twitter</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="#"><i class="fa fa-map-marker fa-3x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">address</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--Contact_section end -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">2020 &copy; Copyright: Dream Journey safaris | All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
