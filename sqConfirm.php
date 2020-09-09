<?php
	session_start();
	
	$servername = "localhost";
	$dbname = "project";
	$dbusername = "root";
	$dbpassword = "";
	
	if ($form_validate) {
			try {
				
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$sql = $conn->prepare("INSERT INTO registration (userName, password, firstName,
				lastName, address1, address2, city, state, zipCode, phone, email, gender,
				maritalStatus, dateOfBirth)
				
				VALUES (:userName, :password, :firstName, :lastName, :address1, :address2,
				:city, :state, :zipCode, :phone, :email, :gender, :maritalStatus, :dateOfBirth)");
				
				$sql->bindParam(':userName', $username);
				$sql->bindParam(':password', $pass);
				$sql->bindParam(':firstName', $fName);
				$sql->bindParam(':lastName', $lName);
				$sql->bindParam(':address1', $add1);
				$sql->bindParam(':address2', $add2);
				$sql->bindParam(':city', $city);
				$sql->bindParam(':state', $state);
				$sql->bindParam(':zipCode', $zip);
				$sql->bindParam(':phone', $phoneNum);
				$sql->bindParam(':email', $email);
				$sql->bindParam(':gender', $gender);
				$sql->bindParam(':maritalStatus', $maritalStatus);
				$sql->bindParam(':dateOfBirth', $dob);
				
				$sql->execute();
				$last_id = $conn->lastInsertId();
				$_SESSION["last_id"] = "$last_id";
				
				header("Location: confirmation.php");
			}
			
			catch(PDOException $e) {
				
				echo "Connection failed: " . $e->getMessage();
			}
			
			$conn = null;
	}
?>