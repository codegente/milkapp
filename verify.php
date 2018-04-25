<?php
include('config.php');
$email=$_GET['man'];

$check=mysqli_query($con,"select * from register where email='$email'");
$kk=mysqli_fetch_array($check);
$otp=$kk['otp'];
if(isset($_REQUEST['submit']))
{

$userot=$_REQUEST['otp'];

if($userot==$otp)
{
echo '<script> window.location.href="login.php" </script>';
}
else
{
$error="OTP IS INVALID ";
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
        <title>Agrasen</title>
       
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
	</head>
	<body>
	
	<nav class="navbar"  style="background-color:#00c9ff;">
	<?php  if(isset($error))
{
echo $error;
}  ?>
	</nav>
	<img src="img/logo r human final.png" class="img-responsive centr">
	<h5 style="text-align:center;"><b>Pick the taste of purity that suits your budget</b></h5>
	<h2 style="text-align:center;color:#2424e7cc">ENTER CODE</h2>
	<div class="container-fluid">
	<form method="post">
			<div class="form-group">
			  <input type="text" name="otp" class="form-control codebox" id="email" placeholder="" >
			</div>

<div class="form-group">
			  <input type="submit" name="submit" class="form-control codebox" >
			</div>
		</form>
		
		<h5 class="verifybox"> DETECTING SMS VERIFICATION CODE </h5>
</div>
<div id="footer">
        <div class="footer-image-container">
        <img class="img-responsive footer-image" src="img/cow.png">
</div>
</div>
	

	
	</body></html>