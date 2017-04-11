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
	<h2>Create a PHP Table Page From a MySQL Table</h2>
	<div id="centerContent">
	<?php
	include 'functions.php';
	include 'vars.php'; 
	echo "<p id='centerContent'>How I Solved This Problem:</p>";
	echo "<br>";	
	echo "<div id='paragraph'>";
	echo "<p id='paragraph'>
	For this portion of the assignment (reading data from MySQL monthsTable and outputting as a table below), I first established a connection to the MySQL server. I then 
	created a variable that I would store my MySQL command in to fetch all data from my monthsTable. After doing this, I created a variable named result, which I stored the data from my 
	monthsTable in after executing the MySQL command. I then used an if statement to check if the number of rows from the result set (my monthsTable) was greater than 0 (hadn't reached end of table yet).
	If this was the case, the if statement would continue to run. In the if statement I then used a while loop to put all data of each row from my monthsTable to table elements. Lastly I closed
	the open connection.
	</p>
	</div>
	<br>";
	tablePopulation();
	?>
	</div>
	<br>
	<hr>
	<ol>
		<li><a href='download.php?file=php_mysql_table.php' download>Download php_mysql_table.php</a></li>
		<li><a href='download.php?file=index.php' download>Download index.php</a></li>
		<li><a href='download.php?file=vars.php' download>Download vars.php</a></li>
	</ol>
  </body>
</html>
