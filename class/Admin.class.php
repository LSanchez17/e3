<?php
	
class Admin extends user 
//Brings in the same methods, variables, and properties of the class
{
    protected $a;
    protected $b;
    protected $answer;
	
    public function __construct($id,$level)
    //This takes an ID, and a level, regular, admin	
    {
        parent::__construct($level);
	//calls the constructor of the parent, with the level
	$this->user_type = '2';
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

    public static function Mathematics($a,$b)
    {
       $answer = ($a * $b) * $a;
       return $answer;
    }
 
	
	
}
?>