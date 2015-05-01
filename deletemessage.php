<?php
session_start();

$dsn = 'localhost';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = "sonnyti4_cvdb";
// Connect PDO
$conn = new mysqli($dsn, $dbuser, $dbpass, $options);
//Get Entered Filename and UserID
$msgid = $_POST['msgid'];





$sql = "DELETE FROM Messages WHERE msgid = '$msgid' LIMIT 1";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
    echo "Message Deleted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<!DOCTYPE html>
<html>
<a href="index.php">Return to homepage</a>
</html>