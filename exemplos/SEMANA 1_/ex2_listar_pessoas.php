<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo - Listagem de dados (laço foreach / variável de sessão)</title>
    </head>
    <body>
    <a href="ex2_form.php">Cadastrar novas pessoas</a> | 
    <a href="ex2_limpar_cadastros.php">Limpar Todos os cadastros</a>
    <hr />
    <?php

        if(!empty($_SESSION["cadastro"])){
            include "ex2_funcoes.php";

            foreach($_SESSION["cadastro"] as $i=>$c){
                exibe_dados($c);
            }
        }
        else{
            echo "Ainda não há cadastros no sistema.";
        }

    ?>

    </body>
</html>