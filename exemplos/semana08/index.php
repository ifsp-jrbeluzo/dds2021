<?php

    require_once "classeTeste.php";

    $t = new Teste("valor do atributo privado");

//    $t->atributo_privado = "Valor do atributo privado.";

    //echo $t->atributo_privado;

    $t->atributo_publico = "valor publico";    


    $t->metodo_publico();

    $t->atributo_publico = "valor publico 2";
    
    $t->metodo_publico();

    $t->exibe_atributo_privado();

    $t->atributo_privado = "algum valor";

    $t->exibe_atributo_privado();

?>