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
    <link href="Studentprofilecss.css" rel="stylesheet" type="text/css">

    <title>SEC Student</title>

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
            <li class="active"><a href="student.html">Home</a></li>
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


<form class ="t1">
<div class= "image">
 <img src="kingston.jpg" height="190" width="190"  >
</div>
<div class="Online">
	<p2> All Student Profiles</p2>
</div>

 </form>
 <div class= "please" >
<div class= "list1">
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
</div>
</body>

</html>