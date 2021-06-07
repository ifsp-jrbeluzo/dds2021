<?php

    if(!empty($_POST)){
        include "classeAluno.php";

        session_start();
        
        $a = new Aluno($_POST); //instanciando um objeto da classe aluno. 
        $_SESSION["alunos"][] = $a;
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
<h1>Exemplo Método construtor com herança</h1>
<form method="post">
<input type="text" name="nome" placeholder="Nome..." /><br />
<input type="email" name="email" placeholder="Email..." /><br />
<input type="number" name="cpf" placeholder="CPF..." /><br />
<input type="text" name="sexo" placeholder="Sexo..." /><br />
<input type="text" name="prontuario" placeholder="Prontuario..." /><br />
<input type="text" name="curso" placeholder="Curso..." /><br />
<button>Enviar</button>
</form>
</body>
</html>