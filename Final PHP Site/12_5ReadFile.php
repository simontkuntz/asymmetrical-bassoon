<html>
 <head>
 <title>Listing 12.10 Reading a file with fread()</title>
 </head>
 <body>
 <?php
 $filename = "cis475_io.txt";
 $fp = fopen($filename, "r") or die("Couldn't open $filename");
 while (!feof($fp)) {
   $chunk = fread($fp, 1024);
   echo("$chunk<br>\n");
 }
 ?>
 </body>
</html> 