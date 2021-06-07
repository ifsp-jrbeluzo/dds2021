<?php
    require_once "classeCoordenador.php";
    session_start();


    foreach($_SESSION["coordenadores"] as $i=>$a){
        $a->exibir_coordenador();
    }

    


?>