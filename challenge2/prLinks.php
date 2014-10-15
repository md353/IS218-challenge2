<?php

//************************************************************************************//
//	Created a class create HTML links based off the table created					  //
//************************************************************************************//
	namespace challenge2;

		class prLinks {
		
		// This function has a constructor to print links when a new object is created and array passed	
		public function __construct($records, $titles){
			
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
			// Is called to print table after links are pressed on like in cars.php
			\challenge2::setLinks('record',$i, $record['INSTNM']);

		}
		}
		} 
		}
?>