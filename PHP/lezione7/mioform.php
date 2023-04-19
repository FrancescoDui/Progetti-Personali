<?php
//serve per osservare che tipo di richiesta e che metodo si sta utilizzando
//echo 'il metodo é '. $_SERVER['REQUEST_METHOD'] .'<br>' ;
if($_SERVER['REQUEST_METHOD']==='POST'){
//il cpntenuto di  post viene salvato dentro data
$data['scelta']=$_POST['scelta'] ?? 'undefined';
$data['name']=$_POST['name'] ?? 'sconosciuto';
//salva dati in file 
//codifico l'array in formato json trasformandolo in una stringa
$json_data =json_encode($data);//genera un array perchè ho impostato $options=1 
$filename='files/'.uniqid().'.json';

//salvo nel file dati.txt la stringa json_data apppena creato
file_put_contents($filename,$json_data);
}else{
    echo '<form  method="POST">';
    echo 'Sei felice oggi?<br>';
    echo ' Nome <input type="txt" name="name">';
    echo '<hr>';
    echo 'SI <input type="radio" name="scelta" value="Si">';
    echo 'NO <input type="radio" name="scelta" value="No">';
    echo '<hr>';
    echo '<button>Invia</button>';
    echo '</form>';
}