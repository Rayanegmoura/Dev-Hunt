<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Array de perguntas
$perguntas = [
    'mae' => 'Qual o nome da sua mãe?',
    'cep' => 'Qual seu CEP?',
    'dat_nasc' => 'Qual sua data de nascimento?'
];

// Sorteia uma pergunta aleatória
$chavePergunta = array_rand($perguntas);
$perguntaEscolhida = $perguntas[$chavePergunta];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação 2FA</title>
    <link rel="stylesheet" href="styleLogin2fa.css">
    <!-- Adicione jQuery e jQuery Mask Plugin -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <main>
        <div class="container">
            <h2>Autenticação de 2FA</h2>
            <form action="verify2fafreela.php" method="POST">
                <!-- Mostra a pergunta sorteada -->
                <label for="resposta"><?php echo $perguntaEscolhida; ?></label>
                
                <?php if ($chavePergunta === 'dat_nasc'): ?>
                    <!-- Campo de data para a pergunta de data de nascimento -->
                    <input type="date" id="resposta" name="resposta" required>
                <?php elseif ($chavePergunta === 'cep'): ?>
                    <!-- Campo de texto para o CEP com um ID específico -->
                    <input type="text" id="cep" name="resposta" required>
                <?php else: ?>
                    <!-- Campo de texto padrão para outras perguntas -->
                    <input type="text" id="resposta" name="resposta" required>
                <?php endif; ?>

                <!-- Campo oculto para enviar a pergunta sorteada -->
                <input type="hidden" name="pergunta" value="<?php echo $chavePergunta; ?>">

                <div class="button-container">
                    <button type="submit" name="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Script para adicionar a máscara de CEP -->
    <script>
        $(document).ready(function(){
            // Adiciona a máscara apenas se a pergunta for sobre o CEP
            if ("<?php echo $chavePergunta; ?>" === "cep") {
                $('#cep').mask('00000-000');
            }
        });
    </script>
</body>
</html>
