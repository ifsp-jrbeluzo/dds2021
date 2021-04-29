<?php

    if(!empty($_POST)){
        session_start();
        include "classeContaBancaria.php";
        $c = new ContaBancaria();
        $c->nome = $_POST["nome"];
        $c->agencia = $_POST["agencia"];
        $c->numeroConta = $_POST["numeroConta"];
        $c->tipo = $_POST["tipo"];
        //print_r($c);
        $_SESSION["contaBancaria"][] = $c;

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
        <h1>Cadastro de conta do cliente</h1><hr />
        <form method="post">
            <input type="text" name="nome" placeholder="Digite o nome do cliente..." /><br />
            <select name="agencia">
                <option label="Selecione uma agência"></option>
                <option>1022-4</option>
                <option>1033-2</option>
                <option>1833-5</option>
                <option>1839-7</option>
            </select> <br />

            <input type="number" name="numeroConta" 
                placeholder="Digite o número da nova conta..." /><br />

            <select name="tipo">
                <option label="Selecione o tipo"></option>
                <option value="cc">Conta Corrente</option>
                <option value="cp">Conta Poupança</option>
            </select><br />

            <button>Cadastrar</button>
        
        </form>
        

    </body>
</html>