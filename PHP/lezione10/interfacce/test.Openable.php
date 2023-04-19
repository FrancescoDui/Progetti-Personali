<?php
require_once 'class.Door.php';
require_once 'class.Jar.php';

function OpenSomething(Openable $obj){
    $obj->Open();
}
/*function closeSomething(Openable $obj){
    $obj->Close();
}*/
$objDoor=new Door(true);
$objJar=new Jar('banana');

OpenSomething($objDoor);
//closeSomething($objDoor);
echo'<hr>';
OpenSomething($objJar);
//closeSomething($objJar);
