<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List of Jokes</title>
</head>

<body>
<?php 
	if(isset($error)):
?>
<p>
<?php echo($error);?>

</p>

<?php else: ?>
<?php foreach($jokes as $j): ?>
<blockquote>
	<p>
    	<?php echo htmlspecialchars($j, ENT_QUOTES, 'UTF-8') 
		?>
       			   
</blockquote>
<?php endforeach; ?>
<?php endif; ?>

</body>
</html>