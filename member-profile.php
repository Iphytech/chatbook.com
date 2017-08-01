<?php 

session_start();
include("dbconnection.php");
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Chatbook :: Ifunanya Ikemma<?php ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").bind("click",function(){
    $("p").slideToggle();
  });
});
</script>
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

<table width="790" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#B9D3D3" bgcolor="#F0F0F0">
  <tr>
    <td height="28" colspan="2" bgcolor="#0000FF"><table width="25%" height="15" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FF8080">
        <td width="1" bgcolor="#0000FF" onmouseover="showmenu('scripting')" onmouseout="hidemenu('scripting')"><a></a><br /></td>
        <td width="53" bgcolor="#0000FF" onmouseover="showmenu('tutorials')" onmouseout="hidemenu('tutorials')"><a href="member-profile.php">Home</a><br />        </td>
        <td width="63" bgcolor="#0000FF" onmouseover="showmenu('scripting')" onmouseout="hidemenu('scripting')"><a href="member-index.php">Profile</a><br />        </td>
        <td width="80" bgcolor="#0000FF" onmouseover="showmenu('validation')" onmouseout="hidemenu('validation')"><a>Account</a><br />
            <table class="menu" id="validation" width="150px">
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
    <td width="184" rowspan="2" valign="top"><p>&nbsp;</p>
      <p>&nbsp;
	  <?php 


$id= $_SESSION['SESS_MEMBER_ID'];

$image=mysql_query("SELECT * FROM members WHERE member_id='$id'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['imageko']= $row['profImage'];
			echo '<div id="pic">';
			echo "<img width=200 height=200 alt='Unable to View' src='" . $_SESSION['imageko'] . "'>";
			echo '</div>';
 
?>
	  </p>
      <p align="center"><a href="editpic.php">Edit Profile Pic </a></p>
      <p align="center"><a href="messageform.php">sent message</a></p>
      <p align="center"><a href="photos.php"><img src="img/photos.png" width="20" height="20" border="0" />Photos</a></p>
      <p align="center"><a href="upload.php"><input type="submit" name="Submit" value="                " class="greenButton" />
	 
        
	
        <label></label>
      </a>      
      <p align="center"><a href="lol.php">bleh</a></td>
    <td width="600" height="80"><label>
      <br/>
	  <form id="form1" name="form1" method="post" action="save.php">
         &nbsp;&nbsp;<textarea name="message" cols="66" rows="5" id="message"></textarea>
		 <input name="name" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		 <input name="name1" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_LAST_NAME'];?>"/>

		 
	    <div align="right">
	      <input type="submit" name="btnlog" value="Share" />&nbsp;&nbsp;&nbsp;	    </div>     
        </label>    
      </p>
    </form></td>
  </tr>
  <tr>
    <td height="25">
	<form id="form2" name="form2" method="post" action="save1.php">
	<?php 


$query  = "SELECT * FROM message ORDER BY messages_id DESC";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))
{
    //echo "POST by " . $_SESSION['SESS_FIRST_NAME'] . ": {$row['messages']} <br><br>";
	//echo'<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	echo '<div id="error">';
	echo "<img width=50 height=50 alt='Unable to View' src='" . $row["picture"] . "'>";
	echo "Posted by {$row['user']}:</div><br><br><b>{$row['messages']}</b></div> <br><br>";
	 //echo"Comment:". '<input type="text" name="comment" class="textfield">';
	 //echo'<input type="submit" name="addfriend" value="addfriend">';
	//echo "____________________________________________________________________________________<br>";
	//echo '</div>';
} 

if (!mysql_query($query,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>	
</form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
 
</html>

