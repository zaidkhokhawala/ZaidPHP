<?php
/*
Sessioon is super global variable which sore value IN SERVER
Sessions are wonderful ways to pass variables.
All you need to do is start a session by 
session_start();Then all the variables you store within a 
$_SESSION, you can access it 
form anywhere in the server

Default time :  24 minutes (1440 seconds), 

*/

session_start();
$_SESSION['user']="Raj Nagar";  // CREATE

//echo $_SESSION['user'];       // USE

// delete session

//unset($_SESSION['user']); // single session delete
//session_destroy();   // all session delete


?>