<?php
//serve per osservare che tipo di richiesta e che metodo si sta utilizzando
//echo 'il metodo é '. $_SERVER['REQUEST_METHOD'] .'<br>' ;
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($_REQUEST['scelta']==='Si'){
        echo 'Sarà una bella giornata';
    }else{
        echo 'Con un bel riscaldamento tutto cambia';
    }

}else{
    echo '<form  method="POST">';
    echo 'Sei felice oggi?';
    echo '<hr>';
    echo 'SI <input type="radio" name="scelta" value="Si">';
    echo 'NO <input type="radio" name="scelta" value="No">';
    echo '<hr>';
    echo '<button>Invia</button>';
    echo '</form>';
}