<?php
include "classeContaBancaria.php";
session_start();

if(!empty($_POST)){    
   $agencia = $_POST["agencia"];
   $conta = $_POST["conta"];
   $tipo = $_POST["tipo"];
   $valor = $_POST["valor"];
   $operacao = $_POST["operacao"];

   $conta_encontrada = false;
   foreach($_SESSION["contaBancaria"] as $i=>$c){
        if($c->agencia==$agencia && $c->numeroConta==$conta && $c->tipo==$tipo){
            echo "conta encontrada.";
            $conta_encontrada = true;
            if($operacao=="d"){
                $c->depositar($valor);
            }
            else{
                if($c->saldo-$valor<0){
                    echo "Saldo Insuficiente para este saque...<br />";
                }
                else{
                    $c->sacar($valor);
                }                
            }
        }
   }

   if(!$conta_encontrada){
       echo "Conta não encontrada.";
   }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            input, select, button{
                margin: 10px;
                width: 300px;
            }
        </style>
    </head>
    <body>
        <h1>Operação Bancária</h1><hr />
        <form method="post">
            <select name="operacao">
                <option label="Selecione a operação"></option>
                <option value="d">Depósito</option>
                <option value="s">Saque</option>
            </select><br />
            <input type="text" name="agencia" placeholder="Digite a agência para operação..." /><br />
            <input type="number" name="conta" placeholder="Digite a conta para operação..." /><br />
            <input type="number" name="valor" placeholder="Digite o valor da operação..." /><br />
            <select name="tipo">
                <option label="Selecione o tipo"></option>
                <option value="cc">Conta Corrente</option>
                <option value="cp">Conta Poupança</option>
            </select><br />
            <button>Realizar Operação</button>
        </form>
    </body>
</html>