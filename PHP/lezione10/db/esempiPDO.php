<?php

try{
    $db = new PDO(
        'mysql:host=localhost;dbname=test;charset=utf8mb4', 
        'root', 
        'Svsw2022',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    } catch (PDOException $e) {
        echo $e->getMessage();
        die;
    
    }

$num_rows= $db->exec('DELETE FROM fruits WHERE id = 1'); // restituisce il numero di righe
echo 'il numero di righe è: ' . $num_rows . '<br>';