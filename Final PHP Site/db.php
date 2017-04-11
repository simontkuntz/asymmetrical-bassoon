<?php
include 'vars.php';

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
	echo "<meta name='keywords' content='".$metaTags."'>";
	echo "<link rel='stylesheet' type='text/css' href='../CSS/style.css'>";				//creating a basic html web page structure by using php echo
	echo "<title>".$title."</title>";											//using dot operator here, above and below for concatenation of variable in included vars.php file and strings
echo "</head>";
echo "<body>";
  echo "<h1>".$name."</h1>
		<h2>Create and Populate a MySQL Table</h2>
		<div id='centerContent'>
			<form action='functioncall.php' method='get'>
				<input type='submit' value='Import Months'>
			</form> 
		</div>
<br><br>
	<hr>
		<ol>
			<li><a href='download.php?file=db.php' download>Download db.php</a></li>
			<li><a href='download.php?file=vars.php' download>Download vars.php</a></li>
			<li><a href='download.php?file=index.php' download>Download index.php</a></li>
		</ol>
	<hr>";
echo "</body>";
echo "</html>";
?>