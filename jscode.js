
function validateTextbox(){
	//Get all input values
	var username = document.getElementById("username").value;
	var pass = document.getElementById("pass").value;
	var cpass = document.getElementById("cpass").value;
	var email = document.getElementById("email").value;
	
	if(username.length < 6 || username.length > 50){
		
		alert("Invalid Username");
		return false;
		
	}
	
	else if(pass.length < 8 || pass.length > 50){
		
		alert("Invalid Password");
		return false;
	}
	
	else if(pass.search(/[0-9]/) == -1){
		
		alert("ERROR: Password must contain 1 digit");
		return false;
	}
	
	else if(pass.search(/[a-z]/) == -1){
						
		alert("ERROR: Password must contain 1 lowercase letter");
		return false;
	}
	
	else if(pass.search(/[A-Z]/) == -1){
						
		alert("ERROR: Password must contain 1 Uppercase letter");
		return false;
	}
	
	else if(pass.search(/[!\@\#\$\%\^\&\*\(/)\-\+\_\,\.\:\']/) == -1){
						
		alert("ERROR: Password must contain 1 Special Charater");
		return false;
	}
	
	else if(pass != cpass){
		
		alert("ERROR: Password Mismatch, Please re-enter your password");
		return false;
	}
	
	
	//check if email was entered
	else if(email.length == ""){
		
		alert("Please enter an email");
		return false;
	}
	
	else{
		return true;
	}
	

	
}//end validateTextbox()

function checkUserName(){
	
	var username = document.getElementById("username").value;
	var element = document.getElementById("labelusername");
	
	if(username.length < 6 || username.length > 50){

		element.innerHTML = "Username:";
		element.style.color = "red";
	}else{
		element.innerHTML = "Username:";
		element.style.color = "green";
	}
}//end checkUserName()

function checkPassword(){
	
	var pass = document.getElementById("pass").value;
	var element = document.getElementById("labelpass");
	
	if(pass.length < 8 || pass.length > 50){

		element.innerHTML = "Password:";
		element.style.color = "red";
		
	}
	
	else if(pass.search(/[0-9]/) == -1){
		
		element.innerHTML = "Password:";
		element.style.color = "red";
	}
	
	else if(pass.search(/[a-z]/) == -1){
						
		element.innerHTML = "Password:";
		element.style.color = "red";
	}
	
	else if(pass.search(/[A-Z]/) == -1){
						
		element.innerHTML = "Password:";
		element.style.color = "red";
	}
	
	else if(pass.search(/[!\@\#\$\%\^\&\*\(/)\-\+\_\,\.\:\']/) == -1){
						
		element.innerHTML = "Password:";
		element.style.color = "red";
	}
	else{
		element.innerHTML = "Password:";
		element.style.color = "green";
	}
}//end checkPassword()

function confirmPassword(){
	
	var pass = document.getElementById("pass").value;	
	var cpass = document.getElementById("cpass").value;
	var element = document.getElementById("labelcpass");
	
	if(pass != cpass){

		element.innerHTML = "Confirm Password:";
		element.style.color = "red";
		
	}else{
		element.innerHTML = "Confirm Password:";
		element.style.color = "green";
	}
}//end confirmPassword()

function checkEmail(){
	
	var email = document.getElementById("email").value;
	var index = email.search(/\w+@\w+\.\w+/);
	var element = document.getElementById("labelemail");
	
	if(index == -1){
		
		alert("Invalid email");
		element.innerHTML = "Email:";
		element.style.color = "red";
	}else{
		
		element.innerHTML = "Email:";
		element.style.color = "green";
	}
}//end checkEmail()

function checkZip(){
	
	var zip = document.getElementById("zipcode").value;
	var element = document.getElementById("labelzipcode");
	var isValid = /^[0-9]{5}(?:-[0-9]{4})?$/.test(zip);
	
	if(isValid){
		element.innerHTML = "Zipcode:";
		element.style.color = "green";
	}else{
		alert("ERROR: Invalid Zipcode");
		element.innerHTML = "Zipcode:";
		element.style.color = "red";
		

		
	}
}//end checkZip