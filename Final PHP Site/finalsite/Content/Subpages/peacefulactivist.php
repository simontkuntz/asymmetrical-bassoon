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
		<td id="book_demo_cover"><img src="../Books/Peaceful_Activist/Zabinski_Cover.jpg" height="398" width="270" id="Peaceful_Activist"></td>
		<td colspan="2" id="book_description"><p id="book_description">TWENTY-FIVE SIMPLE WAYS TO BE A PEACEFUL ACTIVIST combines image and text to create a list of actions that support and build a just and sustainable world. Each action has an accompanying mini-biography of a person who embodies that action. These actions are both inward and outward. They are personal and communal. They can be applied to lofty goals and to menial tasks. They are simultaneously simple and multi-layered. The action of "plant" can refer to planting a seedling, or planting an idea. "Renew" can refer to renewing oneself physically, mentally or spiritually.
		The aim of the artist is to highlight actions in which daily life can be seen as worthwhile. Although the actions are small, when compounded, they are substantial. As Pete Seeger put it, "many little efforts" build our future. </p>

	<?php
	if(isset($_SESSION['currUser'])){
		echo "
		<FORM METHOD=POST ACTION='addToCart.php'>
			<INPUT TYPE='hidden' name='bookNum' value='3'>
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
        <td><a href="../LargerImagePages/plant.html"><img src="../Books/Peaceful_Activist/Zabinski_Plant.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/compost.html"><img src="../Books/Peaceful_Activist/Zabinski_Compost.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/breathe.html"><img src="../Books/Peaceful_Activist/Zabinski_Breathe.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Plant"</p></td>
        <td><p id="captions">"Compost"</p></td>
        <td><p id="captions">"Breathe"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/bike.html"><img src="../Books/Peaceful_Activist/Zabinski_Bike.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/connect.html"><img src="../Books/Peaceful_Activist/Zabinski_Connect.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/golocal.html"><img src="../Books/Peaceful_Activist/Zabinski_GoLocal.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Bike"</p></td>
        <td><p id="captions">"Connect"</p></td>
        <td><p id="captions">"Go Local"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/sing.html"><img src="../Books/Peaceful_Activist/Zabinski_Sing.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/imagine.html"><img src="../Books/Peaceful_Activist/Zabinski_Imagine.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/read.html"><img src="../Books/Peaceful_Activist/Zabinski_Read.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Sing"</p></td>
        <td><p id="captions">"Imagine"</p></td>
        <td><p id="captions">"Read"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/conserve.html"><img src="../Books/Peaceful_Activist/Zabinski_Conserve.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/cooperate.html"><img src="../Books/Peaceful_Activist/Zabinski_Cooperate.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/laugh.html"><img src="../Books/Peaceful_Activist/Zabinski_Laugh.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Conserve"</p></td>
        <td><p id="captions">"Cooperate</p></td>
        <td><p id="captions">"Laugh"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/pickle.html"><img src="../Books/Peaceful_Activist/Zabinski_Pickle.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/repair.html"><img src="../Books/Peaceful_Activist/Zabinski_Repair.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/givethanks.html"><img src="../Books/Peaceful_Activist/Zabinski_GiveThanks.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Pickle"</p></td>
        <td><p id="captions">"Repair"</p></td>
        <td><p id="captions">"Give Thanks"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/communicate.html"><img src="../Books/Peaceful_Activist/Zabinski_Communicate.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/create.html"><img src="../Books/Peaceful_Activist/Zabinski_Create.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/share.html"><img src="../Books/Peaceful_Activist/Zabinski_Share.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Communicate"</p></td>
        <td><p id="captions">"Create"</p></td>
        <td><p id="captions">"Share"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/makefriends.html"><img src="../Books/Peaceful_Activist/Zabinski_MakeFriends.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/volunteer.html"><img src="../Books/Peaceful_Activist/Zabinski_Volunteer.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/renew.html"><img src="../Books/Peaceful_Activist/Zabinski_Renew.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Make Friends"</p></td>
        <td><p id="captions">"Volunteer"</p></td>
        <td><p id="captions">"Renew"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/celebrate.html"><img src="../Books/Peaceful_Activist/Zabinski_Celebrate.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/recycle.html"><img src="../Books/Peaceful_Activist/Zabinski_Recycle.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/doyourbest.html"><img src="../Books/Peaceful_Activist/Zabinski_DoYourBest.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Celebrate"</p></td>
        <td><p id="captions">"Recycle"</p></td>
        <td><p id="captions">"Do Your Best"</p></td>
      </tr>
      <tr>
        <td><a href="../LargerImagePages/listen.html"><img src="../Books/Peaceful_Activist/Zabinski_Listen.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/hanglaundry.html"><img src="../Books/Peaceful_Activist/Zabinski_HangLaundry.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
        <td><a href="../LargerImagePages/illuminate.html"><img src="../Books/Peaceful_Activist/Zabinski_Illuminate.jpg" height="350" width="270" id="Peaceful_Activist"></a></td>
      </tr>
      <tr>
        <td><p id="captions">"Listen"</p></td>
        <td><p id="captions">"Hang Laundry"</p></td>
        <td><p id="captions">"Illuminate"</p></td>
      </tr>
    </table> 
</body>
</html>