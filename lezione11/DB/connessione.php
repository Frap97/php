<?php

try{
$db = new PDO( //connessione al db
	'mysql:host=localhost;dbname=test;charset=utf8mb4', 
	'root', 
	'Svsw2022',
	[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
}catch (PDOExpetion $e){ //errorre se non funge
    echo 'errore' . $e -> getMessage();
    die;
}
//var_dump($db);
?>