<?php

    require_once "classeEntrada.php";

    class TextArea extends Entrada{
        public $cols;
        public $rows;

        public function exibir(){
            echo "<textarea name='$this->name' cols='$this->cols'
                    rows='$this->rows' placeholder='$this->placeholder'></textarea>";
        }
    }