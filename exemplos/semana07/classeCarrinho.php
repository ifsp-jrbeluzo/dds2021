<?php

require_once "classeCliente.php";

class Carrinho{

    public $cliente; 
    public $produto; 
   
    public function __construct(Cliente $c){
        $this->cliente = $c;
    }

    public function adiciona_produto(Produto $p){
        $this->produto[] = $p;
    }

    public function exibir(){
 
    }

}


?>