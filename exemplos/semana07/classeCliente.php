<?php

class Cliente{

    public $cpf; 
    public $nome; 
    public $telefone; 
    public $email; 
    public $endereco; 
    public $sexo; 
   
    public function __construct($valores){
        $this->cpf = $valores["cpf"];
        $this->nome = $valores["nome"];
        $this->telefone = $valores["telefone"];
        $this->email = $valores["email"];
        $this->endereco = $valores["endereco"];
        $this->sexo = $valores["sexo"];
    }

    public function exibir(){
        $sexo["m"] = "Masculino";
        $sexo["M"] = "Masculino";
        $sexo["f"] = "Feminino";
        $sexo["F"] = "Feminino";
        echo "<b>Cliente: </b>$this->nome<br />";
        echo "<b>CPF: </b>$this->cpf<br />";
        echo "<b>Telefone: </b>$this->telefone<br />";
        echo "<b>Email: </b>$this->email<br />";
        echo "<b>Endereço: </b>$this->endereco<br />";
        echo "<b>Sexo: </b>".$sexo[$this->sexo]."<br />";
        echo "<hr />";
    }

}


?>