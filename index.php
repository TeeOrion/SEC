
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
    <link href="main.css" rel="stylesheet" type="text/css">

    <title>Online SEC System</title>

	<!--/.bootstrap loader	-->
	
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

  
  </head>

  <body>

  
     
 


  <form class="IndexLogoTittle">
  
    <div class="KingstonLogo">
       <img src="kingston.jpg" height="140" width="140" >
    </div>
        <div class="IndexTittle">
        <h1>Welcome  to SEC Placement </h1>
     
      </div>
	  
	  
    </form>
        <form class="loginInformationBox" action="login.php" method="POST">
        
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
		
        	
	    </form> 
	 <div class="register"> 
    
		 <button class="lo" onClick="location.href='registering.php'">
				  New User? Register Here.
					
			</button> 
			
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