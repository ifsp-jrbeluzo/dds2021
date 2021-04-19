<html>

<?php
//PHP é um pré processador de hipertextos.
if(!empty($_GET["nome"])){
    $g = $_GET["nome"];
}
else{
    $g = "Sem nome.";
}

$p = "<p>Um paragrafo</p>";

echo "

    <head>
    </head>
    <body>
        Oi. 
    $p
    <p>$g</p>
    <a href='2021-04-07-ex1.php?nome=Beluzo'>Link para mostrar o nome </a>
    <br /><br />
    ";
    

    if(!empty($_POST["nome"])){
        echo "nome digitado no formulário: ".$_POST["nome"]."<br />";
    }

?>
<form method="post">
    <input type="text" name="nome" placeholder="digite seu nome..." />
    <button> Enviar </button>
</form>
</body>
</html>