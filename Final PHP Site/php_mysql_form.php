<?php
include "functions.php";
?>
<html>
<body>
<head>
<script>
function firstNameValidation(value){
    var myValue = value;
	if(!document.getElementById("firstName").value){
	  alert('First name field cannot be empty'); 
	  document.getElementById("firstName").focus();
	  return false;
	}
	else{	
	}
}
	
function lastNameValidation(value){
    var myValue = value;
	if(!document.getElementById("lastName").value){
	  alert('Last name field cannot be empty');																
	  document.getElementById("lastName").focus();
	  return false;
	}
	else{	
	}
}

function addressValidation(value){
    var myValue = value;
	if(!document.getElementById("address").value){
	  alert('Address field cannot be empty');																
	  document.getElementById("address").focus();
	  return false;
	}
	else{	
	}
}

function cityValidation(value){
    var myValue = value;
	if(!document.getElementById("city").value){
	  alert('City field cannot be empty');																
	  document.getElementById("city").focus();
	  return false;
	}
	else{	
	}
}

function zipcodeValidation(value){
    var myValue = value;
	if(!document.getElementById("zipcode").value){
	  alert('Zipcode field cannot be empty');																
	  document.getElementById("zipcode").focus();
	  return false;
	}
	else{	
	}
}

function phoneValidation(value){
    var myValue = value;
	if(!document.getElementById("phone").value){
	  alert('Phone field cannot be empty');																
	  document.getElementById("phone").focus();
	  return false;
	}
	else{	
	}
}

function emailValidation(value){
    var myValue = value;
	if(!document.getElementById("email").value){
	  alert('Email field cannot be empty');																
	  document.getElementById("email").focus();
	  return false;
	}
	else{	
	}
}	
</script>
<form novalidate id="myForm" action="formProcessing.php" method="get">
First Name: <br><input type="text" id="firstName" name="fname" onblur="firstNameValidation(this.id);"><br>
Last Name:  <br><input type="text" id="lastName" name="lname" onblur="lastNameValidation(this.id);"><br>
Address: 	<br><input type="text" id="address" name="address" onblur="addressValidation(this.id);"><br>
City: 		<br><input type="text" id="city" name="city" onblur="cityValidation(this.id);"><br>
State:
<br><select name="state">
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="DC">Dist of Columbia</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY" selected="selected">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PA">Pennsylvania</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
</select><br>
Zipcode: <br><input type="text" id="zipcode" name="zipcode" onblur="zipcodeValidation();"><br>
Phone: 	 <br><input type="text" id="phone" name="phone" onblur="phoneValidation();"><br>
Email:   <br><input type="text" id="email" name="email" onblur="emailValidation();"><br>
Comments:<br><input type="text" id="comments" name="comments"><br>
<br><input type="submit" value="Submit Form">
</form>
</head>
</body>
</html> 
<?php
//createContactsTable();
?>