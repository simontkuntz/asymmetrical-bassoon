<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tanya Zabinski | illustrator/author</title>
	<h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
	<link rel="stylesheet" type="text/css" href="../../CSS/loginpage_style.css"></link>
</head>
<body>
    <div id="MenuContainer_books">
        <ul id="navigation_contact">
            <li><a href="../../index.php">home</a></li>
            <li><a href="books.php" >portfolio</a></li>
            <li><a href="contact.php" >bio&contact</a></li>
			<?php
			if(!isset($_SESSION['currUser'])){
				echo "<li><a href='login.php'>login</a></li>";
				echo "<li><a href='' style='color:red;'>register</a></li>";
			}
			else if(isset($_SESSION['currUser'])){
				echo "<li><a href='account.php'>account</a></li>";
				echo "<li><a href='logout.php'>logout</a></li>";
			}
			else{
			}
			?>
			<li><a href="site_files.php" >site files</a></li>
        </ul>
    </div>
	
<?php

$errors="";
if(isset($_POST['submitForm']))
{
   validateForm();
} 
else{}

function validateForm(){

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
$errors .= passwordValidate($password);

	if($errors==""){
		$contactID++;
		addContact($contactID,$fname,$lname,$address,$city,$state,$zipcode,$phone,$email,$password,$today);
	}

	else{
		echo "
		<br>
		<div id='noAccountFoundParent'>
			<div id='noAccountFound'>
			Sorry, your submission was not successful. Errors have been listed below:<br>" . $errors . "
		</div>
		</div>
		<br>
		";
	}
}

function fnameValidate($value){
	$Errors = "";
	if((preg_match('/[\/\!@#\$%\&\*\(\)\+=\{\}\[\]\|;:"\<\>\?\\\\]/', $value))||(preg_match('/[0-9]/', $value))||($value=="")){
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

function passwordValidate($value){
	$Errors = "";
	if($value==""){
		$Errors = "<br>Password field cannot be empty";
	}
	else{
	}
	return $Errors;
}

function addContact($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){
$servername = "localhost";
$username = "kuntzst01";	
$password = "B01028162";
$conn = mysqli_connect($servername, $username, $password, $username);
$sqlContent = "Select * FROM contactsTable WHERE contactEmail = '" . $i . "';";
$sql = mysqli_query($conn, $sqlContent);
echo "<br><div id='noAccountFoundParent'>
	  <div id='noAccountFound'>
	  ";
	if(mysqli_num_rows($sql)==1){
		echo "Oops! An account already exists with this email. Please register with a different email address!
		</div>
		</div>
		<br>
		";
	}
	else{
		$sqlContent = "
			INSERT INTO contactsTable(contactID,contactFirstName,contactLastName,contactAddress,contactCity,contactState,contactZipcode,contactPhone,contactEmail,contactPassword,contactDate)					
			VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')
			";
		mysqli_query($conn, $sqlContent);
		echo "
		Thank you " . $b . ", your account has been created! Redirecting to login now...
		<script>
		var delay = 3000;
		setTimeout(function(){ window.location = 'login.php'; }, delay);
		</script>
		</div>
		</div>
		";
	}
mysqli_close($conn); 
}
?>	
    <div id="container">
        <div id="center_content">
			<p>New user? Register here!</p>
			<div id='noAccountFoundParent'>
			<div id='noAccountFound'>
			<form method="post" id="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			First Name: <br><input type="text" id="firstName" name="fname" value="<?php if(isset($_POST['fname'])){ echo $_POST['fname'];}?>"><br>
			Last Name:  <br><input type="text" id="lastName" name="lname" value="<?php if(isset($_POST['lname'])){ echo $_POST['lname'];}?>"><br>
			Address: 	<br><input type="text" id="address" name="address" value="<?php if(isset($_POST['address'])){ echo $_POST['address'];}?>"><br>
			City: 		<br><input type="text" id="city" name="city" value="<?php if(isset($_POST['city'])){ echo $_POST['city'];}?>"><br>
			State:
			<br>
			<select name="state">
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
			</select>
			<br>
			Zipcode: <br><input type="text" id="zipcode" name="zipcode" value="<?php if(isset($_POST['zipcode'])){ echo $_POST['zipcode'];}?>"><br>
			Phone: 	 <br><input type="text" id="phone" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone'];}?>"><br>
			Email:   <br><input type="text" id="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>"><br>
			Password:<br><input type="password" id="password" name="password"><br>
			Comments:<br><input type="text" id="comments" name="comments" value="<?php if(isset($_POST['comments'])){ echo $_POST['comments'];}?>"><br>
			<br><input type="submit" value="Register" name="submitForm">
			</form>
			</div>
        </div>
		</div>
    </div>
</body>
</html>