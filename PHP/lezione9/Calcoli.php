<?php
 class Calcoli {
    private $var1;
    private $var2;
    public function __construct($var1,$var2){
        $this->var1=$var1;
        $this->var2=$var2;
    }
    public function massimo(){
        if($this->var1 > $this->var2)
            return $this->var1;
        else
            return $this->var2;
    }
    public function minimo(){
        if($this->var1 < $this->var2)
            return $this->var1;
        else
            return $this->var2;
    }
    public function update($var1,$var2){
        $this->var1=$var1;
        $this->var2=$var2;
    }
    public function __toString(){
        return 'param1: '.$this->var1 .' param2: '.$this->var2;
    }

 }