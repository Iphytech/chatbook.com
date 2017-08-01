<?php 

	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="">
	<meta name="description" content="">
<title><?php ?> Friends List</title>
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

 include("friendssidebar.php");
 ?>
	
  </div>
	
	
	
  <div class="right">
    <div class="rightleft">
	  <div class="name"><strong><?php 



$result = mysql_query("SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row = mysql_fetch_array($result))
  {
  
  echo "<p><h3>".$row['FirstName']." ".$row['LastName']."</h3>"."</p>";

  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

?></strong></div>





<div class="information">


<?php 



$result = mysql_query("SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row = mysql_fetch_array($result))
  {
  
  echo "Live in: "."<b>".$row['Address']."</b>"."    |    "."Born on : "."<b>".$row['Birthdate']."</b>"."    |    " ."Gender : "."<b>".$row['Gender']."</b>"; 
		
  }
?>
 </div>






	  
	  <div class="EDUC"><strong>
	  Your Friends </strong></div>
	  <div class="photoslist"><?php 



$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."'");


while($row = mysql_fetch_array($result))
  {


 echo '<a href=remarks.php?id=' . $row["friends_id"] . '>' . "<img width=100 height=100 alt='Unable to View' src='". $row["location"] . "'>" . '</a>';

  echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

  }

?>
	    
	  </div>



      
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
