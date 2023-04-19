<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    echo $_POST['text'];
}else{
    echo '<form  method="POST">';
    echo '<input type="text" name="text">';
    echo '<hr>';
    echo '<button>Invia</button>';
    echo '</form>';
}