<?php
session_start();
if($_SESSION['LOGGED_IN'] == true)
{ if ($_SESSION['type'] == "staff") {
	header('Location: JobListingsStaff.php');
	}
} ?>
<!DOCTYPE html>
<?php
//references the cookie and makes sure they are logged in
$staffflag = false;
session_start();
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
$conn = new PDO($dsn, $dbuser, $dbpass, $options);
$result = $conn->prepare("SELECT jobID, jobDesc, jobTitle, uploadDate, url
 FROM JobListing WHERE jobID > 2" );
$result->execute();
$listings = $result->fetch(PDO::FETCH_NUM);
$jdes = $listings[1];
$jt = $listings[2];
$listing = "Title: $jt Description: $jdes"


?>

<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="JobListing.css" rel="stylesheet" type="text/css">

    <title>Job listings</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    
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
            <li><a href="https://windoge.com">About</a></li>
            <li><a href="StudentSupport.html">Contact</a></li>
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

<div class="Online"><p2> Job Listings </p2></div>
</form>

<div class ="please">
<div class="list1">
<ul>
<li><a href="student.php">Home</a></li>
<li><a href="studentprofile.php">Profile</a></li>
<li><a href="Applications.php">Applications</a></li>
<li><a href="JobListings.php">Job Listings</a></li>
<li><a href="StudentSupport.php">Support</a></li>
</ul>
</div>
</div>

<div class="list2">
	<ul>
		<li><p3><strong>CV SUPPORT</strong></p3></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StudentSupport.php">Contact SEC</a></li>
	</ul>
</div>

<div class="box1">
<div style="height:390px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 


<div class="list3">
	<ul>
		<strong><li>Below is a list of all Job Listings</li></strong>
		<!-- <?php foreach ($listings as $value){
    echo "$value <br>"; 
    }?> -->

    <li><!--<?php echo $listing; ?>--><?php 
class jobListing{
  public $jobID;
  public $jobDesc;
  public $jobTitle;
  public $creator;
} 

  $statement = $conn->prepare("SELECT jobID, jobDesc, jobTitle, creator FROM JobListing");
$statement->execute();
$jobListings = array();
while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    $jobListing           = new JobListing();
    $jobListing->jobID       = $row['jobID'];
    $jobListing->jobsDesc    = $row['jobDesc'];
    $jobListing->jobTitle    = $row['jobTitle'];
    $jobListing->creator  = $row['creator'];
    $jobListings[] = $jobListing;
    echo "Job Title: " . $row['jobTitle'];
    echo '<br>';
    echo "Job Description: " . $row['jobDesc'];
    echo '<br>';?>
    <a href="http://rhysdoesthings.co.uk">More details</a>
<?php
    echo '<br>';
    echo '<br>';
} ?>


	</ul>
</div>

</div>
</div>
</div>
</body>

</html>