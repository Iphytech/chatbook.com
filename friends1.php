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
    <div class="propic">
	<?php 

							if (isset($_GET['id']))
							{
						
						$member_id = $_GET['id'];
						$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
						
						$row = mysql_fetch_array($result);
						if (!$result) 
												{
												echo "wala";
												}
												else{
						echo "<br />";
						echo "<img width=106 height=140 alt='Unable to View' src='" . $row["location"] . "'> <br />";
						
						 
						}
						}
						?>
	</div>
	
	
    <div class="link style1">
	
	<ul id="sddm1">
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/wal.png" width="17" height="17" border="0" /> &nbsp;<font color="#0000FF">Wall</font></a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="INFO.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/message.png" width="16" height="12" border="0" /> &nbsp;Info</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="photolist.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/photos.png" width="16" height="14" border="0" /> &nbsp;Photos (<?php 


$result = mysql_query("SELECT * FROM photos WHERE uploadedby='".$_SESSION['SESS_FIRST_NAME'] ."'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="1" color="blue"><b>' . $numberOfRows . '</b></font>'; 
	?>)	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="friends.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/friends.png" width="18" height="15" border="0" /> Friends
	(<?php 


$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted' ORDER BY addby ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo '<font size="1" color="blue"><b>' . $numberOfRows. '</b></font>';
	?>)
	
	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li>
</ul>
<div style="clear:both"></div>

<div style="clear:both"></div>
	
	
	</div>
	
    <div class="friends">
	<strong><div align="center"></div>
	</strong>
	<div align="center"><div id='basic-modal'><a class='basic' href="#" style="text-decoration:none;">View all Friend</a></div>
	
	<div id="basic-modal-content">
	
					<?php 


				$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted'");
				echo $_SESSION['SESS_FIRST_NAME'];
				echo '>';
				echo 'Friends';
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
				  echo '<div align="left" valign="center">';
				  echo '&nbsp;&nbsp;';
				  echo '<a href=friendsprofile.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
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

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
		<!--end of popup-->
		<?php 



$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."'  and status='accepted' ORDER BY RAND() LIMIT 4");

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
  echo '<a href=http://localhost/PHP-Login/friendsprofile1.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
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
	
	
	
  <div class="right">
    <div class="rightleft">
      <div class="name"><strong>
        <?php 

				  if (isset($_GET['id']))
	{
			
			$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
			
			while($row = mysql_fetch_array($result))
			  {
			  
			  echo "<p><h3>".$row['FirstName']." ".$row['LastName']."</h3>"."</p>";
			
					//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
					//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
					
			  }
			
			 
			}
			?>
      </strong></div>
	  
      <div class="addbutton">
	  
	  </div>
      <div class="information">
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM members WHERE member_id = $member_id");

while($row = mysql_fetch_array($result))
  {
  
  echo "Live in: "."<b>".$row['Address']."</b>"."    |    " ."Gender : "."<b>".$row['Gender']."</b>"; 
		
  }

 
}
?>
      </div>
      <div class="EDUC"><strong> Education and Work </strong> </div>
      <div class="educinfo"> <span class="style3">College</span><br />
          <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];

$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo $row1['college'];
   }
 
}
?>
      </div>
      <div class="educinfo"> <span class="style3">High School</span><br />
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			
$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo $row1['highschool'];
   }
 
}
?>
      </div>
      <div class="educinfo"> <span class="style3">Share your Experiences</span><br />
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
		
$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo $row1['experiences'];
   }
 
}
?>
      </div>
      <div class="EDUC1"><strong> Arts and Entertainment</strong></div>
      <div class="educinfo">
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			
$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo $row1['arts'];
   }
 
}
?>
        <br />
      </div>
      <div class="EDUC1"><strong> Basic Information</strong></div>
      <div class="educinfo1"><span class="educinfo">
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			
$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo '<br>';
  	  echo 'About You';
	  echo '&nbsp;&nbsp;';
	  echo $row1['aboutme']."<br>";
	  echo 'Current City';
	  echo '&nbsp;&nbsp;';
	  echo $row1['curcity']."<br>";
	  echo 'Home Town';
	  echo '&nbsp;&nbsp;';
	  echo $row1['hometown']."<br>";
	  echo 'Interested In';
	  echo '&nbsp;&nbsp;';
	  echo $row1['Interested'];
   }
 
}
?>
      </span></div>
      <div class="educinfo"> <span class="style3">Gender</span> <br />
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			
$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo $row1['Gender'];
   }
 
}
?>
      </div>
      <div class="EDUC1"><strong> Contact Information</strong></div>
      <div class="educinfo"> <span class="style3">Email</span> <br />
        <?php 

if (isset($_GET['id'])){


$member_id = $_GET['id'];
			
$result1 = mysql_query("SELECT * FROM members WHERE member_id = $member_id");
while($row1 = mysql_fetch_array($result1))
  {
  echo $row1['Url'];
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
