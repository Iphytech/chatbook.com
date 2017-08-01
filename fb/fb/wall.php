<?php 
//www.freestudentprojects.com session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php 
//www.freestudentprojects.com
require("session.php");
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="560" height="77" border="1">
    <tr>
      <td colspan="2"><div align="right">Welcome
       
	   HOME | PROFILE | FRIENDS | <a href="logout.php">LOG OUT</a> </div></td>
    </tr>
    <tr>
      <td width="91"><p>Profile</p>
        <p>Info</p>
      <p>Photos</p>
      <p>Friends</p></td>
      <td width="453"><label>
        <textarea name="textarea" cols="50">Say something...
</textarea>
        <br />
        <input type="submit" name="Submit" value="SHARE" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Wall Post </td>
    </tr>
  </table>
</form>
</body>
</html>
