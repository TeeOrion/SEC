<?php 
session_start();
if($_SESSION['LOGGED_IN']){
	if($_SESSION['type']=="student"){
		header("Location:joblistings.php");
	}
}
else{ 
	header("Location:index.php"); 
}

?>

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

    <title>Add New Job Listing</title>

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
	<h1>Add New Job Listing</h1></div>
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
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StaffSupport.php">Contact IT</a></li>
	</ul>
</div>


<input type="hidden" name="userID" value=<?php echo $_SESSION['kuid']; ?>>
<div class="box1">
<div class="question">
<p><strong> Please insert new job spec</strong></p>
</div>
<form method="post" action="file-upload.php" name="fileupload" enctype="multipart/form-data">
 Job Reference Number: <br />
 <input type="text" name="jid"><br />
 Job Title: <br />
  <input type="text" name="jtitle"><br />
 Job Description: <br />
 <textarea name ="jdesc" cols="50" rows="3">
  Please type a brief description
  </textarea>
  <br />
  <input type="submit" name="submit" value="Upload">
</form>
</div>
</form>
</body>

</html>