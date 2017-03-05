<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://php.net/manual/en/reserved.variables.session.php
***********************************************************/

/*
*Class to receive input from the login form and check it against data from the 
*database,
*if the data 'matches' the user is directed to the admin page if not the user is 
*redirected back to the login page. An 'error' get variable will be passed back to 
*the login page also.
*/
//Start session and check if access allowed

ini_set('display_errors', 1); 
error_reporting(E_ALL);


session_start();
if(!isset($_SESSION['access']) || $_SESSION['access'] != 1){
    header('location: ../views/login.php?error=yes'); 
}
//Include required files
include '../config.php';
include '../autoload.php';

/*
*Check input from login form and assign data to variables to use as parameters in the
*LoginCheck object constructor, 
*if any post values are empty return user to the login page.
*/

if(isset($_POST['submit'])){

    if($_POST['password'] == '' || $_POST['username'] == ''){
        header('location: ../views/login.php?error=yes'); 
    }else{
        $pass = $_POST['password'];
        $user = $_POST['username'];
    }
}
    
   
 //Create LoginCheck object   
    $login_check = new LoginCheck($user,$pass);
//Call logIn method
    $login = $login_check->logIn();


class LoginCheck{
    //Crreate class variables
    private $user= '';
    private $pass= '';
    private $get_pass = '';
    private $get_user = '';
    private $get_access = '';
    private $password = '';
    private $username = '';
    private $access = ''; 
    
    
    public function __construct($user_in,$pass_in){
        //Create CleanData object
        $this->clean = new CleanData();
        //Pass user variable through CleanString method
        $this->user = $this->clean->cleanString($user_in);
        //Pass pass variable through CleanPass method
        $this->pass = $this->clean->cleanPass($pass_in);
        //Create FetchData object
        $this->fetch = new FetchData();
        //Get password from database using the getPass method
        $this->get_pass = $this->fetch->getPass($this->user); 
        //Get username from database using the getUser method
        $this->get_user = $this->fetch->getUser($this->user);
        //Get access level from database using the getAccess method
        $this->get_access = $this->fetch->getAccess($this->user);
    }

    //Method to check data from a form against data from database, then evaluate and make a decision
    public function logIn(){
        //Assign data from database to local variables
        $this->password = $this->get_pass['user_pass'];
        $this->username = $this->get_user['username'];
        $this->access = $this->get_access['access_level'];
        //Check for matching password and username
        if($this->user == $this->username && $this->pass == $this->password){
            //Double check that values !empty
            if($this->username !='' && $this->password !=''){
                //If all ok assign session variables and redirect to admin page
                $_SESSION['access'] = $this->access;
                $_SESSION['username'] = $this->username; 
                header('Location: ../index.php'); 
            }else{
                //If errors found redirect back to login page, attach error get variable
                header('Location: ../views/login.php?error=yes'); 
            }
        }
    }
}

 



