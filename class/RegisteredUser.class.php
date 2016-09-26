<?php
 	
class RegisteredUser extends user 
//Brings in the same methods, variables, and properties of the class

 {
 	
    public function __construct($id,$level)
    //This takes an ID, and a level, regular, admin	
    {
 	parent::__construct($level);
	//calls the constructor of the parent, with the level
 	$this->user_type = '1';
 	$this->user_id = $id;
    }
 	
    public function __set($name,$value) 
    {
 	$this->$name = $value;
    }
 	
    public function __get($name) 
    {
 	return $this->$name;
    }
 	
    public function __destruct() 
    {
 		
    }
 	
 	
 	
}
?> 