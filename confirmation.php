<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebProgramming website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="jscode.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <a class="navbar-brand" href="webprogramming.html">
		<img id="brand-image" src="https://c2.staticflickr.com/4/3625/3430123682_44e70e350c_z.jpg?zz=1"
		alt="Website logo"/>
	</a>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
		<li><a href="#">Species</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="webprogramming.html">HOME</a></p>
      <p><a href="registration.html">Registration</a></p>
      <p><a href="animations.html">Animations</a></p>
    </div>
    <div class="col-sm-8 text-left">
	
	<?php

		include 'pull.php';
	?>
	
	
	<h1>FINtastic Confirmation</h1>
		<p>Username: <?php echo $username; ?></p>
		<p>Password: <?php echo $pass; ?></p>
		<p>First Name: <?php echo $fName ?></p>
		<p>Last Name: <?php echo $lName; ?></p>
		<p>Address: <?php echo $add1; ?></p>
		<p>Address 2: <?php echo $add2; ?></p>
		<p>City: <?php echo $city; ?></p>
		<p>State: <?php echo $state; ?></p>
		<p>Zipcode: <?php echo $zip; ?></p>
		<p>Phone Number: <?php echo $phoneNum; ?></p>
		<p>Email: <?php echo $email; ?></p>
		<p>Gender: <?php echo $gender; ?></p>
		<p>Marital Status: <?php echo $mStatus; ?></p>
		<p>Date of Birth: <?php echo $dob; ?></p>
	<hr>  
	
	
	<!--
      <h1>FINtastic Confirmation</h1>
		<p>Username: <?php echo $_POST["username"]; ?></p>
		<p>Password: <?php echo $_POST["pass"]; ?></p>
		<p>First Name: <?php echo $_POST["firstname"]; ?></p>
		<p>Last Name: <?php echo $_POST["lastname"]; ?></p>
		<p>Address: <?php echo $_POST["address"]; ?></p>
		<p>Address 2: <?php echo $_POST["address2"]; ?></p>
		<p>City: <?php echo $_POST["city"]; ?></p>
		<p>State: <?php echo $_POST["state"]; ?></p>
		<p>Zipcode: <?php echo $_POST["zipcode"]; ?></p>
		<p>Phone Number: <?php echo $_POST["phonenumber"]; ?></p>
		<p>Email: <?php echo $_POST["email"]; ?></p>
		<p>Gender: <?php echo $_POST["gender"]; ?></p>
		<p>Marital Status: <?php echo $_POST["maritalstatus"]; ?></p>
		<p>Date of Birth: <?php echo $_POST["dateofbirth"]; ?></p>
	  <hr> -->
	</div>
  </div>
</div>

<footer>
<div class="container-fluid padding">
<div class="row text-center">
<hr class="light"/>
	<div class="col-md-4">	
		<p><a href="http://www.umsl.edu" target="_blank">UMSL</a></p>
	</div>
	<div class="col-md-4">
		<p><a href="http://www.google.com" target="_blank">GOOGLE</a></p>
	</div>
	<div class="col-md-4">
		<p><a href="http://www.facebook.com" target="_blank">Facebook</a></p>
	</div>
</footer>

</body>
</html>