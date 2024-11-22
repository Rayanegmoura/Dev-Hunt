<?php

 session_start();

if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //print_r('usuario: ' . $usuario); 
    //print_r('senha'. $senha);

    // Cria a consulta SQL
   $sql = "SELECT * FROM freelance WHERE usuario = '$usuario' AND senha = '$senha'";
   
    // Executa a consulta
   $result = $conexao->query($sql);

    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($result) < 1) {
           
           unset($_SESSION['usuario']);
           unset($_SESSION['senha']);
           header('Location: login.php');

           // Login bem-sucedido, redireciona para a página do usuário
    } else {

        $_SESSION['usuario']  = $usuario;
        $_SESSION['senha']  = $senha;
        header('Location: userfreela.html');
    }
} 
else 
{
        // Se não acessar, redireciona para a página de login
        header('Location: login.php');
  //  }
}
?>