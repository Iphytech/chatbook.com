
<?php 

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
<title><?php ?> Profile</title>
<link type='text/css' href='css1/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<link href="format.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
.style2 {font-size: 12px}
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
<script language="javascript" type="text/javascript">
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
</script>
<style type="text/css">
	/* This CSS is just for presentational purposes. */
	
	#wrap {
		font: 1.3em/1.3 Arial, Helvetica, sans-serif;
		width: 30em;
		margin: 0 auto;
		padding: 1em;
		background-color: #fff; }
	h1 {
		font-size: 200%; }

	/* This CSS is used for the Show/Hide functionality. */
	.more {
		display: none;
		border-top: 1px solid #666;
		border-bottom: 1px solid #666; }
	a.showLink, a.hideLink {
		text-decoration: none;
		color: #36f;
		padding-left: 8px;
		background: transparent url(down.gif) no-repeat left; }
	a.hideLink {
		background: transparent url(up.gif) no-repeat left; }
	a.showLink:hover, a.hideLink:hover {
		border-bottom: 1px dotted #36f; }
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
</style>
</head>

<body>
<SCRIPT LANGUAGE="JavaScript">
function CountLeft(field, count, max) {
if (field.value.length > max)
field.value = field.value.substring(0, max);
else
count.value = max - field.value.length;
}
</script>

<div class="main1">

<?php 
 include("top.php"); ?>
	
	
  
  <div class="adscontent">
    <div class="img"><img src="images/ads.jpg" /></div>
	
    <div class="adfield">
		<form action="exec.php" method="post" enctype="multipart/form-data">
			<div class="1">Title</div>
			<div class="1r"><input name="title" type="text" class="titletext" size="25" onKeyDown="CountLeft(this.form.title, this.form.left,25);" onKeyUp="CountLeft(this.form.title,this.form.left,25);" /><input readonly type="text" name="left" size=3 maxlength=3 value="25" class="counter"> 
characters left</div><br />
			<div class="2">Body</div>
	  <div class="2r">
	    <textarea name="body" cols="20" class="titletext2" onKeyDown="CountLeft(this.form.body, this.form.left1,135);" onKeyUp="CountLeft(this.form.body,this.form.left1,135);" ></textarea>
	    <input readonly type="text" name="left1" size=3 maxlength=3 value="135" class="counter"> 
characters left
	  </div>
			<br />
			<div class="3">Picture</div>
			<div class="3r"><input type="file" name="image"></div><br />
			<div class="3">Ad Prototype</div>
			<div class="3r"><img src="images/w.jpg" /></div>
			<input name="submit" type="submit" value="Create" />
		</form>	
	</div>
  </div>
</div>
</body>
</html>
