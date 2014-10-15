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
	namespace challenge2;
	
	class html_table{
		
		// This function prints table from csv file by heading and data
		public static function prTable($records,$titles){
			if(isset($_GET['record'])){
				echo '<table border="1">';
				$i = 0;
				foreach($records[$_GET['record']] as $key => $value){
					echo'<tr><th>' . $titles[$i]['varTitle'] . '</th>';
					echo '<td>' . $value . '</td></tr>';
					$i++;
				}
				echo'</table>';
			}
		}
		public static function setLinks($url, $inc, $col){

			echo '<a href="?'.$url.'=' .$inc. '">' . $col. '</a>';
					echo'</p>';
			
		}
		public static function prTitle($colleges){
			if(empty($_GET)){
				echo 'By:Mike De La Cruz';
				echo '<h1 id="title">Record of Colleges</h1>';
			}
			else{
				echo '<h1 id="title">'. $colleges . '</h1>';
			}
		}
	}



?>