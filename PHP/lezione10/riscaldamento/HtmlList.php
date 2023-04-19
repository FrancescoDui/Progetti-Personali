<?php

class HtmlList {
    
 private array $list;
 private array $workingList;
 private string $type='ul';
private string $order='natural';

    public function __construct(array $list=[]) {
        $this->list = $list;
        
    }
    public function __toString(){
        return $this->getHtmlList();
    }
    public function getHtmlList() {
        $this->workingList = $this->list;
      
        if ($this->order == 'asc') {
            sort($this->workingList);
        } elseif ($this->order == 'desc') {
            rsort($this->workingList);
        }

        $html = '<'.$this->type.'>';
        foreach ($this->workingList as $item) {
            $html .= '<li>' . $item . '</li>';
        }
        $html .= '</'.$this->type.'>';
        return $html;
    }
    public function setType($type) {
        if($type == 'ul'){
            $this->type = 'ul';
        }else{
            $this->type = 'ol';
        }
    }
    public function setOrder($order) {
        if($order == 'asc'){
            $this->order = 'asc';
        }elseif($order=='desc'){
            $this->order = 'desc';
        }else {
            $this->order = 'natural ';
        }
    }
    public function setList($list) {
        $this->list = $list;    
    }
    public function addItem($item) {
        $this->list[] = $item;
    }
    public function removeItem($item) {
        $index = array_search($item, $this->list);
        if ($index !== false) {
            unset($this->list[$index]);
            $this->list = array_values($this->list);
        }
    }
    public function debug(){
        echo '<pre>';
        print_r($this->list);
        echo '</pre>';
    }

}