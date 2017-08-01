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

$messages = clean($_POST['comment']);
$user =$_POST['firstname'];
$sql="INSERT INTO comment (comment, post_id)
VALUES
('$messages','$user')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "success";
exit();

mysql_close($con)

?>