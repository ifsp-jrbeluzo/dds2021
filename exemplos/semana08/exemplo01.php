<?php

require_once "classeAluno.php";
require_once "classeAutor.php";
require_once "classeLivro.php";

$v["cpf"]="12345678910";
$v["nome"]="Joao da Silva";
$v["email"]="joao@gmail.com";
$v["data_nascimento"]="10/01/2000";
$v["sexo"]="m";

$aluno = new Aluno($v);
$aluno->exibe_info();
echo "<hr />";

$v=null;
$v["cpf"]="34567891012";
$v["nome"]="Maria dos Santos";
$v["email"]="maria@gmail.com";
$v["data_nascimento"]="10/05/1990";
$v["sexo"]="f";
$v["formacao"]="Letras";
$autor = new Autor($v);

//$autor->set_formacao("Matemática");

$autor->exibe_info();

$l = new Livro("As tranças da vovó careca",$autor);

$l->exibe_info_livro();


//print_r($p);

?>