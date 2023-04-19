<?php
include 'Person.php';
$a=new Person();
$b=$a;
$c=clone $a;
//dice al file html che tutto quello che viene dopo lo consideri come testo
//esempio: gli spazi sono spazi e gli accapo sono accapo
echo '<pre>';
var_dump($a);
var_dump($a);
var_dump($a);
echo '</pre>';
