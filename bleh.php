<?php 

session_start();
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="bleh.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(img/New%20Picture.jpg);
	background-repeat: repeat-x;
}
-->
</style>

</head>

<body>

<div class="main">
  <div class="header">C</div>
  <div class="logo"><img src="" />
    <div class="notification">
	<a href="confirm.php"><img src="images/Untitled-1.png" width="15" height="15" border="0" /></a>&nbsp;&nbsp;
		<?php 


$result = mysql_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="2" color="red"><b>' . $numberOfRows . '</b></font>'; 
	?>
		
		<a href="unread.php"><img src="images/messages.png" width="15" height="15" border="0" /></a>&nbsp;&nbsp;
		<?php 


$result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo '<font size="2" color="red"><b>' . $numberOfRows. '</b></font>';
	?>
		
		
	
	</div>
  </div>
  <div class="left">
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
	
	
    <div class="editpic">
	<p align="center"><a href="editpic.php">Edit Profile Pic </a></p>
	<p align="center"><a href="messageform.php">sent message</a></p>
	<p align="center"><a href="photos.php"><img src="img/photos.png" width="20" height="20" border="0" />Photos</a></p>
   
    </div>
  </div>
  
  <div class="center">
  
   <form  name="form1" method="post" action="save.php">
         <div class="comment"><textarea name="message" cols="45" rows="2" id="message"></textarea>
         </div>
		 <input name="name" type="hidden" id="name" value="<?php 
echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		 <input name="name1" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_LAST_NAME'];?>"/>
          <div class="button"><input type="submit" name="btnlog" value="Share" class="greenButton1" /></div>
    </form>
  </div>
  
  <div class="right">
    <p>Content for  class "center" Goes Here</p>
     <p>h</p>
    <p>h</p>
    <p>h</p>
    <p>h</p>
    <p>h</p>
    <p>h</p>
    <p>h</p>
    <p>h</p>
  </div>
</body>
</html>
