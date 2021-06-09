<?php
include "menu.php";
require_once "classeCliente.php";
require_once "classeCarrinho.php";
include "conexao.php";


if(!empty($_POST)){
    $cpf = $_POST["cliente"];
    $sql = "SELECT * FROM carrinho INNER JOIN cliente ON
                        carrinho.cod_cliente=cliente.cpf
                            AND cod_cliente='$cpf'";
    
    $resultado = $conexao->query($sql);
    if($resultado->rowCount()=='1'){        
        foreach($resultado as $i=>$t){
            $id_carrinho = $t["id_carrinho"];            
        }
    }
    else{
        $i = "INSERT INTO carrinho VALUES (NULL,'$cpf')";
        
        $conexao->query($i);
        $sql = "SELECT * FROM carrinho INNER JOIN cliente ON
                    carrinho.cod_cliente=cliente.cpf
                        AND cod_cliente='$cpf'";
        $resultado = $conexao->query($sql);
        foreach($resultado as $i=>$t){
            $id_carrinho = $t["id_carrinho"];
        }
    }
    $c = new Cliente($t);

    //relação de composição: O objeto "TODO" (Carrinho) é 
    //"composto" OBRIGATÓRIAMENTE pelo objeto "PARTE" $c do tipo Cliente

    $carrinho = new Carrinho($c);

    //verificar se $produtos de remédios estão "ASSOCIADOS".
    //A Relação de "ASSOCIAÇÃO" permite que objetos "PARTE" Façam parte do TODO.
    //MAs não são obrigatórios fazerem parte.
    
    print_r($carrinho);

}
else if(isset($_SESSION["carrinho"])){
    echo "teste";
}
else{
    $sql = "SELECT * FROM cliente ORDER BY nome";

    $resultado = $conexao->query($sql) or die(print_r($conexao->errorInfo()));


    if($resultado->rowCount()>0){
        echo "<form method='post' action='#'>";
        echo "<select name='cliente'>";
        echo "<option label='Selecione o cliente'></option>";
        foreach($resultado as $i=>$t){
            $c = new Cliente($t);        
            echo "<option value='$c->cpf'>$c->nome($c->cpf)</option>";
        }
        echo "</select>";
        echo "<button>Iniciar Carrinho</button>";
        echo "</form>";

    }
    else{
        echo "Não há clientes cadastrados.";
    }
}

?>