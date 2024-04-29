<?php
try {
 // $pdo = new PDO('mysql:host=127.0.0.1;dbname=ijdb;charset=utf8mb4', 'samidbuser','mypass');
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunction.php';
	
 //$sql = 'DELETE FROM `joke` WHERE `id` = :cd ;';
 //$stmt = $pdo->prepare($sql);
 //echo("yes");
 //$stmt->bindValue(':cd', $_POST["id"]);
 //$stmt->execute();
 
 //echo("i ran");
 deleteJoke($pdo, $_POST["id"]);
 header('location: index.php');
}
catch (PDOException $e) {
  $title = 'An error has occurred';

  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
  echo($e);
}
?>