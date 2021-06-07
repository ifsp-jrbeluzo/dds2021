<?php
    
    require_once "classePessoa.php";

    class Aluno extends Pessoa{
        public $prontuario;
        public $curso;


        public function __construct($valores){            
            $this->prontuario = $valores["prontuario"];
            $this->curso = $valores["curso"];
            parent::__construct($valores);
        }

        public function exibir_aluno(){
            echo "<h3>Aluno:</h3>";
            $this->exibir();
            echo "Prontuário: $this->prontuario<br />";           
            echo "Curso: $this->curso<br />";           
        }
    }

?>