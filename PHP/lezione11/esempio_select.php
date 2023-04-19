<?php
//esempio di $db->querry()

require_once 'connessione.php';

$sql='SELECT fruits.id as fruits_id,fruits.name as fruits_name,shops.name as shops_name,fruits.color as fruits_color,fruits.calories as fruits_calories FROM fruits 
left join shops
on fruits.shop_id=shops.id
ORDER BY fruits.name DESC';

/*Esempio di utilizzo di un ciclo per stampare a schermo il contenuto della quarry()
foreach($db->query($sql) as $row){
    echo $row['name'].' , '.$row['color'].'<br>';
}*/
echo'<pre>';
//var_dump($db->query($sql));
//Esempio di utilizzo di fetch()
$sth=$db->query($sql,PDO::FETCH_ASSOC);
$resul=$sth->fetchAll();
foreach($resul as $rows){
 echo $rows['fruits_id'].' '.$rows['fruits_name'].' '.$rows['shops_name'].' '.$rows['fruits_color'].' '.$rows['fruits_calories'];
}
print_r($resul);
