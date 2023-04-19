<?php
require_once 'interface.Openable.php';
class Jar implements Openable{
    private $content;
    public function __construct($content='fruit')
    {
      $this->content= $content;
    }
    public function Open()
    {
        echo 'The jar is open <br>';
        echo 'The content is '.$this->content.'<br>';
    }
    public function Close()
    {
        echo 'The jar is closed<br>';
    }
}