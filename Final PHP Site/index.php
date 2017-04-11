<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="keywords" content="HTML,CSS,JavaScript,Simon,CIS,Programming">
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Simon's CIS Home Page</title>
  </head>
  <body>
	<h1>Simon Kuntz</h1>
	<h2>My CIS 475 Home Page</h2>
	
	<div id="DateTime">
		
	</div>
	<p>Hi my name is Simon. I am a senior at Buffalo State College. Prior to my enrollment here, I studied at SUNY Fredonia and SUNY University at Buffalo. 
	I have always studied Computer Information Systems. Contingent upon my graduation in the spring, I aim to start a full time job in the industry working 
	largely on the infrastructure side of computing. As I have taken many CIS courses between each college I attended and each has different naming conventions, 
	I will not attempt to list all of them. Languages I know however, include SQL, VB.net, C++, Java, Javascript, HTML, CSS.
	</p>
	<img src="../IMG_0013.png" height="200" width="200" alt="My Photo"> 
	<br><br><br>
	<hr>
	<br>
	<ol id="assignments">
	<?php orderedList(); ?>
	</ol>
	<script>
		var currentdate = new Date(); 
		var datetime = "Current Date and Time (Military): " + (currentdate.getMonth()+1) + "/"
                + currentdate.getDate()  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
				
		document.getElementById("DateTime").innerHTML = datetime;
		
		/*
		Code references for date and time:
		http://www.w3schools.com/js/js_output.asp
		http://stackoverflow.com/questions/10211145/getting-current-date-and-time-in-javascript
		*/
		
	</script>
	
	 <?php
		function orderedList(){
			$assignments = ['Set Up Your PHP/MySQL Server','Create Your First PHP Web Page','Create a PHP Web Page That Uses a Loop, a Function, and Arrays','Create a PHP Web Page That Reads and Writes a Text File','Create and Populate a MySQL Table','Create a PHP Table Page From a MySQL Table','Create a PHP Form Page That Writes to a MySQL Table','Create a Final PHP Web Site'];
		    $references = ["myPhotos.html","Assignment2.php","lfa.php","io.php","db.php","php_mysql_table.php","php_mysql_form.php","finalsite/index.php"];
		    
			for($i=0; $i<sizeof($assignments); $i++){
				echo '<li><a href="'.$references[$i].'">'.$assignments[$i].'</a></li>';
			}
		}
	 ?> 
  </body>
</html>





<!--


HTML Skeleton


 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
  
  </body>
</html>


-->