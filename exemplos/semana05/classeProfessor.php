<?php
    
    require_once "classePessoa.php";

    class Professor extends Pessoa{
        public $disciplina = [];

        public function __construct($valores){
            parent::__construct($valores);
            $this->disciplina[] = $valores["disciplina"];        
        }

        public function exibir_professor(){
            echo "<h3>Professor:</h3>";
            $this->exibir();            
            echo "Disciplina: ".$this->disciplina[0]."<br />";           
        }
    }

?>