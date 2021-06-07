<!DOCTYPE html>
<html>
<head>
    <style>
        input, button{margin:10px;width:300px;}
    </style>
</head>
<body>
    <h1>Cadastro de professor</h1>
    <form method="post" action="recebe_cadastro_professor.php">
        <input type="text" name="cpf" placeholder="Digite o CPF do professor..." /> <br />
        <input type="text" name="nome" placeholder="Digite o Nome do professor..." /> <br />
        <input type="text" name="email" placeholder="Digite o Email do professor..." /> <br />
        <input type="text" name="prontuario" placeholder="Digite o Prontuário do professor..." /> <br />
        <button>Enviar</button>
    </form>
</body>
</html>