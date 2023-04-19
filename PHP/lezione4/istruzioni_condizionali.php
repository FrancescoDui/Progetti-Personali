<?php
$a=true;
if($a){
    echo 'È vero <br>';
}
echo 'Fine';
echo '<hr>';
$a=false;
if($a){
    echo 'È vero';
}
echo '<br>Fine';
echo '<hr>';
$num=30;//vero
$num=0;//falso
if($num){
    echo 'È vero';
}
echo '<br>Fine';
echo '<hr>';
$stringa='';//stringa vuota è falsa
$stringa=' ';//stringa contenente almeno un carattere(anche gli spazi vuoti)é vera
if($stringa){
    echo 'È vero';
}
echo '<br>Fine';
echo '<hr>';
$string = "nome";//usare il triplo uguale per fare in modo che la condizione sia falsa altrimenti è vera
If ($string == 0 ){
 Printf("Sorpresa!");
} else {
Printf("tutto bene" );
} 
echo '<hr>';
$nome ='marcello';
if($nome ==='marcello'){
    echo 'montagna<br>';
}elseif($nome ==='margherita'){
    echo 'mare<br>';
}elseif($nome ==='carlo'){
   echo 'lago<br>';
}else{
    echo 'stai a casa';
}
echo '<hr>';
//-----------------------------------------------------Esercizio switch---------------------------------------------------------------------
/*un corriere ha codificato lo stato della spedizione i nquesto modo:
---> i nostri casi sono da ritirare,in consegna,consegnato
assegnare allo variabile $stato_pacco
10 ---> in consegna
20 ---> 
30 --->
40 --->
50 ---> 
60 ---> consegnato 
tutti gli altri casi sono da ritirare  
$legenda_stati_spedizione=[['codice'=>10,'descrizione'=>'ritirato dal negozio'],
                   ['codice'=>20,'descrizione'=>'in consegna alla sede centrale'],
                   ['codice'=>30,'descrizione'=>'in giacenza nle magazziono finale'],
                   ['codice'=>40,'descrizione'=>'in transito verso il magazzino finale'],
                   ['codice'=>50,'descrizione'=>'in transito verso la destinazione'],
                   ['codice'=>60,'descrizione'=>'consegnato'],

];*/
$stato_spedizione='10';
switch($stato_spedizione){
    default:
        $stato_pacco='da ritirare';
        break;
    case '10': 
    case '20':
    case '30':
    case '40':  
    case '50':
        $stato_pacco='in consegna';
    break;
    case '60':
         $stato_pacco='consegnato';
    break;
}
echo 'lo stato del pacco é : ' . $stato_pacco;
echo '<hr>';
//-------------------------------------------------Operatore Ternario------------------------------------------------------------------------
if(!isset($stato_spedizione)){
    $stato_spedizione='10';
}
$stato_spedizione=isset($stato_spedizione) ? $stato_spedizione:'10';
echo $stato_spedizione .'<br>';
echo '<hr>';
//il miglior modo per settare il valore di defsult di una variabile
$stato=$stato_spedizione ?? 10;
echo $stato;
echo '<hr>';






