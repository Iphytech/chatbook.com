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
<title>Chatbook :: Ifunanya Ikemma</title>
<link href="format.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-family: Calibri}
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
 include("top.php"); ?>
  
  <div class="left">
<?php 
 include("profilesidebar.php"); ?>
	
  </div>
  <div class="right">
    <div class="rightleft">
	  <div class="name"><strong><?php 


$result = mysql_query("SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row = mysql_fetch_array($result))
  {
  
  echo "<h3>".$row['FirstName']." ".$row['LastName'].">Photos"."</h3>";
  

  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

 
?></strong></div>

<form action="savecomment.php" method="get">

      <div class="photocommentlist">
	  
	  <?php 

	if (isset($_GET['id']))
	{


$member_id = $_GET['id'];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM photos WHERE photo_id = $member_id");

$row = mysql_fetch_array($result);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo "<br />";
echo "<img width=500 height=300 alt='Unable to View' src='" . $row["location"] . "'> <br />";
  echo'<input type="hidden" name="useid" value="'. $row["photo_id"] .'"."<br>';

 
}
}
?>
	  
	  </div>
	  
	  
	  
      <div class="commentphoto">
	  
	    <div class="commentphoto2">
		
		<?php 

		if (isset($_GET['id']))
	{

$member_id = $_GET['id'];

$query  = "SELECT * FROM photoscomment WHERE commentby='$member_id' ORDER BY comment_id DESC";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))
{
echo '<div class="white">';
   echo '<font color="Blue">';
   echo '<b>';
   echo '<div class="style1">';
   echo $_SESSION['SESS_FIRST_NAME'];
   
   echo '</b>';
   echo '</font>';
   echo '&nbsp;&nbsp;';
	//echo'<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	echo '<font size="1px">';
	echo "<b>{$row['comment']}</b><br>";
	echo '</font>';
	
echo '</div>';
echo '</div>';
} 

if (!mysql_query($query,$con))
  {
  die('Error: ' . mysql_error());
  }

}
mysql_close($con)

?>
		
		
		</div>
		
	  </div>
	  <div class="commentphoto1">
	    <input type="text" name="textfield" value="-Leave comment Here-" onclick="this.value='';" />
	    <input type="hidden" name="textfield1" value="<?php 
echo $_SESSION['SESS_LAST_NAME'];?>" />
	    <input type="submit" name="Submit" value="Submit" />
       
	  </div></form>
    </div>
    </div>
	
</div>
</body>
</html>
