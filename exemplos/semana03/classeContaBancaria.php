<?php


class ContaBancaria{

    //atributos
    public $nome;
    public $agencia;
    public $numeroConta;
    public $saldo = 0;
    public $operacao; //$operacao 1 é conta corrente; 2 é conta poupança
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
        $operacao["cc"] = "Conta Corrente";
        $operacao["cp"] = "Conta Poupança";
        echo "<h1>Conta de: <b>".$this->nome."</b></h1>";
        echo "Agência: ".$this->agencia."<br />";
        echo "Conta: ".$this->numeroConta."<br />";
        echo "Operação: ".$operacao[$this->operacao]."<br />";
        echo "Saldo: ".$this->saldo."<br />";

    }
    

}


?>