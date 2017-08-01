<?php 

session_start();
	include("dbconnection.php");
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
$messages = clean($_POST['message']);
$user =clean($_POST['name']);
$pic =clean($_POST['name1']);
$poster =clean($_POST['poster']);

$sql="INSERT INTO message (messages, user, picture, date_created, poster)
VALUES
('$messages','$user','$pic','".strtotime(date("Y-m-d H:i:s"))."','$poster')";

mysql_query("UPDATE messages SET picture = '$pic' WHERE FirstName='$user'");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location: lol.php");
exit();

$name=$_POST['name'];
$pic=$_POST['name1'];

mysql_query("UPDATE messages SET picture = '$pic' WHERE FirstName='$name'");
?> 
