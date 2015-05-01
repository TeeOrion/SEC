<?php
session_start();

$dsn = 'localhost';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = "sonnyti4_cvdb";
// Connect PDO
$conn = new mysqli($dsn, $dbuser, $dbpass, $options);
//Get Entered Filename and UserID
$reciever = $_POST['reciever'];
$sender = $_SESSION['kuid'];
$message = $_POST['message'];




$sql = "INSERT INTO Messages (sender, reciever, message, readflag, msgid) VALUES ('$sender','$reciever', '$message', 'false', ' ')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
    echo "Message Sent!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>