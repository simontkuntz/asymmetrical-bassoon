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
<div id="MenuContainer_books">
	<ul id="navigation_books">
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
<a href="books.php" id="back_button">back to books</a>
<table id="myTable1" align="center">
<tr>
	<td id="book_demo_cover"><img src="../Books/Caterpillars_In_Love/1.CaterpillarCoverCrop_1.jpg" height="330" width="270" id="Peaceful_Activist"></td>
	<td id="book_description"><p id="book_description">CATERPILLARS IN LOVE is the adventure of a caterpillar who gets tangled up in his own feet and tumbles to the ground. From his fallen-down position, he's able to discover a giant cupcake at the top of a tall flower. In order to acquire this cupcake, he needs to overcome his fear of heights. He knows that breathing deeply is always helpful. He also knows with whom he wants to share this cupcake. When she enters the picture, more adventures ensue, filled with enjoyment, creativity, music-making, new friends, inclusiveness and a foreshadowed transformation.</p>
<?php
if(isset($_SESSION['currUser'])){
	echo "
	<FORM METHOD=POST ACTION='addToCart.php'>
		<INPUT TYPE='hidden' name='bookNum' value='1'>
		<INPUT TYPE='submit' name='submit' value='Add to Cart'>
	</FORM>
	</td>
	";
}
else if(!isset($_SESSION['currUser'])){
	echo "
	</td>
	";
}
else{}
?>

</tr>
    </table>
     <table id="myTable" align="center">
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/2.invite.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/3.came_over.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/4.sat_down.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/5.color_spread.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/6.next_endeavor.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/7.all_ready.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/8.joined_in.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/9.jammed.jpg" id="Caterpillars_In_Love"></td>
      </tr>
      <tr>
        <td><img src="../Books/Caterpillars_In_Love/10.last_one.jpg" id="Caterpillars_In_Love"></td>
      </tr>
    </table> 
</body>
</html>