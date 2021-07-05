<!DOCTYPE HTML>
<html>
    <Head></head>
    <body>
    <?php
        if(isset($_GET["erro"])){
            echo "<span style='color:red;font-weight:bold'>Usuário e/ou senha inválidos.</span>";
        }
    ?>
    <form method="post" action="valida_usuario.php">
        <input type="email" name="email" placeholder="Digite o nome de usuário..." /><br />
        <input type="password" name="senha" placeholder="Digite a senha de usuário..." /><br />
        <button>LOGAR</button>
    </form>
    </body>
</html>