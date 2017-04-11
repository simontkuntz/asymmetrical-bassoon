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
$orderNum = 0;
$bookPrice = 0;
$totalPrice = 0;
$conn = mysqli_connect($servername, $username, $password, $username);
$sqlContent = mysqli_query($conn, "Select contactFirstName from contactsTable where contactEmail = '" . $_SESSION["currUser"] . "' AND contactPassword = '" . $_SESSION["currPass"] . "'");
$row = mysqli_fetch_array($sqlContent);
$userName = $row['contactFirstName'];
$sqlContent = "Select orderNum from ordersTable where contactEmail = '" . $_SESSION['currUser'] . "';";		
$sql = mysqli_query($conn, $sqlContent);
echo "<p id='orderTitle'>Welcome back, ".$userName."!<hr width='25%'></p>";
if(mysqli_num_rows($sql)>0){		
	echo "<p id='orderTitle'>Here are the items in your shopping cart:</p>";
	while ($row = mysqli_fetch_array($sql)) {
		if($row['orderNum']==1){
			$bookPrice = 14.99;
			$totalPrice = $totalPrice + $bookPrice;
			echo "
			<p>Caterpillars in Love - $" . $bookPrice . "</p>
			<img id='orderImage' src='../Books/Caterpillars_In_Love/1.CaterpillarCoverCrop_1.jpg' alt='CaterpillarCoverCrop_1' height='90' width='90'> 
			<br><br>
			<FORM METHOD=POST ACTION='removeFromCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='1'>
				<INPUT TYPE='submit' name='removeFromCart' value='Remove'>
			</FORM>
			";
		}
		else if($row['orderNum']==2){
			$bookPrice = 12.99;
			$totalPrice = $totalPrice + $bookPrice;
			echo "
			<p>Good Wish - $" . $bookPrice . "</p>
			<img id='orderImage' src='../Books/Good_Wish/GoodWishCover.jpg' alt='GoodWishCover' height='90' width='90'> 
			<br><br>
			<FORM METHOD=POST ACTION='removeFromCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='2'>
				<INPUT TYPE='submit' name='removeFromCart' value='Remove'>
			</FORM>
			";
		}
		else if($row['orderNum']==3){
			$bookPrice = 14.99;
			$totalPrice = $totalPrice + $bookPrice;
			echo "
			<p>Peaceful Activist - $" . $bookPrice . "</p>
			<img id='orderImage' src='../Books/Peaceful_Activist/Zabinski_Cover.jpg' alt='Zabinski_Cover' height='90' width='90'> 
			<br><br>
			<FORM METHOD=POST ACTION='removeFromCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='3'>
				<INPUT TYPE='submit' name='removeFromCart' value='Remove'>
			</FORM>
			";
		}
		else if($row['orderNum']==4){
			$bookPrice = 11.99;
			$totalPrice = $totalPrice + $bookPrice;
			echo "
			<p>The Road to Babcia's House - $" . $bookPrice . "</p>
			<img id='orderImage' src='../Books/The_Road_to_Babcias_House/The_Road_to_Babcias_House_cover.jpg' alt='The_Road_to_Babcias_House_cover' height='90' width='90'> 
			<br><br>
			<FORM METHOD=POST ACTION='removeFromCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='4'>
				<INPUT TYPE='submit' name='removeFromCart' value='Remove'>
			</FORM>
			";
		}
		else if($row['orderNum']==5){
			$bookPrice = 13.99;
			$totalPrice = $totalPrice + $bookPrice;
			echo "
			<p>Topsy-Turvy - $" . $bookPrice . "</p>
			<img id='orderImage' src='../Books/Topsy_Turvy/Topsy-turvy_cover.jpg' alt='Topsy-turvy_cover' height='90' width='90'> 
			<br><br>
			<FORM METHOD=POST ACTION='removeFromCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='5'>
				<INPUT TYPE='submit' name='removeFromCart' value='Remove'>
			</FORM>
			";
		}
		else if($row['orderNum']==6){
			$bookPrice = 19.99;
			$totalPrice = $totalPrice + $bookPrice;
			echo "
			<p>Around the Seasons - $" . $bookPrice . "</p>
			<img id='orderImage' src='../Books/Around_the_seasons/aroundtheseasons.jpg' alt='aroundtheseasons' height='90' width='90'> 
			<br><br>
			<FORM METHOD=POST ACTION='removeFromCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='6'>
				<INPUT TYPE='submit' name='removeFromCart' value='Remove'>
			</FORM>
			";
		}
		else{
		}
	}
	echo "<br><p id='adminTitle'>Cart Subtotal: $".$totalPrice."</p>
	<FORM METHOD=POST ACTION='submitOrder.php'>
		<INPUT TYPE='submit' name='checkout' value='Proceed to Checkout'>
	</FORM>
	<br>
	
	";
}

else{
	echo "<p id='orderTitle' style='color:red'>Your cart is empty!</p>
	<FORM METHOD=POST ACTION='books.php'>
		<INPUT TYPE='submit' name='browseBooks' value='Browse Books'>
	</FORM>
	";
}

