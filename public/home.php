<?php

session_start();

if(!isset($_SESSION["usuario"])){
    Header("Location: ../index.php");
    exit();
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h2>Bem-vindo"</h2>

<p> Usuário logado:

    <?php echo $_SESSION["usuario"];?>
    </p>
    <a href="logout.php">Sair</a>

</body>
</html>