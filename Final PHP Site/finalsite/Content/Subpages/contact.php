<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tanya Zabinski | illustrator/author</title>
	<h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
	<link rel="stylesheet" type="text/css" href="../../CSS/biopage_style.css"></link>
</head>
<body>
    <div id="MenuContainer_books">
        <ul id="navigation_contact">
            <li><a href="../../index.php">home</a></li>
            <li><a href="books.php" >portfolio</a></li>
            <li><a href="contact.php" style='color:red;'>bio&contact</a></li>
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
	
    <?php
	if(isset($_SESSION['currUser'])){
	echo"
	<div id='contactUs'>
	<h3>Contact Us</h3>
	<hr width='70%'><br>
	<p>If you have a concern and would like to get in touch with us or just share your general thoughts / comments, you may do so here! We'd love to hear from you.</p>
	<form method='post' action='contactUs.php'>
		<textarea name='comment' rows='10' cols='80'></textarea>
		<br><br>
		<input type='submit' value='Submit'>
	</form> 
	</div>
	<br><hr width='70%'><br>
	";
	}
	
	else{
		echo"
		<div id='contactUs'>
		<h3>Contact Us</h3>
		<hr width='70%'>
		<p>Login to contact us!</p><br>
		</div>";
	}
	
	?>
	
	<div id="container">
        <div id="left_content">
            <img src="../Contact/index.jpg">
            <p style="width: 100px;">Tanya Zabinski Illustrator/Author zabinskizaba@aol.com <a href="http://planetlovedesigns.com/">Planetlovedesigns.com</a></p>
        </div>
        <div id="right_content">
            <img id="right_content_image1" src="../Contact/1.jpg">
            <figcaption id="figcap">My mom reading to us at an early age.</figcaption>
            <img id="right_content_image"src="../Contact/2.jpg">
            <figcaption id="figcap">Family camping! That's me holding the tent pole.</figcaption>
            <img id="right_content_image"src="../Contact/3.jpg">
            <figcaption id="figcap">A puppet performance for mom and dad.</figcaption>
            <img id="right_content_image"src="../Contact/4.jpg">
            <figcaption id="figcap">Music making in the Queen City Early Music Consort.</figcaption>
            <img id="right_content_image"src="../Contact/5.jpg">
            <figcaption id="figcap">A biking family!</figcaption>
            <img id="right_content_image"src="../Contact/6.jpg">
            <figcaption id="figcap_last">Friends!</figcaption>
        </div>
        <div id="center_content">
            <p>I was a tomboy. My nickname was Tinkerbell. I liked riding bikes, creek-slogging and playing flute. I liked reading, drawing and making puppet shows. I liked camping with my family. Those likes have never changed. My artwork and stories are rooted in the things I loved in childhood.
            </p>
            <p>
            In college, I studied art, design, music and philosophy. I went to Buffalo State College, to an exchange program in Japan for a year, and to Parsons School of Design. I L-O-V-E-D college.
            </p>
            <p>
            Even though I loved art, as I learned of poverty in the world, I felt that being an artist was selfish. How could I justify something so seemingly insignificant as making pictures, when other people can't eat or have an education? When I was 18, I saw "From Mao to Mozart," in which the famous violinist, Isaac Stern, visited China. It took place after Mao's reign of terror, when China first opened its doors to the west. Isaac Stern's passion for music was clearly visible, as was his ability to share it and coax it out in others. His music became a bridge for peace. By following his passion and sharing it, he was more useful to the world than if he squelched his passion for something more seemingly practical. That became my model. Later, I found this quote from Howard Thurman that encapsulates this view:  "Don't ask what the world needs. Ask what makes you come alive and go do it. Because what the world needs is people who have come alive."
            </p>
            <p>
            These are things that make me feel alive:  nature, the seasons, swinging on swings (or grapevines!), biking, hiking, kayaking, cross country skiing, gardening, watching birds and whales and clouds and my dog's ears flopping as he walks in front of me, my supportive family, free-thinking people with open hearts, belonging to vibrant communities like Waldorf and Suzuki, yoga, meditation, books, music, cultures, learning about people who buck norms and pioneer their lives being true to an inner wisdom, swimming in the stream of ever-flowing love and funneling those feelings into my life and my art and the world.
            </p>
            <p>
            Where have all these influences taken me? From working in a library, to
            waitressing, music-making, organic farm work, teaching, mural-making, becoming a 
            partner in a local artists boutique, meeting my husband, travelling in Mexico, getting 
            married, and having two sons. Today my husband and I have our own company 
            called <a href="http://planetlovedesigns.com/">Planet Love</a> in which we hand print clothing and sell it at art and music 
            festivals, shops and online. We live in the hills south of Buffalo with a furry, black, 
            thick-tailed, big-hearted dog.
            </p>
            <p>
            Thank you for a heart open to read this. May you gravitate to the things that make you feel alive!
            </p> 
        </div>
    </div>
</body>
</html>