<?php

require_once "classeCliente.php";

class Carrinho{
    public $id_carrinho;
    public $cliente; 
    public $remedios; 
   
    public function __construct($tupla,$id){
        $this->id_carrinho = $id;
        $this->cliente = new Cliente($tupla);
    }

    public function adicionar_remedio(Remedio $r){
        $this->remedios[] = $r;
    }

    public function exibir(){
        $total = 0;
        echo "<b>Comprando:</b> ".$this->cliente->nome." <hr />";
        foreach($this->remedios as $i=>$r){
            $r->exibir("carrinho");
            $total+=$r->preco;
        }
        echo "<b>Total da compra:</b> R$ ".number_format($total,2);
        echo "<br /><br />
        <button onclick=\"location.href='finalizar_compra.php';\">Finalizar Compra</button>";
        echo "<hr />";
    }

}


?>