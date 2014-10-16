<?php

//************************************************************************************//
//	Created a class create HTML links based off the table created					  //
//************************************************************************************//
	
namespace challenge2\html_stuff;

		class prLinks {
		
		// This function has a constructor to print links when a new object is created and array passed	
		public static function prints($records, $titles){
			
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
			// Is called to print table after links are pressed on like in cars.php to make
			// links using setLinks
			\challenge2\html_stuff\html_table::setLinks('record',$i, $record['INSTNM']);

		}
		}
		} 
		}
?>