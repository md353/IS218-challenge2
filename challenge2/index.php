<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1		Index.php								 				  |
//====================================================================|

include('fileAdmin.php');
include('processFile.php');
include('html.php');


//-----------------------------------------------------------------------------------------------
// The file is being set to a variable that then passes the class and function to open the file  
//-----------------------------------------------------------------------------------------------
$csvFile = 'hd2013.csv';
$file = File::openFile($csvFile);
//-------------------------------------------------------------------------------------
// The file is then loaded up through calling a function and placing it into an array
//-------------------------------------------------------------------------------------
$handle = new readcsv();
$records = $handle->column_headingCK($file, TRUE);
//....................................................................
// Links are then printed when object is instantiated by the "new"
//.....................................................................
new prLinks($records);

?>