<?php 
/* 
questo messaggio non si vede nel web
questo file stampa l'anno
<b>anno corrente: <?php echo date('Y') ."\n";?>  </b> 
*/
/*
Codice per controllare il tipo della variabile
declare(strict_types=1);

$flag = true;
echo gettype($flag);
echo"<hr>";
$flag=2;
echo gettype($flag);
echo"<hr>";
*/
/*
define('VERSION','1.0');
echo VERSION;
*/
/*esempio di utilizzo delle costanti magiche 
echo __FILE__;
echo"<hr>";
echo __DIR__;
*/
/*
echo 'max:' .       PHP_INT_MAX;
echo 'min'  .       PHP_INT_MIN;
*/
/*Scrivo e inizializzo un numero con il valore corrispondente al suo in scala binaria 
$num=0b11111111;
echo($num);
*/
/*
$a=1;
echo $a;
echo"<hr>";
//aggiorna prima di stampare a schermo
echo ++$a;
echo"<hr>";
//aggiorna dopo aver stampato a schermo
echo $a++;
echo"<hr>";
//stampa a schermo
echo $a;
*/
/*
$costo_orario=30.51;
echo $costo_orario;
echo"<hr>";
$durata=12.23;
echo $durata;
echo"<hr>";
$risultato=$costo_orario*$durata;
echo 'il costo totale è: ' . $risultato;
echo"<hr>";
//arrotonda un valore decimale in modo standard
round($risultato);
echo round($risultato,2);
echo"<hr>";
//arrotonda e tronca
echo floor($risultato);
echo"<hr>";
//arrotonda e riempie
echo ceil($risultato);
echo"<hr>";
//formattazione europea del numero sostituendo al punto la virgola per i decimali e vice versa per le migliaia 
echo 'il costo totale:' . number_format($risultato,2,',','.');
*/
/*
$a=100;
//con gli apici doppi
echo "la stringa \$a vale: $a ";
echo"<hr>";
//con gli apici singoli
echo 'la stringa $a vale: ' . $a;
echo"<hr>";
?>
la stringa $a vale: <?= $a ?>
*/
/*
//funzioni
echo strlen('buon natale');
echo "<hr>";
*/



