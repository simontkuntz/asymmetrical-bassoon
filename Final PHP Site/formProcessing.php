<?php
include "functions.php";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="finalsite/CSS/loginpage_style.css"></link>
</head>
<body>
<?php 
$contactID = 0;
$today = date("Y-m-d H:i:s");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
$comments = $_POST["comments"];
$errors = "";
$errors .= fnameValidate($fname);
$errors .= lnameValidate($lname);
$errors .= cityValidate($city);
$errors .= zipcodeValidate($zipcode);
$errors .= phoneValidate($phone);
$errors .= emailValidate($email);

function fnameValidate($value){
	$Errors = "";
	if((preg_match('/[\/\!@#\$%\&\*\(\)\-\+=\{\}\[\]\|;:"\<\>\?\\\\]/', $value))||(preg_match('/[0-9]/', $value))||($value=="")){
			$Errors = "<br>First name cannot be empty, contain certain special characters or numbers";
	}
	else{
	}
	return $Errors;
}
function lnameValidate($value){
	$Errors = "";
	if((preg_match('/[\/\!@#\$%\&\*\(\)\-\+=\{\}\[\]\|;:"\<\>\?\\\\]/', $value))||(preg_match('/[0-9]/', $value))||($value=="")){
			$Errors = "<br>Last name cannot be empty, contain certain special characters or numbers";
	}
	else{
	}
	return $Errors;
}
function cityValidate($value){
	$Errors = "";
	if((preg_match('/[\/\!@#\$%\&\*\(\)\-\+=\{\}\[\]\|;:"\<\>\?\\\\]/', $value))||(preg_match('/[0-9]/', $value))||($value=="")){
			$Errors = "<br>City cannot be empty or contain certain special characters, numbers";
	}
	else{
	}
	return $Errors;
}
function zipcodeValidate($value){
	$Errors = "";
	if(preg_match('[^\d{5}(?:[-\s]\d{4})?$]', $value)){
	}
	else if($value==""){
		$Errors = "<br>Zipcode cannot be empty";
	}
	else{
		$Errors = "<br>Zipcode not valid";
	}
	return $Errors;
}
function phoneValidate($value){
	global $phone;
	$Errors = "";
	if(!preg_match('/^\d{10}$/', $value)){
			$Errors = "<br>Phone number cannot be empty, must be 10 digits non-formatted ex. xxxxxxxxxx";
	}
	else{
		//$phone = "(" . substr($value, 0, 3) . ") " . substr($value, 3, 3) . "-" . substr($value, 6, 4);
	}
	return $Errors;
}
function emailValidate($value){
	$Errors = "";
	if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $value)){		
	}
	else if($value==""){
		$Errors = "<br>Email field cannot be empty";
	}
	else{
		$Errors = "<br>Email must be valid format";
	}
	return $Errors;
}

?>
<script>
function goBack(){
	window.history.go(-1);
}
</script>
<?php

function addContact($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){
		$servername = "localhost";
		$username = "kuntzst01";	
		$password = "B01028162";
		$conn = mysqli_connect($servername, $username, $password, $username);
		$sqlContent = "Select * FROM contactsTable WHERE contactEmail = '" . $i . "';";
		$sql = mysqli_query($conn, $sqlContent);
		echo "<div id='noAccountFoundParent'>
			  <div id='noAccountFound'>
			  ";
		if(mysqli_num_rows($sql)==1){
			echo "Oops! An account already exists with this email.";
			echo "
			<br><br>
			<button onclick='goBack()'>Return to form</button>
			</div>
			</div>
			";
		}
		else{
			echo "Thank you " . $b . ", your account has been created.";
			$sqlContent = "
				INSERT INTO contactsTable(contactID,contactFirstName,contactLastName,contactAddress,contactCity,contactState,contactZipcode,contactPhone,contactEmail,contactPassword,contactDate)					
				VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')
				";
			mysqli_query($conn, $sqlContent);
			echo "
			<br><br>
			<form action='finalsite/Content/Subpages/createaccount_login.php'>
			<input type='submit' value='Go to login' />
			</form>
			</div>
			</div>
			";
		}
		
		$conn->close();
}

if($errors==""){
	$contactID++;
	addContact($contactID,$fname,$lname,$address,$city,$state,$zipcode,$phone,$email,$password,$today);
}
else{
	echo "
	<div id='noAccountFoundParent'>
		<div id='noAccountFound'>
		<p>Sorry, your submission was not successful. Errors have been listed below:</p>" . $errors;
	echo "<br><br><button onclick='window.history.go(-1)'>Return to form</button>
	</div>
	</div>
	";
}
?>
<script>

</script>
</body>
</html> 