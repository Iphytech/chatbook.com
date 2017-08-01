<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: xx-large}
-->
</style>
</head>

<body>      
<form id="form1" name="form1" method="post" action="">

<table width="958" height="240" border="0">
  <tr>
    <td colspan="2"><div align="left">Email Address:
        <label>
        <input name="user" type="text" id="user" size="50" />
        </label>
     
</div></td>
    <td>Password: 
      <label>
      <input name="pass" type="password" id="pass" size="30" />
      <input name="cmdlogin" type="submit" id="cmdlogin" value="Log in" />
      </label></td>
  </tr>
  <tr>
    <td colspan="2"><p class="style1">Sign Up</p>      </td>
    <td width="430"><label><br /></label></td>
  </tr>
  <tr>
    <td width="102">Name:</td>
    <td width="412"><label>
      <input name="name" type="text" id="name" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Age:</td>
    <td><input name="age" type="text" id="age" size="3" maxlength="3" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="34">Birthday:</td>
    <td><label>
      <select name="month" id="month">
        </select>
    </label>
      <input name="day" type="text" id="day" size="3" maxlength="2" />
      <select name="year" id="year">
        </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email Address:</td>
    <td><input name="email" type="text" id="email" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Password: </td>
    <td><input name="password" type="password" id="password" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="signup" type="submit" id="signup" value="SIGN UP" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>id,name, age,birthday,email address, password, friends </p>
<p>post</p>
<p>messages</p>
</form>
</body>
</html>
<?php 
//www.freestudentprojects.com 
  		
  require ("DBConnection.php");
 
  if (isset($_POST['cmdlogin'])) 
  	{ 			
		$user = $_POST['user'];			
		$pass = $_POST['pass'];	
					
		// sending query		
		$result = mysql_query("SELECT `members`.`UserName`, `members`.`Password` FROM members
				WHERE ((`members`.`UserName` = '$user') AND (`members`.`Password` = '$pass'))");
				
					
					if (!$result) 
					{
					die("Query to show fields from table failed");
					}
					echo $numberOfRows;
					$numberOfRows = MYSQL_NUMROWS($result);				
					If ($numberOfRows == 0) 
						{
						echo " <font color= 'red'>Invalid username and password!</font>";
						
						}
					else if ($numberOfRows > 0) 
						{
						session_register('is');
						$_SESSION['log']['cmdlogin']    = TRUE;
						$_SESSION['log']['UserName'] = $_POST['user'];
						$session = "1";	
					
						header("location:wall.php");	
						echo $user;					
 				}
			}
?>
<?php 
//www.freestudentprojects.com	
  if (isset($_POST['signup'])) 
  
  {
	 $name =$_POST['txtname'];
	 $age =$_POST['txtage'];
	 $bday.=$_POST['month'];
  	 $bday.="-";
 	 $bday.=$_POST['day'];
	 $bday.="-";
 	 $bday=$_POST['year'];
	 $user=$_POST['txtuser'];
	 $pass =$_POST['txtpass'];
	  
	   
			mysql_query("INSERT INTO user(Name,Age,Birthday,Email,Password)
						 VALUES('$name','$age','$bday','$email','$password')")								 																	
							 or die(mysql_error());  
			echo "One Record Successfully Added!";							 																
			
				header("Location: user.php");
				
			}
		
		
?>