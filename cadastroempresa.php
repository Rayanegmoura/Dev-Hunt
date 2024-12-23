<?php
if(isset($_POST['submit'])) {
    // Inclua o arquivo de configuração para conectar ao banco de dados
    include_once('config.php');

    // Captura os dados do formulário corretamente
    $social = $_POST['social'];
    $fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $tipo = $_POST['tipo'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];
    $cep = $_POST['cep'];
    $ende = $_POST['ende'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];  
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifique a consulta SQL
    $result = mysqli_query($conexao, "INSERT INTO empresa(social, fantasia, cnpj, tipo, tel, cel, cep, ende, numero, bairro, cidade, estado, usuario, email, senha) 
    VALUES ('$social', '$fantasia', '$cnpj', '$tipo', '$tel', '$cel', '$cep', '$ende', '$numero', '$bairro', '$cidade', '$estado', '$usuario', '$email', '$senha')");

    // Verifique se houve algum erro na inserção
    if ($result) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-cadastro.css">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
</head>
<body>
    <div class="container">
        <a href="index.php">
        <img class="logo" src="img-logo.png">
        </a>
        <form action="cadastroempresa.php" method="POST">

            <div class="form-row">
                <div class="nivel genero">
                    <label>Tipo de Empresa:</label>
                    <input type="radio" id="mei" name="nivel" value="mei" required>
                    <label for="masculino">Freelancer</label>
                    <input type="radio" id="ltda" name="nivel" value="ltda" checked required>
                    <label for="feminino">Empresa</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="social" name="social" placeholder=" " autocomplete="off" maxlength="14" required />
                    <label for="social">Razão Social</label>
                </div>
                <div class="label-float">
                    <input type="text" id="fantasia" name="fantasia" placeholder=" " autocomplete="off" maxlength="60" required />
                    <label for="fantasia">Nome Fantasia</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="cnpj" name="cnpj" placeholder=" " autocomplete="off" maxlength="14" required />
                    <label for="cnpj">CNPJ</label>
                </div>

                <div class="tipo genero">
                    <label>Tipo de Empresa:</label>
                    <input type="radio" id="mei" name="tipo" value="mei" required>
                    <label for="masculino">MEI</label>
                    <input type="radio" id="ltda" name="tipo" value="ltda" required>
                    <label for="feminino">LTDA</label>
                    <input type="radio" id="outros" name="tipo" value="sa" required>
                    <label for="outros">S/A</label>
                    <input type="radio" id="outros" name="tipo" value="O" required>
                    <label for="outros">Outros</label>
                </div>
            </div>      
        
            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="tel" name="tel" placeholder=" " autocomplete="off" maxlength="17" required />
                    <label for="telefone">Telefone</label>
                </div>

                <div class="label-float">
                    <input type="text" id="cel" name="cel" placeholder=" " autocomplete="off" maxlength="17" required />
                    <label for="cel">Celular</label>
                </div>
            </div>
            

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="cep" name="cep" placeholder=" " autocomplete="off" maxlength="9" required />
                    <label for="cep">CEP</label>
                </div>
    
                <div class="label-float">
                    <input type="text" id="ende" name="ende" placeholder=" " required />
                    <label for="ende">Endereço</label>
                </div>
            </div>
            
            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="numero" name="numero" placeholder=" " required />
                    <label for="ende">Número</label>
                </div>

                <div class="label-float">
                    <input type="text" id="bairro" name="bairro" placeholder=" " required />
                    <label for="ende">Bairro</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="cidade" name="cidade" placeholder=" " required />
                    <label for="ende">Cidade</label>
                </div>
                <div class="label-float">
                    <input type="text" id="uf" name="estado" placeholder=" " required />
                    <label for="ende">Estado</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="usuario" name="usuario" placeholder=" " autocomplete="off" maxlength="60" required />
                    <label for="usuario">Usuário</label>
                </div>
               
                <div class="label-float">
                    <input type="email" id="email" name="email" placeholder=" " required />
                    <label for="email">E-mail</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float senha-container">
                    <input type="password" id="senha" name="senha" placeholder=" " minlength="8" required />
                    <label for="senha">Senha</label>
                </div>
    
                <div class="label-float senha-container">
                    <input type="password" id="confirmSenha" name="confirmSenha" placeholder=" " minlength="8" required />
                    <label for="confirmSenha">Confirmar Senha</label>
                </div>
            </div>

            <div class="btntest">
            <button type="submit" name="submit" id="submit">Cadastrar</button>

            <button type="reset" name="reset" id="reset">Limpar</button>
            </div>

        </form>
    </div>
    <script>
        $('#cnpj').mask('00.000.000/0000-00');
        $('#tel').mask('(00) 0000-0000');
        $('#cel').mask('(00) 00000-0000');
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
