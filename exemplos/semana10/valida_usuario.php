<?php

    include "conexao.php";
    $usuario = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE email='$usuario' AND senha='$senha'";

    
    $resultado = $conexao->query($sql) or die(print_r($conexao));

    if($resultado->rowCount()=="1"){
        foreach($resultado as $i=>$l){
            $id_usuario= $l["id_usuario"];
            $perfil=$l["perfil"];
        }
        session_start();
        $_SESSION["autorizado"]=$id_usuario;
        $_SESSION["perfil"]=$perfil;
        header("location: index.php");
    }
    else{
        header("location: login.php?erro=1");
    }
?>