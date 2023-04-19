<?php

function somma (int $a ,int $b):int {

    $tot= $a +$b;
    return $tot;
}

function differenza(int $a,int $b):int{
    $tot=$a-$b;
    return $tot;
}

function width(string ...$words):array {
    $width=[];
    foreach($words as $w ){
        $width[]=strlen($w);
    }
    return $width;
}

