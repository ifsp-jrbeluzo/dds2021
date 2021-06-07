<?php

require_once "classeAluno.php";


$vetor["nome"]="Joao";
$vetor["email"]="j@e";
$vetor["cpf"]="123";
$vetor["prontuario"]="12345";
$vetor["sexo"]="m";
$vetor["curso"]="Informática";

$a = new Aluno($vetor);

print_r($a);

?>