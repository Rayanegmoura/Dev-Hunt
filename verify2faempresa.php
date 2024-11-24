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
    if ($pergunta === 'cnpj') {
        $campo = 'cnpj';
    } elseif ($pergunta === 'razao_social') {
        $campo = 'social';
    } elseif ($pergunta === 'cep') {
        $campo = 'ende';

        // Verifica se a resposta de CEP está no formato correto (caso necessário)
        // Exemplo de formatação do CEP para verificar se está correto
        $resposta = preg_replace("/[^0-9]/", "", $resposta); // Remover caracteres não numéricos
        if (strlen($resposta) !== 8) {
            echo '<script>alert("Formato de CEP inválido. Use o formato 00000-000.");</script>';
            echo '<script>window.location.href="2faempresa.php";</script>';
            exit();
        }
    }

    // Verifica se `$campo` está definido corretamente
    if (empty($campo)) {
        echo '<script>alert("Erro ao determinar o campo para a consulta. Tente novamente.");</script>';
        echo '<script>window.location.href="2faempresa.php";</script>';
        exit();
    }

    // Cria a consulta SQL para verificar a resposta correta
    $sql = "SELECT * FROM empresa WHERE usuario = '$usuario' AND $campo = '$resposta'";
    try {
        $result = $conexao->query($sql);
    } catch (mysqli_sql_exception $e) {
        // Captura qualquer erro de SQL e exibe uma mensagem amigável
        echo '<script>alert("Erro na consulta SQL. Verifique o formato dos dados e tente novamente.");</script>';
        echo '<script>window.location.href="2faempresa.php";</script>';
        exit();
    }

    if (mysqli_num_rows($result) > 0) {
        // Autenticação 2FA bem-sucedida para empresa
        header('Location: userempresa.html');
    } else {
        // Falha na autenticação 2FA, redireciona de volta para 2FA
        echo '<script>alert("Falha na autenticação 2FA. Tente novamente.");</script>';
        echo '<script>window.location.href="2faempresa.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação 2FA Empresa</title>
    <link rel="stylesheet" href="style-Login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <main>
        <div class="2fa-container">
            <h2>Autenticação de Duplo Fator - Empresa</h2>
            <form action="2faempresa.php" method="POST">
                <!-- Mostra a pergunta sorteada -->
                <label for="resposta"><?php echo $perguntaEscolhida; ?></label>
                
                <?php if ($pergunta === 'cep'): ?>
                    <!-- Campo de texto para o CEP com máscara -->
                    <input type="text" id="cep" name="resposta" required>
                <?php else: ?>
                    <!-- Campo de texto padrão para CNPJ e Razão Social -->
                    <input type="text" id="cnpj" name="resposta" required>
                <?php endif; ?>

                <!-- Campo oculto para enviar a pergunta sorteada -->
                <input type="hidden" name="pergunta" value="<?php echo $pergunta; ?>">

                <div class="button-container">
                    <button type="submit" name="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </main>

    <script>
        $(document).ready(function(){
            // Adiciona a máscara apenas se a pergunta for sobre o CEP
            if ("<?php echo $pergunta; ?>" === "cep") {
                $('#cep').mask('00000-000');
            }
        });
    </script>
</body>
</html>
