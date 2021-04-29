<?php


class ContaBancaria{

    //atributos
    public $nome;
    public $agencia;
    public $numeroConta;
    public $saldo = 0;
    public $tipo; //$tipo 1 é conta corrente; 2 é conta poupança
    /////////////////////

    //Métodos

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }

    public function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }

    public function transferir(){
        //TO DO... (A Fazer)
    }

    public function exibe_dados_conta(){
        $tipo["cc"] = "Conta Corrente";
        $tipo["cp"] = "Conta Poupança";
        echo "<h1>Conta de: <b>".$this->nome."</b></h1>";
        echo "Agência: ".$this->agencia."<br />";
        echo "Conta: ".$this->numeroConta."<br />";
        echo "Tipo: ".$tipo[$this->tipo]."<br />";
        echo "Saldo: ".$this->saldo."<br />";

    }
    

}


?>