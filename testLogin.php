<?php

session_start();

if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar usuário e senha
    $sql = "SELECT * FROM freelance WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        // Login bem-sucedido, redireciona para a página 2FA
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: 2fa.php');
    }
} 
else 
{
    // Se não acessar, redireciona para a página de login
    header('Location: login.php');
}
?>
