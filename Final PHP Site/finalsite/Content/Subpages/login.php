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
				echo "<li><a href='' style='color:red;'>login</a></li>";
				echo "<li><a href='createaccount_login.php'>register</a></li>";
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
    <div id="container">
        <div id="center_content">
            <p>Returning user? Login here!</p>
			<div id="parentDiv">
				<form novalidate id="myForm" action="loginProcessing.php" method="POST">
				Email:   <br><input type="text" id="email" name="email"><br>
				Password:<br><input type="password" id="password" name="password"><br> 
				<br><input id="loginButton" type="submit" value="Log In">
				</form>
			</div>
		</div>
	</div>
</body>
</html>