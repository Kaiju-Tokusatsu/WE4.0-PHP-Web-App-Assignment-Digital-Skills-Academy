<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://www.w3schools.com/php/php_sessions.asp
***********************************************************/

ini_set('display_errors', 1); 
error_reporting(E_ALL);

//include required files
include 'config.php';
include 'autoload.php';
//Start session and check if access allowed
//session_start();
//if(!isset($_SESSION['access']) || $_SESSION['access'] != 1){
//    header('Location: views/login.php'); 
//}

//include templates and views
include DOC_ROOT.'templates/header.php';
include DOC_ROOT.'views/main.php';
include DOC_ROOT.'templates/footer.php';



