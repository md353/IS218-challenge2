<?php

//created an interface page to structure files
namespace interfaces;

interface File{
		public static function openFile($file);
		public static function closeFile($handle);
	}
?>