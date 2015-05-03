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

    <title>Send Mail</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

<button class="lo" onClick="location.href='index.php'">
    Log Out 
</button> 

<form class ="IndexLogoTittle">
<div class= "KingstonLogo">
  <a href="staff.php""><img src="kingston.jpg" height="190" width="190"  >
</div>

<div class="Tittle">
	<h1>Send Mail </h1></div>
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
		<li><p3><strong>Quick Links:</strong></p3></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StaffSupport.php">Contact IT</a></li>
	</ul>
</div>
<form class="MainBox">

<div class="box1">
<div style="height:435px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 

<div class="list3">

<div class="input-group">
<form method="post" action="mailsender.php" name="submit" enctype="multipart/form-data">
 <span class="input-group-addon" id="basic-addon1">To:</span>
  <input type="text" name="reciever" class="form-control" placeholder="KU ID (ex: k1234567)" aria-describedby="basic-addon1">
 <span class="input-group-addon" id="basic-addon1">Subject:</span>

  <input type="text" class="form-control" placeholder="RE:" aria-describedby="basic-addon1">
  <textarea name="message" cols="70" rows="5" placeholder="Please write your message here"></textarea>
<br>
  <input type="submit" name="submit" value="Send">
  </ul>
</form>
</div>
</form>

</div>
<div class="heading">
<p><strong></strong></p>
</div>

</body>

</html>