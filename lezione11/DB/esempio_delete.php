<?php
require_once 'connessione.php';

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //tipo di werrorre guardare slide

$num_rows = $db->exec('DELETE from fruits WHERE id=2'); //query che elimina la riga 2 della tabella fruits
echo $num_rows;

?>