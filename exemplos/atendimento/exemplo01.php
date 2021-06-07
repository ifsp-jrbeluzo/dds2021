<!DOCTYPE html>
<html>
    <head>
        <style>input,select,button{margin:10px;}
        </style>
    </head>
    <body>
    <h1>Bem vindo ao IFSPET</h1>
    <hr />
    <?php

    if(!empty($_POST)){

        print_r($_POST);

        echo "<hr />";
        echo "<h3>Informações do pet cadastrado:</h3>";

        echo "espécie do animal: " . $_POST["especie"]."<br />";
        echo "Nome do PET: ".$_POST["nome"] . "<br />";
        echo "Peso do PET: ".$_POST["peso"] . "<br />";
        echo "Idade do PET: ".$_POST["idade"] . "<hr />";

    }

    ?>


        <form method="post">
            <select name="especie">
                <option label="::selecione uma espécie::">
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Coelho</option>
                <option>Tartaruga</option>
            </select> <Br />
            <input type="text" name="nome" placeholder="nome do animal..." /> <br />
            
            <input type="number" name="peso" placeholder="digite o peso ..." /> <br />
            
            <input type="number" name="idade" placeholder="digite a idade ..." /> <br />
            <labeL>sexo:</label>
            <input type="radio" name="sexo" value="m" /> Macho
            <input type="radio" name="sexo" value="f" /> Fêmea
            <br />

            <label>Brinquedo preferido(s):</label>
            <input type="checkbox" name="brinquedo[]" value="bolinha" /> Bolinha
            <input type="checkbox" name="brinquedo[]" value="frisby" /> Frisby
            <input type="checkbox" name="brinquedo[]" value="pelucia" /> Pelucia
            <br />            

            <button>Enviar</button>
        </form>
    </body>
</html>