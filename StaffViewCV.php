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
    <link href="StudentApplication.css" rel="stylesheet" type="text/css">

    <title>My CV's</title>

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
            <li class="active"><a href="student.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="StudentSupport.php">Contact</a></li>
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

<div class="Online"><p2> Student CVs</p2></div>
</form>

<div class ="please">
<div class="list1">
<ul>
<li><a href="staff.php">Home</a></li>
<li><a href="ViewStudents.php">View Students</a></li>
<li><a href="ApplicationsStaff.php">Applications</a></li>
<li><a href="JobListingsStaff.php">Job Listings</a></li>
<li><a href="StaffSupport.php">IT Support</a></li>
<li><a href="StaffViewCV.php">View CVs</a></li>
</ul>
</div>
</div>

<div class="list2">
	<ul>
		<li><p3><strong>Help Links</strong></p3></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StaffSupport.php">Contact IT Support</a></li>
	</ul>
</div>

<div class="box1"> 


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
  public $hobbies;
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

<div class="heading">
<p><strong></strong></p>
</div>
</div>
</div>
</body>

</html>