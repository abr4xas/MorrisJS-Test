<?php

$dbhost   = "localhost";
$dbuser   = "root";
$dbpass   = "root";
$dbname   = "morrisjs";
$dbdriver = "mysql";
$dbmethod = ':dbname=';

try {
	$dsn = $dbdriver.$dbmethod.$dbname;
	$pdo = new PDO($dsn, $dbuser, $dbpass);
}
catch (PDOException $e){
	echo '<pre>Connection failed: <strong>'.$e->getMessage().'</strong>.</pre>';
} 


$b = $pdo->prepare('SELECT * FROM stats GROUP BY city');

$b->execute();

$data = $donut = [];

foreach ($b->fetchAll() as $row) {
	$data[] 	= $row;
	$donut[] 	= ["label" => $row["city"], "value" => $row["people"]];
} 
