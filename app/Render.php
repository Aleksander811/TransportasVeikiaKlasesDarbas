<?php

namespace TRANSPORT;

class Render{
/*
*Display info in  HTML list
*@param array @data
*/
    static public function display(array $data){
        echo "<ul>";
        foreach($data as $item){
            if (is_null($item)){

            }
            else
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
}