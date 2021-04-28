<?php
session_start();
session_destroy();

header("location: form_cadastro_conta_bancaria.php");
?>