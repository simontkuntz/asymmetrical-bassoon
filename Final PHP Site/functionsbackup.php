<link rel="stylesheet" href="../CSS/style.css" type="text/css">

<?php

	function tableCreation(){
		$monthNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
		$monthString = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		$monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
		
							//above we are declaring each array and their contents
	  
	echo '<table id="centerContent">';	  
	echo '<tr>														<!--creating basic table structure in HTML and making titles for each column of table-->
		  <td>Month (Number)</td>
		  <td>Month (Text)</td>
		  <td>Number of Days in Month</td>
		  </tr>';													
		  
		  
		  //Below we are using a loop to echo table elements, specifically elements in our arrays. 
		  //The position in the array is incremented using a variable "i". sizeof finds the length of our monthNum array.
		  
	for($i=0; $i<sizeof($monthNum); $i++) {	
		if(($i%2)==0){											//using the modulous operator to test if row is even or odd, then set the background color of that row based on mod result.
			echo '<tr bgcolor="#4cd96f">';				
		}		
		else{ 
			echo '<tr bgcolor="#bfe0c7">';
		}
		echo '<td>'.$monthNum[$i].'</td>';
		echo '<td>'.$monthString[$i].'</td>';
		echo '<td>'.$monthDays[$i].'</td>';
		echo '</tr>';
	}
	echo '</table>';
	}
	

	
	
	function textFileReaderWriter(){
		
		//*************************************************************************************************************
		//READING COMPONENT OF FUNCTION
		//*************************************************************************************************************
		
		
		$handle = fopen("cis475_io.txt","r") or die ("Unable to open file!");		//r+ used for telling compiler to this file is to be used for read
		$fread = fread($handle, 1024);
		fclose($handle);						//closing file handle now because we already have the information we need from it stored in variable "fread" ($fread)
		$record = explode("\n", $fread);				//making a array to hold each line of the file. "\n" tells compiler that we want to separate by line breaks
		
		
		$multidimensionalarray = array(
		array(1,"Month Name",1),					//format is the month number, the month name, the amount of days in month. Made 12 arrays within the large array (multidimensional)
		array(1,"Month Name",1),					//placed temporary values into the arrays, to be overwritten later with values from our file that is being read
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		array(1,"Month Name",1),
		);
		
		$i = 0;			//counting variable holding which line we are on in array
		
		foreach ($record as $string){					//for each line ($record variable), place values delimited by commas in array (we are calling $csv)
			$csv = explode(",", $string);				//$csv is each comma separated value on each line ($record) "," telling to distinguish by commas
			
			$multidimensionalarray[$i][0] = $csv[0];
			$multidimensionalarray[$i][1] = $csv[1];				//storing each comma separated value into a position in our multidimensionalarray
			$multidimensionalarray[$i][2] = $csv[2];
			$i++;
		}
		
		echo '<table id="centerContent">';	  
		echo '<tr>														<!--creating basic table structure in HTML and making titles for each column of table-->
		  <td>Month (Number)</td>
		  <td>Month (Text)</td>
		  <td>Number of Days in Month</td>
		  </tr>';	

		for($x=0; $x<sizeof($multidimensionalarray); $x++) {	
		if(($x%2)==0){											//using the modulous operator to test if row is even or odd, then set the background color of that row based on mod result.
			echo '<tr bgcolor="#4cd96f">';				
		}		
		else{ 
			echo '<tr bgcolor="#bfe0c7">';
		}
		echo '<td>'.$multidimensionalarray[$x][0].'</td>';
		echo '<td>'.$multidimensionalarray[$x][1].'</td>';
		echo '<td>'.$multidimensionalarray[$x][2].'</td>';
		echo '</tr>';
		}
		echo '</table>';
		
		//*************************************************************************************************************
		//WRITING COMPONENT OF FUNCTION
		//*************************************************************************************************************
		
		$myFile = fopen("cis475_ior.txt","w") or die ("Unable to create file!");		//w+ used for telling compiler to this file is to be used for write
		$data = null;																	//creating a variable with no initial value to use for pushing data to text file (cis475_ior.txt)
		for($counter=0; $counter<sizeof($multidimensionalarray); $counter++){			
			$data = $data . $multidimensionalarray[$counter][0] . ",";					//here we are appending more data from our array to the variable to later write to the new file
			$data = $data . $multidimensionalarray[$counter][1] . ",";					//we assign the current value of the data variable to data, along with the concatenation of new values and the
																						//comma after our first two values on every line. "\n" used for new line after each line of data
			if($counter<(sizeof($multidimensionalarray)-1)){
				$data = $data . $multidimensionalarray[$counter][2] . "\n";					
			}																			//here I made a simple check if we are writing last line of our array to file, do not concatenate an additional
			else{																		//new line ("\n")
				$data = $data . $multidimensionalarray[$counter][2];
			}
		}																				
		fwrite($myFile, $data);					//writing data variable to new file
		fclose($myFile);						//closing file handle now because we already have the information we need from it stored in variable "fread" ($fread)
	}
 
	function connectToMySQL(){
		$servername = "localhost";
		$username = "kuntzst01";
		$password = "B01028162";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $username);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully<br>";

		$sql = "
		
		CREATE TABLE monthsTable11 (
		monthsID INT, monthName CHAR(10),
		monthDays INT(2)
		)";

		if (mysqli_query($conn, $sql)) {
			echo "Table monthsTable created successfully<br>";
	
			$handle = fopen("cis475_io.txt","r") or die ("Unable to open file!");		//r+ used for telling compiler to this file is to be used for read
			$fread = fread($handle, 1024);
			fclose($handle);						//closing file handle now because we already have the information we need from it stored in variable "fread" ($fread)
			$record = explode("\n", $fread);				//making a array to hold each line of the file. "\n" tells compiler that we want to separate by line breaks
			
			$multidimensionalarray = array(
			array(1,"Month Name",1),					//format is the month number, the month name, the amount of days in month. Made 12 arrays within the large array (multidimensional)
			array(1,"Month Name",1),					//placed temporary values into the arrays, to be overwritten later with values from our file that is being read
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			array(1,"Month Name",1),
			);
			
			$i = 0;			//counting variable holding which line we are on in array
			
			foreach ($record as $string){					//for each line ($record variable), place values delimited by commas in array (we are calling $csv)
				$csv = explode(",", $string);				//$csv is each comma separated value on each line ($record) "," telling to distinguish by commas
				
				$multidimensionalarray[$i][0] = $csv[0];
				$multidimensionalarray[$i][1] = $csv[1];				//storing each comma separated value into a position in our multidimensionalarray
				$multidimensionalarray[$i][2] = $csv[2];
				$i++;
			}
			
			for($x=0; $x<sizeof($multidimensionalarray); $x++) {	
			$sqlContent = "
			INSERT INTO monthsTable11(monthsID, monthName, monthDays)
			VALUES('
			";
			$sqlContent = $sqlContent . $multidimensionalarray[$x][0] . "', '" . $multidimensionalarray[$x][1] . "', '" . $multidimensionalarray[$x][2] . "')";
			//echo $multidimensionalarray[$x][0];
				
			}
			
			if (mysqli_query($conn, $sqlContent)) {
				echo "Values inserted into table successfully<br>";
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
		}
		
		else {
			echo "Error creating table: " . mysqli_error($conn);
		}
	
	
	}
	
	function tablePopulation(){
		$servername = "localhost";
		$username = "kuntzst01";
		$password = "B01028162";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $username);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully<br>";
		
		$sqlContent = "
		SELECT monthsID, monthName, monthDays from monthsTable7;
		";
		
		$query = mysql_query($sqlContent, $db);
		$row = mysql_fetch_array($query);
		$monthsID = $row['monthsID'];
		$monthName = $row['monthName'];
		$monthDays = $row['monthDays'];
		
		if (mysqli_query($conn, $sqlContent)) {
				echo "Records pulled from table successfully<br>";
			} 
		else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		echo $monthsID;
		
	}
 
 
?>