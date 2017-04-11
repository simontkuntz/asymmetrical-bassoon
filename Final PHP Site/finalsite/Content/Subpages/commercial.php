<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tanya Zabinski | illustrator/author</title>
    <h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
        <script type = "text/javascript" src="JS/main.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    </link>
</head>
<body>
    <div id="MenuContainer_books">
        <ul id="navigation_books">
            <li><a href="../../index.php">home</a></li>
            <li><a href="books.php" style="color:red;">portfolio</a></li>
            <li><a href="contact.php" >bio&contact</a></li>
			<?php
			if(!isset($_SESSION['currUser'])){
				echo "<li><a href='login.php'>login</a></li>";
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
    <div id="SideContainer_books">
        <ul id="SideContainer_navigation_books">
            <li><a href="books.php">books</a></li>
            <li><a href="cards.php" >cards</a></li>
            <li><a href="commercial.php" style="color:red;">commercial</a></li>
            <li><a href="http://planetlovedesigns.com/">printed clothing</a></li>
            
        </ul>
    </div>
</body>
</html>