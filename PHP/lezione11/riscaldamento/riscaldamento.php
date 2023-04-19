<?php
require_once 'DisplayTable.php';
require_once 'DisplayList.php';
$data=['cane','gatto'];
$data2=[['mela','rossa'],['banana','gialla'],['pera','verde']];
$tabella=new DisplayTable();
$lista=new DisplayList();
$lista->set($data);
$tabella->set($data2);
displaySomething($lista);
displaySomething($tabella);
function displaySomething(DisplayIteamsInterface $obj){
    echo $obj->display();
}
