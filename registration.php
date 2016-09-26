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

?>


<!DOCTYPE html>
<html>
<head>
  <title>CIT Registration</title>
</head>
<body>

<?php 
    //$caller;
    $result = 0;
    $result = Admin::Mathematics(5,10);
    echo ("<p> Top Secret Math: " .  $result . "</p>");
 
?> 

<form action="results.php" method="POST">
First Name: <input type="text" name="firstname">
<br>
<br>
Last Name: <input type="text" name="lastname">
<br>
<br>
Email: <input type="text" name="email">
<br>
<br>
<input type="submit">
</form>





</body>
</html>