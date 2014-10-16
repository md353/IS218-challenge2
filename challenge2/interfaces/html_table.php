<?php
namespace interfaces;


interface html_table{

		public static function prTable($records, $titles);
		public static function makeLink($url, $inc, $col);
		public static function prTitle($colleges);

	}
?>