<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://php.net/manual/en/pdo.connections.php
***********************************************************/

ini_set('display_errors', 1); 
error_reporting(E_ALL);

/*
*Class to connect to a database.
*/
Class Database{
	
	public function __construct(){	
	}
	//Method to connect to a database
	public function connect(){
		try {
            //Make PDO connection
			$conn = new PDO("mysql:host=".D_HOST.";dbname=".D_NAME."",D_USER,D_PASS); 
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			error_reporting(E_ALL ^ E_NOTICE);
		}
			catch(PDOException $e)//catch pdo exception
		{
		echo "Error: " . $e->getMessage();
        die();
		}
		return $conn;
	}
}