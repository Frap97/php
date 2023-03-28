<?php

require_once 'DisplayItemsInterface.php';

class DisplayList implements DisplayItemsInterface {

    private $items;

    public function set($items){  //set riceve i dati da inserire in items
        $this->items = $items;
    }

    public function display(){     //display stampa i risultati

        $html = '<ul>';
        foreach($this->items as $item){
            $html .= '<li>'. $item . '</li>';
        }
        $html .= '<ul>';
        return $html;
    }

}

?>