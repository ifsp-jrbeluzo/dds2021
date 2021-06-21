<?php

    require_once "classePessoa.php";

    class Autor extends Pessoa{

        private $formacao;

        public function __construct($valores){
            parent::__construct($valores);
            $this->set_formacao($valores["formacao"]);
        }

        public function exibe_info(){
            echo "Nome do autor: $this->nome <br />";
            echo "Formação do autor: $this->formacao <br />";
            echo "CPF do autor: $this->cpf <br />";
            echo "Email do autor: $this->email <br />";
            echo "Data Nascimento do autor: $this->data_nascimento <br />";
            echo "Sexo do autor: $this->sexo <br />";
        }

        public function set_formacao($f){
            switch($f){
                case "Letras":
                    $this->formacao = $f;
                    break;
                case "Matemática":
                    $this->formacao = $f;
                    break;   
                case "Informática":
                    $this->formacao = $f;
                    break;       
                default:
                    $this->formacao = "Não informada";
                    break;                                 
            }
        }

        public function get_cpf(){
            return($this->cpf);
        }

        public function get_nome(){
            return($this->nome);
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