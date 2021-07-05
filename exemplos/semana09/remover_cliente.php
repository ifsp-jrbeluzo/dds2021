<?php

include "conexao.php";

$id_cliente = $_POST["id_tabela"];
$delete = "DELETE FROM cliente WHERE cpf='$id_cliente'";

$conexao->query($delete);

echo "1";
?>