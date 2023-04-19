<?php
require_once 'TaxiDriver.php';
$taxidriver1=new TaxiDriver('Gino','ax9612k');
echo $taxidriver1->getName().'<br>';
echo $taxidriver1->getLicense();