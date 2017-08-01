<?php 

session_start();
include("dbconnection.php");
require_once('auth.php');

$result = mysql_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  		
		echo $row['addby'];
		echo '<a href=acceptrequest.php?id=' . $row["friends_id"] . '>' . "Accept" .  '</a>';
		echo '<a href=deleterequest.php?id=' . $row["friends_id"] . '>' . "Delete" .  '</a>';
  }

 

?>
