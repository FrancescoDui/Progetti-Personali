<?php


require 'HtmlList.php';

$htmlList = new HtmlList(['cane', 'gatto', 'albero']);
//$htmlList->setType('ol');
//$htmlList->setOrder('desc');

$htmlList->addItem('giraffa');
echo $htmlList;

$htmlList->removeItem('cane');
echo $htmlList;

$htmlList->debug();


