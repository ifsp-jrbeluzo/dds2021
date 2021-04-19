<?php
session_start();


 // copa acontece de 4 em 4 anos.
 // copa iniciou em 1930.
 // copa sempre em ano par.
 // copa nunca em ano multiplo de 4.

if(!empty($_POST)){
    include "ex2_funcoes.php";

    exibe_cadastro($_POST);

    $_SESSION["cadastro"][] = $_POST;
    
}

?>