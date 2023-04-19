<?php
$week=['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
$italian_days=[
    'Mon'=>'Lundedì',
    'Tue'=>'Martedì',
    'Wed'=>'Mercoledì',
    'Thu'=>'Mercoledì',
    'Fri'=>'Giovedì',
    'Sat'=>'Sabato',
    'Sun'=>'Domenica'];
echo'<pre>';
//mostra informazioni relative al contenuto
echo'<hr>';
echo'<hr>';
/*$week[2]='Mercoledì';
//cancellare un elemento del array
unset($week[1]);
var_dump($week);
echo'<hr>';
[$a,,$b]=$week;
echo 'a vale:'.$a .' e b vale:'.$b;
echo'<hr>';*/
echo date('D');
$today=date('D');
echo'<hr>';
echo $italian_days[$today];
echo'<hr>';
echo 'Oggi è '.$italian_days[$today];
echo'<hr>';
echo 'Sat inglese corrisponde a '.$italian_days['Sat'].' in italiano';
echo'<hr>';
var_dump($italian_days);
echo'<hr>';
//------------------------------------------------------------Esercizi Array---------------------------------------------------------------------------------
$frutti=['Mela',
        'Pera',
        'Banana'
];
//stampo secondo elemento
echo $frutti[1];
echo'<hr>';
var_dump($frutti);
echo'<hr>';
$frutti2=['Mela'=>'Giallo',
          'Pera'=>'Verde',
          'Banana'=>'giallo'
];
$frutti2['Nocciola']='marrone';
echo 'il colore della banana è:'.$frutti2['Banana'];
echo'<hr>';
var_dump($frutti2);
echo'<hr>';
//conoscere la dimensione
echo 'il numero di frutti é:'.count($frutti2);
echo'<hr>';
//aggiungo un elemento anguria all array frutti
$frutti[]='Anguria';
echo'<hr>';
var_dump($frutti);
//posso elencare tutte le chiavi usando array_keys
echo'<hr>';
$chiavi=array_keys($frutti2);
echo $chiavi[0];
echo'<hr>';
//array possono contenere qualsiai cosa
$magazzino=[
    'mela'=>[
        'quantità'=>100,
        'fornitore'=>[
            'telefono'=>'1545616514',
            'Nome'=>'frutta 2000'
        ],
        'colore'=>'giallo'
    ],
    'pera'=>[
        'quantità'=>200,
        'fornitore'=>[
            'telefono'=>'19716324124',
            'Nome'=>'pere tutto l\'anno'
        ],
        'colore'=>'verde'
    ]
];
//quanti chili di mele?
$frutto='mela';
echo 'la quantità di mele in magazzino è:'. $magazzino[$frutto]['quantità'].'Kg';
echo'<hr>';
echo 'telefono:'.$magazzino[$frutto]['fornitore']['telefono'];

