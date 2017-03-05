<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://php.net/manual/en/language.oop5.autoload.php
***********************************************************/

/*Class autoload function searches specified folder (or sub folder) for classes 
*and includes the files automatically
*/
	
	function autoLoad($className) {
		$filename = DOC_ROOT."classes/" . $className . ".php";
		if (is_readable($filename)) {
			require $filename;
		}
	}
	
	// Call autoload functions
	
	spl_autoload_register("autoLoad");
	