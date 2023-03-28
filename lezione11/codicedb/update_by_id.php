<?php

require_once 'connessionedb.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

$sql = 'UPDATE FROM speakers set name=:name WHERE id=:id';
$sth=$db->prepare($sql);
$data=[ 
    [':id' => $_POST['id']],
    [':name' => $_POST['name']]];
    if (! $sth->execute($data)) {
        throw new Exception(sprintf(
            "Error PDO exec: %s", implode(',', $db->errorInfo())
        ));
    }
    printf("Speaker/s updated successfully!\n");
}else{
    echo '<form method="post">
    <input type="text" name="name" id="">
    <input type="hidden" name="id" value='.$_GET['id'].'>
    <input type="submit" value="Invia"></form>';

}