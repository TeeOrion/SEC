<!DOCTYPE HTML>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="index.css" rel="stylesheet" type="text/css">

    <title>Register</title>

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
            <li class="active"><a href="#"></a></li>
            <li><a href="#about"></a></li>
            <li><a href="#contact"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 

     
      

  



<div id="wrapper">
      
  <form class="s1">
    <div class="img">
       <header> <img src="kingston.jpg" height="90" width="90" >
    </div>
        <div class="title1">
        <h1>New User Registration</h1>
        </div> </header>
      </div>
    </form>
        <form class="r2" action="registerlogic.php" method="POST">
        	<div class="loginBox">
	        	
	        	<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul style="padding:0; color:red;">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
	?>

				<div class="user-form">
				   <label for="KU Number"><strong>KU Number:</strong></label>
				   <input type="text" name="kuid" class="form-control" placeholder="e.g. K1234567">
				   <label for="name"><strong>Name:</strong></label>
				   <input type="text" name="nm" class="form-control" placeholder="Your Full Name">
				  <label for="Address"><strong>Address:</strong></label>
				   <input type="text" name="add" class="form-control"  placeholder="Full Address">
				   <label for="Email"><strong>Email Address</strong>:</label>
				  <input type="text" name="email" class="form-control" placeholder="example@xampl.com">
				  <label for="telno"><strong>Telephone Number</strong>:</label>
				  <input type="text" name="telno" class="form-control" placeholder="e.g. 02081234992">
				  <label for="dob"><strong>Date of Birth</strong>:</label>
				  <input type="date" name="dob" class="form-control" placeholder="">
				  <label for=""><strong>Password</strong>:</label>
				  <input type="password" name="password" class="form-control" placeholder="">
				  
				  
			    <br />
				
				   <input type="submit" value="Submit">
			   </div>
			  
				</div>
        	</div>
	    </form> 
        
     
  <div class="problem">
  <a href="StudentSupport.php">Problems logging in?</a>
  </div>
 </div>
 </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>