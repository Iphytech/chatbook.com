<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="">
<table width="560" height="77" border="1">
  <tr>
    <td colspan="2"><div align="right">HOME | PROFILE | FRIENDS | LOG OUT </div></td>
  </tr>
  <tr>
    <td width="112"><p>Profile</p>
        <p>Info</p>
      <p>Photos</p>
      <p>Common Friends()</p></td>
    <td width="432"><label>Friends </label>
    
        <label>
        <select name="friends" id="friends" style="width: 150px">
          <?php 
//www.freestudentprojects.com 
				$result = mysql_query("SELECT * FROM friends");			  	
				do {  ?>
          <option value="<?php 
//www.freestudentprojects.com echo $row['ID'];?>"><?php 
//www.freestudentprojects.com echo $row['Name'];?></option>
          <?php 
//www.freestudentprojects.com } while ($row = mysql_fetch_assoc($result));?>
        </select>
        </label>
  
      <label>
      <input name="search" type="submit" id="search" value="Search" />
      <br />
      <br />
      </label>
      <?php 
//www.freestudentprojects.com 

// sending queryif (isset($_POST['cmdsearch'])) 
	{if (trim($_POST['friends']) == "") { $flagrcode = 'Required Field.';}}
	{
	$this_friends =$_POST['friends'];
	$result = mysql_query("SELECT * FROM friends WHERE ID ='$this_friends' ");
	}
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$numberOfRows = MYSQL_NUMROWS($result);

If ($numberOfRows == 0) 
	{
echo "Sorry No Record Found";
	}
else if ($numberOfRows > 0) 
	{
	$i=0;
	while ($i<$numberOfRows)
		{		
			if(($i%2)==0) 
				{
					$bgcolor ='#FFFFFF';
				}
			else
				{
					$bgcolor ='@C0C0C0';
				}	
			$this_ID = MYSQL_RESULT($result,$i,"ID");
			$this_name = MYSQL_RESULT($result,$i,"Name");
			$this_age = MYSQL_RESULT($result,$i,"Age");
			$this_bday = MYSQL_RESULT($result,$i,"Birthday");
			
	?></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
//www.freestudentprojects.com 	
		$i++;		
		}
	}
?>
</table>
</form>
</body>
</html>
