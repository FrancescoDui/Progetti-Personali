<?php
//------------------------------------------------------- Funzioni -------------------------------------------------------------------------
function somma(int $a,int $b):int {
    return $a +$b;
}
$c=somma(4,5);
echo 'La somma dei valori è: '.$c;
echo '<hr>';
$op1=340;
$op2=456;
$res=somma($op1,$op2);
echo'La somma dei valori '.$op1.' e '.$op2.' è: '. $res;
echo '<hr>';
$h=[3,4,7,9,10,24];
function average(array $values)
{
	$tot=0;
	foreach($values as $num){
		$tot += $num;

	}
	return $tot / count($values);
}
echo average($h);
echo '<hr>';
//scrivere una funzione che riceve un array di due dimensioni di numeri e restituisce una tabella html
$numeri=[ [10,2],[3,2],[2,3],[34,56],[34,7,0],[3]];
function vettori($numeri){
$html_table='<table border=1>';
foreach($numeri as $coppia){
    $html_table.='<tr style="background-color:grey;">';
    foreach($coppia as $numero){
    $html_table.='<td>'.$numero.'</td>';
    }
    $html_table.='</tr>';
}
$html_table.='</table>';
return $html_table;
}
echo vettori($numeri);