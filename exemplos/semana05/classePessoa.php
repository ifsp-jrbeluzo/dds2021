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
    }

?>