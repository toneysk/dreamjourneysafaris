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
<title>Dream Journey Safaris</title>
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
<!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
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
                               <li class="nav-item active">
                                <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about.html">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="service.html">SERVICES</a></li>
                               <li class="nav-item">
      	                        <a class="nav-link" href="contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->        
    <!--banner start -->
    <div class="banner-main">
    	<div class="container">
           <div id="main_slider" class="carousel slide" data-ride="carousel">  
           <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
    		    <div class="titlepage-h1">
    	        <h1 class="bnner_title">Welcome To<br>
    	        <span style="color: #10b5fa">Dream Journey Safaris</span></h1>
    	        <p class="long_text">Explore Cozily </p>
    		    </div>
    		    <div class="btn_main">
    			<button type="button" class="btn btn-lg"><a href="contact.html">Contact</a></button>
            </div>
        </div>
    <div class="carousel-item">
    		<div class="titlepage-h1">
    	       <h1 class="bnner_title">Welcome To<br>
    	       <span style="color: #10b5fa">Dream Journey Safaris</span></h1>
    	       <p class="long_text">Explore Cozily </p>
    		</div>
    		<div class="btn_main">
    			<button type="button" class="btn btn-lg"><a href="contact.html">Contact</a></button>
    		</div>
    </div>
  </div> 
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-right"></i>
            </a>
    </div>
</div>
</div>
<!--banner end -->
    <!--services start -->
    <div class="services_main">
    	<div class="container">
    		<div class="creative_taital" id="about">
    			<h1 class="creative_text">About us</h1><br>
                <h3>Who are we?</h3>
    			<p style="color: #050000; text-align: center;">Dream Journey Safaris is one of reputed travel agency in Kenya.
                We are providing cost effective and best travel solutions to our esteemed clients.
                We offer variety of services, Flight reservation, Ticketing, hotel accomodations, Airport transfers, holiday and honey moon packages.
                We also assist clients in obtaining visa and travel insurance.</p>

                <h3>Vision</h3>
                <p style="color: #050000; text-align: center;">To be the preferred travel agency of your choice.</p>

                <h3>Mission</h3>
                <p style="color: #050000; text-align: center;">To provide the best service in order to achieve full customer satisfaction with our packages for customers to explore and enjoy.

                </p>
    			
    		</div>
            <div id="services">
    		    <div class="section_service_2">
    		    	<h1 class="service_text">Our Services</h1>
    		    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><i class="fa fa-plane fa-3x" aria-hidden="true"></i></div>
    		    					<h1 class="written_text">Air ticket fares</h1>
    		    					<p>We provide our customers with the lowest available fares on the requested route.<br><br>
                                    We advise our customers of the fare rules which includes penalties and cancellation fee before the ticket is issued. </p>
    		    				</div>
    		    			</div><br>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><i class="fa fa-exchange fa-3x" aria-hidden="true"></i></div>
    		    					<h1 class="written_text">Airport transfers</h1>
    		    					<p>24/7 service.<br><br> We have experienced and friendly drivers to pick and drop you.</p><br><br>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>

    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-12">
    		    				<div class="written_text">
    		    					<div class="like_icon"><i class="fa fa-tasks fa-3x" aria-hidden="true"></i></div>
    		    					<h1 class="written_text">Holiday packages</h1>
    		    					<p>We tailor-make and customize your perfect dream safari holiday to suit your pocket and needs.</p><br><br><br><br>
    		    				</div>
    		    			</div>
    		    			
    		    		</div>
    		    	</div>
    		    </div>
    	</div>	  
	</div>
    <!--services end -->


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
                        <button type="submit" name="submit" class="main_bt">Send email</button>
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
                                <i style="font-size: 0.8em; color:#fff;">Explore cozily</i>
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
                            <a href="#"><i class="fa fa-phone fa-2x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">+254 719 398 927</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="mailto:info@dreamjourney-safaris.com"><i class="fa fa-envelope fa-2x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">email</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="https://www.facebook.com/dreamjourneysafaris/"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">facebook</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="https://www.instagram.com/dreamjourney_safaris/"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">instagram</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="https://mobile.twitter.com/journey_safaris/"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
                            <p class="email-text" style="color: #0288D1;font-weight: 600;">twitter</p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="map_icon">
                            <a href="#"><i class="fa fa-map-marker fa-2x" aria-hidden="true" style="max-width: 100%;color:#0288D1;padding-left: 30px; "></i></a>
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