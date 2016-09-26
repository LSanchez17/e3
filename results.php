<?php
 spl_autoload_register('Loading');
  //Takes the names of the strings that come after the new word
  function Loading($classname)
  {
    $path = 'class/';
    include  $path . $classname . '.class.php';
  };	


 $NewRUser = new RegisteredUser('newuser', 'regular');
  
 //Creating a new instace of a registered user, by making it an object
 //This encapsulates all of this user's data in an easy to maneuver object
 //This object is then independent from another registered user
 //Could expand this into saving data to relational database
 $NewRUser->first_name = $_POST["firstname"];
 $NewRUser->last_name = $_POST["lastname"];
 $NewRUser->email_address = $_POST["email"];

 if (is_a($NewRUser, 'RegisteredUser'))
 {
   $passed = "New Registered User!";
 }
?>

<!DOCTYPE html>
<head>
  <title>E3 CIT RESULTS</title>
<head>
<body>
<div="result_set">
  <?php
    echo "<p>" . $passed . "</p><br>";
    echo "<p>User's First Name: <b>" . $NewRUser->first_name . "</b></p>";
    echo "<p>User's Last Name: <b>" . $NewRUser->last_name . "</b></p>";
    echo "<p>User's Email: <b>" . $NewRUser->email_address . "</b></p><br>";

  ?>

</div>

</body>
</html>