
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

  
  </head>

  <body>




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