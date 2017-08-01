<table width="100%" border="1">
  <tr>
    <td colspan="2">Header</td>
  </tr>
  <tr>
    <td width="200">Friends
<?php 



$result = mysql_query("SELECT member_id, firstname, url FROM members ORDER BY firstname ASC");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  		echo '<a href=http://localhost/member_details.php?id=' . $row["member_id"] . '>' . $row['firstname'] . '</a><br />';
  }

 
?>	</td>
    <td>Content</td>
  </tr>
  <tr>
    <td colspan="2">Footer</td>
  </tr>
</table>
