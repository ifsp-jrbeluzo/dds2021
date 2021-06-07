<?php

$sgbd="mysql";
$host ="localhost";
$usuario="root";
$senha="";
$bd="escola";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd",$usuario,$senha);

?>