<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebProgramming website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="jscode.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
    </script>
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
			<a class="navbar-brand" href="webprogramming.html"></a>
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
			<p><a href="registration.php">Registration</a></p>
			<p><a href="animations.html">Animations</a></p>
		</div>
    	
		<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-12"> 
				<h1 id="formHeader">FINtastic Fan Page Registration</h1>	
		<form name="myForm" method="post"  
				action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
		<span class="error">* required field</span>
		<div class="row-content text-left">
			<div class="col-sm-4">
				
				<?php
					include 'phpcode.php';
					include 'sqConfirm.php';
				?>
			
				<label id= "labelusername" for="username">Username:</label><br>
				<input id="username" name="username" type="text" 
					placeholder="ex Mcsago" 
					size="20" onblur="checkUserName();" 
					required="required" value="<?php echo $username; ?>"/>
				<span id=username_error class="error">* <?php echo $username_error;?></span><br>
				
				<label id="labelpass" for="password">Password:</label><br>
				<input id="pass" name="pass" type="password"  
					size="20" onblur="checkPassword();"
					required="required" value="<?php echo $pass; ?>"/>
				<span id=pass_error class="error">* <?php echo $pass_error;?></span><br>

				<label id="labelcpass" for="password">Confirm Password:</label><br>
				<input id="cpass" name="cpass" type="password"  
					size="20" onblur="confirmPassword();"
					required="required" value="<?php echo $cpass; ?>"/>
				<span id=cpass_error class="error">* <?php echo $cpass_error;?></span><br>

				<label for="firstname">First Name:</label><br>
				<input id="firstname" name="firstname" type="text" 
					placeholder="ex Michael" 
					size="20" min="8" maxlength="50"
					required="required" value="<?php echo $firstname; ?>"/>
					<span id=firstname_error class="error">* <?php echo $firstname_error;?></span><br>

				<label for="lastname">Last Name:</label><br>
				<input id="lastname" name="lastname" type="text" 
					placeholder="ex Sago" 
					size="20" min="8" maxlength="50"
					required="required" value="<?php echo $lastname; ?>"/>
					<span id=lastname_error class="error">* <?php echo $lastname_error;?></span><br>
					
				<label for="address">Address:</label><br>
				<input id="address" name="address" type="text" 
					size="20" maxlength="100"
					required="required" value="<?php echo $address; ?>"/>
					<span id=address_error class="error">* <?php echo $address_error;?></span><br>
					
				<label for="address2">Address 2:</label><br>
				<input id="address2" name="address2" type="text" 
					size="20" maxlength="100" value="<?php echo $address2; ?>"/>
					<span id=address2_error class="error"> <?php echo $address2_error;?></span><br>
					
				<label for="city">City:</label><br>
				<input id="city" name="city" type="text" 
					size="20" maxlength="50"
					required="required" value="<?php echo $city; ?>"/>
					<span id=city_error class="error">* <?php echo $city_error;?></span><br><br>
					
				<label for="state">State:</label>
				<span id=state_error class="error">* <?php echo $state_error;?></span><br>	
					<select class="box" name="state" value="<?php echo $state; ?>" required>
						<option value="" selected="selected">State: </option>
						<option value="AL">AL</option>
						<option value="AK">AK</option>
						<option value="AR">AR</option>
						<option value="AZ">AZ</option>
						<option value="CA">CA</option>
						<option value="CO">CO</option>
                        <option value="CT">CT</option>
						<option value="DC">DC</option>
						<option value="DE">DE</option>
						<option value="FL">FL</option>
						<option value="GA">GA</option>
						<option value="HI">HI</option>
						<option value="IA">IA</option>
						<option value="ID">ID</option>
						<option value="IL">IL</option>
						<option value="IN">IN</option>
						<option value="KS">KS</option>
						<option value="KY">KY</option>
						<option value="LA">LA</option>
						<option value="MA">MA</option>
						<option value="MD">MD</option>
						<option value="ME">ME</option>
						<option value="MI">MI</option>
                        <option value="MN">MN</option>                        
						<option value="MO">MO</option>
						<option value="MS">MS</option>
						<option value="MT">MT</option>
						<option value="NC">NC</option>
						<option value="NE">NE</option>
						<option value="NH">NH</option>
						<option value="NJ">NJ</option>
						<option value="NM">NM</option>
						<option value="NV">NV</option>
						<option value="NY">NY</option>
						<option value="ND">ND</option>
						<option value="OH">OH</option>
                        <option value="OK">OK</option>
						<option value="OR">OR</option>
						<option value="PA">PA</option>
						<option value="RI">RI</option>
						<option value="SC">SC</option>
						<option value="SD">SD</option>
						<option value="TN">TN</option>
						<option value="TX">TX</option>
						<option value="UT">UT</option>
						<option value="VT">VT</option>
						<option value="VA">VA</option>
						<option value="WA">WA</option>
						<option value="WI">WI</option>
						<option value="WV">WV</option>
						<option value="WY">WY</option>
					</select> <br>				
				</div>			
			<div class="col-sm-2">
				<div class="row-content text-left">
				
					<label id="labelzipcode" for="zipcode">Zipcode:</label><br>
					<input id="zipcode" name="zipcode" type="text" 
						size="20" onblur="checkZip();"
						required="required" value="<?php echo $zipcode; ?>"/>
						<span id=zipcode_error class="error">* <?php echo $zipcode_error;?></span><br>	
						
					<label for="phonenumber">Phone Number:</label><br>
					<input id="phonenumber" name="phonenumber" type="text" 
						size="20" maxlength="12"
						required="required" value="<?php echo $phonenumber; ?>"/>
						<span id=phonenumber_error class="error">* <?php echo $phonenumber_error;?></span><br>			

						<label id="labelemail" for="email">Email:</label><br>
						<input id="email" name="email" type="text"
						placeholder="x@x.x" onblur="checkEmail();" value="<?php echo $email; ?>"/>
						<span id=email_error class="error">* <?php echo $email_error;?></span><br><br>
						
						Gender:
						<span id=gender_error class="error">* <?php echo $gender_error;?></span><br>
						<input type="radio" name="gender" value="male"> Male<br>
						<input type="radio" name="gender" value="female" > Female<br>						
						<input type="radio" name="gender" value="other"> Other
						<br><br>
						
						Marital Status:
						<span id=maritalstatus_error class="error">* <?php echo $maritalstatus_error;?></span><br>
						<input type="radio" name="maritalstatus" value="single"> Single<br>
						<input type="radio" name="maritalstatus" value="married"> Married<br><br>
						
						Date of Birth:
						<span id=dateofbirth_error class="error">* <?php echo $dateofbirth_error;?></span><br>
						<input type="date" name="dateofbirth"><br><br>
						
						<input type="submit" value="Submit">
						<input type="reset" value="Reset"><br>
				</div>
			</div>
			</form>
		</div>
	</div>
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