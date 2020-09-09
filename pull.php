<!DOCTYPE html>
<?php

	session_start();
	$servername = "localhost";
	$dbname = "project";
	$dbusername = "root";
	$dbpassword = "";

	try {
		
	  //$last_id = $_SESSION["last_id"];
	  //echo "<br/>ID: $last_id<br/>";
	  
	  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	  $stmt = $conn->prepare ("SELECT userName, password, firstName,
		lastName, address1, address2, city, state, zipCode, phone, email, gender,
		maritalStatus, dateOfBirth
	  "." FROM registration WHERE id = 'last_id'");
	  
	  $stmt->execute();
	  
	  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	  $assocArray = $stmt->fetchAll()[0];
	  
	  $username = $assocArray["userName"];
	  $pass = $assocArray["password"];
	  $fName = $assocArray["firstName"];
	  $lName = $assocArray["lastName"];
	  $add1 = $assocArray["address1"];
	  $add2 = $assocArray["address2"];
	  $city = $assocArray["city"];
	  $state = $assocArray["state"];
	  $zip = $assocArray["zipCode"];
	  $phoneNum = $assocArray["phone"];
	  $email = $assocArray["email"];
	  $gender = $assocArray["gender"];
	  $mStatus = $assocArray["maritalStatus"];
	  $dob = $assocArray["dateOfBirth"];
		
		// use exec() because no results are returned
		$conn->exec($stmt);
		echo "New record created successfully";
		echo "Connected successfully";
	}

	catch(PDOException $e) {
		
	  echo "Connection failed: " . $e->getMessage();
	}
	
	$conn = null;
?>

</html>