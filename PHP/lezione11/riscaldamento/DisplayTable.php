<?php
require_once 'DisplayItemsInterface.php';
class DisplayTable implements DisplayIteamsInterface {
    private array $lista;
    public function set(array $lista=[]) {
        $this->lista = $lista;
    }
    public function display(){
        $html = '<table border=1>';
        foreach ($this->lista as $items){
            $html .='<tr>';
            foreach($items as $it){
            $html .= '<td>' . $it . '</td>';
            }
            $html.='</tr>';
        }
        $html .= '</table>';
        return $html;
    }
    
}