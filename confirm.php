<?php 

	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Ifunanya Ikemma</title>
<link rel="stylesheet" type="text/css" href="demo.css" />
</head>

<body>
<table width="324" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"> Friend Request </td>
  </tr>
  <tr>
    <td width="76">&nbsp;Requested By 
      <p align="center">
	    <?php 

 

$result = mysql_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  		
		echo '<a href=http://localhost/PHP-Login/confirm.php?id=' . $row["friends_id"] . '>' . $row['addby'] .  '</a>';
  }



?>
    </p></td>
    <td width="242" colspan="2"><a href="lol.php"></a><br />
	<form action="saveconfirm.php" method="post">
	<?php 

	if (isset($_GET['id']))
	{

$member_id = $_GET['id'];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");

$row = mysql_fetch_array($result);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo '<div id="error">';
echo "<br />";
echo'<input type="hidden" name="friendid" value="'. $row['friends_id'] .'">';
//echo 'FirstName: ' . $row["firstname"] . '<br />';
echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
echo '<br />';
//echo 'LastName: ' . $row["lastname"] . '<br />';
echo'<input type="submit" name="addfriend" value="Confirm" class="greenButton">';
echo '</div>';

}
}
?>
</form>	
<br />
<form action="ignoreconfirm.php" method="post">
<?php 

	if (isset($_GET['id']))
	{

$member_id = $_GET['id'];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");

$row = mysql_fetch_array($result);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo '<div id="error">';
//echo "<br />";
echo'<input type="hidden" name="friendid" value="'. $row['friends_id'] .'">';
//echo 'FirstName: ' . $row["firstname"] . '<br />';
//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
//echo '<br />';
//echo 'LastName: ' . $row["lastname"] . '<br />';
echo'<input type="submit" name="addfriend" value="Decline" class="greenButton">';
echo '</div>';

}
}
?>
</form>	</td>
  </tr>
</table>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>
