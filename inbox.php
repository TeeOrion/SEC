<?php
session_start();
if(!$_SESSION['LOGGED_IN'])
{ header('Location: index.php'); }
?>
/*$dsn = 'mysql:host=localhost;dbname=sonnyti4_cvdb';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
// Connect PDO
$conn = new PDO($dsn, $dbuser, $dbpass, $options);
$userID = $_SESSION['kuid'];
$result = $conn->prepare("SELECT sender, reciever, message, read FROM Messages WHERE reciever ='$userID'");
$result->execute();
?>*/

<!DOCTYPE html>
<?php
$dsn = 'mysql:host=localhost;dbname=sonnyti4_cvdb';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
// Connect PDO
$conn = new PDO($dsn, $dbuser, $dbpass, $options);
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

    <title>Inbox</title>
   <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
   
  </head>

  <body>
<button class="lo" onClick="location.href='index.php'">
    Log Out 
</button> 

<form class ="IndexLogoTittle">
<div class= "KingstonLogo">
  <a href="staff.php"><img src="kingston.jpg" height="190" width="190"  >
</div>

<div class="StaffTittle">
	<h1>Inbox</h1></div>
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

<li><a href="StaffViewCV.php"> CV </a>
<ul>
<li><a href="UploadCVStaff.php"> Upload CV Template </a></li>
<li><a href="viewallcvs.php"> View CVs  </a></li>
</ul>
</li>
</div>

<div class="list2">
	<ul>
		<li><p3><strong>CONTACT:</strong></p3></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="StaffSupport.php">Contact SEC</a></li>
	</ul>
</div>

<form class="MainBox">
</form>
<div class="box1">
<div class="send">
<button class="lo" onClick="location.href='sendmail.php'">
   Send Mail 
</button> 
</div>
<div style="margin-top:-4%;height:430px;width:990px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 



<div class="list3">
	<ul>
	
<?php
class Messages{
  public $sender;
  public $reciever;
  public $message;
  public $read;
  public $msgid;
} 

  $statement = $conn->prepare("SELECT * FROM Messages");
$statement->execute();
$Messages= array();

while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    $Messages = new Messages();
    $Messages->sender = $row['sender'];
    $Messages->reciever = $row['reciever'];
    $Messages->message = $row['message'];
    $Messages->read = $row['read'];
    $Messages->msgid = $row['msgid'];
    $Message[] = $Messages;
    echo "Sender: " . $row['sender'];
    echo '<br>';
    echo "Receiver: " . $row['reciever'];
    echo '<br>';
    echo "Message: " . $row['message'];
    echo '<br>';
    echo "Read: " . $row['read'];
    echo '<br>';
    echo "Message ID: " . $row['msgid'];
    echo '<br>'; ?>
    <form method="post" action="deletemessage.php" name="del">
    <input type="hidden" name="msgid" value="<?php echo $row['msgid']; ?>">
    <input type="submit" name="submit" value="Delete">
    </form>
     <?php
echo '<br>';
echo '<br>';
}
?>
	</ul>
</div>

</div>
</div>

</body>

</html>