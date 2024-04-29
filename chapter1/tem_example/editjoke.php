<?php

try{
	
	include 'includes/DatabaseConnection.php';
	include 'includes/DatabaseFunction.php';
	
	if(isset($_POST['joketext']))
	{
		updateJoke($pdo, $_POST['jokeid'],$_POST['joketext'],1);
		//echo ("i am called". $_POST['jokeid']);
		header('location:index.php'); 		
	}
	else
	{
		$joke = getJoke($pdo, $_GET['id']);
		
		$title = 'Edit Joke';
		
		
		ob_start();
		
		include 'template/editjoke.html.php';
		
		$output = ob_get_clean();
	}
	
}
catch(PDOException $e){
	$title = 'An error has occured';
	
	$output = 'Database error: ' .$e->getMessage() . ' in '. $e->getFile(). ':' . e->getLine();
	
	
}

ob_start();

include  'template/home.html.php';

$heading = ob_get_clean();

include 'template/layout.html.php'

?>