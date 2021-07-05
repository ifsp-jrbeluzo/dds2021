<?php
include "menu.php";
require_once "classeCliente.php";
require_once "classeCarrinho.php";
session_start();
include "conexao.php";

$cod_carrinho = $_SESSION["carrinho"]->id_carrinho;

$cod_remedio = $_GET["id_remedio"];

$sql = "INSERT INTO carrinho_remedio VALUES ('$cod_carrinho','$cod_remedio')";


$conexao->query($sql) or die(print_r($conexao->errorInfo()));

echo "Produto adicionado ao carrinho.";