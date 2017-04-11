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
        <td id="book_demo_cover"><img src="../Books/Around_the_seasons/aroundtheseasons.jpg" height="353" width="270" id="Peaceful_Activist"></td>
        <td id="book_description"><p id="book_description">AROUND THE SEASONS is a collection of seasonal poems and cut paper pictures. The theme of seasons encourages a connection to the beauty of the earth, and many of the sensuous joys of living on it.</p>
		
		<?php
		if(isset($_SESSION['currUser'])){
			echo "
			<FORM METHOD=POST ACTION='addToCart.php'>
				<INPUT TYPE='hidden' name='bookNum' value='6'>
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
<!-- <tr>
<td colspan="3"><p id="season_header">Spring</p>
</tr> -->
<table id="myTable">
<tr>
<td><a href="../LargerImagePages/I_Rise.html"><img src="../Books/Around_the_seasons/I_Rise.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/strawberry.html"><img src="../Books/Around_the_seasons/strawberry.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/bell.html"><img src="../Books/Around_the_seasons/bell.jpg" height="278" width="270" id="Peaceful_Activist"></td>
</tr>
<tr>
<td><p id="captions">"I Rise"</p></td>
<td><p id="captions">"Strawberry"</p></td>
<td><p id="captions">"Snow Bell"</p></td>
</tr>
<tr>
<td><a href="../LargerImagePages/chirp_chirp.html"><img src="../Books/Around_the_seasons/chirp_chirp.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/raindrops.html"><img src="../Books/Around_the_seasons/raindrops.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/sunandsand.html"><img src="../Books/Around_the_seasons/sun-and-sand.jpg" height="344" width="270" id="Peaceful_Activist"></td>
</tr>
<tr>
<td><p id="captions">"Chirp Chirp"</p></td>
<td><p id="captions">"Raindrops"</p></td>
<td><p id="captions">"Sun and Sand"</p></td>
</tr>
<!-- <tr> -->
<!-- <td colspan="3"><p id="season_header">Summer</p><td> -->
<!-- </tr> -->
<tr>
<td><a href="../LargerImagePages/pedalalong.html"><img src="../Books/Around_the_seasons/pedal-along.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/butterfly.html"><img src="../Books/Around_the_seasons/butterfly.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/pickingapumpkin.html"><img src="../Books/Around_the_seasons/picking-a-pumpkin.jpg" height="344" width="270" id="Peaceful_Activist"></td>
</tr>
<tr>
<td><p id="captions">"Pedal Along"</p></td>
<td><p id="captions">"Butterfly Queen"</p></td>
<td><p id="captions">"Picking a Pumpkin"</p></td>
</tr>
<!-- <tr> -->
<!-- <td colspan="3"><p id="season_header">Fall</p><td> -->
<!-- </tr> -->
<tr>
<td><a href="../LargerImagePages/autumn.html"><img src="../Books/Around_the_seasons/autumn 1.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/blanket.html"><img src="../Books/Around_the_seasons/blanket.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/rustle_rustle.html"><img src="../Books/Around_the_seasons/rustle_rustle.jpg" height="344" width="270" id="Peaceful_Activist"></td>
</tr>
<tr>
<td><p id="captions">"Autumn"</p></td>
<td><p id="captions">"Blanket of Leaves"</p></td>
<td><p id="captions">"Rustle Rustle"</p></td>
</tr>
<!-- <tr>
<td colspan="3"><p id="season_header">Winter</p><td>
</tr> -->
<tr>
<td><a href="../LargerImagePages/hottea.html"><img src="../Books/Around_the_seasons/hot-tea.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/snowyday.html"><img src="../Books/Around_the_seasons/snowy-day copy.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/whirling_twirling.html"><img src="../Books/Around_the_seasons/whirling_twirling.png" height="274" width="270" id="Peaceful_Activist"></td>
</tr>
<tr>
<td><p id="captions">"Hot Tea"</p></td>
<td><p id="captions">"Snowy Day"</p></td>
<td><p id="captions">"Whirling Twirling"</p></td>
</tr>
<tr>
<td><a href="../LargerImagePages/frosty_breath.html"><img src="../Books/Around_the_seasons/frosty_breath.jpg" height="344" width="270" id="Peaceful_Activist"></td>
<td><a href="../LargerImagePages/taking_flight.html"><img src="../Books/Around_the_seasons/taking_flight.jpg" height="344" width="270" id="Peaceful_Activist"></td>
</tr>
<tr>
<td><p id="captions">"Frosty Breath"</p></td>
<td><p id="captions">"Taking Flight"</p></td>
</tr>
</table> 
</body>
</html>