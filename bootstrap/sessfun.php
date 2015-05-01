<?php
//references the cookie and makes sure they are logged in
$staffflag = false;
session_start();
if( ! $_SESSION['LOGGED_IN'] )
{ header('Location: login.php');}

//Evaluates the type of user 
if($_SESSION['type'] == staff){
$staffflag = true;  
}

$dsn = 'mysql:host=localhost;dbname=sonnyti4_cvdb';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
// Connect PDO
$conn = new PDO($dsn, $dbuser, $dbpass, $options);
$result = $conn->prepare("SELECT jobID, jobDesc, jobTitle, uploadDate, url
 FROM JobListing " );
$result->execute();
$listings = $result->fetch(PDO::FETCH_NUM);
$listings = $result->fetch(PDO::FETCH_NUM);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
?>
