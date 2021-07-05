<?php

include "conexao.php";
include "verificacao_usuario.php";

if($_SESSION["perfil"]!="1"){
    header("location: index.php");
}
else{
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $sexo = $_POST["sexo"];

    $update = "UPDATE cliente SET nome='$nome',email='$email',telefone='$telefone',
                                endereco='$endereco', sexo='$sexo' WHERE cpf='$cpf'";

    $conexao->query($update);

    echo "1";
}
?>