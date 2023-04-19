<?php
//scrivere una funzione concatena che ricevendo due stringhe ne restituisce una stringa
//composta dalla concatenazione delle due
function concatena($stringa1,$stringa2){
    return $stringa1.$stringa2;
}
//scrivere una funzione concatena_con_spazio che riceve due stringhe e restituisce una
//stringa concatenando con spazio
function concatena_con_spazio($stringa1,$stringa2){
    return $stringa1." ".$stringa2;
}
//scrivere unafunzione concatena_stringhe che ricevendo un array di stringhe e
//restituisce una stringa composta dalla concatenazione dei valori dell'array
function concatena_stringhe($array){
    $stringa="";
    for($i=0;$i<count($array);$i++){
        $stringa=$stringa.$array[$i];
    }
    return $stringa;
}
//scrivere la funzione concatena_stringhe_con_spazio che riceve un array di stringhe e
//restituisce una stringa composta dalla concatenazione dei valori dell'array con lo 
//spazio
function concatena_stringhe_con_spazio($array){
    $stringa="";
    for($i=0;$i<count($array);$i++){
        $stringa=$stringa.$array[$i]." ";
    }
    return $stringa;
}
/*scrivere delle nuove funzioni concatena_stringhe2() e
concatena_stringhe_con_spazio2() utilizzando il costrutto foreach al posto
del for*/
function concatena_stringhe1($array){
    $stringa="";
    foreach($array as $parola){
        $stringa=$stringa.$parola;
    }
    return $stringa;
}
//-----------------------------------------------
function concatena_stringhe_con_spazio1($array){
    $stringa="";
    foreach($array as $parola){
        $stringa=$stringa.$parola." ";
    }
    return $stringa;
}
/* scrivere concatena_stringhe3 e concatena_stringhe_con_spazio3()
usando l’operatore variadic ..*/
function concatena_stringhe2(string ...$parola){
    $stringa="";
    foreach($parola as $p){
        $stringa=$stringa.$p;
    }
    return $stringa;
}
/*-----------------------------------------------------------*/
function concatena_stringhe_con_spazio2(string ...$parola){
    $stringa="";
    foreach($parola as $p){
        $stringa=$stringa.$p." ";
    }
    return $stringa;
}