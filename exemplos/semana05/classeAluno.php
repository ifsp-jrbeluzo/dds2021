<?php
    
    require_once "classePessoa.php";

    class Aluno extends Pessoa{
        public $prontuario;
        public $curso;


        public function __construct($valores){
            parent::__construct($valores);
            $this->prontuario = $valores["prontuario"];
            $this->curso = $valores["curso"];
        }

        public function exibir_aluno(){
            echo "<h3>Aluno:</h3>";
            echo "$this->nome ($this->cpf)<br />";
            echo "Email: $this->email<br />";
            echo "Sexo: $this->sexo<br />";           
            echo "Prontuário: $this->prontuario<br />";           
            echo "Curso: $this->curso<br />";           
        }
    }

?>