<?php 


if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

function generate_options($from,$to,$callback=false)
{
	$reverse=false;
	
	if($from>$to)
	{
		$tmp=$from;
		$from=$to;
		$to=$tmp;
		
		$reverse=true;
	}
	
	$return_string=array();
	for($i=$from;$i<=$to;$i++)
	{
		$return_string[]='
		<option value="'.$i.'">'.($callback?$callback($i):$i).'</option>
		';
	}
	
	if($reverse)
	{
		$return_string=array_reverse($return_string);
	}
	
	
	return join('',$return_string);
}


function callback_month($month)
{
	return date('M',mktime(0,0,0,$month,1));
}
?>