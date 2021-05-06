<?php

/*Objetivo: gerar a tag html abaixo
<input type="text" name="nome" class="formulario" id="nomeId" placeholder="Nome..." />
*/

require_once "classeInputTextual.php";
require_once "classeTextArea.php";

$i = new InputTextual();
$i->type = "text";
$i->name = "nome";
$i->class = "formulario";
$i->id = "nomeId";
$i->placeholder = "Nome...";

$i->exibir();
echo "<br />";

$i2 = new InputTextual();
$i2->type = "email";
$i2->name = "email";
$i2->class = "formulario";
$i2->id = "emailId";
$i2->placeholder = "Email...";

$i2->exibir();
echo "<br />";

$t = new TextArea();
$t->name="bibliografia";
$t->cols="20";
$t->rows="5";
$t->placeholder="Bibliografia...";

$t->exibir();
echo "<br />";

$i3 = new Input();
$i3->type = "submit";

$i3->exibir();
echo "<br />";

?>