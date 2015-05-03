<?php
session_start();
if($_SESSION['LOGGED_IN'] == true)
{ if ($_SESSION['type'] == "student") {
	header('Location: StudentSupport.php');
	}
}
else{
	header('Location: index.php');
} ?> 
<!DOCTYPE html>


<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="main.css" rel="stylesheet" type="text/css">

    <title>Get technical support</title>

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
	<h1>Support</h1></div>
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
		<li><p3><strong>CONTACT :</strong></p3></li>
		<li><a href="inbox.php">Contact Student</a></li>
		<li><a href="StaffSupport.php">Contact IT support</a></li>
	</ul>
</div>

<div class="box1"> 
<form class="MainBox">
</form>

<div class="list3">
	<ul>
		<strong><li>Contact Site Maintenance</li></strong>
		<li>support@kingston.ac.uk</li><br>
		<strong><li>Contact Student Support:</li></strong>
		<li>studentsupport@kingston.ac.uk</li><br>
		
	</ul>
</div>
<div class="heading">
<p><strong>Contact Details</strong></p>
</div>
</div>
</body>

</html>