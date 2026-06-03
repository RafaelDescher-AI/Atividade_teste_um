<?php

include("infra/db/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";

    $resultado = $conn -> query($sql);

    if($resultado -> num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}
// é o sistema de login de usuario, onde ele ja puxa do db connect a parte da session start, e ele só adiciona no banco
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
    <!-- docs -->
     <?php
    include("public/component/table.php");
    ?>
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

// parte de colocar os dados que são puxados ali antes
            if(isset($erro)){
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>