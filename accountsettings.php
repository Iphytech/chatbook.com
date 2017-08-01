<?php 

session_start();
	require_once('auth.php');
	include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="">
<meta name="description" content="">
<title></title>
<link href="format.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
.style2 {font-size: 12px}
.style3 {color: #0000FF}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>

<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
</head>

<body>

<div class="main">

   <?php 

 include("top.php");
 ?>
	
  
  <div class="left">
<?php 
 include("profilesidebar.php") ; ?>
  </div>
	
	
	
  <div class="right">
    <div class="rightleft">
      <div class="buttonback1"></div>
      <div class="EDUC">
       <?php 

        if(isset($_POST[submit]))
        {
			echo "<h3>User account updated successfully...<br><br>
			<a href='accountsettings.php'>Continue</a>
			</h3>";
		}
		else
		{
			?>
        <form action="" method="post" enctype="multipart/form-data">
  <h3>Update username and Email ID</h3><br />
  <p>
    <label for="name">User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input name="name" type="text" id="name" size="35" />
  </p>
  <br />
  <p>
    <label for="name2">Email ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input name="name2" type="text" id="name2" size="35" />
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Update"  class="greenButton"/>
  </p>

        </form>
        <?php 

		}
		?>
        <br />
        <hr /><br />
        
        <?php 

        if(isset($_POST[submit1]))
        {
			echo "<h3>Password updated successfully...<br><br><a href='accountsettings.php'>Continue</a>
			</h3>";
		}
		else
		{
			?>
        <form action="" method="post" enctype="multipart/form-data">
  <h3>Change Password</h3><br />
  <p>Old Password
    <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input name="name" type="text" id="name" size="35" />
  </p>
  <br />
  <p>New Password
    <label for="name2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input name="name2" type="text" id="name2" size="35" />
  </p><br />
  <p>Confirm Password&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="name3" type="text" id="name3" size="35" />
  </p>
  <p>
    <input type="submit" name="submit1" id="submit1" value="Change password"  class="greenButton"/>
  </p>

        </form>
<?php 

		}
		?>
</div>
	  <div class="photoslist"></div>



      
    </div>
	
	
	
	<div class="rightright">
	
	
	  <div class="rightright1">People You May Know</div>
	  <div class="rightright2">
	  
	  
	  <?php 


$result = mysql_query("SELECT * FROM members ORDER BY RAND() LIMIT 4");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  echo '<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">';
  echo '<tr>';
  echo '<td width="50px" colspan="0" rowspan="3" align="left" valign="top">';
  echo "<img width=50 height=50 alt='Unable to View' src='" . $row["profImage"] . "'>";
  echo '</td>';
  echo '<td height="16">&nbsp;</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="17">';
  echo '<div align="left">';
  echo '&nbsp;&nbsp;';
  echo '<a href=friendsprofile1.php?id=' . $row["member_id"] . '>' . $row['FirstName'] . '</a>';
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

 
?>
	  
	  
	  
	  </div>
	</div>
	
	
	
	
	
  </div>
</div>
</body>
</html>
