<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1														  |
//====================================================================|


//***************************************************************
//	Created a class for reading the CSV File & setting headings
//***************************************************************	
	class readcsv {
		
		// This function is looking for headings 
		public function column_headingCK($handle, $colmn_titles){
			
			while(($row = fgetcsv($handle, ",")) !== FALSE){
					if($colmn_titles){
						$column_heading = $row;
						$colmn_titles = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
				File::closeFile($handle);
				return $records;
		}
	}
	/*
	class readcsv2 extends File{
		//...............................................................................
		// This static function matches the headings from database Look alike headings to
		// specific headings that are much more understandable. is used to replace column heading
		//...............................................................................
		public static function gtHeads($handle, $colmn_heads){
			$records = [];
			while(($row = fgetcsv($handle)) !== FALSE){
					
					if($colmn_heads){
						$column_heading = $row;
						$colmn_heads = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[$record['varname']] = $record['varTitle'];
					}	
					
				}
				
				return $records;
		}
	}
*/

?>