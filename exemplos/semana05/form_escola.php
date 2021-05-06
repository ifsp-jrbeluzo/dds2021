<?php

    if(!empty($_POST)){
        session_start();
        include "classeEscola.php";
        $e = new Escola($_POST);       
        $_SESSION["escolas"][] = $e;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        input {width:200px;margin:10px;}
    </style>
</head>
<body>
<h1>Exemplo Método construtor</h1>
<form method="post">
<input type="text" name="nome" placeholder="Nome escola..." /><br />
<input type="text" name="cnpj" placeholder="CNPJ..." /><br />
<input type="text" name="endereco" placeholder="Endereço..." /><br />
<input type="text" name="cidade" placeholder="Cidade..." /><br />
<input type="text" name="estado" placeholder="Estado..." /><br />
<button>Enviar</button>
</form>
</body>
</html>