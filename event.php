<?php 

include("dbconnection.php");

function checkValues($value)
{
	$value = trim($value);
	if (get_magic_quotes_gpc()) 
	{
		$value = stripslashes($value);
	}
	$value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
	$value = strip_tags($value);
	$value = mysql_real_escape_string($value);
	$value = htmlspecialchars($value);
	return $value;
}	
$limit = "";
$users_ip = $_SERVER['REMOTE_ADDR'];
if(@$_REQUEST['val'])
{
	$EventInput 	= checkValues($_REQUEST['EventInput']);
	$datepicker 	= checkValues($_REQUEST['datepicker']);
	
	$datepicker 	= $datepicker.' '.$_REQUEST['start_time_min'];
	$datepicker 	= strtotime($datepicker);
	
	$where_text 	= checkValues($_REQUEST['Where']);
	$WhoInvited 	= checkValues($_REQUEST['WhoInvited']);
	
	mysql_query("INSERT INTO event (EventInput,datepicker,where_text,WhoInvited,users_ip,date_created) VALUES('".$EventInput."','".$datepicker."','".$where_text."','".$WhoInvited."','".$users_ip."','".strtotime(date("Y-m-d H:i:s"))."')");
	
	$limit = "limit 1";
}

$result = mysql_query("SELECT * FROM event where users_ip = '".$users_ip."' order by id desc ".$limit);

while ($row = mysql_fetch_array($result))
{?>
   <div class="show_event">
   	   <img src="ico.png" style="float:left;" alt="" />
	   <label style="float:left" class="text">
	   <b><?php 
 echo $row['EventInput'];?></b>
	   <br />
	   <?php 
 echo $row['where_text'];?>
	   <br />
	   <?php 
 echo date("F d, Y h:ia",$row['datepicker']);?>
	   </label>

	   <a href="event.php?eventid=<?php 
  echo $row['id']?>" >x</a>
		<br clear="all" />
   </div>
<?php 

}
if(isset($_GET[eventid]))
{
mysql_query("DELETE FROM event where id='$_GET[eventid]'");
header("Location: lol.php");
}
?>