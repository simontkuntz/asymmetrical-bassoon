<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../CSS/loginpage_style.css"></link>
</head>
<body>

<?php 
$email = $_POST["email"];
$password = $_POST["password"];
login($email, $password);

function login($user, $pass){
		$servername = "localhost";
		$username = "kuntzst01";	
		$password = "B01028162";
		$userValid = false;
		$conn = mysqli_connect($servername, $username, $password, $username);
		$sqlContent = mysqli_query($conn, "
		Select contactEmail, contactPassword from contactsTable 
		where contactEmail = '" . $user . "' AND contactPassword = '" . $pass . "'");
		$rowReturned = mysqli_num_rows($sqlContent);		
		if($rowReturned==1){
			$userValid = true;
			$_SESSION["currUser"] = $user;
			$_SESSION["currPass"] = $pass;
			header('Location:account.php');
			exit();
		}
		
		else{
			error_reporting(0);
			echo "
			<div id='noAccountFoundParent'>
				<div id='noAccountFound'>
				<p>Sorry, no account was found with those credentials.</p>
				<button onclick='history.go(-1);return true;'>Return to Login</button>
				</div>
			</div>
			";
		}
mysqli_close($conn); 
}
?>

</body>
</html> 