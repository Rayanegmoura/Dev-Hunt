<?php
if(isset($_POST['submit'])) {
    // Imprimir os dados recebidos no formulário
    /*print_r($_POST["nome"]);
    print_r('<br>');
    print_r($_POST["mae"]);
    print_r('<br>');
    print_r($_POST["cpf"]);
    print_r('<br>');
    print_r($_POST["nasc"]);
    print_r('<br>');
    print_r($_POST["email"]);
    print_r('<br>');
    print_r($_POST["celular"]);
    print_r('<br>');
    print_r($_POST["ende"]);
    print_r('<br>');
    print_r($_POST["cep"]);
    print_r('<br>');
    print_r($_POST["senha"]);
    print_r('<br>');
    print_r($_POST["sexo"]);
    print_r('<br>');*/
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $mae = $_POST['mae'];
    $cpf = $_POST['cpf'];
    $dat_nasc = $_POST['dat_nasc'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

     $result = mysqli_query($conexao, "INSERT INTO freelance(nome, mae, cpf, dat_nasc, email, celular, endereco, cep, senha, sexo) 
     VALUES ('$nome', '$mae', '$cpf', '$nasc', '$email', '$celular', '$endereco', '$cep', '$senha', '$sexo')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <img class="logo" src="img/logo-2.png">
        <form action="cadastro.php" method="POST">
        <div class="label-float">
                <input type="text" id="usuario" name="usuario" placeholder=" " autocomplete="off" maxlength="60" required />
                <label for="nome">Usuário</label>
            </div>
            <div class="label-float">
                <input type="text" id="nome" name="nome" placeholder=" " autocomplete="off" maxlength="60" required />
                <label for="nome">Nome Completo</label>
            </div>

            <div class="label-float">
                <input type="text" id="mae" name="mae" placeholder=" " autocomplete="off" maxlength="60" required />
                <label for="mae">Nome da Mãe</label>
            </div>

            <div class="label-float">
                <input type="text" id="cpf" name="cpf" placeholder=" " autocomplete="off" maxlength="14" required />
                <label for="cpf">CPF</label>
            </div>

            <div class="label-float">
            <label for="nasc">Data de Nascimento:</label>
            <input type="date" id="nasc" name="dat_nasc" required>
            </div>

            <div class="label-float">
                <input type="email" id="email" name="email" placeholder=" " required />
                <label for="email">E-mail</label>
            </div>

            <div class="label-float">
                <input type="text" id="celular" name="celular" placeholder=" " autocomplete="off" maxlength="15" required />
                <label for="celular">Celular</label>
            </div>

            <div class="label-float">
                <input type="text" id="ende" name="endereco" placeholder=" " required />
                <label for="ende">Endereço</label>
            </div>

            <div class="label-float">
                <input type="text" id="cep" name="cep" placeholder=" " autocomplete="off" maxlength="9" required />
                <label for="cep">CEP</label>
            </div>

            <div class="label-float senha-container">
                <input type="password" id="senha" name="senha" placeholder=" " required />
                <label for="senha">Senha</label>
            </div>

            <div class="label-float senha-container">
                <input type="password" id="confirmSenha" name="confirmSenha" placeholder=" " required />
                <label for="confirmSenha">Confirmar Senha</label>
            </div>

            <div class="Genero">
            <label>Sexo:</label>
            <input type="radio" id="masculino" name="sexo" value="M" required>
            <label for="masculino">Masculino</label>
            <input type="radio" id="feminino" name="sexo" value="F" required>
            <label for="feminino">Feminino</label>
            <input type="radio" id="outros" name="sexo" value="O" required>
            <label for="outros">Outro</label>
            </div>

            <div class="justify-center">
                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>
