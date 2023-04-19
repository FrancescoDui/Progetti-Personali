<?php
//include 'Person.php';
include 'Calcoli.php';
/*
$person= new Person();
$person->setName('Frank');
$person->setAge(10);
echo $person->getData();*/
/*echo '<pre>';
$person=new Person('Carlo');
$person->setAge(20);
echo $person->getData();
$person->setName('Ciccio');
$person->setAge(32);
echo $person->getData();
echo '</pre>';*/
$operazioni = new Calcoli(3,5);
echo $operazioni->massimo().'<br>';
echo $operazioni->minimo().'<br>';
echo '<hr>';
$operazioni->update(12,35);
echo $operazioni->massimo().'<br>';
echo $operazioni->minimo().'<br>';
echo '<hr>';
echo $operazioni;