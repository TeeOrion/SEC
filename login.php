<?php

// Session Setup
session_start();


$errmsg_arr = array();
$errflag = false;
$kuid = "";
$nm = "";
$add = "";
$pnm = "";
$dob = "";
$em = "";
$ty = "";
// PDO Config
$dsn = 'mysql:host=localhost;dbname=sonnyti4_cvdb';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
// Connect PDO
$conn = new PDO($dsn, $dbuser, $dbpass, $options);

// Get entered Username & Password
$username = $_POST['username'];
$password = $_POST['password'];
// die("$username and $password");
 
// Verify Non-Empty Username & Password
if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}
 
// Try and select the user data
$result = $conn->prepare("SELECT name, address, email, telephoneNumber, dob, type FROM User WHERE userID= :username AND password= :password");
// Using the submitted username and password
// Using 'bindParam' prevents SQL Injections because this is called a 'prepared statement'
$result->bindParam(':username', $username);
$result->bindParam(':password', $password);
// Actually check the database
$result->execute();
// Get the results from the check
$rows = $result->fetch(PDO::FETCH_NUM);
// If we've found someone with the matching username & password...
if($rows > 0) {
	// Set them as logged in
	$_SESSION['LOGGED_IN'] = true;
	//this may be redundant but is helping me with the logic
    $nm = $rows[0];
    $add = $rows[1];
    $em = $rows[2];
    $pnm = $rows[3];
    $dob = $rows[4];
    $kuid = $username;
    $ty = $rows[5];
    //Assign the array to the session cookie
    $_SESSION['name'] = $nm;
    $_SESSION['address'] = $add;
    $_SESSION['email'] = $em;
    $_SESSION['telephoneNumber'] = $pnm;
    $_SESSION['dob'] = $dob;
    $_SESSION['kuid'] = $kuid;
    $_SESSION['type'] = $ty;
	session_write_close();
		if($_SESSION['type'] == "student"){
		header("Location: student.php");
		exit(); 
	}
		else{
		header("Location: staff.php");
		exit(); 
	}

}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
