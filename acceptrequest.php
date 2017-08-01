
<?php 

	require_once('auth.php');
?>

<form action="acceptrequest1.php" method="post">
<?php 

				  if (isset($_GET['id']))
	{
			 
			$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("UPDATE friendlist SET status = 'accepted' WHERE friends_id='$member_id'");
			while($row = mysql_fetch_array($result))
			  {
			   echo'<input type="hidden" name="wala" value="'. $row['firstname'] .'">'; 
			   echo'<input type="hidden" name="friend_id" value="'. $row['friends_id'] .'">'; 
			 
					echo '<br />';
			  }
			}
			?>
<?php 

				  if (isset($_GET['id']))
	{
			 
			$firstname = $_GET['id'];
			$result1 = mysql_query("SELECT * FROM friendlist WHERE friends_id = $firstname");
			while($row1 = mysql_fetch_array($result1)){
			$name = $row1['addby'];
			}
			$result = mysql_query("SELECT * FROM members WHERE FirstName = '$name'");
			
			while($row = mysql_fetch_array($result))
			  {
			  
			   echo'<input type="hidden" name="firstname" value="'. $row['FirstName'] .'">'; 
			    echo'<input type="hidden" name="lastname" value="'. $row['LastName'] .'">'; 
				 echo'<input type="hidden" name="address" value="'. $row['Address'] .'">'; 
				  echo'<input type="hidden" name="contact_no" value="'. $row['ContactNo'] .'">'; 
				   echo'<input type="hidden" name="website" value="'. $row['Url'] .'">'; 
				    echo'<input type="hidden" name="gender" value="'. $row['Gender'] .'">'; 
					 echo'<input type="hidden" name="status" value="accepted">'; 
					  echo'<input type="hidden" name="location" value="'. $row['profImage'] .'">'; 
					  echo '<br />';
			echo 'the requestor is saying thank you to ' . $row['FirstName'] . '';
					
					echo '';
			  }
			
			}
			?>
			<input name="addfriend" type="submit" value="OK" class="greenButton" />

			</form>
