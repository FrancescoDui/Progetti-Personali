<?php
//leggere l'inputg dell' utente passato nella variabile txt
//e stamparlo tutto maiuscolo
//$_REQUEST comprende sia $_GET sia $_POST

echo strtoupper($_REQUEST['text']);
echo strtolower($_REQUEST['q']);