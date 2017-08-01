<?php 

include("dbconnection.php");
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

$messages = clean($_POST['postcomment']);
$user =clean($_POST['user']);
$pic =clean($_POST['pic']);
$postid =clean($_POST['postid']);

$sql="INSERT INTO postcomment (content, commentedby, pic, id, date_created)
VALUES
('$messages','$user','$pic','$postid','".strtotime(date("Y-m-d H:i:s"))."')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location: profile.php");
exit();



?>

