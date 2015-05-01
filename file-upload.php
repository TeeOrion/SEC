<?php
session_start();

$dsn = 'localhost';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = "sonnyti4_cvdb";
// Connect PDO
$conn = new mysqli($dsn, $dbuser, $dbpass, $options);
//Get Entered Filename and UserID
$id = $_POST['jid'];
$title = $_POST['jtitle'];
$desc = $_POST['jdesc'];
$creator = $_SESSION['kuid'];
//Later this will dynamically build a url

//$result = $conn->prepare("INSERT INTO file (id, name, url) VALUES ($id, $filename, $url);");
//$result->execute();
$sql = "INSERT INTO JobListing (jobID, jobDesc, jobTitle, creator) VALUES ('$id','$desc', '$title', '$creator')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
    echo "New Job spec record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:StaffNewJob.php");

?>