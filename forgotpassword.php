<?php 

	session_start();
	include("dbconnection.php");
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	
	if(isset($_POST[Submit1]))
	{
	mysql_query("UPDATE members SET Password = '$_POST[password]' WHERE  UserName ='$_POST[fname]'");
		if(mysql_affected_rows() == 1)
	{
	$passet = 1 ;
	}
	}
	
	if(isset($_POST[submit]))
{
	$result  = mysql_query("SELECT * FROM members WHERE  UserName ='$_POST[fname]'");
	if(mysql_num_rows($result) ==1)
		{
			$rset=1;
		}
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Ifunanya Ikemma</title>
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
  <div class="topleft"><img src="img/logo1.jpg" width="175" height="41" /></div>
  <form action="login-exec.php" method="post">
  <div class="qwerty">
  
		<div class="label">
		  <div class="email">UserName</div>
		  <div class="password">Password</div>
		</div>
		<div class="label1">
				
				<div class="emailtext"><input name="login" type="text" id="login"  />
				</div>
		  		<div class="passwordtext"><input name="password" type="password"  />
		  		<input type="submit" class="greenButton" value="Login" name="submit" /></div>
				
		</div>
		<div class="label2">
		
				<div class="email">
				<div class="radio"><input name="check" type="checkbox" value="" /></div>
				<div class="text1">Keep me Log-in</div>
				</div>
		  		<div class="password"><a href="forgotpassword.php"><strong><font color="#FFFFFF">Forgot Password?</font></strong></a></div>
		
		</div>
</div>
</form>





</div>


<div class="downleft">

  <div class="picture">
  
  
  
  <img src="img/footer.jpg" width="528" height="368" />
  

  
  </div>
  <div class="field">
  

  
  <?php 

  if($passet == 1)
  {
	echo "<div class='signup'>Password updated successfully...<br>
	<a href='login.php'>Click here to login</a>
	</div>  ";
  }
  else
  {
if(isset($_POST[Submit]))
  {
	  if($rset == 1)
	  {
  ?>
  <div class="signup">Change password</div>
<div class="free"></div>
	<div class="text">
	<form action="forgotpassword.php" method="post">
	  	<div class="textleft">User name:</div>
		<div class="textright"><input name="fname" type="text" class="textfield" id="fname" value="<?php 
 echo $_POST[fname]; ?>" readonly>
		</div>
		<div class="textleft">New password:</div>
		<div class="textright"><input name="password" type="password" class="textfield" id="password" size="40">
		</div>
		<div class="textleft">Confirm password:</div>
		<div class="textright"><input name="cpassword" type="password" class="textfield" id="cpassword" size="40">
		</div>
    </div>
		<div class="textright">
<div class="textright">
		  <br /><label>
		  <input type="submit" name="Submit1" id="Submit1" value="Change password" class="greenButton1" />
		  </label>
		</div>
	</form>	
    <?php 
  
	  }
	  else
	  {
		 echo "<div class=signup>";
		   echo "<br><br><br><br><br><h4>Record not found in database</h4>";
		   echo "</div>";
	  }
  }
  else
  {
  ?>
  <div class="signup">Forgot Password</div>
<div class="free">Please enter username, password and Date of birth</div>
	<div class="text">
	<form action="forgotpassword.php" method="post">
	  	<div class="textleft">User name:</div>
		<div class="textright"><input name="fname" type="text" class="textfield" id="fname" onKeyDown="CountLeft(this.form.fname, this.form.left,30);" onKeyUp="CountLeft(this.form.fname,this.form.left,30);" size="40">
		</div>
		<div class="textleft">Email:</div>
		<div class="textright"><input name="email" type="text" class="textfield" id="email" onKeyDown="CountLeft(this.form.email, this.form.em,50);" onKeyUp="CountLeft(this.form.email,this.form.em,50);" size="40">
		</div>
		<div class="textright1">		
Birth Day: 
<select name="month" id="month" class="textfield1">
<option value="">MM</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select name="day" id="day" class="textfield1">
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<?php 
 
for($i=11; $i<=31; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
</select>

<select name="year" id="year" class="textfield1">
<?php 

for($i=1950; $i<=2010; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
</select>	
    </div>
		<div class="textright">
<div class="textright">
		  <br /><label>
		  <input type="submit" name="Submit" value="Sign Up" class="greenButton1" />
		  </label>
		</div>
	</form>	
  <?php 

  }
  }
  ?>
    
	</div>
  </div>
</div>
</body>
</html>
