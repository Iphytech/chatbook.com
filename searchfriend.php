<?php 

session_start();
include("dbconnection.php");
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index :: Chatbook :: Ifunanya Ikemma</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(img/footer.jpg);
	background-repeat: repeat-x;
	background-position:bottom;
	background-color:#3897cf;
}
-->
</style>
</head>
<body>
<h1 align="center">Welcome <?php 
 echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div align="center"><a href="member-profile.php">My Profile</a> |<a href="log-in.php"> Logout</a>| <a href="searchfriend.php">searchfriend</a></div>
<p align="center">This is a password protected area only accessible to members. </p>
<table width="790" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">
	<form action="searchfriend.php" method="GET">  
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</form>	</td>
  </tr>
  <tr>
    <td height="26" colspan="3"><p>
    
	  <form action="addfriend.php" method="POST">
	
 <input name="name" type="hidden" id="name" value="<?php 
 echo $_SESSION['SESS_FIRST_NAME'];?>"/>

	    <p>
	      <?php 
 
		  if(isset($_GET['query']))
		  {
 
/* 
 localhost - it's location of the mysql server, usually localhost 
 root - your username 
   6.         third is your password 
   7.          
   8.         if connection fails it will stop loading the page and display an error 
   9.     */  
     
 
    /* tutorial_search is the name of database we've created */  
 
 $query = $_GET['query'];   

$min_length = 3;  
    // you can set minimum length of the query if you want  
 if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then  
 $query = htmlspecialchars($query);   
       // changes characters used in html to their equivalents, for example: < to &gt;  
 $query = mysql_real_escape_string($query);  
// makes sure nobody uses SQL injection  
    
   $raw_results = mysql_query("SELECT * FROM members  
        WHERE (`FirstName` LIKE '%".$query."%') OR (`UserName` LIKE '%".$query."%')") or die(mysql_error());  
   // * means that it selects all fields, you can also write: `id`, `title`, `text`  
     // articles is the name of our table  
         
     // '%$query%' is what we're looking for, % means anything, for example if $query is Hello  
       // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'  
    // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'  
        
     if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following  
             
          while($results = mysql_fetch_array($raw_results)){  
         // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop  
              
               echo "<p><h3>"."FirstName : ".$results['FirstName']."</h3>"."UserName : ".$results['UserName']."<br>"."LastName : ".$results['LastName']."<br>"."Address : ".$	results['Address']."<br>"."ContactNo : ".$results['ContactNo']."<br>"."Website : ".$results['Url']."<br>"."gender : ".$results['Gender']."</p>"; 
			  
			   echo'<input type="hidden" name="firstname" value="'. $results['FirstName'] .'">'; 
			   echo'<input type="hidden" name="username" value="'. $results['UserName'] .'">';
			   echo'<input type="hidden" name="lastname" value="'. $results['LastName'] .'">';
			   echo'<input type="hidden" name="address" value="'. $results['Address'] .'">';
			   echo'<input type="hidden" name="contactno" value="'. $results['ContactNo'] .'">';
			   echo'<input type="hidden" name="url" value="'. $results['Url'] .'">';
			   echo'<input type="hidden" name="gender" value="'. $results['Gender'] .'"."<br>';
			   echo'<input type="hidden" name="propic" value="'. $results['profImage'] .'"."<br>';
			   echo'<input type="text" name="status" value="pending"."<br><br>';
			   echo'<input type="submit" name="addfriend" value="addfriend">';

			   
			   //DISPLAY IN TEXTBOX THE RESULT OF THE SEARCH
			  
			   
			   
			   
              // posts results gotten from database(title and text) you can also show id ($results['id'])  
            }  
           
      }  
   else{ // if there is no matching rows do following  
       echo "No results"; 
      }  
        
 }  
 else{ // if query length is less than minimum  
      echo "Minimum length is ".$min_length;  
  } 
  } 
?>
	    </p>
        <p>  
	    
	    
	    <label>
	  </form>
      </p></td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>
