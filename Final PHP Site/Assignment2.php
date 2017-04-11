<?php include 'vars.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta name="keywords" content="<?php echo $name ?>,<?php echo $editorSoftware ?>,<?php echo "Programming" ?>,<?php echo "CIS" ?>">
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title><?php echo $title ?></title>
  </head>
  <body>
	<h1><?php echo $pageName ?></h1>
	<p>Hi my name is Simon. I am a senior at Buffalo State College. Prior to my enrollment here, I studied at SUNY Fredonia and SUNY University at Buffalo. 
	I have always studied Computer Information Systems. Contingent upon my graduation in the spring, I aim to start a full time job in the industry working 
	largely on the infrastructure side of computing. As I have taken many CIS courses between each college I attended and each has different naming conventions, 
	I will not attempt to list all of them. Languages I know however, include SQL, VB.net, C++, Java, Javascript, HTML, CSS.
	</p>
	<hr>
	<ol>
		<li><a href="download.php?file=index.php" download>Download index.php</a></li>
		<li><a href='download.php?file=vars.php' download>vars.php</a></li>
	</ol>
	<hr>
		<?php echo "Today is " . date("Y/m/d") . "<br>"; ?>
		<?php echo "The time is " . date("h:i:sa"); ?>
		<!-- Resource used for information on date and time: http://www.w3schools.com/php/php_date.asp -->
  </body>
</html>