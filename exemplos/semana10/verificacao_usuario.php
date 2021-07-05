<?php

//perfil 1: acesso total
//perfil 2: limitação na alteração/exclusão de usuário
//perfil 3: limitação no cadastro de remédio e alteração/exclusão de usuário


session_start();

if(!isset($_SESSION["autorizado"])){
    header("location: login.php");
}



?>