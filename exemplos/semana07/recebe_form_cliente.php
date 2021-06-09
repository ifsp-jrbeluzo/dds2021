<?php
include "menu.php";


include "conexao.php";

$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$sexo = $_POST["sexo"];


$sql = "INSERT INTO cliente VALUES(
                                    '$cpf',
                                    '$nome',
                                    '$telefone',
                                    '$email',
                                    '$endereco',
                                    '$sexo'
                                )";

$conexao->query($sql) or die(print_r($conexao->errorInfo()));


echo "Cliente inserido com sucesso.";
?>