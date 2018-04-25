<?php

include('config.php');
if(isset($_REQUEST['submit']))
{
$mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$check=mysqli_query($con,"select * from register where email='$email'");
$count=mysqli_num_rows($check);
if($count==0)
{
$rand=rand(10,40000);
mysqli_query($con,"insert into register(mobile,email,password,otp)values('$mobile','$email','$password','$rand')");
echo '<script>  window.location.href="verify.php?man='.$email.'"  </script>';
}
else
{
$error="Email is Already Registerd ";

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
        <title>register</title>
       
    
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
	<div class="container-fluid">
	<form method="post" class="registerform">
	<div class="form-group">
	 <div class="inner-addon left-addon">
      <i class="glyphicon glyphicon-phone"></i>      
      <input type="text" name="mobile" class="form-control redi" placeholder="Mobile*"/>
    </div>
	  </div>
	<div class="form-group">
	 <div class="inner-addon left-addon">
      <i class="glyphicon glyphicon-envelope"></i>      
      <input type="text" name="email" class="form-control redi" placeholder="Email ID*" />
    </div>
	  </div>
	<div class="form-group">
	 <div class="inner-addon left-addon">
      <i class="glyphicon glyphicon-pencil"></i>      
      <input type="password" name="password" class="form-control redi" placeholder="Create Password*"/>
    </div>
	  </div>
 
 
   
 <button class="btn butn" type="submit" name="submit">REGISTER</button>
 
</form>
</div>
<div id="footer">
        <div class="footer-image-container">
        <img class="img-responsive footer-image" src="img/cow.png">
</div>
</div>

	
	</body></html>