<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>



<body>
<?php
$firstName = 'sAMI';
$lastName = 'lname';
echo 'Welcome to our website, ' .
 htmlspecialchars($firstName,ENT_QUOTES, 'UTF-8') . ' ' .
	htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';


?>

</body>
</html>