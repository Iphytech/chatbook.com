<?php 

session_start();
include("dbconnection.php");

require_once('auth.php');
$user=$_POST['userid'];
$current=$_POST['curcity'];
$hometown=$_POST['hometown'];
$interested=$_POST['Interested'];
$language=$_POST['language'];
$college=$_POST['college'];
$highschool=$_POST['highschool'];
$experince=$_POST['experiences'];
$arts=$_POST['arts'];
$aboutme=$_POST['aboutme'];
$gender=$_POST['Iam'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$bday=$_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'];

mysql_query("UPDATE members SET curcity='$current', hometown='$hometown', Interested='$interested', language='$language', college='$college', highschool='$highschool', experiences='$experince', arts='$arts', aboutme='$aboutme', Gender='$gender', month='$month', day='$day', year='$year', Birthdate='$bday' WHERE member_id='$user'");

header("location: INFO.php");

 
?> 