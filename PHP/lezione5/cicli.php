<?php
$fruits = ['apple','banana','cherry'];
$numbers=[1,2,3,4,5,6,7,8,9,10];
//execute a loop on fruits
for($i =0; $i <count($fruits);$i++){
    echo $fruits[$i]." ";
}
//execute a foreach loop on fruits
foreach($fruits as $fruit){
    echo $fruit." ";
}
// execute a loop on numbers using while 
$i=0;
while($i < count($numbers)){
    echo $numbers[$i]." ";
    $i++;
}