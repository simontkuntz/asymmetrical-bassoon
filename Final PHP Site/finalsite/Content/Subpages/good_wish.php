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
        <td id="book_demo_cover"><img src="../Books/Good_Wish/GoodWishCover.jpg" height="353" width="270" id="Peaceful_Activist"></td>
        <td colspan="2" id="book_description"><p id="book_description">GOOD WISH is a collection of wishes for a child from a parent. Strong, positive and beautiful imagery is combined with poems, prayers and passages from various cultures, religions and time periods. Text is chosen for those who may not identify with a singular religion, but who are on a spiritual path and would like to share an inclusive belief system with their children. Just as language shapes our thoughts, so too, images create a strong imprint on our psyche.  It is the artist's belief that picturing a good wish can help create an image towards which to aim.
        </p>
        <?php
		if(isset($_SESSION['currUser'])){
		echo "
		<FORM METHOD=POST ACTION='addToCart.php'>
		  <INPUT TYPE='hidden' name='bookNum' value='2'>
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
        <td><a href="../LargerImagePages/beauty.html"><img src="../Books/Good_Wish/Beauty.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/joy.html"><img src="../Books/Good_Wish/Joy.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/abundance.html"><img src="../Books/Good_Wish/Abundance.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Beauty"</p></td>
        <td><p id="captions">"Joy"</p></td>
        <td><p id="captions">"Abundance"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/stronghealth.html"><img src="../Books/Good_Wish/Strong_Health.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/education.html"><img src="../Books/Good_Wish/Education.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/wonder.html"><img src="../Books/Good_Wish/Wonder.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Strong Health"</p></td>
        <td><p id="captions">"Education"</p></td>
        <td><p id="captions">"Wonder"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/gratitude.html"><img src="../Books/Good_Wish/Gratitude.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/friendship.html"><img src="../Books/Good_Wish/Friendship.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/faith.html"><img src="../Books/Good_Wish/Faith.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Gratitude</p></td>
        <td><p id="captions">"Friendship"</p></td>
        <td><p id="captions">"Faith"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/community.html"><img src="../Books/Good_Wish/Community.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/comfort.html"><img src="../Books/Good_Wish/Comfort.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/home.html"><img src="../Books/Good_Wish/Home.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Community"</p></td>
        <td><p id="captions">"Comfort"</p></td>
        <td><p id="captions">"Home"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/guidance.html"><img src="../Books/Good_Wish/Guidance.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/peace.html"><img src="../Books/Good_Wish/Peace.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
        <td><a href="../LargerImagePages/love.html"><img src="../Books/Good_Wish/Love.jpg" height="350" width="270" id="Caterpillars_In_Love"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Guidance"</p></td>
        <td><p id="captions">"Peace"</p></td>
        <td><p id="captions">"Love"</p></td>
      </tr>
    </table> 
</body>
</html>