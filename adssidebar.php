<?php 
session_start();
include("dbconnection.php");
?>
	  <div class="rightright1">Sponsor &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href="ads.php">&nbsp;create ads </a></div>
	  <div class="rightright2">
	  <?php 

	

		$result = mysql_query("SELECT * FROM ads");
		while($row = mysql_fetch_array($result))
  		{
	  
	    echo '<table width="214" border="0" cellspacing="0" cellpadding="0">';
          echo '<tr>';
            echo '<th colspan="2" scope="col">';
			echo '<div align="left">';
			echo $row['ads_title'];
			echo '</div>';
			echo '</th>';
          echo '</tr>';
          echo '<tr>';
            echo '<td width="50" valign="top">';
			echo "<img width=50 height=50 alt='Unable to View' src='" . $row["ads_pic"] . "'>";
			echo '</td>';
            echo '<td width="138" valign="top">';
			echo '<div align="left">';
			echo $row['ads_content'];
			echo '</div>';
			echo '</td>';
          echo '</tr>';
        echo '</table>';
		}

		 
		?>
	  </div>