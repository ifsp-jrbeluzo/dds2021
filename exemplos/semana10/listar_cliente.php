<?php
include "menu.php";
include "classeCliente.php";
include "conexao.php";

$sql = "SELECT * FROM cliente ORDER BY nome";

$resultado = $conexao->query($sql) or die(print_r($conexao->errorInfo()));


if($resultado->rowCount()>0){
    
    foreach($resultado as $i=>$t){
        $c = new Cliente($t);        
        $c->exibir();

    }

}
else{
    echo "Não há clientes cadastrados.";
}


?>