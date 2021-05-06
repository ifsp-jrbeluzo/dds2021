<?php
    require_once "classeEscola.php";
    session_start();


    foreach($_SESSION["escolas"] as $i=>$e){
        $e->exibir_escola();
    }


?>