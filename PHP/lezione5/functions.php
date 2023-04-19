<?php

//include_once 'include.php';

//simile a include ma se non trova il file genera un errore fatale blocca il programma => require '';
require_once 'include.php';

$totale=somma(5,3);
echo $totale;
echo"<hr>";
//equivalente
echo somma(5,3);
echo "<hr>";
print_r(width('il','lo','cane','gatto'));
