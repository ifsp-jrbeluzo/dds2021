<?php

$x = $_GET["x"];

$y = $_GET["y"];

$resultado = $x*$y;

echo $resultado . "<br />";

if($resultado % 2 == 0){
    echo "$resultado é um número par.";
}
else{
    echo "$resultado é um número ímpar";
}

echo "<hr />Números múltiplos de 5 até o $resultado:<br />";
for($i=0;$i<=$resultado;$i=$i+5){    
        echo $i."<br />";
}

?>