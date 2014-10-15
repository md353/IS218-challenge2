<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1														  |
//====================================================================|


//***************************************************************
//	Created a class for reading the CSV File & setting headings
//***************************************************************	
	class readcsv extends File{
		
		// This function is looking for headings 
		public function column_headingCK($handle, $colmn_heads){
			
			while(($row = fgetcsv($handle, ",")) !== FALSE){
					if($colmn_heads){
						$column_heading = $row;
						$colmn_heads = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
				return $records;
		}
	}


?>