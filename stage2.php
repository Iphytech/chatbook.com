<?php 

	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Ifunanya Ikemma</title>
<link href="format1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(img/bg2.jpg);
	background-repeat:repeat-x;
	background-color:#d1d7e7;

}
-->
</style></head>

<body>
<div class="mainr">
  <div class="topleft"><img src="img/logo1.jpg" width="175" height="41" /></div>
  <form action="login-exec.php" method="post">
  <div class="qwerty">
  
		<div class="label">
		  <div class="password"></div>
		</div>
		<div class="label1">
				
		  <div class="emailtext"></div>
  		  <div class="passwordtext"></div>
		</div>
		<div class="label2">
		
				<div class="email">
				  <div class="radio"></div>
		  </div>
		</div>
  </div>
</form>





</div>


<div class="downleft">

  <div class="picture">
  
  
  
  <img src="img/footer.jpg" width="471" height="257" /></div>
  <div class="field">

	<div class="free">Update profile details</div>
	<div class="text">
	<form action="register-exec.php" method="post">
	  	<div class="textleft">location:</div>
		<div class="textright">
          <input name="location" type="text" class="textfield" id="fname" value="" />
		</div>
		<div class="textleft">Interested in:</div>
		<div class="textright"><input name="lname" class="textfield" type="text" /></div>
		<div class="textleft">language:</div>
		<div class="textright"><input name="Interested" class="textfield" type="text" /></div>
		<div class="textleft">college:</div>
		<div class="textright"><input name="college" class="textfield" type="text" /></div>
		<div class="textleft">highschool:</div>
		<div class="textright"><input name="highschool" class="textfield" type="text" /></div>
		<div class="textleft">experiences :</div>
		<div class="textright"><input name="experiences" class="textfield" type="text" /></div>
		<div class="textleft">Hobbies :</div>
		<div class="textright"><input name="arts" class="textfield" type="text" />
		</div>
		<div class="textleft">aboutme:</div>
		<div class="textright"><input name="aboutme" class="textfield" type="text" /><input name="userid" type="hidden" id="curcity" value=" <?php 
 echo $_SESSION['SESS_MEMBER_ID'];?>" /></div>
		<div class="textleft"></div>
		<div class="textleft"></div>
		<div class="textleft"></div>
		<div class="textright">
		  <br /><label>
		  <input type="submit" name="Submit" value="Sign Up" class="greenButton1" />
		  </label>
		</div>
	</form>	
	</div>
  </div>
</div>
</body>
</html>
