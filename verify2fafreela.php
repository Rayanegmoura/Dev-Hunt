<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['submit'])) {
    $resposta = $_POST['resposta'];
    $pergunta = $_POST['pergunta'];

    // Inclui a configuração do banco de dados
    include_once('config.php');
    $usuario = $_SESSION['usuario'];

    // Inicializa a variável `$campo`
    $campo = '';
    if ($pergunta === 'mae') {
        $campo = 'mae';
    } elseif ($pergunta === 'cep') {
        $campo = 'cep';
    } elseif ($pergunta === 'dat_nasc') {
        $campo = 'dat_nasc';

        // Verifica se a resposta da data está no formato correto
        $respostaFormatada = date('Y-m-d', strtotime($resposta));
        if ($respostaFormatada === false) {
            // Se a formatação falhar, exibe um erro
            echo '<script>alert("Formato de data inválido. Use o formato AAAA-MM-DD.");</script>';
            echo '<script>window.location.href="2fa.php";</script>';
            exit();
        }

        // Atualiza a resposta com a data formatada
        $resposta = $respostaFormatada;
    }

    // Verifica se `$campo` está definido corretamente
    if (empty($campo)) {
        echo '<script>alert("Erro ao determinar o campo para a consulta. Tente novamente.");</script>';
        echo '<script>window.location.href="2fa.php";</script>';
        exit();
    }

    // Cria a consulta SQL para verificar a resposta correta
    $sql = "SELECT * FROM freelance WHERE usuario = '$usuario' AND $campo = '$resposta'";
    try {
        $result = $conexao->query($sql);
    } catch (mysqli_sql_exception $e) {
        // Captura qualquer erro de SQL e exibe uma mensagem amigável
        echo '<script>alert("Erro na consulta SQL. Verifique o formato dos dados e tente novamente.");</script>';
        echo '<script>window.location.href="2fa.php";</script>';
        exit();
    }

    if (mysqli_num_rows($result) > 0) {
        // Autenticação 2FA bem-sucedida
        header('Location: userfreela.html');
    } else {
        // Falha na autenticação 2FA, redireciona de volta para 2FA
        header('Location: pagerro.html');
        echo '<script>alert("Falha na autenticação 2FA. Tente novamente.");</script>';
        echo '<script>window.location.href="2fa.php";</script>';
    }
}
?>

