<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../CSS/loginpage_style.css"></link>
</head>
<body>
<?php 
$email = $_POST["accountEmail"];
$servername = "localhost";
$username = "kuntzst01";	
$password = "B01028162";
$conn = mysqli_connect($servername, $username, $password, $username);
mysqli_query($conn, "
update contactsTable set contactID = 0
where contactEmail = '" . $email . "';");
mysqli_close($conn); 
?>
<script>
back();
function back() {
    window.location.assign("account.php");
}
</script>
</body>
</html> 