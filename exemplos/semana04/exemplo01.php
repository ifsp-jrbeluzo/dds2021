<?php

require_once "classeAluno.php";
require_once "classeSecretario.php";
require_once "classeProfessor.php";

$a = new Aluno();
$a->matricula="1234554321";
$a->nota[0]="5";
$a->nota[1]="10";
$a->nome = "Joãozinho";
$a->email = "joao@email.com";
$a->telefone = "(11)9999-9999";
$a->data_nascimento = "1999-01-05";
$a->sexo = "masculino";


print_r($a);
echo "<hr />";


$p = new Professor();
print_r($p);
echo "<hr />";

$s = new Secretario();
print_r($s);
echo "<hr />";


?>