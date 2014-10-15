<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1				fileAdmin.php										  |
//====================================================================|

//********************************************//
//	Created a class for opening the CSV File  //
//********************************************//	
	class File {
		
		//Function for opening a csv file for reading.	
		public static function openFile($file){
			$handle = fopen($file, "r");
			return $handle;
		}
		
		// closing the file 
		public static function closeFile($handle){
			fclose($handle);
		}
	}

?>