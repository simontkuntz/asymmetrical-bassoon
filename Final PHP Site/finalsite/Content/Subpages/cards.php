<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tanya Zabinski | illustrator/author</title>
	<h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
	<link rel="stylesheet" type="text/css" href="../../CSS/bookdemo_style.css">
		<script type = "text/javascript" src="JS/main.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	</link>
</head>
<body>
	<div id="MenuContainer_cards">
		<ul id="navigation_cards">
            <li><a href="../../index.php">home</a></li>
            <li><a href="books.php" >portfolio</a></li>
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
     <a href="books.html" id="back_button">back to portfolio</a>
     <table id="myTable" align="center">
      <tr>
        <td><img src="../Cards/Deer.jpg" height="209" width="270" id="Peaceful_Activist"></td>
        <td><img src="../Cards/Family.jpg" height="209" width="270" id="Peaceful_Activist"></td>
        <td><img src="../Cards/Squirrels.jpg" height="209" width="270" id="Peaceful_Activist"></td>
      </tr>
      <tr>
         <td><img src="../Cards/Foxes.jpg" height="209" width="270" id="Peaceful_Activist"></td>
         <td><img src="../Cards/Candle.jpg" height="209" width="159" id="Peaceful_Activist"></td>
         <td><img src="../Cards/Foxes.jpg" height="209" width="270" id="Peaceful_Activist"></td>
      </tr>
    </table> 
</body>
</html>