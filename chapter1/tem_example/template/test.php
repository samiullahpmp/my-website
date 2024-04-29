<?php

try {
$pdo = new PDO('mysql:host=127.0.0.1;dbname=ijdb;charset=utf8mb4', 'samidbuser','mypass');

$sql = 'delete from `joke` where
`id` = :joketext ;';

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':joketext',21);

$stmt->execute();

echo("yay");


} catch (PDOException $e) {
$title = 'An error has occurred';
$output = 'Database error: ' . $e->getMessage() . ' in ' .
$e->getFile() . ':' . $e->getLine();
}

?>