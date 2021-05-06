<?php
    
    require_once "classePessoa.php";

    class Professor extends Pessoa{
        public $disciplina = [];

        public function __construct($valores){
            parent::__construct($valores);
            $this->disciplina[] = $valores["disciplina"];
        }
    }

?>