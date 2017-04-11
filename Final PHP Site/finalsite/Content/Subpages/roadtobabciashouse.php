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
		<td id="book_demo_cover"><img src="../Books/The_Road_to_Babcia's_House/The_Road_to_Babcias_House_cover.jpg" height="227" width="270" id="Peaceful_Activist"></td>
		<td colspan="2" id="book_description"><p id="book_description">THE ROAD TO BABCIA'S HOUSE is an original Polish folktale about a girl, her horse, and their mission to deliver firewood to the girl's babcia (grandmother). It takes place deep in the woods on a cold winter day. When the horse cart becomes stuck in a ditch, woodland animals aid the girl and her horse. Surprisingly, it is the tiniest of all the animals who masterminds the ingenious method of returning the cart to the road. Grandmother gets more than firewood when her granddaughter shows up at her home. </p>

	<?php
	if(isset($_SESSION['currUser'])){
		echo "
		<FORM METHOD=POST ACTION='addToCart.php'>
			<INPUT TYPE='hidden' name='bookNum' value='4'>
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

		</td>
	</tr>
	  </table>
	  <table id="myTable" align="center">
      <tr>
        <td><a href="../LargerImagePages/b1.html"><img src="../Books/The_Road_to_Babcia's_House/papercut1-Babcia.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
        <td><a href="../LargerImagePages/b2.html"><img src="../Books/The_Road_to_Babcia's_House/papercut3.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
        <td><a href="../LargerImagePages/b3.html"><img src="../Books/The_Road_to_Babcia's_House/papercut4.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/b4.html"><img src="../Books/The_Road_to_Babcia's_House/bw-babcia7.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
        <td><a href="../LargerImagePages/b5.html"><img src="../Books/The_Road_to_Babcia's_House/babcia10.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
        <td><a href="../LargerImagePages/b6.html"><img src="../Books/The_Road_to_Babcia's_House/bw-babcia12.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/b7.html"><img src="../Books/The_Road_to_Babcia's_House/Babcia'sHouse_Pic1.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
        <td><a href="../LargerImagePages/b8.html"><img src="../Books/The_Road_to_Babcia's_House/Babcia'sHouse_Pic2.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
        <td><a href="../LargerImagePages/b9.html"><img src="../Books/The_Road_to_Babcia's_House/Babcia'sHouse_Pic3.jpg" width="270" id="The_Road_to_Babcias_House"></a></td>
      </tr>
    </table> 
</body>
</html>