<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo - Envio de dados por formulário / 
        recebimento de dados por formulário e Laço de repetição</title>
        <style>
            input, select, button{margin:5px; width:330px;}
            button {width:339px;}
            input.data{width:130px;}
            input[name='sexo']{width:30px;}
        </style>
    </head>
    <body>
    <h2>Exemplo - Envio de dados por formulário / 
        recebimento de dados por formulário e Laço de repetição</h2>
        <h4>Sistema que coleta os dados pessoais de uma pessoa e informa por quais copas do mundo
        esta pessoa já pôde assistir, considerando apenas aquelas que a pessoa tinha mais de 5 anos de idade</h4>
    <hr />
    <a href="ex2_listar_pessoas.php">Listar todos cadastros</a>
    <hr />
    <?php include "ex2_recebe_form.php";?>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome..." /><br />        
        <b>Sexo:</b>
        <input type="radio" name="sexo" value="masculino" />Masculino 
        <input type="radio" name="sexo" value="feminino" />Feminino <br />
        <b>Data de Nascimento: </b><input type="date" name="data_nascimento" class="data" /><br />
        <input type="email" name="email" placeholder="Digite seu email..." /><br />
        <button>Enviar</button>
    </form>   
    </body>
</html>