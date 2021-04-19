<?php

$animal = "";
if(!empty($_POST)){    
    $animal = "<h4>Informações do PET cadastrado: </h4><br />";
    $animal .= "<b>Espécie animal:</b> ".$_POST["especie"]."<br />";
    $animal .= "<b>Nome:</b> ".$_POST["nome"]."<br />";
    $animal .= "<b>Peso:</b> ".$_POST["peso"]."<br />";
    $animal .= "<b>Idade:</b> ".$_POST["idade"]."<hr /><br /> ";
}

?>
<html>
    <head> 
    <title>IFSPET</title>
    <style>
        input,select,button{margin:10px;width:200px;}
    </style>
    </head>
    <body>
        <h2>Bem vindo ao IFSPET</h2>
        <hr />

        <?php if($animal!="") echo $animal; ?>
        Preencha as informações do seu PET: <br />
        <form method="post">
            <select name="especie">
                <option> ::selecione uma espécie::</option>
                <option>Cachorro</option>
                <option>Coelho</option>                
                <option>Gato</option>
                <option>Tartaruga</option>
            </select> <br />

            <input type="text" name="nome" placeholder="Nome do animal..." /><br />
            <input type="number" name="peso" placeholder="Peso do animal em kg..." step="0.01" min="0.01" /><br />
            <input type="number" name="idade" placeholder="Idade do animal em anos..." step="1" min="1" /><br />
            <button>Enviar</button>
        </form>
    </body>
</html>