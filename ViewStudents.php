<!DOCTYPE html>
<?php session_start();
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
$conn = new PDO($dsn, $dbuser, $dbpass, $options); ?>

<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="main.css" rel="stylesheet" type="text/css">

    <title>View Students</title>
	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>
<button class="lo" onClick="location.href='logout.php'">
    Log Out 
</button> 
<form class ="IndexLogoTittle">
<div class= "KingstonLogo">
  <a href="staff.php"><img src="kingston.jpg" height="190" width="190"  >
</div>

<div class="StaffTittle">
	<h1>View Students </h1></div>
</form>


 <div class="mainList">
 <ul id="menu">
<li><a href="ViewStudents.php">Students</a>
<ul>
<li><a href="ViewStudents.php"> View Students </a></li>
<li><a href="ViewStudentsAfterSearch.php"> Search Students </a></li>
<li><a href="ApplicationsStaff.php">View Student Application</a></li>
<li><a href="sendfeedback.php"> Add Feedback </a></li>
</ul>
</li>

<li><a href="JobListings.php">Job Listings</a>
<ul> 
<li><a href="StaffNewJob.php"> Create Job Listing </a></li>
<li><a href="RemoveJob.php"> Remove Job Listing </a></li>
</ul>
</li>

<li><a href="StaffSupport.php">Support</a>
<ul>
<li><a href="inbox.php"> Inbox </a></li>
<li><a href="sendmail.php"> Send Message </a></li>
<li><a href="mailsender.php"> Sent Messages </a></li>
<li><a href="StaffSupport.php"> Support </a></li>
</ul>
</li>

<li><a href="StaffViewCV.php" > CV </a>
<ul>
<li><a href="UploadCVStaff.php"> Upload CV Template </a></li>
<li><a href="viewallcvs.php"> View CVs  </a></li>
</ul>
</li>
</div>
<form class="MainBox">
</form>
<div class="list2">
	<ul>
		<li><p3><strong>CONTACT :</strong></p3></li>
		<li><a href="inbox.php">Contact Student</a></li>
		<li><a href="StaffSupport.php">Contact IT Support</a></li>
	</ul>
</div>

<div class="box1"> 
<div style="height:415px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 

 <!-- <div class= "image1">
 <img src="profile.jpg" height="140" width="140"  >
</div> -->
<div class= "profilelist">
<ul>
<?php
class User{
  public $name;
  public $userID;
  public $address;
  public $telephoneNumber;
  public $dob;
} 

  $statement = $conn->prepare("SELECT name, userID, address, telephoneNumber, email, dob FROM User WHERE type  = 'student'");
$statement->execute();
$User = array();
while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    $User           = new User();
    $User->name       = $row['name'];
    $User->userID    = $row['userID'];
    $User->address    = $row['address'];
    $User->telephoneNumber  = $row['telephoneNumber'];
    $User->email = $row['email'];
    $User->dob  = $row['dob'];
    $Users[] = $User;
    echo "Name: " . $row['name'];
    echo '<br>';
    echo "K Number: " . $row['userID'];
    echo '<br>';
    echo "Address: " . $row['address'];
    echo '<br>';
    echo "Telephone Number: " . $row['telephoneNumber'];
    echo '<br>';
    echo "E-Mail Address " . $row['email'];
    echo '<br>';
    echo "Date of Birth: " . $row['dob'];
    echo '<br>';
    echo '<br>';
} ?>
</ul>
</div>
</div>
</body>

</html>