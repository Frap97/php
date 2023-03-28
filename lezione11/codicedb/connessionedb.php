<?php



try {
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', 'Svsw2022');  //connessione con il database
} catch (PDOException $e) { 
	throw new Exception(sprintf(
		"PDO connection failed: %s\n", $e->getMessage()     //eventuale stampa di errore in caso di fallimento
	));
}
//var_dump($db);


