<?php
//anagramma le parole
echo str_shuffle('arancione').'<br>';
echo '<hr>';
//Scrive la prima lettera di ogni parola come maiuscola
echo ucwords('un buon caffè ').'<br>';
echo '<hr>';
//differenza lunghezza tra due stringhe
echo levenshtein('rabarbaro','rossi').'<br>';
echo '<hr>';
//calcola la lunghezza della stringa
echo strlen('poffarbacco che storia');
echo '<hr>';
$stringa='la mia stringa';
echo strstr('la città di Milano è capoluogo','Milano');
echo '<hr>';
echo substr($stringa,3,3);
echo '<hr>';
echo strpos('la città di Milano è capoluogo','Milano');
echo '<hr>';
echo str_replace('mia','tua',$stringa);
echo '<hr>';


