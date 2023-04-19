<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $data['tipo']=$_POST['tipo'] ?? 'sconosciuto';
    $data['nome']=$_POST['nome'] ?? 'sconosciuto';
    $data['carattere']=$_POST['carattere'] ?? 'sconosciuto';
    $data['alimentazione']=$_POST['alimentazione'] ?? 'sconosciuto';
    $data['genitori']=$_POST['genitori'] ?? 'sconosciuto';
    $data['anno']=$_POST['anno'] ?? 'sconosciuto';
    $data['prezzo']=$_POST['prezzo'] ?? 'sconosciuto';
    $data['stato']=$_POST['stato'] ?? 'sconosciuto';
    $json_data =json_encode($data);
    $filename='schede/'.'codice_'.date("His").'.json';
    file_put_contents($filename,$json_data);
}else{
    echo '<form  method="POST">';
    echo 'Tipo: <br>';
    echo 'Cane<input  type="radio" name="tipo" value="cane">';
    echo 'Gatto<input type="radio" name="tipo" value="gatto">';
    echo 'Altro<input type="radio" name="tipo" value="altro">';
    echo 'Nome:<input type="text" name="nome">';
    echo 'Carattere:<br>';
    echo 'Socevole<input  type="radio" name="carattere" value="socevole"><br>';
    echo 'Agressivo<input type="radio" name="carattere" value="agressivo"><br>';
    echo 'Alimentazione:<input type="text" name="alimentazione"><br>';
    echo 'Genitori e storia:<input type="text" name="genitori"><br>';
    echo 'Anno di nascita:<input type="text" name="anno"><br>';
    echo 'Prezzo:<input type="text" name="anno"><br>';
    echo 'Stato:<br>';
    echo 'Disponibile<input  type="radio" name="stato" value="disponibile"><br>';
    echo 'Venduto<input type="radio" name="stato" value="venduto"><br>';
    echo '<hr>';
    echo '<button>Invia</button>';
    echo '</form>';
}