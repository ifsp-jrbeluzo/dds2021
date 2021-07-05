<?php
require_once "menu.php";
require_once "conexao.php";
require_once "classeCarrinho.php";
require_once "classeCliente.php";

session_start();

$cod_carrinho = $_SESSION["carrinho"]->id_carrinho;
$cod_cliente = $_SESSION["carrinho"]->cliente->cpf;

$sql = "INSERT INTO compra VALUES ('$cod_carrinho','$cod_cliente')";

$conexao->query($sql) or die(print_r($conexao->errorInfo()));

$sql = "DELETE FROM carrinho WHERE id_carrinho='$cod_carrinho'
                            AND cod_cliente='$cod_cliente' ";


$conexao->query($sql) or die(print_r($conexao->errorInfo()));


echo "Compra finalizada com sucesso.";
?>