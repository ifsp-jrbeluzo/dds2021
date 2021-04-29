<?php
include "classeContaBancaria.php";
session_start();

//print_r($_SESSION);
//die();

if(isset($_SESSION["contaBancaria"])){
    foreach($_SESSION["contaBancaria"] as $i=>$c){
        $c->exibe_dados_conta();
    }
   
}
else{
    echo "Ainda não há cadastros.";
}

?>