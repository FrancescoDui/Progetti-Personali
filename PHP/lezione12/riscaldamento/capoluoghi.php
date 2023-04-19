<?php
echo "<hr>";
try{
    $db = new PDO(
        'mysql:host=localhost;dbname=Piemonte;charset=utf8mb4',
        //ricordare che per quanto riguarda il DB di casa non c'è nessuna password
        'root', 
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
        echo $e->getMessage();
        die;
    
}
$sql='SELECT c.nome as nome
from capoluoghi c;';

$sth=$db->query($sql,PDO::FETCH_ASSOC);
$resul=$sth->fetchAll();
echo '<select name="capoluoghi" multiple>';
foreach($resul as $rows){
    echo '<option value=lista>'.$rows['nome'].'</option>';
}
echo '</select>';