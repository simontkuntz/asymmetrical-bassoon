<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../CSS/loginpage_style.css"></link>
</head>
<body>

<?php 
$bookNum = $_POST["bookNum"];
$servername = "localhost";
$username = "kuntzst01";	
$password = "B01028162";
$conn = mysqli_connect($servername, $username, $password, $username);
$sqlContent = "Select orderNum from ordersTable where contactEmail = '" . $_SESSION['currUser'] . "' AND orderNum = " .$bookNum . " ;";
$sql = mysqli_query($conn, $sqlContent); 		
$newRowCount = (mysqli_num_rows($sql)) - 1;			
$sqlContent = "DELETE FROM ordersTable where orderNum = ".$bookNum." AND contactEmail = '" . $_SESSION['currUser'] . "';";
mysqli_query($conn, $sqlContent);
while($newRowCount>0){
	$sqlContent = "INSERT INTO ordersTable(orderNum,contactEmail) VALUES('".$bookNum."','".$_SESSION['currUser']."');";
	mysqli_query($conn, $sqlContent);
	$newRowCount = $newRowCount - 1;
}
mysqli_close($conn); 
header('Location:account.php');
exit();
?>

</body>
</html> 