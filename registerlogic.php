<?php
session_start();

$dsn = 'localhost';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = "sonnyti4_cvdb";
// Connect PDO
$conn = new mysqli($dsn, $dbuser, $dbpass, $options);
//Get Entered Filename and UserID
$name = $_POST['nm'];
$userID = $_POST['kuid'];
$password = $_POST['password'];
$address = $_POST['add'];
$email = $_POST['email'];
$telno = $_POST['telno'];
$dob = $_POST['dob'];
$type = "student";

$sql = "INSERT INTO User (userID, password, name, address, email, telephoneNumber, dob, type) VALUES ('$userID', '$password', '$name', '$address', '$email', '$telno', '$dob', '$type')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
    echo "New User Registered!";
} else {
    echo $name;
    echo $_POST['nm'];
    echo $password;
    echo $_POST['password'];
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<!DOCTYPE html>
<html>
<a href="index.php">Return to homepage</a>
</html>