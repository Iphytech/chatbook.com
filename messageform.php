<?php 

session_start();
include("dbconnection.php");
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />

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

<div class="form-title">
  <p>&nbsp;</p>
  <p>Sent Message </p>
</div>
<div class="form-sub-title">
  <p>the leading.........................?</p>
  <p>&nbsp;</p>
</div>

<form id="regForm" action="sent.php" method="post">

<table width="332" align="center">
  <tbody>
  <tr>
    <td width="35" valign="top"><label for="fname">to</label></td>
    <td width="285"><div class="input-container">
      <?php 


$name= mysql_query("select * from friendlist");

echo '<select name="receiver" id="user">';
 while($res= mysql_fetch_assoc($name))
{
echo '<option>';
echo $res['firstname'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?>
    </div></td>
  </tr>
  <tr>
    <td valign="top"><label for="lname">From:</label></td>
    <td><div class="input-container">
      <p>
        <input name="sender" id="sender" type="text" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
      </p>
      <p>&nbsp;  </p>
    </div></td>
  </tr>
 
 <tr>
    <td valign="top"><label for="lname">Content<br />
    </label></td>
    <td><div class="input-container">
      <p>&nbsp;        </p>
      <p>
        <textarea name="content" cols="40" rows="10" id="content"></textarea>
      </p>
      <p>
        <label>
        <input name="status" type="hidden" id="status" value="pending"/>
        </label>      
          </p>
    </div></td>
  </tr>
    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="Sent" /></td>
  </tr>
  </tbody>
</table>

</form>


</div>

</body>
</html>

