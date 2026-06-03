<?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
?>

<!-- codigo para sair do site -->