<?php

    include "classeRemedio.php";

    $r = new Remedio();

    $r->nome = "Aspirina";
    //$r->tarja = "Azul";
    $r->set_tarja("azul");

    print_r($r);

?>