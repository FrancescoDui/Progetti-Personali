Lezione 4 -cicli 
<?php
//--------------------------------------------------------------Ciclo For-------------------------------------------------------------------

//genero lista di righe dentro un <ul>
echo '<ul>';
for($i=0;$i<10;$i++){
    echo '<li>la variabile i vale: '.$i .'</li>';
}
echo '</ul>';
echo'<hr>';
//lista ordinata
echo '<ol>';
for($i=0;$i<10;$i++){
    echo '<li>la variabile i vale: '.$i .'</li>';
}
echo '</0l>';
echo'<hr>';
//tabella
echo '<table border=10" cellspacing="10" cellpadding="10">';
for($i=0;$i<10;$i++){
    echo'<tr style="background-color:green;><td>la variabile i vale:</td><td> '.$i .'</td></tr>';
}
echo '</table>';
echo'<hr>';
//--------------------------------------------------------------Ciclo Foreach---------------------------------------------------------------
$numeri=[1,4,70];
foreach($numeri as $numero){
    echo 'il vaolore del numero è: '.$numero .'<br>';
}
echo'<hr>';
$frutti=['mela'=>'giallo','pera'=>'verde','banana'=>'giallo'];
foreach($frutti as $frutto=>$colore){
    echo 'il frutto '.$frutto.' è di colore '.$colore .'<br>';
}
echo '<hr>';
//--------------------------------------------------------------ciclo While-----------------------------------------------------------------
$numeri=[4,67,90];
$num=count($numeri);
$i=0;
while($i<$num){
    echo 'il numero vale : '.$numeri[$i].'<br>';
    $i++;
}
echo '<hr>';
//--------------------------------------------------------------Esrecizi--------------------------------------------------------------------
//stampare in una lista non ordinata tutti i frutti gialli 
$frutti=['mela'=>'giallo','pera'=>'verde','banana'=>'giallo'];
echo'<table border=10" cellspacing="10" cellpadding="10">';
foreach($frutti as $frutto=>$colore){
    echo '<tr style="background-color:#A4A4A4;"><td>il frutto </td><td>'.$frutto.'</td><td> è di colore </td><td>'.$colore.'</td></tr>';
}
echo'</table>';
echo '<hr>';
//stampare con tre righe e 2 colonne 
$numeri=[ [10,2],[3,2],[2,3]];
echo '<table border=1>';
foreach($numeri as $coppia){
    echo'<tr style="background-color:pink;">';
    foreach($coppia as $numero){
        echo '<td>'.$numero.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';

//  $html= $html .'testo';  <=>  $html.='testo';

//evolutiva: non fare echo dentro il ciclo ma assegnare ad una variable $html
$numeri=[ [10,2],[3,2],[2,3]];
$html_table='<table border=1>';
foreach($numeri as $coppia){
    $html_table.='<tr style="background-color:grey;">';
    foreach($coppia as $numero){
    $html_table.='<td>'.$numero.'</td>';
    }
    $html_table.='</tr>';
}
$html_table.='</table>';
echo  $html_table;
