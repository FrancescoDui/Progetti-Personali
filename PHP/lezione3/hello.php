<?php
echo 'Hello world! Questa è la lezione 3';
echo '<hr>';
$a=5;
$b=10;
echo('la variabile x vale:' .$a);
echo '<hr>';
echo('la variabile y vale:' .$b);
echo '<hr>';
echo'operazione somma tra x e y:'. ($a+$b);
echo '<hr>';
echo'operazione sottrazione tra x e y:'. ($a-$b);
echo '<hr>';
echo'operazione prodotto tra x e y:'. ($a*$b);
echo '<hr>';
echo'operazione divisione tra x e y:'. ($a/$b);
echo '<hr>';
echo 'data odierna:'.date('d/m/Y') .'<br>';
echo 'data odierna:'.date('Y-m-d') .'<br>';
date_default_timezone_set('Europe/Rome');
echo "l'ora è:".date('H:i:s A'). "<br>";
echo '<hr>';
$town='Torino';
$region='Piemonte';
?>

<p>
<?= $town ?> è il capoluogo della regione <?= $region ?> . <br>
</p>

<?php
echo $town."è il capoluogo del ".$region;
echo '<hr>';
define('IVA',22);
define('costo',40);
define('costo_ivato',(costo+(costo*(IVA/100))));
echo 'Il prodotto costa '.costo .' euro + IVA '.IVA.'% per un totale di '.number_format(costo_ivato,2,',','.') .'€' ;
echo '<hr>';
echo 'magic_constant __DIR__:'.__DIR__ .'<br>';
echo 'magic_constant __FILE__:'.__FILE__.'<br>';
echo 'magic_constant __LINE__:'.__LINE__.'<br>';
echo '<hr>';
$i=12;
echo '$i:' .$i .'<br>';
echo '$i++:'.$i++.'<br>';
echo '$i:'.$i.'<br>';
echo '++$i:'.++$i.'<br>';
echo '<hr>';