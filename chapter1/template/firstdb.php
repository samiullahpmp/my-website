

<?php

try{
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=ijdb;charset=utf8mb4', 'samidbuser','mypass');
	$output = 'Connection with database established';
	
	$sql = 'SELECT * FROM ijdb.joke';
	
	$result = $pdo->query($sql);
	
	while($row = $result->fetch())
	{
		$jokes[] = $row['joketext'];
		$date[] = $row['jokedate'];	
	}
	
	$title = 'Joke List';
	
	$output = '';
	
	foreach($jokes as $j)
	{
			$output .='<blockquote>';
			$output .='<p>';
			$output .= $j;
			$output .=' </p>';
			$output .= '</blockquote>';
	}

}
catch (PDOException $e)
{
	$error= 'Database error: ' .  $e->getMessage(). 'in'. $e->getFile(). ':' . $e->getLine();
	$title = 'An error Occured';
	$output = $error;
			
}


//echo $date;
include 'layout.html.php'

?>
