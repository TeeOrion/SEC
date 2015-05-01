<?php
session_start();
if($_SESSION['LOGGED_IN'] == true)
{ if ($_SESSION['type'] == "staff") {
	header('Location: Staff.php');
	}
}
else{
	header('Location: index.php');
} ?>
<!DOCTYPE html>
<?php
//references the cookie and makes sure they are logged in
session_start();
if( ! $_SESSION['LOGGED_IN'] )
{ header('Location: login.php');}

?>

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
            <li><a href="#about">About</a></li>
            <li><a href="StudentSupport.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 




<div id="wrapper">
<button class="lo" onClick="location.href='login.php'">
    Log Out 
</button> 


<form class ="t1">
<div class= "image">
 <img src="kingston.jpg" height="190" width="190"  >
</div>
<div class="Online">
	<p2> Student Profile </p2>
</div>

 </form>
 <div class= "please" >
<div class= "list1">
<ul>
<li><a href="student.php">Home</a></li>
<li><a href="studentprofile.php">Profile</a></li>
<li><a href="Applications.php">Applications</a></li>
<li><a href="JobListings.php">JobListings</a></li>
<li><a href="StudentSupport.php">Support</a></li>
</ul>
</div>
  </div>

<div class="list2">
	<ul>
		<li><p3><strong>CV SUPPORT:</strong></p3></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StudentSupport.php">Contact SEC</a></li>
	</ul>
</div>



<div class="box1">

 <div class= "image1">
 <img src="profile.jpg" height="140" width="140"  >
</div>
<div class= "profilelist">
<ul> <!-- This list is pulling from the session data in the cookie -->
<li>KU ID: <?php echo $_SESSION['kuid']; ?> </li>
<li>Name: <?php echo $_SESSION['name']; ?></li>
<li>Address: <?php echo $_SESSION['address']; ?></li>
<li>Email: <?php echo $_SESSION['email']; ?></li>
<li>Date of Birth: <?php echo $_SESSION['dob']; ?> </li>
<li>Telephone Number: <?php echo $_SESSION['telephoneNumber']; ?> </li>
</ul>
</div>
</div>
</div>
</body>

</html>