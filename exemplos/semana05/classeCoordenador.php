<?php
    
    require_once "classeProfessor.php";

    class Coordenador extends Professor{
        public $curso = [];

        public function __construct($valores){
            parent::__construct($valores);
            $this->curso[] = $valores["curso"];
        }

        public function exibir_coordenador(){
            echo "<h3>Coordenador/</h3>";
            $this->exibir_professor();            
            echo "Curso que coordena: ".$this->curso[0]."<br />";           
        }
    }

?>