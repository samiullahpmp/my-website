<?php
if (isset($_POST['joketext'])) {
try {
	include 'includes/DatabaseConnection.php';
	include 'includes/DatabaseFunction.php';
	
//$pdo = new PDO('mysql:host=127.0.0.1;dbname=ijdb;charset=utf8mb4', 'samidbuser','mypass');

//$sql = 'Insert into `joke` set
//joketext` = :joketext';

//$stmt = $pdo->prepare($sql);

//$stmt->bindValue(':joketext',$_POST['joketext']);

//$stmt->execute();

insertJoke($pdo, $_POST['joketext'], 2);


header('location: index.php');


} catch (PDOException $e) {
$title = 'An error has occurred';
$output = 'Database error: ' . $e->getMessage() . ' in ' .
$e->getFile() . ':' . $e->getLine();
}
} else {
$title = 'Add a new joke';
ob_start();


include 'template/addjoke.html.php';
$output = ob_get_clean();
}

include  'template/home.html.php';

$heading = ob_get_clean();

ob_start();
include 'template/layout.html.php';
?>