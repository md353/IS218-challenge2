<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1														  |
//====================================================================|

//**********************************************************************************//
//	Created a class to create & print a table from 									//
//  the information extracted off the CSVfile										//
//**********************************************************************************//
	class html_table{
		
		// This function prints table from csv file by heading and data
		public static function prTable($records,$uName){
			if(isset($_GET[$uName])){
				// callng class and function to open file & create table to be used later
				$csvFile2 = File::openFile('hd2013xl.csv');
				$heads = readcsv2::gtHeads($csvFile2,TRUE);
				echo '<table border="1">';
				foreach($records[$_GET[$uName]] as $key => $value){
					echo '<tr><th>' . $heads[$key] . '</th>';
					echo '<td>' . $value . '</td></tr>';
				}
				echo '</table>';
			}
		}
	}
//************************************************************************************//
//	Created a class create HTML links based off the table created					  //
//************************************************************************************//
	class prLinks extends html_table{
		
		// This function has a constructor to print links when a new object is created and array passed	
		public function __construct($records){
			
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					echo '<a href="?record=' .$i. '">' . $record['INSTNM'] . '</a>';
					echo'</p>';
				}
			}
			// Is called to print table after links are pressed on like in cars.php
			html_table::prTable($records, 'record');
		}
	}

?>