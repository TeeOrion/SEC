<?php 
session_start();
var_dump($_SESSION['LOGGED_IN']);
echo $_SESSION['LOGGED_IN'];

if (!$_SESSION['LOGGED_IN']) {
	echo "NOT LOGGED IN";
}
else{ echo "LOGGED IN";}

 ?>
