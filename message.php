<?php 

	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Ifunanya Ikemma</title>
</head>

<body>
<table width="790" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">
	<form action="sent.php" method="post">
	<p>
	
      <label>
      <strong>From:</strong>
      <input type="text" name="from" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
      </label>
    </p>
    <p><strong>To</strong>:
      <label>
      <input name="to" type="text" id="to" class="textfield"/>
      </label>
    </p>
    <p>Message</p>
    <p>
      <label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="message" cols="50" rows="15" wrap="physical" class="textfield1" id="textfield1" ></textarea>
      </label>
    </p>
    <p>
      <label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="send" type="submit" id="send" value="Send" />
      </label>
   </p>
    <p>
      <label>
      <input name="status" type="text" id="status" value="pending" />
      </label>
    </p>
	</form></td>
  </tr>
</table>
</body>
</html>
