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

//var_dump($db);


