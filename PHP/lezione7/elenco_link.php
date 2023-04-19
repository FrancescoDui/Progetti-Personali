<?php

//ottieni i nomi dei file nella cartella 
$filenames = glob('files/*.json');
//per debug
//print_r($filenames);
echo '<hr>';
echo '<ul>';
foreach($filenames as $filename){
    echo '<li>
    <a href="scheda.php?file='.$filename.' ">
    Apri
    </a>
    </li>';

}
echo '</ul>';
echo '<hr>';