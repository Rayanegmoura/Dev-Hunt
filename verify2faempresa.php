<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Exibe erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $resposta = $_POST['resposta'];
    $pergunta = $_POST['pergunta'];

    // Inclui a configuração do banco de dados
    include_once('config.php');
    $usuario = $_SESSION['usuario'];

    // Inicializa a variável `$campo` que será usada para consultar o banco de dados
    $campo = '';
    
    if ($pergunta === 'cnpj') {
        $campo = 'cnpj';
      
    } elseif ($pergunta === 'cep') {
        $campo = 'cep';
        
    } elseif ($pergunta === 'social') {
        $campo = 'social';
    }

    // Verifica se o campo foi configurado corretamente
    if (empty($campo)) {
        echo '<script>alert("Erro ao determinar o campo para a consulta. Tente novamente.");</script>';
        echo '<script>window.location.href="2faempresa.php";</script>';
        exit();
    }

    // Prepara a consulta SQL para verificar a resposta fornecida pelo usuário
    $sql = "SELECT * FROM empresa WHERE usuario = ? AND $campo = ?";

    try {
        // Prepara a consulta
        $stmt = $conexao->prepare($sql);
        if ($stmt === false) {
            throw new Exception('Erro ao preparar a consulta: ' . $conexao->error);
        }

        // Liga as variáveis aos parâmetros
        $stmt->bind_param('ss', $usuario, $resposta);

        // Executa a consulta
        $stmt->execute();

        // Obtém o resultado da execução
        $result = $stmt->get_result();

        // Verifica se algum resultado foi retornado (autenticação bem-sucedida)
        if ($result->num_rows > 0) {
            // Autenticação 2FA bem-sucedida para empresa
            header('Location: userempresa.html');
            exit();
        } else {
            // Falha na autenticação 2FA
            echo '<script>alert("Falha na autenticação 2FA. Tente novamente.");</script>';
            echo '<script>window.location.href="2faempresa.php";</script>';
            exit();
        }
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
?>
