<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

require "connessionedb.php";

 $sql = 'DELETE FROM speakers WHERE id=:id'; //query
 $sth = $db->prepare($sql);
 
 $data = [ ':id' => $_GET['id'] ];  //puntatore all'id, sicuro grazie a PDO

 if (! $sth->execute($data)) {
     throw new Exception(sprintf(
         "Error PDO exec: %s", implode(',', $db->errorInfo())
     ));
 }
 printf("Speaker/s deleted successfully!\n");
