<?php

require_once 'DisplayItemsInterface.php';


class DisplayTable implements DisplayItemsInterface {
    private $items;

    public function set($items){  //set riceve i dati da inserire in items
        $this->items = $items;
    }

    public function display(){     //display stampa i risultati

        $html = '<table>';
        foreach($this->items as $row){
            $html .= '<tr>';
            foreach($row as $item){
            $html .= '<td>'. $item . '</td>';
        }
        $html .= '<table>';
    }
        return $html;
    }

}


?>