<?php

class Remedio{

    public $id_remedio; // texto em geral... 
    public $nome; // texto em geral... 
    public $preco; // ;
    //private $tarja; //verde, vermelha ou preta
    public $bula; // texto
    //public $composicao = array(); //vetor de palavras
    public $validade;// data
    //public $tipo; //Gota, capsula ou comprimido
   
    public function __construct($valores){        
        $this->id_remedio = $valores["id_remedio"];
        $this->nome = $valores["nome"];
        $this->preco = $valores["preco"];
        $this->bula = $valores["bula"];
        $this->validade = $valores["validade"];
    }

    public function exibir($tipo){
        echo "<b>Remédio: </b>$this->nome<br />";
        echo "<b>Preço: </b>$this->preco<br />";
        echo "<b>Bula: </b>$this->bula<br />";
        echo "<b>Validade: </b>$this->validade<br />";
        if($tipo=="comprar"){
            echo "<a href='comprar_remedio.php?id_remedio=$this->id_remedio'>Comprar</a>";
        }
        echo "<hr />";
    }

}


?>