$sqlContent = mysqli_query($conn, "Select itemCount, orderDate from placedOrders where contactEmail = '" . $_SESSION["currUser"] . "';");	
$orderedItemCount = mysqli_num_rows($sqlContent);
while($row = mysqli_fetch_array($sqlContent)){
	$itemCount[] = $row['itemCount'];
	$date[] = $row['orderDate'];
}
if($orderedItemCount>0){		
	echo "	
	<input type='button' id='display' value='Display Previous Orders' onclick='displayOrders();' />
	<input type='button' id='hide' style='display:none' value='Hide Previous Orders' onclick='hideOrders();' />
	<br>
	<br>
	<script>
	function displayOrders(){
		document.getElementById('display').style.display='none';
		document.getElementById('hide').style.display='inline';
		document.getElementById('previousOrders').style.display='table';
	}
	function hideOrders(){
		document.getElementById('hide').style.display='none';
		document.getElementById('display').style.display='inline';
		document.getElementById('previousOrders').style.display='none';
	}
	</script>
		<table id='previousOrders'>
		<tr>
			<th>Items Ordered</th>
			<th>Date Ordered</th>
		</tr>
	";		
	for($i=0; $i<$orderedItemCount; $i++){
		echo "
		<tr>
			<td>".$itemCount[$i]."</td>
			<td>".$date[$i]."</td>
		</tr>
		";
	}
	echo"
		</table><br>";
	
}

else{}

//***********************************************************ADMIN SECTION***********************************************************

$sqlContent = mysqli_query($conn, "Select * from contactsTable where contactID = 0 and contactEmail = '" . $_SESSION['currUser'] . "';");
$rowCount = mysqli_num_rows($sqlContent);
$currUser = 0;
if($rowCount>0){
echo"
	<hr width='50%'>
	<p id='adminTitle'>You are a site admin.</p>";
	
//*********************************************************************************************STANDARD ACCOUNTS, FIRST ARRAY*********************************************************************************************	
	
	if(mysqli_num_rows(mysqli_query($conn, "Select contactFirstName, contactLastName, contactEmail, contactDate from contactsTable where not contactID = 0;"))>0){
	echo "
	<p id='adminTitle'>Standard registered accounts are listed below:</p>
	";
	$sqlContent = mysqli_query($conn, "Select contactFirstName, contactLastName, contactEmail, contactDate from contactsTable where not contactID = 0;");
	$res = mysqli_num_rows($sqlContent);
		while($row = mysqli_fetch_array($sqlContent)){
			$contactFirst[] = $row['contactFirstName'];
			$contactLast[] = $row['contactLastName'];
			$contactEmail[] = $row['contactEmail'];
			$contactDate[] = $row['contactDate'];
		}
		echo "
		<table id='accounts'>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>User Email</th>
			<th>Join Date</th>
		</tr>";
		for($i=0; $i<$res; $i++){
			$currUser = $i;
			echo "
			<tr>
				<td>".$contactFirst[$i]."</td>
				<td>".$contactLast[$i]."</td>
				<td>".$contactEmail[$i]."</td>
				<td>".$contactDate[$i]."</td>
				<td> 
				<form action='removeAccount.php' method='post'>
					<input type='hidden' name='accountEmail' value='".$contactEmail[$i]."'><br>
					<input type='submit' name='removeAccount' value='Remove Account'>
				</form>
				</td>
				<td>
				<form action='updateAdmin.php' method='post'>
					<input type='hidden' name='accountEmail' value='".$contactEmail[$i]."'><br>
					<input type='submit' value='Make Administrator'>
				</form>
				</td>
			</tr>";
		}
		echo "</table>";
	}
	else{}
	
//*********************************************************************************************ADMIN ACCOUNTS, SECOND ARRAY*********************************************************************************************
	
	if(mysqli_num_rows(mysqli_query($conn, "Select contactFirstName, contactLastName, contactEmail, contactDate from contactsTable where not contactEmail = '" . $_SESSION["currUser"] . "' and contactID <> 1;"))){
	
	echo"
	<p id='adminTitle'>Administrator accounts are listed below:</p>
	";
	$sqlContent = mysqli_query($conn, "Select contactFirstName, contactLastName, contactEmail, contactDate from contactsTable where not contactEmail = '" . $_SESSION["currUser"] . "' and contactID <> 1;");
	$res = mysqli_num_rows($sqlContent);
		while($row = mysqli_fetch_array($sqlContent)){
			$contactFirst1[] = $row['contactFirstName'];
			$contactLast1[] = $row['contactLastName'];
			$contactEmail1[] = $row['contactEmail'];
			$contactDate1[] = $row['contactDate'];
	}
	echo "
	<table id='accounts'>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>User Email</th>
		<th>Join Date</th>
	</tr>";
	for($i=0; $i<$res; $i++){
		$currUser = $i;
		echo "
		<tr>
			<td>".$contactFirst1[$i]."</td>
			<td>".$contactLast1[$i]."</td>
			<td>".$contactEmail1[$i]."</td>
			<td>".$contactDate1[$i]."</td>
			<td>
			<form action='removeAdmin.php' method='post'>
				<input type='hidden' name='accountEmail1' value='".$contactEmail1[$i]."'><br>
				<input type='submit' value='Remove Admin Priviledges'>
			</form>
			</td>
		</tr>";
	}
	echo "</table>";
	}

	else{}

	//********************************************************USER FEEDBACK SECTION (COMMENTS)***********************************************************
	
	if(mysqli_num_rows(mysqli_query($conn, "Select * from userComments;"))>0){
	
	echo"
	<p id='adminTitle'>User comments are listed below:</p>
	";
	$sqlContent = mysqli_query($conn, "Select * from userComments;");
	$res = mysqli_num_rows($sqlContent);
		while($row = mysqli_fetch_array($sqlContent)){
			$comment[] = $row['comment'];
			$commentUser[] = $row['contactEmail'];
	}
	echo "
	<table id='accounts'>
	<tr>
		<th>User Comment</th>
		<th>User Email</th>
	</tr>";
	for($i=0; $i<$res; $i++){
		$currUser = $i;
		echo "
		<tr>
			<td>".$comment[$i]."</td>
			<td>".$commentUser[$i]."</td>
		</tr>";
	}
	echo "</table>";
	}

}

//******************************************************************************************************************************************************************************************

else{//Not admin
}
mysqli_close($conn); 
?>

</div>
</body>
</html> 