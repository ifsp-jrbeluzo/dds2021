<?php

class Remedio{

    public $nome; // texto em geral... 
    public $preco; // Joao;
    private $tarja; //verde, vermelha ou preta
    public $bula; // texto
    public $composicao = array(); //vetor de palavras
    public $validade;// data
    public $tipo; //Gota, capsula ou comprimido
   
    public function set_tarja($valor){
        if($valor=="verde" || $valor=="vermelha" || $valor=="preta"){
            $this->tarja = $valor;
        }
        else{
            echo "Valor de tarja inválido.";
        }
    }

}


?>