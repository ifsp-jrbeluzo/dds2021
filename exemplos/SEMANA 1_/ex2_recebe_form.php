<?php

include "ex2_funcoes.php";

    if(!empty($_POST)){
        session_start();
        $_SESSION["cadastro"][]=$_POST;
        exibe_dados($_POST);
    }


?>