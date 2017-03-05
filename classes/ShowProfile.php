<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: n/a
***********************************************************/

/*
*Class to create an object of the FetchMembers class, call the getMember() method 
* with a parameter supplied by the $_POST method from the show_profile form and return the data
*/

class ShowProfile{
    //Create class variables
    private $fetch = '';
    private $result = '';
    //Method to add structure to data before returning to the user
    public function memberProfile($member){
        //CreateFetchMembers object
        $this->fetch =new FetchMembers();
        //Call getMember method
        $this->result =$this->fetch-> getMember($member);
        //Add structure to the data returned from the getMember method to be returned to the user
        $this->result = '<td>'.$this->result['id'].'</td><td>'.$this->result['firstname'].'</td><td>'.$this->result['lastname'].'</td><td>'.$this->result['email'].'</td>';
        return $this->result;
    }
    
    
    
}