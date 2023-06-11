<?php

session_start();
include_once ("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$usuario = "INSERT INTO usuario (nome, email,senha) VALUES ('$nome', '$email', '$senha')";
$resultado = mysqli_query ($conn, $usuario);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'>Usuário cadastrado com sucesso!<p>";
    header ("Location: index.php");
}
else {
    $_SESSION['msg'] = "<p style = 'color:red;'>Usuário não cadastrado!<p>";
    header("Location: index.php");
}

?>