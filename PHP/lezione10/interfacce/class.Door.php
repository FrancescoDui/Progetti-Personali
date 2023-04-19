<?php
require_once 'interface.Openable.php';
class Door implements Openable{
    private $isLocked;
    public function __construct($isLocked=false)
    {
        $this->isLocked=$isLocked;
    }
    public function Open()
    {
        if($this->isLocked){
            echo 'Non puoi aprire la porta è chiusa a chiave<br>';
        }else{
        echo 'Creak .....<br>';
        }
    }
    public function Close()
    {
        echo 'Sbam!!<br>';
    }
}