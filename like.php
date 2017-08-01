<?php 

session_start();
include("dbconnection.php");

			$messages = $_POST['com'];
			$remarksby = $_POST['cam'];
			//mysql_query("INSERT INTO like(like, likeby) VALUES ('$messages_id','$likeby')");
			$sql="INSERT INTO bleh (remarks, remarksby)
VALUES
('$messages','$remarksby')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
			header("location: lol.php");
			exit();
			
			 
			
			?>