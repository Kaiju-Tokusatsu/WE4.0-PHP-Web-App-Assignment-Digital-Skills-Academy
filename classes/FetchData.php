<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://php.net/manual/en/pdo.prepared-statements.php
***********************************************************/

/*
*Class to connect to a datbase and return data to the LoginCheck object 
*/
class FetchData{
    //Create class variables
	private $conn = '';
	private $get_pass = '';
	private $get_id = '';
	private $get_user = '';
	private $stm = '';
	private $result = '';
    private $username = '';
    
	public function __construct(){
        //Create Database object
		$this->conn = new Database();
	}
    
	//Method to get a password from the users table
	public function getPass($user){
        //Assign method parameter to username
		$this->username = $user;
       
		try {
        //Call connect method from Database class to connect to database
		$this->get_pass = $this->conn->connect();
        //Prepare the select statement    
		$this->stm = $this->get_pass->prepare("SELECT user_pass FROM users WHERE username = '".$this->username."'");
        //Execute the statement    
		$this->stm->execute();
        //Assign the associative array from the database to an array 'result' to return to the user (LoginCheck)  
		$this->result = $this->stm->fetch(PDO::FETCH_ASSOC);
		}
			catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
        die();        
		}
		return $this->result; 
	}
    
	//Method to get an id from the users table
	public function getId($user){	
		$this->username = $user;
		
		try {
		$this->get_id = $this->conn->connect();
		$this->stm = $this->get_id->prepare("SELECT user_id FROM users WHERE username = '".$this->username."'");
		$this->stm->execute();
		$this->result = $this->stm->fetch(PDO::FETCH_ASSOC);
		}
			catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
		}
		return $this->result;
	}
    
	//Method to get a user from the users table
	public function getUser($user){	
		$this->username = $user;
		
		try {
		$this->get_user = $this->conn->connect();
		$this->stm = $this->get_user->prepare("SELECT username FROM users WHERE   username = '".$this->username."'");
		$this->stm->execute();
		$this->result = $this->stm->fetch(PDO::FETCH_ASSOC);
		}
			catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
		}
		return $this->result;
	}
    
    //Method to get the access level from the users table
    public function getAccess($user){	
		$this->username = $user;
		
		try {
		$this->get_user = $this->conn->connect();
		$this->stm = $this->get_user->prepare("SELECT access_level FROM users WHERE   username = '".$this->username."'");
		$this->stm->execute();
		$this->result = $this->stm->fetch(PDO::FETCH_ASSOC);
		}
			catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
		}
		return $this->result;
	}
    
}