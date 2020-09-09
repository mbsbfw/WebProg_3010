<?php
	//print_r($_POST);
	
	$username_error = $pass_error = $cpass_error = $firstname_error = $lastname_error = "";
	$address_error = $address2_error = $city_error = $state_error = $zipcode_error = $phonenumber_error = $email_error = "";
	$gender_error = $maritalstatus_error = $dateofbirth_error = "";
	
	$username = $pass = $cpass = $firstname = $lastname = "";
	$address = $address2 = $city = $state = $zipcode = $phonenumber = $email = "";
	$gender = $maritalstatus = $dateofbirth = "";
	
	//Form submitted with post method
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return $data;
	}
		
		$form_validate = true;
		
		//validate username
		if(empty($_POST["username"])){
			
			$form_validate = false;
			$username_error = "User Name is Required";
		}else {
			
			$username = test_input($_POST["username"]);
			
			if(strlen($username) < 6 || strlen($username) > 50){
				
				$form_validate = false;
				$username_error = "Username must be between 6 and 50 charaters long";				
			}
			
			else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
				
				$form_validate = false;
				$username_error = "Only letters, numbers and white space allowed";
			}
		}
		
		//validate password
		if(empty($_POST["pass"])){
			
			$form_validate = false;
			$pass_error = "Password is Required";
		}else {
			
			$pass = test_input($_POST["pass"]);
			
			if(strlen($pass) < 8 || strlen($username) > 50){
				
				$form_validate = false;
				$pass_error = "Password must be between 6 and 50 charaters long";				
			}
			
			else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\-\*])(?=.{8,})/", $pass)) {
				$pass_error = "Must contain at least one lower case, uppercase, digit and a special character";
			}
		}
		
		//validate confirm password
		if(empty($_POST["cpass"])){
			
			$form_validate = false;
			$cpass_error = "Confirm Password is Required";
		}else {
			
			$cpass = test_input($_POST["cpass"]);
			
			if ($pass != $cpass) {
				
				$form_validate = false;
				$cpass_error = "Passwords are not the same";
			}
		}		
		
		//validate firstname
		if(empty($_POST["firstname"])){
			
			$form_validate = false;
			$firstname_error = "First Name is Required";
		}else {
			
			$firstname = test_input($_POST["firstname"]);
			
			if (strlen($firstname) > 50) {
				
				$form_validate = false;
				$firstname_error = "First Name has max length of 50 characters";
			}
		}	
		
		//validate lastname
		if(empty($_POST["lastname"])){
			
			$form_validate = false;
			$lastname_error = "Last Name is Required";
		}else {
			
			$lastname = test_input($_POST["lastname"]);
			
			if (strlen($lastname) > 50) {
				
				$form_validate = false;
				$lastname_error = "Last Name has max length of 50 characters";
			}
		}			
		
		//validate address
		if(empty($_POST["address"])){
			
			$form_validate = false;
			$address_error = "Address is Required";
		}else {
			
			$address = test_input($_POST["address"]);
			
			if (strlen($address) > 100) {
				
				$form_validate = false;
				$address_error = "Address has max length of 100 characters";
			}
		}

		//validate address2
		if(empty($_POST["address2"])){
			
			$address2_error = "Optional";
		}else {
			
			$address2 = test_input($_POST["address2"]);
			
			if (strlen($address2) > 100) {
				
				$form_validate = false;
				$address2_error = "Address2 has max length of 100 characters";
			}
		}
		

		//validate city
		if(empty($_POST["city"])){
			
			$form_validate = false;
			$city_error = "City is Required";
		}else {
			
			$city = test_input($_POST["city"]);
			
			if (strlen($address) > 50) {
				
				$form_validate = false;
				$city_error = "City has max length of 50 characters";
			}
		}
		
		//validate state
		if(empty($_POST["state"])){
			
			$form_validate = false;
			$state_error = "State choice is Required";
		}else {
			
			$state = test_input($_POST["state"]);
		}
		
		//validate zipcode
		if(empty($_POST["zipcode"])){
			
			$form_validate = false;
			$zipcode_error = "Zipcode is Required";
		}else {
			
			$zipcode = test_input($_POST["zipcode"]);
			
			if(strlen($zipcode) < 5 || strlen($zipcode) > 10){
				
				$form_validate = false;
				$zipcode_error = "Zipcode must be between 5 and 10 charaters long";				
			}
			
			else if (strlen($zipcode) > 5 && !preg_match("/[-]/", $zipcode)) {
				
				$form_validate = false;
				$zipcode_error = "Enter valid zipcode (xxxxx or xxxxx-xxxx)";
			}
		}
		
		//validate phonenumber
		if(empty($_POST["phonenumber"])){
			
			$form_validate = false;
			$phonenumber_error = "Phonenumber is Required";
		}else {
			
			$phonenumber = test_input($_POST["phonenumber"]);
			
			if(!preg_match("/^\d{3}-\d{3}-\d{4}$/", $phonenumber)){
				
				$form_validate = false;
				$phonenumber_error = "Phone Number must be formatted xxx-xxx-xxxx";				
			}
		}
		
		//validate email
		if(empty($_POST["email"])){
			
			$form_validate = false;
			$email_error = "Email is Required";
		}else{
			
			$email = test_input($_POST["email"]);
			
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				
				$form_validate = false;
				$email_error = "Email must be formatted x@x.x";				
			}
		}
		
		//validate gender
		if(empty($_POST["gender"])){
			
			$form_validate = false;
			$gender_error = "Gender is Required";
		}else{
			
			$gender = test_input($_POST["gender"]);
		}
		
		//validate maritalstatus
		if(empty($_POST["maritalstatus"])){
			
			$form_validate = false;
			$maritalstatus_error = "Marital Status is Required";
		}else{
			
			$maritalstatus = test_input($_POST["maritalstatus"]);
		}
		
		//validate date of birth
		if(empty($_POST["dateofbirth"])){
			
			$form_validate = false;
			$dateofbirth_error = "Date of Birth is Required";
		}else{
			
			$dateofbirth = test_input($_POST["dateofbirth"]);
		}
		
		if($form_validate == true){
			
			session_start();
			$_SESSION = $_POST;
			session_write_close();
			header("Location: confirmation.php");
			
		}
		
	}//end outside if
	
//end php	
?>