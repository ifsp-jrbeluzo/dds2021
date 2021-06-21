<?php

    require_once "classePessoa.php";

    class Livro{

        private $autor;
        private $titulo;

        public function __construct($titulo, Pessoa $a){
            $this->titulo = $titulo;
            $this->autor = $a;
        }

        public function exibe_info_livro(){
            echo "Titulo Livro: $this->titulo<br />";
            echo "Autor: ".$this->autor->get_nome();
        }


    }
    

?>