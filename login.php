<?php 
	session_start();
	include("dbconnection.php");
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<script type="application/javascript">
function validatelogin()
{
	if(document.logs.login.value == "")
	{
		alert("Please enter user name.");
		return false;
	}
	if(document.logs.password.value == "")
	{
		alert("Please enter your password.");
		return false;
	}
}

</script>    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Blaze Pascal</title>
<link href="format1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />

<script type="text/javascript" src="contact1.js"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="contact3.js"></script>
<style type="text/css">
<!--
body {
	background-image: url(img/bg2.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
</style>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#login").Watermark("username");
   
   });
</script>



</head>
<SCRIPT LANGUAGE="JavaScript">
function CountLeft(field, count, max) {
if (field.value.length > max)
field.value = field.value.substring(0, max);
else
count.value = max - field.value.length;
}
</script>
<body>
<div class="mainr">
  <div class="topleft"><a href="index.php"><img src="img/logo1.jpg" width="175" height="41" /></a></div>
  <form action="login-exec.php" method="post">
  <div class="qwerty">
  
		<div class="label">
		  <div class="email">UserName</div>
		  <div class="password">Password</div>
		</div>
		<div class="label1">
				
				<div class="emailtext"><input name="login" type="text" id="login" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				</div>
		  		<div class="passwordtext"><input name="password" type="password" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
		  		<input type="submit" class="greenButton" value="Login" /></div>
				
		</div>
		<div class="label2">
		
				<div class="email">
				<div class="radio"><input name="check" type="checkbox" value="" /></div>
				<div class="text1">Keep me Log-in</div>
				</div>
		  		<div class="password">Forgot Password?</div>
		
		</div>
</div>
</form>





</div>


<div class="downleft">

  <div class="picture">
  
  
  
  <div id="div-regForm">

<div class="form-sub-title"></div>
    <div class="signup">Sign In<br />
    </div>
	<div class="free">
	  <p>It's free, and always will be</p>
	 <font color='#FF0000'><div id="error">
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
</div></font>
	</div>
<form  name="logs" id="logs" action="login-exec.php" method="post" onSubmit="return validatelogin()">

<table width="389" align="center">
  <tbody>
  <tr>
    <td width="110" height="38"><label for="fname">User Name :</label></td>
    <td width="202"><div class="input-container"><input name="login" type="text" id="login" size="40" value="Username" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"/>
    </div></td>
  </tr>
  <tr>
    <td height="40"><label for="lname">Password :</label></td>
    <td><div class="input-container"><input name="password" type="password" id="password" size="40" value="password" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"/>
    </div></td>
  </tr>
 

    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="Login" />
</td>
  </tr>
  
  
  </tbody>
</table>

</form>



</div>
  

  
  </div>
  
	

	
    </div>
		
		
		</div>
		<div class="textleft">
</div>


	
		
		<div class="textright">


		
		
		<div class="textleft"></div>
		<div class="textright">
		  <br />
		</div>
	
	</div>
  </div>
</div>
</body>
</html>
