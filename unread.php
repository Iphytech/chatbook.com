<?php 

session_start();
include("dbconnection.php");
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chatbook :: Ifunanya Ikemma</title>
<link rel="stylesheet" type="text/css" href="demo.css" />
<script language="javascript" type="text/javascript">
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
</script>
<style type="text/css">
	/* This CSS is just for presentational purposes. */
	body {
		font-size: 62.5%;
		background-color:#FFFFFF; }
	#wrap {
		font: 1.3em/1.3 Arial, Helvetica, sans-serif;
		width: 30em;
		margin: 0 auto;
		padding: 1em;
		background-color: #fff; }
	h1 {
		font-size: 200%; }

	/* This CSS is used for the Show/Hide functionality. */
	.more {
		display: none;
		border-top: 1px solid #666;
		border-bottom: 1px solid #666; }
	a.showLink, a.hideLink {
		text-decoration: none;
		color: #36f;
		padding-left: 8px;
		background: transparent url(down.gif) no-repeat left; }
	a.hideLink {
		background: transparent url(up.gif) no-repeat left; }
	a.showLink:hover, a.hideLink:hover {
		border-bottom: 1px dotted #36f; }
</style>
</head>

<body>
<table width="558" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"> Unread Messages </td>
  </tr>
  <tr>
    <td width="51">
      <div align="center">From
      </div>
      <p align="center">
	   <?php 
//www.freestudentprojects.com

$result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  		echo '<a href=unread.php?id=' . $row["message_id"] . '>' . $row['sender'] . '</a><br />';
		echo'<input type="hidden" name="url" value="'. $row['sender'] .'">';
  }
 

?>
      </p></td>
    <td width="243" colspan="2"><form action="readmessage.php" method="post">
	    <p>
	      <?php 

	if (isset($_GET['id']))
	{


$member_id = $_GET['id'];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM messages WHERE message_id = $member_id");

$row = mysql_fetch_array($result);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo '<div id="error">';
echo "<br />";
echo'<input type="hidden" name="messageid" value="'. $row['message_id'] .'">';
echo 'From: ' . $row["sender"] . '<br />';
echo '</div>';
echo 'Content: ' . $row["content"] . '<br />';
echo '<input type="hidden" name="receiver" value="'. $row['sender'] .'">';
//echo '<input type="submit" class="greenButton" value="read" />';
 
}
}
?>
</p>
</form>
	    <p><a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;">Reply</a></p>
		<div id="example" class="more">
		<form action="sent.php" method="post">
		&nbsp;<b>Content</b><br />
		&nbsp;<textarea name="content" cols="20" rows="10" id="content"></textarea>
		<input name="status" type="hidden" id="status" value="pending"/><br />
		
		From:&nbsp;<input name="sender" id="sender" type="text" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		<?php 

	if (isset($_GET['id']))
	{

$member_id = $_GET['id'];

mysql_query("UPDATE messages SET status = 'read' WHERE message_id='$member_id'");

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM messages WHERE message_id = $member_id");

$row = mysql_fetch_array($result);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:&nbsp;';	
echo'<input type="text" name="receiver" value="'. $row['sender'] .'">';

 
}
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="greenButton" value="Sent" />
		</form>
	
			<p><a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">Cancel</a></p>
		</div>
		
	  	</td>
  </tr>
</table>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>
