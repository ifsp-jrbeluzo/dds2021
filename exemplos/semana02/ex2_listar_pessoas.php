<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo - Listagem de dados / laço de repetição foreach / 
                variáveis de sessão</title>
        <style>
            input, select, button{margin:5px; width:330px;}
            button {width:339px;}
            input.data{width:130px;}
            input[name='sexo']{width:30px;}
        </style>
    </head>
    <body>
    <a href="ex2_form.php">Cadastrar novas pessoas</a> | 
    <a href="ex2_limpar_cadastros.php">Limpar cadastros </a>
    <hr />
    <?php
        session_start();
        include "ex2_funcoes.php";
        
        foreach($_SESSION["cadastro"] as $i=>$c){
            exibe_cadastro($c);
            echo "<hr />";
        }
    ?>
    </body>
</html>