
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
<title><?php ?> Profile</title>
<link type='text/css' href='css1/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<link href="format.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
.style2 {font-size: 12px}
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
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	color: #0033FF;
	text-decoration: underline;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style3 {color: #0000FF}
</style>
</head>

<body>
<div class="main1">

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
      <div class="name"><strong>
        <?php 

				  if (isset($_GET['id']))
	{
			
			$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			
			while($row = mysql_fetch_array($result))
			  {
			  
			  echo "<p><h3>".$row['firstname']." ".$row['lastname']."</h3>"."</p>";
			
					//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
					//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
					
			  }
			
			}
			?>
      </strong></div>
      <div class="information">
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");

while($row = mysql_fetch_array($result))
  {
  
  echo "Live in: "."<b>".$row['address']."</b>"."    |    " ."Gender : "."<b>".$row['gender']."</b>"; 
		
  }

}
?>
      </div>
      <div class="EDUC"><strong> Friends Photos </strong> </div>
      <div class="educinfo2"><br />
          <?php 

		  if (isset($_GET['id'])){

$member_id = $_GET['id'];
			$result1 = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");

while($row1 = mysql_fetch_array($result1))
  {
$uploadedby=$row1['firstname'];	
  }

$result = mysql_query("SELECT * FROM photos WHERE uploadedby='$uploadedby'  ORDER BY photo_id DESC");


while($row = mysql_fetch_array($result))
  {

  //echo "<img width=100 height=100 alt='Unable to View' src='" . $row["location"] . "'>";

 echo '<a href=photocomment.php?id=' . $row["photo_id"] . '>' . "<img width=100 height=100 alt='Unable to View' src='". $row["location"] . "'>" . '</a>';

  echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

  }
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
  echo '<a href=member-index.php?id=' . $row["member_id"] . '>' . $row['FirstName'] . '</a>';
  echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td height="16">&nbsp;</td>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';
  		
		
  }

?>
	  
	  
	  
	  </div>
	</div>
	
  </div>
</div>
</body>
</html>
