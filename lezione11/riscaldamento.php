<?php

require 'class.DisplayList.php';
require 'class.DisplayTable.php';

function DisplaySomething(DisplayItemsInterface $obj){
   echo $obj -> display();
}

$data=['cane', 'gatto'];

$data2=[
    ['mala', 'rossa'],
    ['banana', 'gialla'],
    ['pera', 'verde']
];

$list = new DisplayList();
$list->set($data);
DisplaySomething($list);

$table =  new DisplayTable();
$table->set($data2);
echo $table -> display($table);


?>