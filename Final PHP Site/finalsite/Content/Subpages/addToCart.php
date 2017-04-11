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
mysqli_query($conn, $sqlContent = "INSERT INTO ordersTable(orderNum,contactEmail) VALUES('".$bookNum."','".$_SESSION['currUser']."');");
if($bookNum==1){
	header('Location:caterpillars.php');
	exit();
}
else if($bookNum==2){
	header('Location:good_wish.php');
	exit();
}
else if($bookNum==3){
	header('Location:peacefulactivist.php');
	exit();
}
else if($bookNum==4){
	header('Location:roadtobabciashouse.php');
	exit();
}
else if($bookNum==5){
	header('Location:topsy_turvy.php');
	exit();
}
else if($bookNum==6){
	header('Location:aroundtheseasons.php');
	exit();
}
else{}
mysqli_close($conn); 
?>

</body>
</html> 