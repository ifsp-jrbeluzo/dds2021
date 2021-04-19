<?php
    session_start();
    
    session_destroy();

    header("location: ex2_form.php");
?>