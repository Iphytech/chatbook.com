<?php 

session_start();
include("dbconnection.php");
$from=$_POST['sender'];
$receiver=$_POST['receiver'];
$content=$_POST['content'];
$status=$_POST['status'];

$sql="INSERT INTO messages (sender, receiver, content, status)
VALUES
('$from','$receiver','$content','$status')";
$sent=@mysql_query($sql);

if (!$sent)
  {
  die('Error: ' . mysql_error());
  }
echo "message sent";

?> 