<?php 

session_start();
include("dbconnection.php");
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Ifunanya Ikemma</title>
</head>

<body>

<?php 

$messageid=$_POST['friendid'];

//mysql_query("UPDATE friendlist SET status = 'accepted' WHERE friends_id='$messageid'");
mysql_query("DELETE FROM friendlist WHERE friends_id='$messageid'");
header("location: confirm.php");
exit();
 
?> 
</body>
</html>
