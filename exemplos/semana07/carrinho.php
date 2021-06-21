<?php
include "menu.php";
require_once "classeCliente.php";
require_once "classeRemedio.php";
require_once "classeCarrinho.php";
session_start();
include "conexao.php";


if(isset($_SESSION["carrinho"])){
    
    $cpf = $_SESSION["carrinho"]->cliente->cpf;
    $_SESSION["carrinho"]->remedios = null;
    
    $sql = "SELECT remedio.nome as nome, id_remedio, preco,bula, validade
                    FROM carrinho INNER JOIN cliente ON 
                        carrinho.cod_cliente=cliente.cpf AND cliente.cpf='$cpf' 
                            INNER JOIN carrinho_remedio ON
                                carrinho.id_carrinho=carrinho_remedio.cod_carrinho
                            INNER JOIN remedio ON
                                carrinho_remedio.cod_remedio = remedio.id_remedio";
                             
    $resultado = $conexao->query($sql);
    foreach($resultado as $i=>$tupla){                        
        
        $r = new Remedio($tupla);        
        $_SESSION["carrinho"]->adicionar_remedio($r);
    }
    
    $_SESSION["carrinho"]->exibir();
}


if(!empty($_POST)){
    $cpf = $_POST["cliente"];
    $sql = "SELECT * FROM carrinho INNER JOIN cliente ON
                        carrinho.cod_cliente=cliente.cpf
                            AND cod_cliente='$cpf'";
    
    $resultado = $conexao->query($sql);
    if($resultado->rowCount()=='1'){        
        foreach($resultado as $i=>$tupla){
            $t = $tupla;
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
        foreach($resultado as $i=>$tupla){
            $t = $tupla;
            $id_carrinho = $t["id_carrinho"];
        }
    }
    //$c = new Cliente($t);

    //relação de composição: O objeto "TODO" (Carrinho) é 
    //"composto" OBRIGATÓRIAMENTE pelo objeto "PARTE" $c do tipo Cliente

    $carrinho = new Carrinho($t,$id_carrinho);

    
    $_SESSION["carrinho"]=$carrinho;
    //verificar se $produtos de remédios estão "ASSOCIADOS".
    //A Relação de "ASSOCIAÇÃO" permite que objetos "PARTE" Façam parte do TODO.
    //MAs não são obrigatórios fazerem parte.
    echo "Comprando: ".$carrinho->cliente->nome;
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