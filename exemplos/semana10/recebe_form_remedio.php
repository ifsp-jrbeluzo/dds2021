<?php
include "menu.php";


include "conexao.php";


include "verificacao_usuario.php";

if($_SESSION["perfil"]=="3"){
    header("location: index.php");
}
else{
    $nome = $_POST["nome"];
    $bula = $_POST["bula"];
    $preco = $_POST["preco"];
    $validade = $_POST["validade"];


    $sql = "INSERT INTO remedio VALUES(
                                        NULL,
                                        '$nome',
                                        '$bula',
                                        '$preco',
                                        '$validade'
                                    )";

    $conexao->query($sql) or die(print_r($conexao->errorInfo()));
    echo "Remédio inserido com sucesso.";
}
?>