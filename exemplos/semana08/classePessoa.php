<?php

require_once "interfaceControle.php";

    abstract class Pessoa implements Exibicao{
        protected $cpf;
        protected $nome;
        public $email;
        protected $data_nascimento;
        public $sexo;

        public function __construct($valores){
            $this->cpf = $valores["cpf"];
            $this->nome = $valores["nome"];
            $this->email = $valores["email"];
            $this->data_nascimento = $valores["data_nascimento"];
            $this->sexo = $valores["sexo"];
        }



    }


?>