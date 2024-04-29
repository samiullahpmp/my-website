<?php


if(!isset($_POST['fname']))
{
	include 'form.html.php';
		
}
else
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	if($fname == 'sami' && $lname == 'ullah')
	{
		$output = 'Welcome Glorious Leader!';	
	}
	else
	{
		$output = 'Welcome to our Website '.
		htmlspecialchars($fname, ENT_QUOTES, 'UTF-8'). ' ' .
		htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');	
	}
	include 'welcome.html.php';
}
