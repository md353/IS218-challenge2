<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1		Index.php								 		  |
//====================================================================|

 /*
require 'File.php';
require 'readcsv.php';
require 'html_table.php';
require 'prLinks.php';
*/
require 'autoloader.php';

spl_autoload_register('autoloader::autoload');

//-----------------------------------------------------------------------------------------------
// The file is being set to a variable that then passes the class and function to open the file  
//-----------------------------------------------------------------------------------------------
$csvFile = 'csvFiles/hd2013.csv';
$file = \folders\fileAdmin\File::openFile($csvFile);

$csvFile2 = 'csvFiles/hd2013xl.csv';
$file2 = \folders\fileAdmin\File::openFile($csvFile2);
//-------------------------------------------------------------------------------------
// The file is then loaded up through calling a function and placing it into an array
//-------------------------------------------------------------------------------------
$handle = new \folders\fileAdmin\readcsv();
$handle2 = new \folders\fileAdmin\readcsv();

$records = $handle->column_headingCK($file, TRUE);
$titles = $handle2->column_headingCK($file2,TRUE);

$colleges = $records[$_GET['record']]['INSTNM'];

//....................................................................
// Links are then printed when object is instantiated by the "new"
//.....................................................................

\folders\html_stuff\html_table::prTitle($colleges);
	
new \folders\html_stuff\prLinks($records, $titles);
\folders\html_stuff\prLinks::prints($records, $titles);
\folders\html_stuff\html_table::prTable($records, $titles);
 
?>