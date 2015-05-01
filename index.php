<?php session_start(); 

if($_SESSION['LOGGED_IN']){
  if($_SESSION['type']=="student"){
    header("Location: student.php");
    exit();
    }
    else{
    header("Location: staff.php");  
    exit();
    } 
  }

?>
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

    <title>Online SEC System</title>

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
        <h1>Welcome  to SEC Placement </h1>
        </div> </header>
      </div>
    </form>
        <form class="r1" action="login.php" method="POST">
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
				   <label for="username"><strong>Username:</strong></label>
				   <input type="text" name="username" class="form-control" id="Inputknumber1" placeholder="E.g. K1234567 or KU123456 ">
				  <br>
				  <label for="password"><strong>Password</strong>:</label>
				  <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
					<br>
				
				   <input type="submit" value="Submit">
				   
				   
			     </div>
				     
        	</div>
        	
	    </form> 
	  <div class="register">
        		   <button class="lo" onClick="location.href='registering.php'">
					New User? Register Here.
					</button> 
						</div>
				   
     
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