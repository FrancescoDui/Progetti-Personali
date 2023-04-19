<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
//serve per osservare l'array principale 
//print_r($_REQUEST);
echo'Hai scelto: <br>';
echo '<hr>';
$L=$_REQUEST['lista'];
foreach($L as $l){
    echo $l."<br>";
}
}else{
echo '<form  method="POST">';
echo '<h1>I Frutti</h1>
<input type="hidden" name="nascosta" value="non mi vedi><br>"';
echo '<input type="text" name="lista[]"><br>';
echo '<input type="text" name="lista[]"><br>';
echo '<input type="text" name="lista[]"><br>';
echo '<input type="text" name="lista[]"><br>';
echo '<button>Invia</button>';
echo '</form>';
}