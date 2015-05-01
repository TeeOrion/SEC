<?php
session_start();

$dsn = 'localhost';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = "sonnyti4_cvdb";
// Connect PDO
$conn = new mysqli($dsn, $dbuser, $dbpass, $options);
//Get Entered Filename and UserID
$cvID = $_POST['cvname'];
$pers = $_POST['cvpers'];
$qua = $_POST['cvqua'];
$exp = $_POST['cvexp'];
$hob = $_POST['cvhob'];
$name = $_SESSION['name'];
$userID = $_SESSION['kuid'];
$appID = "";
$pnum = $_SESSION['telephoneNumber'];
$email = $_SESSION['email'];
$address = $_SESSION['address']; 
//$result = $conn->prepare("INSERT INTO file (id, name, url) VALUES ($id, $filename, $url);");
//$result->execute();
$sql = "INSERT INTO CV (cvID, userID, applicationID, name, pnum, email, address, pstatement, qualifications, experience, hobbies) VALUES ('$cvID','$userID', '', '$name', '$pnum', '$email', '$address', '$pers', '$qua', '$exp', '$hob')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
    echo "New CV created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<!DOCTYPE html>
<html>
<a href="student.php">Return to home</a>
</html>