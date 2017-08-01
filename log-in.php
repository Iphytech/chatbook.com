<?php 

	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chatbook :: Ifunanya Ikemma</title>

<link rel="stylesheet" type="text/css" href="demo.css" />

<style type="text/css">
<!--
body {
	background-image: url(img/footer.jpg);
	background-color:#3897cf;
	background-repeat: repeat-x;
	background-position:bottom;
}
-->
</style>

</head>

<body>

<div id="div-regForm">

<div class="form-title">Welcome to bookface </div>
<div class="form-sub-title">the leading.........................?</div>

<form id="regForm" action="login-exec.php" method="post">

<table width="328" align="center">
  <tbody>
  <tr>
    <td width="110"><label for="fname">UserName::</label></td>
    <td width="202"><div class="input-container"><input name="login" type="text" id="login" size="10" />
    </div></td>
  </tr>
  <tr>
    <td><label for="lname">Password:</label></td>
    <td><div class="input-container"><input name="password" id="password" type="password" />
    </div></td>
  </tr>
 

    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="Login" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
</td>
  </tr>
  
  
  </tbody>
</table>

</form>

<div id="error">
&nbsp;
<?php 

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
</div>

</div>

</body>
</html>
