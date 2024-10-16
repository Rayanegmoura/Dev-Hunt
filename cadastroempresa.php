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

    $usuario = $_POST['usuario'];
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

     $result = mysqli_query($conexao, "INSERT INTO freelance(usuario, nome, mae, cpf, dat_nasc, email, celular, endereco, cep, senha, sexo) 
     VALUES ('$usuario', '$nome', '$mae', '$cpf', '$dat_nasc', '$email', '$celular', '$endereco', '$cep', '$senha', '$sexo')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Formulário</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    
</head>
<body>
    <div class="container">
        <a href="index.html">
        <img class="logo" src="img/logo.png">
        </a>
        <form action="cadastro.php" method="POST">

        <div class="label-float">
                <input type="text" id="usuario" name="usuario" placeholder=" " autocomplete="off" maxlength="60" required />
                <label for="usuario">Usuário</label>
            </div>
            <div class="label-float">
                <input type="text" id="social" name="social" placeholder=" " autocomplete="off" maxlength="14" required />
                <label for="social">Razão Social</label>
            </div>
            <div class="label-float">
                <input type="text" id="nome" name="nome" placeholder=" " autocomplete="off" maxlength="60" required />
                <label for="nome">Nome Fantasia</label>
            </div>
            <div class="label-float">
                <input type="text" id="cpf" name="cpf" placeholder=" " autocomplete="off" maxlength="14" required />
                <label for="cpf">CNPJ</label>
            </div>
            <div class="label-float">
                <input type="email" id="email" name="email" placeholder=" " required />
                <label for="email">E-mail</label>
            </div>

            <div class="label-float">
                <input type="text" id="telefone" name="telefone" placeholder=" " autocomplete="off" maxlength="17" required />
                <label for="telefone">Telefone</label>
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

            <div class="btntest">
            <button type="submit" name="submit" id="submit">Cadastrar</button>

            <button type="reset" name="reset" id="reset">Limpar</button>
            </div>

        </form>
    </div>
    <script>
        $('#cnpj').mask('00.000.000/0000-00');
        $('#telefone').mask('(00) 0000-0000');
        $('#cep').mask('00000-000');
    </script>
</body>
</html>
