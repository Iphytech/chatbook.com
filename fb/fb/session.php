<?php 
//www.freestudentprojects.com
error_reporting();
if (empty($_SESSION['log']['UserName'])) {
require('denied.php');
exit;
}
$user =  $_SESSION['log']['UserName'];
if (!$user) { 
require('denied.php');
exit;
}
?>