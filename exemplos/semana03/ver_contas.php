<?php
include "classeContaBancaria.php";
session_start();


foreach($_SESSION["contaBancaria"] as $i=>$c){
    $c->exibe_dados_conta();
}


foreach($_SESSION["contaBancaria"] as $i=>$c){
    $c->depositar(100);
}


foreach($_SESSION["contaBancaria"] as $i=>$c){
    $c->exibe_dados_conta();
}

?>