<?php
    
    require_once "classeProfessor.php";

    class Coordenador extends Professor{
        public $curso = [];

        public function __construct($valores){
            parent::__construct($valores);
            $this->curso[] = $valores["curso"];
        }
    }

?>