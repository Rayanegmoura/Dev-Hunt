<?php
session_start();

// Verifica se o formulário foi submetido e se os campos de usuário e senha não estão vazios
if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o usuário é um freelancer
    $sqlFreelancer = "SELECT * FROM freelance WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultFreelancer = $conexao->query($sqlFreelancer);

    // Consulta SQL para verificar se o usuário é uma empresa
    $sqlEmpresa = "SELECT * FROM empresa WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultEmpresa = $conexao->query($sqlEmpresa);

    // Verifica se o login é válido para freelancer
    if (mysqli_num_rows($resultFreelancer) > 0) {
        // Login bem-sucedido como freelancer
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        // Redireciona para a página 2FA para freelancers
        header('Location: 2fafreela.php');
        exit();
    }
    // Verifica se o login é válido para empresa
    elseif (mysqli_num_rows($resultEmpresa) > 0) {
        // Login bem-sucedido como empresa
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        // Redireciona para a página 2FA para empresas
        header('Location: 2faempresa.php');
        exit();
    } else {
        // Falha no login, redireciona para a página de login
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
        exit();
    }
} 
else 
{
    // Se não acessar, redireciona para a página de login
    header('Location: login.php');
    exit();
}
?>
