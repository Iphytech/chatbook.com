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

$messages = clean($_GET['textfield']);
$user =clean($_GET['useid']);
$PIC =clean($_GET['textfield1']);
$sql="INSERT INTO photoscomment (comment, commentby, PIC)
VALUES
('$messages','$user','$PIC')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location: photocomment.php" ."?id=" . "$user");

mysql_close($con)

?>