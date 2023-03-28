<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

require 'connessionedb.php';

$sql = 'SELECT * FROM speakers WHERE company=:company';  //seleziona solo gli speakers di una certa company
$sth = $db->prepare($sql);                                 //PREPARE
$data = [ ':company' => 'IBM' ];             //PASSAGGIO DATI -> referenza IBM speakers del database
if (! $sth->execute($data)) {                             // GESTIONE ECCEZIONE ED ERRORE
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo()) //IMPLODE DA ARRAY (VALORI) A STRING SEPARATI DA VIRGOLA
    ));
}
echo "<table>";
while ($row = $sth->fetch(PDO::FETCH_OBJ)) {  //FETCH PRENDE UNA RIGA ALLA VOLTA, CICLI    sth (dati) in row
    echo '<tr>';
    echo '<td>'.  $row->title   . " " . $row->name  .   '</td>';
    echo '<td>'  . $row->company  . '</td>' ;
    echo '<td> <a href="delete_by_id.php?id='.   $row->id .'">cancella </a></td>'  ; //riferimento per cancellare la riga
    echo '</tr>';
    //var_dump($row);
}
echo "</table>";