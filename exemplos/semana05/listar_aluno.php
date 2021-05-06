<?php
    require_once "classeAluno.php";
    session_start();


    foreach($_SESSION["alunos"] as $i=>$a){
        $a->exibir_aluno();
    }


?>