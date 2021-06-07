<?php

     abstract class Pessoa{
        public $nome;
        public $email;
        public $cpf;
        public $sexo;

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->email = $valores["email"];
            $this->sexo = $valores["sexo"];
            $this->cpf = $valores["cpf"];
        }

        public function exibir(){
            echo "$this->nome ($this->cpf)<br />";
            echo "Email: $this->email<br />";
            echo "Sexo: $this->sexo<br />";  
        }
        
    }

?>
