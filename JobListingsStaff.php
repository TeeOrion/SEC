<?php
session_start();
if($_SESSION['LOGGED_IN'] == true)
{ if ($_SESSION['type'] == "student") {
	header('Location: JobListings.php');
	}
} ?>
<!DOCTYPE html>
<?php
//references the cookie and makes sure they are logged in
$staffflag = false;
session_start();
if( ! $_SESSION['LOGGED_IN'] )
{ header('Location: login.php');}

if($_SESSION['LOGGED_IN'] && $_SESSION['type'] == "student")
{
    header("Location:studentprofile.php");
  }

else{ 
  header("Location:index.php"); 
}


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
    <link href="main.css" rel="stylesheet" type="text/css">

    <title>Job Listings</title>

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
	<h1>Current Job Listings </h1></div>
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
<div style="height:415px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 


<div class="list3">
	<ul>
		<strong><li>Below is a List of all Job Listings available to students</li></strong>
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
</form>
</body>

</html>