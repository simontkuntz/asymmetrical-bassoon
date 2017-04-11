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
	
//****************************************************************************************************************************************************************
	
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
		
//****************************************************************************************************************************************************************
	
	function connectToMySQL(){					//this function connects to MySQL and also creates the table
		$servername = "localhost";
		$username = "kuntzst01";
		$password = "B01028162";
																						// Creating a connection to MySQL
		$conn = mysqli_connect($servername, $username, $password, $username);
																				// Checking connection and outputting the results
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully<br>";
																				//creating the months table with necessary fields, storing what we want to write (command) in MySQL in variable
		$sql = "
		CREATE TABLE monthsTable (														
		monthsID INT(2), monthName CHAR(10),
		monthDays INT(2)
		)";

		if (mysqli_query($conn, "DROP TABLE IF EXISTS monthsTable;")) {			//Drops table if exists but also checks if we can write commands to MySQL successfully. If the write is successful, 
			mysqli_query($conn, $sql);											//we can now make our table creation command and output a successful creation message
			echo "Table monthsTable created successfully<br>";
			insertToTable();
		}
		
		else {
			echo "Error creating table: " . mysqli_error($conn);				//throwing error message if table creation is not successful
		}
		
		$conn->close();				//closing our open connection
		
	}
		
//****************************************************************************************************************************************************************
	
	function insertToTable(){							//this function inserts data from array into our newly created table "monthsTable"
			$servername = "localhost";
			$username = "kuntzst01";
			$password = "B01028162";
			$conn = mysqli_connect($servername, $username, $password, $username);		// Creating a connection to MySQL
	
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
			
			$insertionSuccess = 0;					//creating an integer that can track if all values were inserted into the table successfully.
			
			for($x=0; $x<sizeof($multidimensionalarray); $x++) {				//reusing our for loop from before and inserting data into the table 
				$sqlContent = "
				INSERT INTO monthsTable(monthsID, monthName, monthDays)							
				VALUES(
				";
				$sqlContent = $sqlContent . $multidimensionalarray[$x][0] . ", '" . $multidimensionalarray[$x][1] . "', " . $multidimensionalarray[$x][2] . ")";
																					//concatenating our array values with necessary MySQL insert syntax
				if (mysqli_query($conn, $sqlContent)) {
					$insertionSuccess++;
				} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);			//else, unsuccessful and display a MySQL error message
				}
			}
			
			if($insertionSuccess==12){
				echo "All values have been successfully inserted to table";
			}
			
			else{
				echo "One or more values have not been successfully inserted to table";
			}
			
			$conn->close();				//closing our open connection
	}
	
//****************************************************************************************************************************************************************
	
	function tablePopulation(){
		
		$servername = "localhost";
		$username = "kuntzst01";				//storing our information in variables
		$password = "B01028162";

		// Creating a connection to MySQL
		$conn = mysqli_connect($servername, $username, $password, $username);

		// Checking connection status and outputting the results
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sqlContent = "
		SELECT * from monthsTable;
		";										//here we store our command to select all data (fields) from the monthsTable
		
		$result = $conn->query($sqlContent);			//store result (or data that was requested from table)
		$oddOrEven = 0;									//variable to check whether row is odd or even
		
		if ($result->num_rows > 0) {								//essentailly continuing execution of if statement if there are more rows of data to read
			echo "<table id='centerContent'>";						//html to start table
			while($row = $result->fetch_assoc()) {					//while loop where $row is array of content fetched from associative array in table in MySQL 
				$oddOrEven++;										//($row is essentially an array storing columns or (field names) as seen below when we reference each )
				if(($oddOrEven%2)==0){								//using the modulous operator to test if row is even or odd, then set the background color of that row based on mod result.
					echo "<tr bgcolor='#4cd96f'>";					
				}		
				else{ 
					echo "<tr bgcolor='#bfe0c7'>";
				}
				echo "<td>" . $row["monthsID"]. ", " . $row["monthName"]. ", " . $row["monthDays"] . "</td>";		//place each record frome each field of table in table element 
				echo "</tr>";																						//end table row, end of loop, restart loop while there is more data in table
			}
			echo "</table>";
		} 
		else {
			echo "No results returned";
		}
		
		$conn->close();				//closing our open connection
	}

	function createContactsTable(){
		$servername = "localhost";
		$username = "kuntzst01";	
		$password = "B01028162";
		$conn = mysqli_connect($servername, $username, $password, $username);		// Creating a connection to MySQL	
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "
		CREATE TABLE contactsTable (														
		contactID INT NOT NULL, contactFirstName nvarchar(15) NOT NULL,
		contactLastName nvarchar(30) NOT NULL, contactAddress nvarchar(30) NOT NULL,
		contactCity nvarchar(30) NOT NULL, contactState nvarchar(2) NOT NULL,
		contactZipcode nvarchar(9) NOT NULL, contactPhone nvarchar(10) NOT NULL, 
		contactEmail nvarchar(60) PRIMARY KEY, contactPassword nvarchar(30) NOT NULL, 
		contactDate DATE NOT NULL
		)";
		if (mysqli_query($conn, "DROP TABLE IF EXISTS contactsTable;")) {			
			mysqli_query($conn, $sql);											
		}
		else {
			echo "Error creating table: " . mysqli_error($conn);				//throwing error message if table creation is not successful
		}
		$conn->close();		
	}
	
?>





