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
            <li><a href="" style="color:red;">books</a></li>
            <li><a href="cards.html" >cards</a></li>
            <li><a href="commercial.html" >commercial</a></li>
            <li><a href="http://planetlovedesigns.com/" >printed clothing</a></li>
        </ul>
    </div>
    <div id="grid">
		 <a href="aroundtheseasons.php"><img src="../Books/Around_the_seasons/aroundtheseasons.jpg" height="210" width="163" id="Aroundtheseasons"></a>
		 <a href="topsy_turvy.php"><img src="../Books/Topsy_Turvy/Topsy-turvy_cover.jpg" height="210" width="163" id="Topsy_Turvy"></a>
		 <a href="peacefulactivist.php"><img src="../Books/Peaceful_Activist/Zabinski_Cover.jpg" height="210" width="142" id="Peaceful_Activist"></a>
		 <a href="good_wish.php"><img src="../Books/Good_Wish/GoodWishCover.jpg" height="210" width="160" id="Good_Wish"></a>
		 <a href="roadtobabciashouse.php"><img src="../Books/The_Road_to_Babcia's_House/The_Road_to_Babcias_House_cover.jpg" height="210" width="249" id="The_Road_to_Babcias_House"></a>
		 <a href="caterpillars.php"><img src="../Books/Caterpillars_In_Love/1.CaterpillarCoverCrop_1.jpg" height="210" width="171" id="Caterpillars_In_Love"></a>	
	</div>
</body>
</html>