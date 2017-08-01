<?php 

session_start();
include("dbconnection.php");
include('config.php');
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from members where FirstName like '%$q%' or LastName like '%$q%' order by member_id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['FirstName'];
$lname=$row['LastName'];
$img=$row['profImage'];
$country=$row['curcity'];
$id=$row['member_id'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);

$final_lname = str_ireplace($q, $re_lname, $lname);


?>
<div class="display_box" align="left">

<img src="<?php 
echo $img; ?>" style="width:30px; height:30px; float:left; margin-right:6px" /><?php 
 echo '<a href=friends1.php?id=' . $id . '>'.$final_fname; ?>&nbsp;<?php 
 echo $final_lname; ?><br/>
<span style="font-size:9px; color:#999999"><?php 
 echo $country; ?></span></div>



<?php 

}

}
else
{

}


?>
