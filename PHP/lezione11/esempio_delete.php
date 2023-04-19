<?php
//esempio di $db->exec()
require_once 'connessione.php';

//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$num_rows=$db->exec('DELETE FROM fruits WHERE id=2');
echo 'righe: '.$num_rows;