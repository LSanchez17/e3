<?php
 

  spl_autoload_register('Loading');
  //Takes the names of the strings that come after the new word
  function Loading($classname)
  {
    $path = 'class/';
    include  $path . $classname . '.class.php';
  };	

 
/*
 include_once('class/user.class.php');
 include_once('class/registered.class.php');
 include_once('class/admin.class.php');
*/ 
	
 $RegisteredU = new RegisteredUser('John Doe','Regular User');
 $AdminU = new Admin('Jane Doe','Administrator');
 
 $RegisteredU->first_name = 'John';
 $RegisteredU->last_name = 'Doe';
 $RegisteredU->email_address = 'John@Doe.net';
 
 $AdminU->first_name = 'Jane';
 $AdminU->last_name = 'Doe';
 $AdminU->email_address = 'Jane@Doe.net';
 
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <title>E3 CIT</title>
 </head>
 <body>
 <?php
 echo "User Level: ". $RegisteredU->user_level . "<br/>";
 echo "Registered User ID: ". $RegisteredU->user_id ."<br/>";
 echo "Registered User Type: ". $RegisteredU->user_type ."<br/>";
 echo "Registered First Name: ". $RegisteredU->first_name ."<br/>";
 echo "Registered Last Name: ". $RegisteredU->last_name ."<br/>";
 echo "Registered Email: ". $RegisteredU->email_address ."<br/><hr/>";
 
 echo "User Level: ". $AdminU->user_level . "<br/>";
 echo "Admin User ID: ". $AdminU->user_id ."<br/>";
 echo "Admin User Type: ". $AdminU->user_type ."<br/>";
 echo "Admin First Name: ". $AdminU->first_name ."<br/>";
 echo "Admin Last Name: ". $AdminU->last_name ."<br/>";
 echo "Admin Email: ". $AdminU->email_address ."<br/>";
 
 ?>	

<a href="registration.php">Cick Here For Registration!</a>
 	
 </body>
 </html>