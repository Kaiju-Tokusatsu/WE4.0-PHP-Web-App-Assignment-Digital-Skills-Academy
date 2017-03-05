<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://php.net/manual/en/function.session-destroy.php
***********************************************************/
//include required files
include'../config.php';
//Start session and check if access allowed
session_start();
if(!isset($_SESSION['logged_in'])){
    header('Location: login.php');
}
//Destroy session and redirect to the login page
session_destroy();
header('Location: login.php');