<?php 
session_start();
if($_SESSION['LOGGED_IN']){
  if($_SESSION['type']=="student"){
    header("Location:Applications.php");
  }
}
else{ 
  header("Location:index.php"); 
}

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

    <title>Current Student Applications</title>

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

<div class="Tittle">
	<h1>Current Applications </h1></div>
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
<div class="list2">
	<ul>
		<li><p3><strong>Quick Links:</strong></p3></li>
		<li><a href="sendmail.php">Contact Student</a></li>
		<li><a href="StaffSupport.php">Contact IT </a></li>
	</ul>
</div>

<div class="box1">
<div style="height:390px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 


<div class="list3">
	<?php

  class Application{
  public $applicationID;
  public $jobID;
  public $userID;
  public $jobDesc;
} 

  $statement = $conn->prepare("SELECT Application.applicationID, Application.jobID, Application.userID, JobListing.jobDesc FROM Application, JobListing WHERE Application.jobID = JobListing.jobID");
$statement->execute();
$Application = array();
while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    $Application           = new Application();
    $Application->applicationID       = $row['applicationID'];
    $Application->jobID    = $row['Application.jobID'];
    $Application->userID    = $row['Application.userID'];
    $Application->jobDesc  = $row['JobListing.jobDesc'];
    $Applications[] = $Application;
    echo "Application ID: " . $row['applicationID'];
    echo '<br>';
    echo "Job ID: " . $row['jobID'];
    echo '<br>';
    echo "Student ID: " . $row['userID'];
    echo '<br>';
    echo "Job Description: " . $row['jobDesc'];
    echo '<br>';
    echo '<br>';
} ?>
</div>
<div class="heading">
<p><strong></strong></p>
</div>
</div>
</form>
</body>

</html>