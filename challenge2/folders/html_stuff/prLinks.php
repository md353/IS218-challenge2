<?php

//************************************************************************************//
//	Created a class create HTML links based off the table created					  //
//************************************************************************************//
	
namespace folders\html_stuff;

		class prLinks {
		
		// This function has a constructor to print links when a new object is created and array passed	
		public static function prints($records, $titles){
			
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
			// Is called to print table after links are pressed on like in cars.php to make
			// links using setLinks
			\folders\html_stuff\html_table::setLinks('record',$i, $record['INSTNM']);

		}
		}
		} 
		}
?>