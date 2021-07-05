<?php

include "verificacao_usuario.php";

if($_SESSION["perfil"]!="1"){
    header("location: index.php");
}
else{
    include "conexao.php";


    $id_cliente = $_POST["id_tabela"];
    $delete = "DELETE FROM cliente WHERE cpf='$id_cliente'";

    $conexao->query($delete);

    echo "1";
}
?>