<?php
$filename=$_GET['file'] ?? ' ';
if(file_exists($filename)){
    //echo 'leggo il contenuto';
    $json_data = file_get_contents($filename);
    $data = json_decode($json_data,1);
    echo 'Sei felice '.$data['name'].' ? '.$data['scelta'].'<br>';
}else{
    echo $filename.' non trovato';
}