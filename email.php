<?php
if(isset($_POST['email']) && $_POST['email'] !=''){
	// if ( filter_var($_POST['email'])) {
	// 	# code...
	// }
	//submit the form
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to="anthony1.musembi@gmail.com";
	$body="";

	$body .="From: ".$name. "\r\n"; 
	$body .="Email: ".$email. "\r\n"; 
	$body .="Message: ".$message. "\r\n"; 

	mail($to,$body);
}
header("Location:contact.html");
?>