<?php
try {
  //$pdo = new PDO('mysql:host=127.0.0.1;dbname=ijdb;charset=utf8mb4', 'samidbuser','mypass');

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunction.php';
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $sql = 'select `joke`.`id`,`joketext`, `name`, `email` from `joke` inner join `author` on `authorid` = `author`.`id`;';
  $jokes = $pdo->query($sql);

  

  $title = 'Joke list';
  
  $totalJokes = totalJokes($pdo);

  ob_start();

  include  'template/jokes.html.php';

  $output = ob_get_clean();
}
catch (PDOException $e) {
  $title = 'An error has occurred';

  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

