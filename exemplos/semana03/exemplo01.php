<?php
include "classeCarro.php";

$x = array("a","b","cde");

print_r($x);
echo "<hr />";

$c1 = new Carro();
$c2 = new Carro();

$c1->cor="Vermelho";
$c1->qtd_porta="2";
$c1->velocidade_maxima = "350";

$c2->cor="Branco";
$c2->qtd_porta="2";
$c2->velocidade_maxima = "450";

print_r($c1);
echo "<hr />";
print_r($c2);
echo "<hr />";
echo "<hr />";

$c1->acelerar(25,4);
print_r($c1);
echo "<hr />";

$c2->acelerar(180,3);
print_r($c2);
echo "<hr />";

$c2->frear(180,4);
print_r($c2);
echo "<hr />";

?>

