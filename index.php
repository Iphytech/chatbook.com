<?php 

	session_start();
	include("dbconnection.php");
	?>
<script type="application/javascript">
function validateform()
{
		if(document.form1.password.value  != document.form1.cpassword.value)
	{
		alert("Password and confirm password not match...");
			return false;
	}
	//alert(document.form1.login.value.length);
	if(document.form1.password.value.length  <8 )
	{
		alert("Password Length should be greater than 8 .");
		return false;
	}	
	if(document.form1.password.value.length > 15)
	{
		alert("Password Length should be less than 15.");
		return false;
	}
	if(document.form1.fname.value == "")
	{
		alert("First name should not be empty.");
		return false;
	}
		if(document.form1.lname.value == "")
	{
		alert("Last name should not be empty.");
		return false;
	}
		if(document.form1.login.value == "")
	{
		alert("Please enter user name.");
		return false;
	}

	if(document.form1.password.value=="")
	{
		alert("Password should not be empty...");
		return false;
	}
			if(document.form1.login.value.length < 6 || document.form1.login.value.length > 12)
	{
		alert("Length should be greater than 6 and less than 12.");
		return false;
	}


	if(document.form1.address.value == "")
	{
		alert("Address should not be empty.");
		return false;
	}
	if(document.form1.cnumber.value == "")
	{
		alert("please enter a valid contact number....");
		return false;
	}
	if(document.form1.cnumber.value.length  <10 )
	{
		alert("please enter a valid contact number....");
		return false;
	}	
	if(document.form1.cnumber.value.length > 15)
	{
		alert("please enter a valid contact number.....");
		return false;
	}
	if(document.form1.email.value == "")
	{
		alert("email_id should not be empty.");
		return false;
	}
	if(document.form1.gender.value == "")
	{
		alert("please select one option for gender.....");
		return false;
	}
	if(document.form1.month.value == "")
	{
		alert("please select the month.....");
		return false;
	}
	if(document.form1.day.value == "")
	{
		alert("please select the day.....");
		return false;
	}
	if(document.form1.year.value == "")
	{
		alert("please select the year.....");
		return false;
	}
}

</script>    
    <?php 

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <div class="topleft"><a href="index.php"><img src="img/logo1.jpg" width="175" height="41" /></a></div>
  <div class="qwerty">
  
		<div class="label">
		  <div class="email">UserName</div>
		  <div class="password">Password</div>
		</div>
		<div class="label1">
				 <form action="login-exec.php" method="post" name="form2" id="form2" onSubmit="return logvalidate()">
 
				<div class="emailtext"><input name="login" type="text" id="login"  value="Username" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"/>
				</div>
		  		<div class="passwordtext"><input name="password" type="password" value="password" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"/>
		  		<input type="submit" class="greenButton" value="Login" /></div>
		</form>		
		</div>
		<div class="label2">
		
				<div class="email">
				<div class="radio"><input name="check" type="checkbox" value="" /></div>
				<div class="text1">Keep me Log-in</div>
				</div>
		  		<div class="password"><a href="forgotpassword.php"><strong><font color="#FFFFFF">Forgot Password?</font></strong></a></div>
		
		</div>
</div>






</div>


<div class="downleft">

  <div class="picture">
  
  
  
  <img src="img/footer.png" width="528" height="368" />
  

  
  </div>
  <div class="field">
  
    <div class="signup">Sign Up</div>
	<div class="free">It's free, and always will be</div>
	<div class="text">
  
	<form action="register-exec.php" method="post" onSubmit="return validateform()" name="form1" id="form1">
	  	<div class="textleft">FirstName:</div>
		<div class="textright"><input name="fname" type="text" class="textfield" id="fname" size="40">
		<input readonly type="hidden" name="left" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft">LastName:</div>
		<div class="textright"><input name="lname" type="text" class="textfield" id="lname" size="40">
		<input readonly type="hidden" name="last" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft">UserName:</div>
		<div class="textright"><input name="login" type="text" class="textfield" id="login" size="40">
		<input readonly type="hidden" name="log" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft">Password:</div>
		<div class="textright">
		  <input name="password" type="password" class="textfield" id="password" size="40" />
		  <input readonly type="hidden" name="pas" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft">Cofirm Password:</div>
		<div class="textright"><input name="cpassword" type="password" class="textfield" id="cpassword" size="40" />
		  <input readonly type="hidden" name="pas1" size=3 maxlength=3 value="30" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft">Address:</div>
		<div class="textright"><input name="address" type="text" class="textfield" id="address" size="40">
		<input readonly type="hidden" name="ad" size=3 maxlength=3 value="50" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft">Contact Number:</div>
		<div class="textright"><input name="cnumber" type="text" class="textfield" id="cnumber" size="40">
		<input readonly type="hidden" name="cn" size=3 maxlength=3 value="11" disabled="disabled" class="textfield2">
		<input name="propic" id="dadded" type="hidden" value="uploadedimage/defoult.jpg" /></div>
		<div class="textleft">Email:</div>
		<div class="textright"><input name="email" type="text" class="textfield" id="email" size="40">
		<input readonly type="hidden" name="em" size=3 maxlength=3 value="50" disabled="disabled" class="textfield2">
		</div>
		<div class="textleft1">I am:</div>
		<div class="textright1">
			<div class="input-container">
			  <select name="gender" id="gender" class="textfield1">
                <option value="" >Select Sex:</option>
                <option value="Female" >Female</option>
                <option  value="Male">Male</option>
              </select><br />
			</div>
		
		</div>
		<div class="textleft1">Birth Day:</div>
		<div class="textright1">
		
		<div class="input-container">
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
<option value="">DD</option>
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
<option value="">YYYY</option>
<?php 

for($i=1950; $i<=2010; $i++)
{
	if($i==1980)
	{
echo "<option value='$i' selected>$i</option>";
	}
	else
	{
echo "<option value='$i'>$i</option>";
	}
}
?>
</select>	
	
    </div>
		
		
		</div>
		<div class="textleft">
</div>


	
		
		<div class="textright">


		
		
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
