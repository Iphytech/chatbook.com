<?php 

session_start();
	require_once('auth.php');
	include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="">
<meta name="description" content="">
<title>Welcome to Chatbook :: Ifunanya Ikemma<?php ?></title>
<link type='text/css' href='css1/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
<link href="format.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
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
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<link href="screen.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery.livequery.js"></script>
<script src="jquery.watermarkinput.js" type="text/javascript"></script>
<script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
<script type="text/javascript" src="datepicker/ui.datepicker.js"></script>
<link rel="stylesheet" href="datepicker/ui.datepicker.css" type="text/css">
<link rel="stylesheet" href="datepicker/ui.theme.css" type="text/css">
<link rel="stylesheet" href="datepicker/demos.css" type="text/css">
<script type="text/javascript">
	// <![CDATA[	
	$(document).ready(function(){	
		
		// click to submit an event
		$('#CreateEvent').click(function(){

			var a = $("#EventInput").val();
			if(a != "What are you planning?")
			{
				$.post("event.php?val=1&"+$("#EventForm").serialize(), {
	
				}, function(response){
					$('#ShowEvents').prepend($(response).fadeIn('slow'));
					clearForm();
				});
			}
			else
			{
				alert("Enter event name.");
				$("#EventInput").focus();
			}
		});	
		
		// delete event
		$('a.delete').livequery("click", function(e){
			if(confirm('Are you sure you want to delete?')==false)

			return false;
	
			e.preventDefault();
			var parent  = $(this).parent();
			var id =  $(this).attr('id').replace('record-','');	
			
			$.ajax({
				type: 'get',
				url: 'delete.php?id='+ id,
				data: '',
				beforeSend: function(){
				},
				success: function(){
					parent.fadeOut(200,function(){
						parent.remove();
					});
				}
			});
		});	
		
		// show form when input get focus
		$('#EventInput').focus(function(){
			$('#EventBox').fadeIn();
			$('a.cancel').fadeIn();
		});	
		
		// hide for when click on cancel
		$('a.cancel').click(function(){
			$('#EventBox').fadeOut();
			$('a.cancel').hide();
		});	
		
		// watermark input fields
		jQuery(function($){
		   
		   $("#EventInput").Watermark("What are you planning?");
		   $("#Where").Watermark("Where?");
		   $("#WhoInvited").Watermark("Who's Invited?");
		});
		jQuery(function($){

		    $("#EventInput").Watermark("watermark","#369");
			$("#Where").Watermark("watermark","#369");
			$("#WhoInvited").Watermark("watermark","#369");
			
		});	
		function UseData(){
		   $.Watermark.HideAll();
		   $.Watermark.ShowAll();
		}

	});	
	
	// show jquery calendar
	$(function() {
		$("#datepicker").datepicker();
	});
	
	function clearForm()
	{
		$('#EventInput').val("What are you planning?");
		$('#datepicker').val("Today");
		$('#WhoInvited').val("Who's Invited?");
		$('#Where').val("Where?");
		
		$('#EventBox').hide();
		$('a.cancel').hide();
	}
	
	// ]]>
</script>
<style type="text/css">
<!--
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	color: #0033FF;
	text-decoration: underline;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>
<body>
<div class="main">
  
<?php 
 include("top.php"); ?>

  <div class="left">
<?php include("profilesidebar.php");
	?>
  </div>
  <div class="right">
    <div class="rightright">
<?php 

include("rightsidebar.php");
?>
    </div>
    <div class="rightleft">
    
    <div class="name"><strong><?php 


$result = mysql_query("SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row = mysql_fetch_array($result))
  {
  
  echo "<p><h3>".$row['FirstName']." ".$row['LastName']."</h3>"."</p>";

  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
		
  }

 
?></strong></div><br />
    <div class="information">


<?php 


$result = mysql_query("SELECT * FROM members WHERE member_id='".$_SESSION['SESS_MEMBER_ID'] ."'");

while($row = mysql_fetch_array($result))
  {
  
  echo "Live in: "."<b>".$row['Address']."</b>"."    |    "."Born on : "."<b>".$row['Birthdate']."</b>"."    |    " ."Gender : "."<b>".$row['Gender']."</b>"; 
		
  }

 
?>
</div>
      <div class="shoutout">
      
        <form  name="form1" method="post" action="save.php">
          <div class="comment">
            <textarea name="message" cols="45" rows="2" id="message" onclick="this.value='';">What's on your mind...........</textarea>
          </div>
          <input name="name" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		  <input name="poster" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		  <div class="button">
            <input type="submit" name="btnlog" value="Share" class="greenButton" />
          </div>
        </form>
      </div>
      <div class="post">
        <?php 


$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE poster='".$_SESSION['SESS_FIRST_NAME'] ."' ORDER BY messages_id DESC";
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result))
{
    //echo "POST by " . $_SESSION['SESS_FIRST_NAME'] . ": {$row['messages']} <br><br>";
	//echo'<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	?>
    <div class="pic1">
	<?php 

    echo "<img width=50 height=50 alt='Unable to View' src='" . $row["picture"] . "'>";
	echo'</div>';
	echo '<div class="message">';
	echo "Posted by {$row['user']}:<br></div><b><div class='postedby'>{$row['messages']}</b>";
	echo '<form action="like.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['SESS_FIRST_NAME'] .'">';
	echo '<input type="submit" Value="like">';
	echo '</form>';
	$result1 = mysql_query("SELECT * FROM bleh WHERE remarks='". $row['messages_id'] ."'");


if($row2 = mysql_fetch_array($result1))
  {
 $numberOfRows = MYSQL_NUMROWS($result1);	
  $numberoflikes=$numberOfRows;
  $numberoflikes1=$numberOfRows-1;
  if  (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME']) || ($numberoflikes1 > 0))
  {
  
  echo '<font color="blue"><b>' . 'You' . ' ' . '&' . ' ' . $numberoflikes1 . '</b></font>' . ' ' . 'People like this';
  }
  elseif (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME'])&& ($numberoflikes1 == 0))
  {
  echo '<font color="blue"><b>' . 'You' . '</b></font>' . ' ' . 'like this';
  }
  elseif ($numberoflikes > 0)
  {
  echo '<font color="blue"><b>' . $numberoflikes .'</b></font>' . 'people'  . 'like this';
  }
  
  }
	echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=deleteposthome.php?id=' . $row["messages_id"] . '>' . "DELETE" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo'</div>';
	echo '<br>';
	echo '<font color="blue">';
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
			//echo '<form action="like.php" method="post">';
			//echo'<input type="submit" name="addfriend" value="Like">';
			
			//echo '</form';
	?>
	</div>
	<?php 

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
	echo '<a href=deletepostcommenthome.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';
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
	echo'<input type="text" class="textbox" name="postcomment">';
	echo '</form>';
	echo '</div>';
} 

if (!mysql_query($query,$con))
  {
  die('Error: ' . mysql_error());
  }


?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
