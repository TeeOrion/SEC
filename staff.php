<?php
session_start();
if( ! $_SESSION['LOGGED_IN'] )
{ header('Location: index.php');}
else{ if ($_SESSION['type'] == "student") {
	header('Location: student.php');
}}

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
    <link href="staff.css" rel="stylesheet" type="text/css">

    <title>SEC Staff</title>

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
            <li class="staff.php"><a href="#">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="StaffSupport.php">Support</a></li>
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
	<p2>Staff Home </p2></div>
</form>

<div class="please">
<div class="list1">
<ul>
<li><a href="staff.php">Home</a></li>
<li><a href="ViewStudents.php">View Students</a></li>
<li><a href="ApplicationsStaff.php">Applications</a></li>
<li><a href="JobListings.php">Job Listings</a></li>
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


<div class="list3">
	<ul>
		<li><a href="inbox.php">View Inbox</a></li>
		<li><a href="StaffNewJob.php">Add New Job Spec</a></li>
		<li><a href="RemoveJob.php">Remove Job Spec</a></li>
   	<li><a href="UploadCVStaff.php">Upload CV Template</a></li>
   	<li><a href="sendfeedback.php">Send Feedback</a></li>
	</ul>
</div>

<div class="heading">
<p><b>Welcome <?php echo $_SESSION['name']; ?><b></p>
</div>
</div>
</div>
</body>

</html>