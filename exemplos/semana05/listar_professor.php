<?php
    require_once "classeProfessor.php";
    session_start();


    foreach($_SESSION["professores"] as $i=>$a){
        $a->exibir_professor();
    }


?>