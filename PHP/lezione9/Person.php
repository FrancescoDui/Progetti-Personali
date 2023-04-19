<?php
class Person {
    private $name="";
    private $age=0;
    public function __construct($name=''){
        $this->name=$name;
    }
    public function setName(string $name){
        $this->name=$name;
    }
    public function setAge(int $age){
        $this->age=$age;
    }
    public function getData(){
        return 'nome: '.$this->name .' età: '.$this->age;
    }


}
?>