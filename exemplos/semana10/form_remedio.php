<?php
include "menu.php";


?>
        <form method="post" action="recebe_form_remedio.php">
        <?php
        if($_SESSION["perfil"]!="3"){    
            include "../classesFormulario/classeInput.php";
            include "../classesFormulario/classeTextarea.php";

            $v["type"]="text";
            $v["name"]="nome";
            $v["id"]="nome";
            $v["class"]="i";
            $v["placeholder"]="Digite o nome do remédio...";
            $i = new Input($v);
            $i->exibir();

            $v = null;
            $v["type"]="number";
            $v["name"]="preco";
            $v["id"]="preco";
            $v["class"]="i";
            $v["placeholder"]="Digite o preço do remédio...";
            $v["step"]="0.01";
            $i = new Input($v);
            $i->exibir();

            $v1["name"]="bula";
            $v1["placeholder"]="Informe a descrição da bula...";
            $v1["cols"]="40";
            $v1["rows"]="4";
            $v1["class"]="t";
            $t = new TextArea($v1);
            $t->exibir();

            $v=null;
            $v["type"]="date";
            $v["name"]="validade";
            $v["id"]="validade";
            $v["class"]="i"; 
            $i = new Input($v);
            $i->exibir();

            $v=null;
            $v["type"]="submit";
            $v["name"]="Enviar";
            $v["id"]="Enviar";
            $v["class"]="i"; 
            $i = new Input($v);
            $i->exibir();            
        }
        else{
            echo "Você não tem acesso a esta funcionalidade.";
        }

        ?>


        </form>
    </body>
</html>