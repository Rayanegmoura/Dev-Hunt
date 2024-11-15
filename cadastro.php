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

    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style-cadastro.css">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    
</head>
<body>
    <div class="container">
        <a href="index.html">
        <img class="logo" src="img-logo.png">
        </a>
        <form action="cadastro.php" method="POST">

        <div class="label-float">
                <input type="text" id="usuario" name="usuario" placeholder=" " autocomplete="off" maxlength="60" required />
                <label for="usuario">Usuário</label>
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
            <label for="dat_nasc"></label>
            <input class="data" type="date" id="nasc" name="dat_nasc" required>
            </div>

            <div class="label-float">
                <input type="email" id="email" name="email" placeholder=" " required />
                <label for="email">E-mail</label>
            </div>

            <div class="label-float">
                <input type="text" id="celular" name="celular" placeholder=" " autocomplete="off" maxlength="17" required />
                <label for="celular">Celular</label>
            </div>
            <div class="label-float">
                <input type="text" id="telefone" name="telefone" placeholder=" " autocomplete="off" maxlength="17" required />
                <label for="telefone">Telefone</label>
            </div>

            <div class="label-float">
                <input type="text" id="cep" name="cep" placeholder=" " autocomplete="off" maxlength="9" required />
                <label for="cep">CEP</label>
            </div>

            <div class="label-float">
                <input type="text" id="ende" name="endereco" placeholder=" " required />
                <label for="ende">Endereço</label>
            </div>

            <div class="label-float">
                <input type="text" id="numero" name="numero" placeholder=" " autocomplete="off" maxlength="9" required />
                <label for="cep">Número</label>
            </div>

            <div class="label-float">
                <input type="text" id="bairro" name="bairro" placeholder=" " autocomplete="off" maxlength="9" required />
                <label for="cep">Bairro</label>
            </div>
            <div class="label-float">
                <input type="text" id="cidade" name="cidade" placeholder=" " autocomplete="off" maxlength="9" required />
                <label for="cep">Cidade</label>
            </div>
            <div class="label-float">
                <input type="text" id="uf" name="Estado" placeholder=" " autocomplete="off" maxlength="9" required />
                <label for="cep">Estado</label>
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

            <div class="btntest">
            <button type="submit" name="submit" id="submit">Cadastrar</button>

            <button type="reset" name="reset" id="reset">Limpar</button>
            </div>

        </form>
    </div>
    <script>
        $('#cpf').mask('000.000.000-00');
        $('#celular').mask('(00) 00000-0000');
        $('#telefone').mask('(00) 0000-0000');
        $('#cep').mask('00000-000');
    </script>
    <script>

$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#ende").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#ende").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#ende").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

</script>
</body>
</html>
