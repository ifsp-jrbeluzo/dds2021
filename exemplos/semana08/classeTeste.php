<?php

    class Teste{

        public $atributo_publico;

        private $atributo_privado;


        public function __construct($valor_privado){
            $this->atributo_privado = $valor_privado;
        }


        public function metodo_publico(){
            echo "Valor atributo público: $this->atributo_publico <br />";
        }

        public function exibe_atributo_privado(){
            echo $this->atributo_privado;
        }


    }

?>