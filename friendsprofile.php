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
<title><?php ?> Information</title>
<link href="format.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
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
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/wal.png" width="17" height="17" border="0" /> &nbsp;Wall</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/message.png" width="16" height="12" border="0" /> &nbsp;Info</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a  onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/photos.png" width="16" height="14" border="0" /> &nbsp;
	
	
	<?php 

	 if (isset($_GET['id']))
	{

	$member_id = $_GET['id'];
			$result1 = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			
			while($row = mysql_fetch_array($result1))
			  {
			  $uploaded=$row['firstname'];
			  }

$result = mysql_query("SELECT * FROM photos WHERE uploadedby='$uploaded'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo 'Photos(';
	
	echo '<font size="1" color="blue"><b>' . $numberOfRows . '</b></font>'; 
	echo ')';
	}
	?>
	
	
	
	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="friends.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/friends.png" width="18" height="15" border="0" /> <?php 

	if (isset($_GET['id']))
	{

	$member_id = $_GET['id'];
			$result1 = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			
			while($row = mysql_fetch_array($result1))
			  {
			  $friendlist=$row['firstname'];
			  }


$result = mysql_query("SELECT * FROM friendlist WHERE addby='$friendlist' and status='accepted' ");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo 'Friends(';
	echo '<font size="1" color="blue"><b>' . $numberOfRows. '</b></font>';
	echo ')';
	}
	?>
	
	
	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li>
</ul>
<div style="clear:both"></div>

<div style="clear:both"></div>
	
	
	</div>
	
	<div class="friends">
	<strong><div align="center"></div>
	</strong><br />
	<?php 

if (isset($_GET['id']))
	{

	$member_id = $_GET['id'];
			$result1 = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			
			while($row = mysql_fetch_array($result1))
			  {
			  $friendlist=$row['firstname'];
			  }

$result = mysql_query("SELECT * FROM friendlist WHERE addby='$friendlist' and status='accepted' ORDER BY RAND() LIMIT 4");

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
  echo '<a href=remarks.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
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

 
}
?>
	
	</div>
	
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

<!--<div class="buttonback1">
		
<a href="editprofile.php"><input name="back" type="button" value="Edit My Profile" class="greenButton" /></a>

	  </div>-->



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






	  
	  <div class="educinfo">
	    <div class="shoutout">
          <form action="save.php" method="post"  name="form1" id="form1">
            <div class="comment">
              <textarea name="message" cols="45" rows="2" id="message" onclick="this.value='';">What's on your mind.................</textarea>
            </div>
            <input name="name" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
            <input name="poster" type="hidden" id="name" value="<?php 
echo $_SESSION['SESS_FIRST_NAME'];?>"/>
            <input name="name1" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_LAST_NAME'];?>"/>
            <div class="button">
              <input type="submit" name="btnlog" value="Share" class="greenButton" />
            </div>
          </form>
        </div>
		<br>
		<!--show post-->
		
		
		
		<div class="post">
	  <?php 



$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE poster='".$_SESSION['SESS_FIRST_NAME'] ."'ORDER BY messages_id DESC";
$result = mysql_query($query);


			
			
			

while($row = mysql_fetch_assoc($result))
{
    //echo "POST by " . $_SESSION['SESS_FIRST_NAME'] . ": {$row['messages']} <br><br>";
	//echo'<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	echo '<div class="pic1">';
	echo "<img width=50 height=50 alt='Unable to View' src='" . $row["picture"] . "'>";
	echo'</div>';
	echo '<div class="message">';
	echo "Posted by {$row['user']}:<br></div><b><div class='postedby'>{$row['messages']}</b>";
	echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=deletepost.php?id=' . $row["messages_id"] . '>' . "DELETE" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo'</div>';
	echo '<font color="blue">';
	echo '<br>';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
			
			echo '</font>';	
			echo '<form action="like.php" method="post">';
			echo'<input type="submit" name="addfriend" value="Like">';
			
			echo '</form>';
	echo'</div>';
	 //echo"Comment:". '<input type="text" name="comment" class="textfield">';
	 //echo'<input type="submit" name="addfriend" value="addfriend">';
	//echo "____________________________________________________________________________________<br>";
	//echo '</div>';
	
	
	
	echo '<br /><br />';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id DESC LIMIT 4";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{
		echo '<div class="postcomment">';
		echo "<img width=30 height=30 alt='Unable to View' src='" . $row1['pic'] . "'>";
		echo '<div class="commentby">';
		echo '<font color="blue">';
		echo $row1['commentedby'];
		echo '</font>';
		echo '&nbsp;&nbsp;';
		echo $row1['content'];
		echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=deletepostcommentpro.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo'</div>';
		echo '<br />';
		echo '<font color="blue">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
	echo '</div>';
		echo '</div>';
			echo '<br />';
	}
	echo '<div class="fieldcomment">';
	echo '<form action="commentpost.php" method="post">'; 
	echo'<input type="hidden" name="postid" value="'. $row['messages_id'] .'">';
	echo'<input type="hidden" name="user" value="'. $_SESSION['SESS_FIRST_NAME'] .'">';
	echo'<input type="hidden" name="pic" value="'. $_SESSION['SESS_LAST_NAME'] .'">';
	echo'<input type="text" name="postcomment">';
	echo'<input type="submit" name="addfriend" value="comment">';
	echo '</form>';
	echo '</div>';
} 

if (!mysql_query($query,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>
	  
	  </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--end of show post-->
		
		
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
