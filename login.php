<?php
include('config.php');
session_start();

if(isset($_REQUEST['submit']))
{
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];

$check=mysqli_query($con,"select * from register where email='$email' AND password='$pass'");
$checkcount=mysqli_num_rows($check);
if($checkcount==1)
{
$_SESSION['email']=$email;
echo '<script> window.location.href="searchproducts.php"  </script>';
}
else
{

$error="Please fil correct user id or Password";
}
}
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from kodeforest.net/html/budh-space/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 08:40:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
       
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	
	</head>
	<body>
	
	<nav class="navbar"  style="background-color:#00c9ff;">
	<?php 
if(isset($error))
{
echo $error;
}

?>
	</nav>
	<img src="img/logo r human final.png" class="img-responsive centr">
	<h5 style="text-align:center;margin-top:20px;"><b>LOGIN TO YOUR HUMEN FUEL APP</b></h5>
	<div class="container-fluid">
	<form method="post">
	<div class="form-group">
	 <div class="inner-addon left-addon">
      <i class="glyphicon glyphicon-envelope"></i>      
      <input type="text" name="email" class="form-control redi" placeholder="Email ID/Mobile" />
    </div>
	  </div>
	<div class="form-group">
	 <div class="inner-addon left-addon">
      <i class="glyphicon glyphicon-pencil"></i>      
      <input type="password" name="password" class="form-control redi" placeholder="Password"/>
    </div>
	  </div>
 
 
   
 <button class="btn butn" type="submit" name="submit">LOGIN</button>
 
</form>
</div>
<div id="footer">
        <div class="footer-image-container">
        <img class="img-responsive footer-image" src="img/cow.png" style="height:150px;">
</div>
</div>
	

	
	</body></html>