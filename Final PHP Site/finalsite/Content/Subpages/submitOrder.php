<?php
session_start();
?>
<html>
<head>
<title>Tanya Zabinski | illustrator/author</title>
	<h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
	<link rel="stylesheet" type="text/css" href="../../CSS/loginpage_style.css"></link>
</head>
<body>
<div id="MenuContainer_books">
	<ul id="navigation_contact">
		<li><a href="../../index.php" >home</a></li>
		<li><a href="books.php" >portfolio</a></li>
		<li><a href="contact.php" >bio&contact</a></li>
		<?php
		if(!isset($_SESSION['currUser'])){
			echo "<li><a href='login.php'>login</a></li>";
			echo "<li><a href='createaccount_login.php'>register</a></li>";
		}
		else if(isset($_SESSION['currUser'])){
			echo "<li><a href='' style='color:red;'>account</a></li>";
			echo "<li><a href='logout.php'>logout</a></li>";
		}
		else{
		}
		?>
		<li><a href="site_files.php" >site files</a></li>
	</ul>
</div>
<div id="orders">

<?php
$servername = "localhost";
$username = "kuntzst01";	
$password = "B01028162";
$today = date("Y-m-d H:i:s");
$conn = mysqli_connect($servername, $username, $password, $username);

$sqlContent = "Select contactFirstName from contactsTable where contactEmail = '" . $_SESSION['currUser'] . "';";		
$sql = mysqli_query($conn, $sqlContent);
$col = mysqli_fetch_array($sql);
$userName = $col['contactFirstName'];

$sqlContent = "Select orderNum from ordersTable where contactEmail = '" . $_SESSION['currUser'] . "';";		
$sql = mysqli_query($conn, $sqlContent);
$orderCount = mysqli_num_rows($sql);

mysqli_query($conn, "Insert into  placedOrders (itemCount, contactEmail, orderDate) values ('" . $orderCount . "','" . $_SESSION['currUser'] . "','" . $today . "')");

$sqlContent = "Delete from ordersTable where contactEmail = '" . $_SESSION['currUser'] . "';";		
mysqli_query($conn, $sqlContent);
mysqli_close($conn); 
echo "<p id='orderTitle'>Thank you ".$userName."! Your order has been placed. Redirecting to your account...
<script>
var delay = 3000;
setTimeout(function(){ window.location = 'account.php'; }, delay);
</script>
";

?>

</body>
</html> 