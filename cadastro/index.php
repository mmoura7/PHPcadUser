<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>

    <body>
        <h1>CADASTRO SIMPLIFICADO <br><br></h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="cadastro.php">
            <label>Nome:</label><input type="text" name="nome" id="nome"><br>
            <label>E-mail:</label><input type="email" name="email" id="email"><br>
            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
        </form>
    </body>
</html>