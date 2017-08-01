      <div align="left">
        <h4 class="uiHeaderTitle">Events</h4>
        <a rel="facebox" class="cancel" href="javascript:void(0)">Cancel</a></div>
      <div align="left">
        <form action="" method="post" name="EventForm" id="EventForm">
          <input id="EventInput" name="EventInput" maxlength="40"  value="" />
          <br clear="all" />
          <div id="EventBox">
            <input type="text" id="datepicker" name="datepicker" maxlength="50" value="Today" />
            <select id="start_time_min" name="start_time_min">
              <option value="00:00">12:00 am</option>
              <option value="00:30">12:30 am</option>
              <option value="1:00">1:00 am</option>
              <option value="1:30">1:30 am</option>
              <option value="2:00">2:00 am</option>
              <option value="2:30">2:30 am</option>
              <option value="3:00">3:00 am</option>
              <option value="3:30">3:30 am</option>
              <option value="4:00">4:00 am</option>
              <option value="4:30">4:30 am</option>
              <option value="5:00">5:00 am</option>
              <option value="5:30">5:30 am</option>
              <option value="6:00">6:00 am</option>
              <option value="6:30">6:30 am</option>
              <option value="7:00">7:00 am</option>
              <option value="7:30">7:30 am</option>
              <option value="8:00">8:00 am</option>
              <option value="8:30">8:30 am</option>
              <option value="9:00">9:00 am</option>
              <option value="9:30">9:30 am</option>
              <option value="10:00">10:00 am</option>
              <option value="10:30">10:30 am</option>
              <option value="11:00">11:00 am</option>
              <option value="11:30">11:30 am</option>
              <option value="12:00">12:00 pm</option>
              <option value="12:30">12:30 pm</option>
              <option selected="selected" value="13:00">1:00 pm</option>
              <option value="13:30">1:30 pm</option>
              <option value="14:00">2:00 pm</option>
              <option value="14:30">2:30 pm</option>
              <option value="15:00">3:00 pm</option>
              <option value="15:30">3:30 pm</option>
              <option value="16:00">4:00 pm</option>
              <option value="16:30">4:30 pm</option>
              <option value="17:00">5:00 pm</option>
              <option value="17:30">5:30 pm</option>
              <option value="18:00">6:00 pm</option>
              <option value="18:30">6:30 pm</option>
              <option value="19:00">7:00 pm</option>
              <option value="19:30">7:30 pm</option>
              <option value="20:00">8:00 pm</option>
              <option value="20:30">8:30 pm</option>
              <option value="21:00">9:00 pm</option>
              <option value="21:30">9:30 pm</option>
              <option value="22:00">10:00 pm</option>
              <option value="22:30">10:30 pm</option>
              <option value="23:00">11:00 pm</option>
              <option value="23:30">11:30 pm</option>
            </select>
            <br clear="all" />
            <input id="Where" name="Where" maxlength="100" value="" />
            <br clear="all" />
            <input id="WhoInvited" name="WhoInvited" maxlength="100"  value="" />
            <br clear="all" />
            <a id="CreateEvent" class="small button comment"> Create Event</a></div>
        </form>
        <br clear="all" />
        <div id="ShowEvents" align="center">
          <?php 
	include_once('event.php');?>
        </div>
      </div>
      
      	
	  <div class="rightright1">People You May Know</div>
	  <div class="rightright2">
	  
	  
	  <?php 


$result = mysql_query("SELECT * FROM members ORDER BY RAND() LIMIT 2");

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