<?php

/*
*Class to connect to database and return requested data to user (ShowMembers & main.php)
*/

class FetchMembers{
    //Create class variables
	private $conn = '';
    private $get_member = '';
	private $stm = '';
	private $result = '';
	public function __construct(){
        //Create Database object
		$this->conn = new Database();
	}
    //Method to return all the values from the members table for a specifified member
     public function getMember($member){	
		$this->username = $member;
		
		try {
        //Call connect method from Database class to connect to database
		$this->get_member = $this->conn->connect();
        //Prepare the select statement
		$this->stm = $this->get_member->prepare("SELECT * FROM members WHERE   username = '".$this->username."'");
        //Execute the statement    
		$this->stm->execute();
        //Assign the associative array from the database to an array 'result' to return to the user (ShowProfile)    
		$this->result = $this->stm->fetch(PDO::FETCH_ASSOC);
		}
			catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
		}
		return $this->result;
	}
    
    //Method to get a list of member usernames to display on the admin page
    public function getAllMembers(){
		try {
		$this->get_member = $this->conn->connect();
		$this->stm = $this->get_member->prepare("SELECT username FROM members");
		$this->stm->execute();
		$this->result = $this->stm->fetchAll(PDO::FETCH_ASSOC);
		}
			catch(PDOException $e)
		{
		echo "Error: " . $e->getMessage();
		}
		return $this->result;
	}	
}