<?php

    // acesso aos dados
    // acesso às funcionalidades

    include "verificacao_usuario.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro de Remédios</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" />

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/inserir_alterar_remover_cliente.js"></script>
    </head>
    <body>
        <h1>Sistema de Farmácia</h1>
        <hr />
            <?php
            if($_SESSION["perfil"]!='3'){
                echo '<a href="form_remedio.php">Cadastrar novo remédio</a> | ';
            }
            ?>            
            <a href="listar_remedio.php">Listar remédios</a> | 
            <a href="form_cliente.php">Cadastrar novo Cliente</a> | 
            <a href="listar_cliente.php">Listar clientes</a> | 
            <a href="carrinho.php">Carrinho</a> | 
            <a href="logout.php">Sair (Logout)</a>
        <hr />
        <div id="msg"></div>