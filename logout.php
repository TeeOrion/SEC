<?php 
//initiate session thats currently in progress
session_start();
//destroy the array
session_destroy();
//send them back to the login page
header("Location: index.php");
?>