<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://php.net/manual/en/function.filter-var.php
***********************************************************/

/*
*Class to validate data from login form
*/

class CleanData {
	//Method to sanitise username
	public function cleanString($data){
		$data  = filter_var($data,FILTER_SANITIZE_STRING);//Strip tags
		return $data;
	}
	
    //Method to sanitise password
	public function cleanPass($data){
		$data  = filter_var($data,FILTER_SANITIZE_STRING);//Strip tags
        return $data;
        /*This function can also contain regex to impell structure to the password
        if (preg_match('/[A-Z]+[a-z]+[0-9]+/', $data))
		{
			return $data;
		}else{
			
			return false;
		}
        */
	}
}