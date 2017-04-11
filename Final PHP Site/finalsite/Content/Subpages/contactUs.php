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
$conn = mysqli_connect($servername, $username, $password, $username);
$comment = htmlspecialchars($_POST["comment"]);

$sqlContent = "Select contactFirstName from contactsTable where contactEmail = '" . $_SESSION['currUser'] . "';";		
$sql = mysqli_query($conn, $sqlContent);
$col = mysqli_fetch_array($sql);
$userName = $col['contactFirstName'];

$sqlContent = "Insert into userComments (comment, contactEmail) values ('" .$comment. "','". $_SESSION['currUser'] . "');";		
mysqli_query($conn, $sqlContent);

echo "<p id='orderTitle'>Thank you ".$userName."! We've received your input. Redirecting to your account...
<script>
var delay = 3000;
setTimeout(function(){ window.location = 'account.php'; }, delay);
</script>
";
mysqli_close($conn); 
?>

</body>
</html> 