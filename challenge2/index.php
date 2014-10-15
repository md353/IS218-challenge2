<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 1		Index.php								 				  |
//====================================================================|
require 'File.php';
require 'readcsv.php';
require 'html_table.php';
require 'prLinks.php';
?>
<html>
	
	
	
</html>


<?php

//-----------------------------------------------------------------------------------------------
// The file is being set to a variable that then passes the class and function to open the file  
//-----------------------------------------------------------------------------------------------
$csvFile = 'hd2013.csv';
$csvFile2 = 'hd2013xl.csv';


$file = File::openFile($csvFile);
$file2 = File::openFile($csvFile2);
//-------------------------------------------------------------------------------------
// The file is then loaded up through calling a function and placing it into an array
//-------------------------------------------------------------------------------------
$handle = new readcsv();
$handle2 = new readcsv();

$records = $handle->column_headingCK($file, TRUE);
$titles = $handle->column_headingCK($file2,TRUE);


 if(isset($_GET['record'])){
		$colleges = $records[$_GET['record']]['INSTNM'];
				}


//....................................................................
// Links are then printed when object is instantiated by the "new"
//.....................................................................
if(isset($_GET['record'])){
	//echo $colleges;
}
	else{
    echo '<title> College </title>';
	}
	html_table::printTitle($colleges);
	
new prLinks($records, $titles);
html_table::prTable($records, $titles);
 
?>




