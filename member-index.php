<?php 

	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Chatbook :: Ifunanya Ikemma<?php ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(img/footer.jpg);
	background-repeat: repeat-x;
	background-position:bottom;
	background-color:#3897cf;
}
-->
</style>
<style>

body{font-family:arial;}

table{font-size:80%; background:url(img/bg.jpg) repeat-x #cbd4e4;}

a{color:black;text-decoration:none;font:bold}

a:hover{background-color:#606060}

td.menu{background-color:lightblue}

table.menu

{

font-size:100%;

position:absolute;

visibility:hidden;

}
.style12 {font-size: 2em}
</style>
<script type="text/javascript">

function showmenu(elmnt)

{

document.getElementById(elmnt).style.visibility="visible";

}

function hidemenu(elmnt)

{

document.getElementById(elmnt).style.visibility="hidden";

}

</script>
</head>
<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><table width="101%" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FF8080">
        <td width="604" bgcolor="#0000FF" onmouseover="showmenu('scripting')" onmouseout="hidemenu('scripting')"><a></a><a href="confirm.php"><img src="images/Untitled-1.png" width="15" height="15" border="0" /></a>&nbsp;&nbsp;
            <?php 


$result = mysql_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="2" color="red"><b>' . $numberOfRows . '</b></font>'; 
	?>
            <a href="unread.php"><img src="images/messages.png" width="15" height="15" border="0" /></a>&nbsp;&nbsp;
            <?php 


$result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo '<font size="2" color="red"><b>' . $numberOfRows. '</b></font>';
	?>
            <br /></td>
        <td width="49" bgcolor="#0000FF" onmouseover="showmenu('tutorials')" onmouseout="hidemenu('tutorials')"><a href="member-profile.php">Home</a><br />
        </td>
        <td width="49" bgcolor="#0000FF" onmouseover="showmenu('scripting')" onmouseout="hidemenu('scripting')"><a href="member-index.php">Profile</a><br />
        </td>
        <td width="74" bgcolor="#0000FF" onmouseover="showmenu('validation')" onmouseout="hidemenu('validation')"><a>Account</a><br />
            <table class="menu" id="validation" width="140px">
			<tr>
                <td class="menu"><a href="">
				<?php 


$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  echo '<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">';
  echo '<tr>';
  echo '<td width="50px" colspan="0" rowspan="3" align="left" valign="top">';
  echo "<img width=50 height=50 alt='Unable to View' src='" . $row["profImage"] . "'>";
  echo '</td>';
  echo '<td height="16" bgcolor="#add8e6">&nbsp;</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="17" bgcolor="#add8e6">';
  echo '<div align="left">';
   echo '&nbsp;';
  echo '<a href="member-index.php">' . $row['FirstName'] ." ". $row['LastName'] . '</a>';
  echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="16" bgcolor="#add8e6">&nbsp;</td>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';
  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

 
?>
				</a></td>
              </tr>
              <tr>
                <td class="menu"><a href="">Edit Friend</a></td>
              </tr>
              <tr>
                <td class="menu"><a href="">Account Setting</a></td>
              </tr>
              <tr>
                <td class="menu"><a href="searchfriend.php">SearchFriend</a></td>
              </tr>
              <tr>
                <td class="menu"><a href="log-in.php">logout</a></td>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="175" valign="top"><br />
      <table width="165" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="165"><div align="center"><span class="style12">Your Total Friends Is</span>
 &nbsp;             <?php 


$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted' ORDER BY addby ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo '<font size="2" color="red"><b>' . $numberOfRows. '</b></font>';
	?>
          </div></td>
        </tr>
      </table>
    <?php 


$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted' ORDER BY addby ASC");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  echo '<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">';
  echo '<tr>';
  echo '<td width="50px" colspan="0" rowspan="3" align="left" valign="top">';
  echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  echo '</td>';
  echo '<td height="16">&nbsp;</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="17">';
  echo '<div align="left">';
  echo '&nbsp;&nbsp;';
  echo '<a href=member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
  echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="16">&nbsp;</td>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';
  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

 
?>	</td>
    <td width="609" bgcolor="#F1F3F3">
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
echo "<br />";
echo "<img width=200 height=200 alt='Unable to View' src='" . $row["location"] . "'> <br />";
echo 'Firstname: ' . $row["firstname"] . '<br />';
echo 'Lastname: ' . $row["lastname"] . '<br />';
echo 'Address: ' . $row["address"] . '<br />';
echo 'Contact #: ' . $row["contact_no"] . '<br />';
echo 'Gender: ' . $row["gender"] . '<br />';
echo 'Website: ' . $row["website"] . '<br />';
 
}
}
?>	</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
