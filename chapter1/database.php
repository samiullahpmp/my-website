
<?php

try {

//$pdo = new PDO('mysql:host=mysql;dbname=test', 'dbuser=webdbuser','mypassword');
$pdo = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8mb4', 'samidbuser','mypass');
$output = 'Database connection established';
$sql = 'select * from jokes';

$result = $pdo->query($sql);
echo $result->rowcount();
while($row = $result->fetch())
{
	$jokes[] = $row[2];
}

}
catch (PDOException $e)
{
	$output = 'undable to connect'. $e->getMessage() ;
}
$output = $output;// . $affectedRows;

include 'output.html.php';

