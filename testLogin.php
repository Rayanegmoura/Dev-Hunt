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

    // Consulta SQL para verificar se o usuário é uma empresa (com nome da empresa)
    $sqlEmpresa = "SELECT * FROM empresa WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultEmpresaNome = $conexao->query($sqlEmpresa);

    // Consulta SQL para verificar se o usuário é uma conta administrativa (Adm)
    $sqlAdm = "SELECT * FROM Adm WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultAdm = $conexao->query($sqlAdm);

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
    elseif (mysqli_num_rows($resultEmpresaNome) > 0) {
        // Login bem-sucedido como empresa
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        // Redireciona para a página principal da empresa
        header('Location: 2faempresa.php');
        exit();
    }

    // Verifica se o login é válido para administrador
    elseif (mysqli_num_rows($resultAdm) > 0) {
        // Login bem-sucedido como administrador
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        // Redireciona para a página 2FA para administradores
        header('Location: admin.php');
        exit();
    } 
    else {
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
