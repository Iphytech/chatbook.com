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
	<li><a href="friendsprofile1.php?id="<?php 
echo $_GET['id']; ?>" onmouseover="mopen('m3')" onmouseout="mclosetime()">
    <font color="#0000FF">Wall</font></a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><?php 

	if (isset($_GET['id']))
	{

	$info=$_GET['id'];
$result = mysql_query("SELECT * FROM friendlist WHERE friends_id='$info'");


while($row = mysql_fetch_array($result))
  {
  
  echo "<a href=friendsinfo.php?id=$row[friends_id]>";
  echo "Info</a>";
  }
	}
	?>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li>
	
	<!--link to view photos--><!--counterphotos-->
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
	$photo=$_GET['id'];
$result = mysql_query("SELECT * FROM friendlist WHERE friends_id='$photo'");


while($row = mysql_fetch_array($result))
  {
  
  echo '<a href=friendphoto.php?id=' . $row["friends_id"] . '>' . "Photos" . '   ('. $numberOfRows . ')' . '</a>';
 
  }
	//echo '<font size="1" color="blue"><b>' . $numberOfRows . '</b></font>'; 
	
	}
	?>
	
	
	
	</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
	</li><br />
	<li><?php 

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
	$photo=$_GET['id'];
$result = mysql_query("SELECT * FROM friendlist WHERE friends_id='$photo'");


while($row = mysql_fetch_array($result))
  {
  
  echo '<a href=friendsfriends.php?id=' . $row["friends_id"] . '>' . "Friends" . '   ('. $numberOfRows . ')' . '</a>';
 
  }
	}
	?></a>
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
  echo '<a href=friendsprofile1.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a>';
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