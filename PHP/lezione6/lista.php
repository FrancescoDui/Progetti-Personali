<?php
 require('functions.php');
 $elenco=['cammello','dromedario','giraffa','nonna','casa','abete'];
 //query string : ?type=0&
 //type di default è lista non ordinata
 $type=intval($_GET['type'] ?? 0) ;
 //limit di default è per 10 elementi
 $limit=intval($_GET['limit'] ?? 10) ;

//echo $limit;
//implementare il controllo sul numero 
//di elementi che vogliamo stampare
$elements=[];
$num_elements=min($limit,count($elenco));
//prendo solo num elementi
/*
for($i=0;$i<$num_elements;$i++){
    $elements[]=$elenco[$i];
};*/
$elements=array_exstract($elenco,$limit);
//prendi n elementi

echo "<hr>";
echo lista($elements, $type);