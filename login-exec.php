<?php 
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');

	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
		
	include("dbconnection.php");
	
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	
	//Input Validations
	if($login == '' || $password == '') {
		$errmsg_arr[] = 'Invalid Login ID AND Password entered';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM members WHERE UserName='$login' AND Password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			header("location: lol.php");
			exit();
		}else {
			//Login failed
			header("location: login.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>