<?php
//ottieni i nomi dei file nella cartella 
$filenames = glob('files/*.json');
//per debug
print_r($filenames);
echo '<hr>';
foreach($filenames as $filename){
    $json_data = file_get_contents($filename);
    $data = json_decode($json_data,1);//genera un array perchè ho impostato $options=1 quindi decodifice un json in array
    //print_r($data);
    echo 'Sei felice '.$data['name'].' ? '.$data['scelta'].'<br>';

}