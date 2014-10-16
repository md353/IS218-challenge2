<?php

//created an interface page to structure files
namespace interfaces;

interface readcsv{
	public function column_headingCK($handle, $colmn_titles);
}

interface html_table{

		public static function prTable($records, $titles);
		public static function makeLink($url, $inc, $col);
		public static function prTitle($colleges);

	}

interface File{
		public static function openFile($file);
		public static function closeFile($handle);
	}

?>