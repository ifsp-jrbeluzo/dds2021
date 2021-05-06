<?php

    require_once "classeEntrada.php";

    class Input extends Entrada{
        public $type;

        public function exibir(){
            echo "<input type='$this->type'  />";
        }
        
    }

?>