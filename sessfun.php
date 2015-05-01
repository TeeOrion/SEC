<?php
//references the cookie and makes sure they are logged in
$staffflag = false;
session_start();
if( ! $_SESSION['LOGGED_IN'] )
{ header('Location: login.php');}

//Evaluates the type of user 
if($_SESSION['type'] == staff){
$staffflag = true;  
}

$dsn = 'mysql:host=localhost;dbname=sonnyti4_cvdb';
$dbuser = 'sonnyti4_1';
$dbpass = 'Mofos123';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
// Connect PDO
$conn = new PDO($dsn, $dbuser, $dbpass, $options);
/*$result = $conn->prepare("SELECT jobID, jobDesc, jobTitle, uploadDate, url
 FROM JobListing " );*/
//$result->execute();

$PDO = new PDO('mysql:host=localhost;dbname=sonnyti4_cvdb', 'sonnyti4_1', 'Mofos123', 'sonnyti4_cvdb');

/*$result = mysql_query("SELECT jobID, jobDesc, jobTitle, uploadDate, url
 FROM JobListing " );
while ($row = mysql_fetch_assoc($result)){
  echo $row["jobID"];
  echo $row["jobDesc"];
  echo $row["jobTitle"];
}
echo "cunt"; */

//$dbh = new mysqli('mysql:host=localhost;dbname=sonnyti4_cvdb', 'sonnyti4_1', 'Mofos123', 'sonnyti4_cvdb');
class jobListing{
  public $jobID;
  public $jobDesc;
  public $jobTitle;
  public $uploadDate;
  public $url;
}

$sth = $conn->prepare("SELECT jobID, jobDesc, jobTitle, uploadDate, url FROM JobListing");
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_CLASS, "jobListing");
print_r($result);
echo'<br>';


/*$query = "SELECT * FROM JobListing";
$result = mysql_query($query) or die (mysql_error());
while($row = mysql_fetch_array($result)){
  echo $row['jobDesc']. "-". $row['jobTitle'];
  echo "<br />";
}*/



/*$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);
$listings = $result->fetch(PDO::FETCH_NUM);
print_r($listings);*/
?>
