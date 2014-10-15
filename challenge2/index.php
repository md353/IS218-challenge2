<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1		Index.php								 				  |
//====================================================================|
//require 'File.php';
//require 'readcsv.php';
//require 'html_table.php';
//require 'prLinks.php';
require 'autoloader.php';

spl_autoload_register('autoloader::autoload');

//-----------------------------------------------------------------------------------------------
// The file is being set to a variable that then passes the class and function to open the file  
//-----------------------------------------------------------------------------------------------
$csvFile = 'challenge2/hd2013.csv';
$file = \challenge2::openFile($csvFile);

$csvFile2 = 'challenge2/hd2013xl.csv';
$file2 = \challenge2::openFile($csvFile2);
//-------------------------------------------------------------------------------------
// The file is then loaded up through calling a function and placing it into an array
//-------------------------------------------------------------------------------------
$handle = new \challenge2\readcsv();
$handle2 = new \challenge2\readcsv();

$records = $handle->column_headingCK($file, TRUE);
$titles = $handle->column_headingCK($file2,TRUE);


 if(isset($_GET['record'])){
		$colleges = $records[$_GET['record']]['INSTNM'];
				}


//....................................................................
// Links are then printed when object is instantiated by the "new"
//.....................................................................
if(isset($_GET['record'])){
	echo 'By:Mike De La Cruz';
}
	else{
    echo '<title> College </title>';
	}
	\challenge2::prTitle($colleges);
	
new \challenge2\prLinks($records, $titles);

\challenge2::prTable($records, $titles);
 
?>




