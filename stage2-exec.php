<?php 

session_start();
include("dbconnection.php");
	require_once('auth.php');

	//Start session
	
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$location = clean($_POST['location']);
	$Interested = clean($_POST['Interested']);
	$language = clean($_POST['language']);
	$college = clean($_POST['college']);
	$highschool = clean($_POST['highschool']);
	$experiences = clean($_POST['experiences']);
	$arts = clean($_POST['arts']);
	$aboutme = clean($_POST['aboutme']);
	$user=$_POST['userid'];
	
  	
	//Input Validations
	
	/*if($bdate == '') {
		$errmsg_arr[] = 'birthdate field is  missing';
		$errflag = true;
	}*/
	if($location == '') {
		$errmsg_arr[] = 'location filed has no input';
		$errflag = true;
	}
	if($Interested == '') {
		$errmsg_arr[] = 'Interested filed has no input';
		$errflag = true;
	}
	if($language == '') {
		$errmsg_arr[] = 'language field is  missing';
		$errflag = true;
	}
	if($college == '') {
		$errmsg_arr[] = 'college field is  missing';
		$errflag = true;
	}
	if($highschool == '') {
		$errmsg_arr[] = 'highschool field missing';
		$errflag = true;
	}
	if($experiences == '') {
		$errmsg_arr[] = 'experiences field missing';
		$errflag = true;
	}
	if($arts == '') {
		$errmsg_arr[] = 'arts field missing';
		$errflag = true;
	}
	if($aboutme == '') {
		$errmsg_arr[] = 'aboutme field missing';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	//Create INSERT query
	mysql_query("UPDATE members SET hometown='$location', Interested='$Interested', language='$language', college='$college', highschool='$highschool', experiences='$experiences', arts='$arts', aboutme='$aboutme' WHERE member_id='$user'");
	
header("location: index.php");

mysql_close($db);
?>