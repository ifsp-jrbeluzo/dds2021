<!DOCTYPE html>
<html>
<head>
    <style>
        input {width:200px;margin:10px;}
    </style>
</head>
<body>
<h1>Coordenador</h1>
<form method="post">
<?php

if(!empty($_POST)){
    session_start();
    include "classeCoordenador.php";
    $c = new Coordenador($_POST);       
    $_SESSION["coordenadores"][] = $c;
}


require_once "../classesFormulario/classeInput.php";


$v= ["type"=>"text","name"=>"nome","class"=>"c","id"=>"cp","placeholder"=>"Digite o nome do coordenador..."];
$i1 = new Input($v);
$i1->exibir();

$v = null;

$v= ["type"=>"email","name"=>"email","class"=>"c","id"=>"cp","placeholder"=>"Digite o email do coordenador..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"cpf","class"=>"c","id"=>"cp","placeholder"=>"Digite o cpf do coordenador..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"sexo","class"=>"c","id"=>"cp","placeholder"=>"Digite o sexo do coordenador..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"disciplina","class"=>"c","id"=>"cp","placeholder"=>"Digite a disciplina do coordenador..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"text","name"=>"curso","class"=>"c","id"=>"cp","placeholder"=>"Digite o curso que o coordenador coordena..."];

$i1 = new Input($v);
$i1->exibir();

$v= ["type"=>"submit","name"=>"enviar","class"=>"c","id"=>"cp","placeholder"=>""];

$i1 = new Input($v);
$i1->exibir();

?>

