<?php

    require_once "classePessoa.php";
    

    class Aluno extends Pessoa{

        public function exibe_info(){
            echo "Nome do aluno: $this->nome<br />";
            echo "CPF do aluno: $this->cpf <br />";
            echo "Email do aluno: $this->email <br />";
            echo "Data Nascimento do aluno: $this->data_nascimento <br />";
            echo "Sexo do aluno: $this->sexo <br />";
        }

        public function a(){
            echo "bla";
        }

        public function b(){
            echo "blab";
        }
        
        public function c(){
            echo "blac";
        }

    }


?>