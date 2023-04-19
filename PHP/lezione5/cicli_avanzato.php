<?php
$user=['name'=>'jhon',
'surname'=>'Doe',
'age'=>'35',
'salary'=>'35000'];
echo $user['name']." ";
//ciclo foreach
foreach($user as $utente){
    echo $utente." ";
}
//----------------------------------------------
echo "<hr>";
//ciclo stampando dentro una tabella di una riga e quattro colonne 
$html_table='<table border=1>';
$html_table.='<tr style="background-color:grey;">';
foreach($user as $utente){
    $html_table.='<td>'.$utente.'</td>';   
}
$html_table.='</tr>';
$html_table.='</table>';
echo $html_table;
echo "<hr>";
$user=[['name'=>'jhon',
'surname'=>'Doe',
'age'=>'35',
'salary'=>'35000'],['name'=>'Mary',
'surname'=>'Doe',
'age'=>'21',
'salary'=>'12000'],['name'=>'Antony',
'surname'=>'Smith',
'age'=>'34',
'salary'=>'21000'],['name'=>'Frank',
'surname'=>'Marshall',
'age'=>'56',
'salary'=>'34000']];
//ciclo annidato
$html_table='<table border=1>';
foreach($user as $utente){
    $html_table.='<tr style="background-color:grey;">';
    foreach($utente as $campo){
    $html_table.='<td>'.$campo.'</td>'; 
    }
    $html_table.='</tr>';
}
$html_table.='</table>';
echo $html_table;
echo "<hr>";
//ciclo con nuovo effetto
$html_table='<table border=1><tr>';
$intestazione=['name','surname','age','salary'];
//for($i=0;$i<4;$i++){
    foreach($user[0] as $chiave => $valore){
    $html_table.='<th>'.$chiave.'</th>';
//}
}
echo "</tr>";
foreach($user as $utente){
    $html_table.='<tr style="background-color:grey;">'; 
    foreach($utente as $campo){
    $html_table.='<th>'.$campo.'</th>'; 
    }
    $html_table.='</tr>';
}
$html_table.='</table>';
echo $html_table;
echo "<hr>";
