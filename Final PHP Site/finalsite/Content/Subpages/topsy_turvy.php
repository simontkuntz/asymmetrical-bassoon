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
	<td id="book_demo_cover"><img src="../Books/Topsy_Turvy/Topsy-turvy_cover.jpg" height="345" width="270" id="Peaceful_Activist"></td>
	<td colspan="2" id="book_description"><p id="book_description">TOPSY-TURVY is a collection of illustrated onomatopoeias. People are naturally drawn to onomatopoeias, which imitate the sound of the object, or action they describe. They're catchy, they're fun to listen for, they're fun to say. Now TOPSY-TURVY makes them fun to look at too.</p>
	
	<?php
	if(isset($_SESSION['currUser'])){
		echo "
		<FORM METHOD=POST ACTION='addToCart.php'>
			<INPUT TYPE='hidden' name='bookNum' value='5'>
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
        <td><a href="../LargerImagePages/cockadoodledoo.html"><img src="../Books/Topsy_Turvy/1.Cock_a_Doodle_Doo.jpg" height="350" width="270" id="Topsy_Turvy"></td>
        <td><a href="../LargerImagePages/clangclang.html"><img src="../Books/Topsy_Turvy/Clangclang.jpg" height="350" width="270" id="Topsy_Turvy"></td>
        <td><a href="../LargerImagePages/bangbang.html"><img src="../Books/Topsy_Turvy/Bangbang.jpg" height="350" width="270" id="Topsy_Turvy"></td>
      </tr>
     <!--  <tr>
        <td><p id="captions">"Cock-a-Doodle-Doo"</p></td>
        <td><p id="captions">"Clang clang"</p></td>
        <td><p id="captions">"Bang bang"</p></td>
      </tr> -->
      <tr>
        <td><a href="../LargerImagePages/bowwow.html"><img src="../Books/Topsy_Turvy/Bowwow.jpg" height="350" width="270" id="Topsy_Turvy"></td>
        <td><a href="../LargerImagePages/winkwink.html"><img src="../Books/Topsy_Turvy/wink_wink.jpg" height="350" width="270" id="Topsy_Turvy"></td>
        <td><a href="../LargerImagePages/cachink.html"><img src="../Books/Topsy_Turvy/Cachink.jpg" height="350" width="270" id="Topsy_Turvy"></td>
      </tr>
     <!--  <tr>
        <td><p id="captions">"Bow wow"</p></td>
        <td><p id="captions">"Wink wink"</p></td>
        <td><p id="captions">"Ca chink"</p></td>
      </tr> -->
      <tr>
        <td><a href="../LargerImagePages/dingdong.html"><img src="../Books/Topsy_Turvy/Dingdong.jpg" height="350" width="270" id="Topsy_Turvy"></td>
        <td><a href="../LargerImagePages/flipflop.html"><img src="../Books/Topsy_Turvy/flipflop.jpg" height="350" width="270" id="Topsy_Turvy"></td>
        <td><a href="../LargerImagePages/smooch.html"><img src="../Books/Topsy_Turvy/smooch.jpg" height="350" width="270" id="Topsy_Turvy"></td>
      </tr>
	  <tr>
		<td><a href="../LargerImagePages/Pingpong.html"><img src="../Books/Topsy_Turvy/Pingpong.jpg" height="350" width="270" id="Topsy_Turvy"></td>
      </tr>
      <!-- <tr>
        <td><p id="captions">"Ding dong"</p></td>
        <td><p id="captions">"Flip flop"</p></td>
        <td><p id="captions">"Smooch"</p></td>
      </tr> -->
    </table> 
</body>
</html>