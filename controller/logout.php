<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location:http://localhost/PROJEK/Projek_Kel3/login.php");
exit;
?>
