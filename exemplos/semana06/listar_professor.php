<?php

    require_once "conexao.php";

    $q = "SELECT * FROM professor";

    $resultado = $conexao->query($q) or die(print_r($conexao->errorInfo()));
    
    if($resultado->rowCount()>0){
        
        foreach($resultado as $i=>$t){
            echo "CPF: ".$t["cpf"]."<br />";
            echo "Nome: ".$t["nome"]."<br />";
            echo "Email: ".$t["email"]."<br />";
            echo "Prontuário: ".$t["prontuario"]."<hr />";
        }
    }
    else{
        echo "Não há professores cadastrados.";
    }

?>