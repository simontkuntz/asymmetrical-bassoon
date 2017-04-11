<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tanya Zabinski | illustrator/author</title>
	<h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
	<link rel="stylesheet" type="text/css" href="CSS/homepage_style.css">
		<!-- <script type = "text/javascript" src="JS/main.js"></script> -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script> -->
	</link>
</head>
<body>
<div id="coverpage_images">
     <img src="Content/HomePage/Road_header.jpg" width="" height="375" id="coverpage_image1">
     <img src="Content/HomePage/Picking-a-Pumpkin_2.jpg" width="" height="375" id="coverpage_image1">
     <img src="Content/HomePage/Gratitude_header.jpg" width="" height="375" id="coverpage_image1">
     <img src="Content/HomePage/Babcia_header.jpg" width="" height="375" id="coverpage_image1">
</div>
	<div id="MenuContainer">
		<ul id="navigation">
            <li><a href="" style="color:red;" >home</a></li>
            <li><a href="Content/Subpages/books.php" >portfolio</a></li>
            <li><a href="Content/Subpages/contact.php" >bio&contact</a></li>
			<?php
			if(!isset($_SESSION['currUser'])){
				echo "<li><a href='Content/Subpages/login.php'>login</a></li>";
				echo "<li><a href='Content/Subpages/createaccount_login.php'>register</a></li>";
			}
			else if(isset($_SESSION['currUser'])){
				echo "<li><a href='Content/Subpages/account.php'>account</a></li>";
				echo "<li><a href='Content/Subpages/logout.php'>logout</a></li>";
			}
			else{
			}
			?>
			<li><a href="Content/Subpages/site_files.php" >site files</a></li>
        </ul>
	</div>

<script type="text/javascript">
	
$(function(){
    $('#coverpage_images img:gt(0)').hide();
    setInterval(function(){
      $('#coverpage_images :first-child').fadeOut()
	  $('#coverpage_images :first-child').hide()
         .next('img').fadeIn("slow")
         .end().appendTo('#coverpage_images');}, 
      6000);
});

</script>
</body>
</html>