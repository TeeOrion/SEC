<?php
session_start();

$dsn = 'localhost';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = "sonnyti4_cvdb";
// Connect PDO
$conn = new mysqli($dsn, $dbuser, $dbpass, $options);
//Get Entered Filename and UserID
$cvID = $_POST['cvid'];
$userID = $_SESSION['kuid'];
$feedback = $_POST['feedback'];




$sql = "INSERT INTO CVFeedback (cvID, userID, feedback, fbID) VALUES ('$cvID', '$message', '$feedback', '')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
    echo "Feedback Sent!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>