<?php


/*
** github.com/firebathero
*/

$out = array();
$vars = array('HTTP_HOST', 'HTTP_REFERER', 'HTTP_USER_AGENT', 'REMOTE_ADDR', 'REMOTE_HOST', 'CLIENT_IP', 'HTTP_FROM', 'HTTP_VIA', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR');



foreach($vars as $i)
{
	if(isset($_SERVER[$i]))
	{
		$out[$i] = $_SERVER[$i];
	}
}


if(isset($_GET['json']))
{
	header('Content-type: application/json');
	echo json_encode($out);	
}
else
{
	echo '<pre>';
	print_r($out);
	echo '</pre>';
}

?>
