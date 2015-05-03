<?php
session_start();
if( ! $_SESSION['LOGGED_IN'] )
{ header('Location: index.php');}
else{ if ($_SESSION['type'] == "student") {
  header('Location: studentcv.php');
}}

?>
<!DOCTYPE html>
<?php
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

    <title>View All CVs</title>
	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
<button class="lo" onClick="location.href='logout.php'">
    Log Out 
</button> 
<form class ="IndexLogoTittle">
<div class= "KingstonLogo">
  <a href="staff.php"><img src="kingston.jpg" height="190" width="190"  >
</div>

<div class="Tittle">
	<h1>View All CVs </h1></div>
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

<div class="list2">
	<ul>
		<li><p3><strong>Quick Links:</strong></p3></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StaffSupport.php">Contact IT</a></li>
	</ul>
</div>

<form class="MainBox">
<div class="box1"><div style="height:415px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 

<div class="list3">
	  <?php

  class CV{
  public $cvID;
  public $name;
  public $pnum;
  public $email;
  public $address;
  public $pstatement;
  public $qualifications;
  public $experience;
  public $hobbies
} 
$kuid = $_SESSION['kuid'];
  $statement = $conn->prepare("SELECT * FROM CV");
$statement->execute();
$CV = array();
while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    $CV           = new CV();
    $CV->cvID       = $row['cvID'];
    $CV->name    = $row['name'];
    $CV->pnum    = $row['pnum'];
    $CV->email  = $row['email'];
    $CV->address    = $row['address'];
    $CV->pstatement  = $row['pstatement'];
    $CV->qualifications    = $row['qualifications'];
    $CV->experience  = $row['experience'];
    $CVs[] = $CV;
    echo "CV ID: " . $row['cvID'];
    echo '<br>';
    echo "Name: " . $row['name'];
    echo '<br>';
    echo "Number: " . $row['pnum'];
    echo '<br>';
    echo "Email Address: " . $row['email'];
    echo '<br>';
    echo "Address: " . $row['address'];
    echo '<br>';
    echo "Personal Statement: " . $row['pstatement'];
    echo '<br>';
    echo "Qualifications: " . $row['qualifications'];
    echo '<br>';
    echo "Experience: " . $row['experience'];
    echo '<br>';
    echo '<br>';
} ?>
</div>
</form>

<div class="heading">
<p><strong></strong></p>
</div>
</div>
</body>

</html>