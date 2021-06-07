<!DOCTYPE html>
<html>
<head>
    <style>
        input {width:200px;margin:10px;}
    </style>
</head>
<body>
<h1>Exemplo Método construtor com herança</h1>
<form method="post">
<?php

if(!empty($_POST)){
    session_start();
    include "classeProfessor.php";
    $p = new Professor($_POST);       
    $_SESSION["professores"][] = $p;
}


require_once "../classesFormulario/classeInput.php";


$v= ["type"=>"text","name"=>"nome","class"=>"c","id"=>"cp","placeholder"=>"Digite o nome do professor..."];
$i1 = new Input($v);
$i1->exibir();

$v = null;

$v= ["type"=>"email","name"=>"email","class"=>"c","id"=>"cp","placeholder"=>"Digite o email do professor..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"cpf","class"=>"c","id"=>"cp","placeholder"=>"Digite o cpf do professor..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"sexo","class"=>"c","id"=>"cp","placeholder"=>"Digite o sexo do professor..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"disciplina","class"=>"c","id"=>"cp","placeholder"=>"Digite a disciplina do professor..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"submit","name"=>"enviar","class"=>"c","id"=>"cp","placeholder"=>""];

$i1 = new Input($v);
$i1->exibir();

?>

