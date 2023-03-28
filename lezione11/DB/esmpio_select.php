<?php
require_once 'connessione.php';
$sql = 'SELECT 
fruits.id as fruits_id,
fruits.name as fruits_name, 
shops.name as shops_name, 
fruits.color,
fruits.calories
from fruits
left join shops ON fruits.shop_id = shops.id'; //query
// foreach($db->query($sql) as $row){
//     echo $row['name'] . '<br>';
// }

echo '<pre>';
$sth = $db->query($sql, PDO::FETCH_ASSOC);  // richiesta al DB
$result = $sth->fetchAll(); // Eseguo la query e passaggio dei dati
print_r($result); // stampa

?>