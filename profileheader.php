    <div class="search">
      <form action="friends.php" method="GET">
        <input name="query" type="text" maxlength="30" class="textfield" />
      </form>
    </div>
    <div class="nav">
      <ul id="sddm">
        <li><a href="lol.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">Home</a>
          <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> </div>
        </li>
        <li><a href="INFO.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Profile</a>
          <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> </div>
        </li>
        <li><a onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
          <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="profile.php">
            <?php 

$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");

echo "<br />";
while($row = mysql_fetch_array($result))
  {

  echo "<img width=70 height=90 alt='Unable to View' src='" . $row["profImage"] . "'>";
  echo '<br />';
  echo $_SESSION['SESS_FIRST_NAME']." ". $row["LastName"] ;
 
  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

 
?>
 </a>
 <a href="editfriends.php">Edit Friend</a>
 <a href="accountsettings.php">Account Setting</a>
<a href="index.php">Logout</a> </div>
        </li>
      </ul>
      <div style="clear:both"></div>
      <div style="clear:both"></div>
    </div>