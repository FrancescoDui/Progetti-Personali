<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    //salva dati
    //generiamo un json
    $data['nome']=trim($_REQUEST['nome']);
    $data['password']=md5($_REQUEST['password']);    
    $json_data=json_encode($data);
    echo $json_data;//dovrò salvare su un file 
    echo"<hr>";
    //ringrazia l'utente
    echo 'hai inviato '.$data['nome'].' ,i dati ricevuti';
}
else{
    //mostra il form
    echo '<form  method="POST">';
    echo 'nome:<input type="text" name="nome">';
    echo 'password:<input type="text" name="password">';
    echo '<input type="submit">';
    echo '</form>';
}
