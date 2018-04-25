<?php
session_start();
if(!isset($_SESSION['email']))
{
echo '<script> window.location.href="login.php"  </script>';
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Search Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link rel="stylesheet"  href="../plugins/c3/c3.min.css"  type="text/css"  />

        <!-- App css -->
        

        <script src="assets/js/modernizr.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/style1.css" rel="stylesheet" type="text/css" />

		
</head>

<body>
<nav class="navbar paymentnavbar">
</nav>


<div class="container-fluid">
		<div class="panel panel-default searchpro">
			<div class="panel-body">
				<h3 class="search"><b>APR 18</b></h3>	
				<h3><b class="search1">08</b></h3>
			</div>
		</div>
	
			<div class="container-fluid ">
				<div class="panel panel-default searchboxx">
					<div class="panel-body">
					<input type="text" class="form-control searchbox2" placeholder="SEARCH PRODUCTS">
					<span class="glyphicon glyphicon-search searchbut1"></span>
					</div>
				</div>
			</div>
			
			<div class="rowimg2">
			 <img src="img/milkbottle.jpg" class="searchimg">				
			 <img src="img/milkbottle.jpg" class="searchimg2">
			</div>

			   <div class="drop">
			       <h4><b>Buffalo Milk<b></h4>
		           <h4><i>80.00 Per Lt.</i></h4>
			   </div>
			
				<div class="drop2">
			     <h4><b>Buffalo Milk<b></h4>
		         <h4><i>80.00 Per Lt.</i></h4>
		        </div>
			<div class="rowimg2">
			 <img src="img/milkbottle.jpg" class="searchimg">				
			 <img src="img/milkbottle.jpg" class="searchimg2">
			</div>

			   <div class="drop">
			       <h4><b>Buffalo Milk<b></h4>
		           <h4><i>80.00 Per Lt.</i></h4>
			   </div>
			
				<div class="drop2">
			     <h4><b>Buffalo Milk<b></h4>
		         <h4><i>80.00 Per Lt.</i></h4>
		        </div>
			
		
		

<div id="footer" class="backgrnd" >
	<button type="button" class="bttn_calender"><span class="glyphicon glyphicon-calendar"></span>
	<h6 class="calendr">CALANDER</h6></button>
	<button type="button"class="bttn_sub"><span class="glyphicon glyphicon-check"></span>
	<h6 class="calendr">SUBSCRIPTION</h6></button>
	<button type="button" class="bttn_wallet"><span class="glyphicon glyphicon-credit-card"></span>
	<h6 class="calendr">WALLET</h6></button>
</div>
</div>



</body>

</html>