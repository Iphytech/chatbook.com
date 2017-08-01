    <div class="propic">
      <?php 

$id= $_SESSION['SESS_MEMBER_ID'];

$image=mysql_query("SELECT * FROM members WHERE member_id='$id'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['imageko']= $row['profImage'];
			echo '<div id="pic">';
			echo "<img width=100 height=100 alt='Unable to View' src='" . $_SESSION['imageko'] . "'>";
			echo '</div>';
 
?>
    </div>
	
	
    <div class="link style1">
	
	<ul id="sddm1">
	<li><a href="lol.php" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/wal.png" width="17" height="17" border="0" /> &nbsp;Wall</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
   	<li><a href="editpic.php" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/photos.png" width="17" height="17" border="0" /> &nbsp;Edit profile pic</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br /> 
	<li><a href="INFO.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/message.png" width="16" height="12" border="0" /> &nbsp;<font color="#0000FF">Profile Info</font></a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="photolist.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/photos.png" width="16" height="14" border="0" /> &nbsp;Photos
	
	
	(<?php 


$result = mysql_query("SELECT * FROM photos WHERE uploadedby='".$_SESSION['SESS_MEMBER_ID'] ."'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="1" color="blue"><b>' . $numberOfRows . '</b></font>'; 
	?>)
	
	
	
	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><a href="editfriends.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/friends.png" width="18" height="15" border="0" /> Friends 
	
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
	</strong><br />
	<?php 

$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted' ORDER BY RAND() LIMIT 4");

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

?>
	</div>