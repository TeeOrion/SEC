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
    <link href="JobListing.css" rel="stylesheet" type="text/css">

    <title>Current Applications</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Online SEC CV System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="staff.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="StaffSupport.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 




<div id="wrapper">
<button class="lo" onClick="location.href='logout.php'">
    Log Out 
</button> 

<form class="t1">
<div class= "image">
 <img src="kingston.jpg" height="190" width="190"  >
</div>

<div class="Online"><p2>Applications</p2></div>
</form>

<div class ="please">
<div class="list1">
<ul>
<li><a href="staff.php">Home</a></li>
<li><a href="ViewStudents.php">View Student</a></li>
<li><a href="ApplicationsStaff.php">Applications</a></li>
<li><a href="JobListingsStaff.php">Job Listings</a></li>
<li><a href="StaffSupport.php">IT Support</a></li>
<li><a href="StaffViewCV.php">View CVs</a></li>
</ul>
</div>
</div>

<div class="list2">
	<ul>
		<li><p3><strong>CONTACT :</strong></p3></li>
		<li><a href="inbox.php">Contact Student</a></li>
		<li><a href="StaffSupport.php">Contact IT Support</a></li>
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
</div>
</body>

</html>