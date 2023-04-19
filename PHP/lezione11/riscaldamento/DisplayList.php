<?php
require_once 'DisplayItemsInterface.php';
class DisplayList implements DisplayIteamsInterface {
    private array $lista;
    public function set(array $lista=[]) {
        $this->lista = $lista;
    }
    public function display(){
    $html = '<ul>';
        foreach ($this->lista as $item){
            $html .= '<li>' . $item . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
    
}