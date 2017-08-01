<?php 

	
include("dbconnection.php");
			 
			$friendsid = $_GET['friend_id'];
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$contact_no = $_POST['contact_no'];
			$website = $_POST['website'];
			$gender = $_POST['gender'];
			$status = $_POST['status'];
			$location = $_POST['location'];
			$wala = $_POST['wala'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
	
			mysql_query("INSERT INTO friendlist (firstname, lastname, address, contact_no, website, gender, addby, status, location)
VALUES
('$firstname','$lastname','$address','$contct_no','$website','$gender','$wala','$status','$location')");
		
			header("location: profile.php");
			exit();
			

			?>