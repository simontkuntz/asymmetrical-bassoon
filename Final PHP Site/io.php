<?php
include 'vars.php';
include 'functions.php';

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
	echo "<meta name='keywords' content='".$metaTags."'>";
	echo "<link rel='stylesheet' type='text/css' href='../CSS/style.css'>";				//creating a basic html web page structure by using php echo
	echo "<title>".$title."</title>";											//using dot operator here, above and below for concatenation of variable in included vars.php file and strings
echo "</head>";
echo "<body>";
	echo "<h1>".$name."</h1>";
	echo "<h2>"."PHP Web Page That Reads and Writes a Text File"."</h2>";
	echo "<p id='centerContent'>How I Solved This Problem:</p>";
	echo "<br><br>";
	
echo "<div id='paragraph'>";
	echo "<p id='paragraph'>
	For the file reading component of this assignment, I used fread to read from the cis475_io.txt and sorted data by line and by commas, per each line. 
	I then used a multidimensional array to hold file data that was read.
	After reading and storing file data into the array, I placed the data into a table by referencing each line of the file and each comma separated value on that line.
	</p>";
	echo "<br><br>";
	echo "<p id='paragraph'>
	For the file writing component of this assignment, I created a variable to store data to write to a new file (cis475_ior.txt). I then used a for loop to append new data from my previous array holding
	data from the file read, to the variable. I used concatenation to do this and updated my variable as I walked through the loop. Lastly, I pushed the variable data to the newly created file. 
	</p>";
echo "</div>";
echo "<br><br>";
textFileReaderWriter();
echo "<br><br>";
echo "<hr>
		<ol>
			<li><a href='download.php?file=io.php' download>Download io.php</a></li>
			<li><a href='download.php?file=vars.php' download>Download vars.php</a></li>
			<li><a href='download.php?file=cis475_ior.txt' download>Download cis475_ior.txt</a></li>
			<li><a href='download.php?file=index.php' download>Download index.php</a></li>
		</ol>
	<hr>";
echo "</body>";
echo "</html>";
?>