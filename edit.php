<?php
 if(!empty($_GET['id']))
{    
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM freelance WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result))
      { 
        $usuario = $user_data['usuario'];
        $nome = $user_data['nome'];
        $mae = $user_data['mae'];
        $cpf = $user_data['cpf'];
        $dat_nasc = $user_data['dat_nasc'];
        $email = $user_data['email'];
        $celular = $user_data['celular'];
        $endereco = $user_data['endereco'];
        $cep = $user_data['cep'];
        $senha = $user_data['senha'];
        $sexo = $user_data['sexo'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $complemento = $user_data['complemento'];
        $telefone = $user_data['telefone'];
        $numero = $user_data['numero'];
        $bairro = $user_data['bairro'];
      }   
    } 
    else
    {
        header("location: tabela.php");
    }       
}
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-cadastro.css">
    <title>edit</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    
</head>
<body>
    <div class="container">
        <a href="index.php">
        <img class="logo" src="img-logo.png">
        </a>
        <form action="saveEdit.php" method="POST">

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="nome" name="nome" placeholder=" " value="<?php echo isset($nome) ? $nome : ''; ?>" required />
                    <label for="nome">Nome Completo</label>
                </div>

                <div class="label-float">
                    <input type="text" id="cpf" name="cpf" placeholder=" " autocomplete="off" maxlength="16" value="<?php echo $cpf ?>" required />
                    <label for="cpf">CPF</label>
                </div>
            </div>

            <div class="form-row">
                <div class="data genero">
                    <label>Data de Nascimento</label>
                    <input class="data" type="date" id="nasc" name="dat_nasc" value="<?php echo $dat_nasc ?>" required>
                </div>
                
                <div class="genero">
                    <label>Sexo:</label>
                    <input type="radio" id="masculino" name="sexo" value="M" <?php echo ($sexo== 'M') ? 'checked' : ''?> required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="feminino" name="sexo" value="F" <?php echo ($sexo== 'F') ? 'checked' : ''?> required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="outros" name="sexo" value="O" <?php echo ($sexo== 'O') ? 'checked' : ''?> required>
                    <label for="outros">Outro</label>
                </div>
                
            </div>
            
            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="celular" name="celular" placeholder=" " autocomplete="off" maxlength="17" value="<?php echo $celular ?>" required />
                    <label for="celular">Celular</label>
                </div>

                <div class="label-float">
                    <input type="text" id="telefone" name="telefone" placeholder=" " autocomplete="off" maxlength="17" value="<?php echo isset($telefone) ? $telefone : ''; ?>"  required />
                    <label for="telefone">Telefone</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="mae" name="mae" placeholder=" " autocomplete="off" maxlength="60" value="<?php echo $mae ?>" required />
                    <label for="mae">Nome da Mãe</label>
                </div>   
                
                <div class="label-float">
                    <input type="text" id="cep" name="cep" placeholder=" " autocomplete="off" maxlength="9" value="<?php echo $cep ?>" required />
                    <label for="cep">CEP</label>
                </div>

            </div>

            <div class="form-row">    
                <div class="label-float">
                    <input type="text" id="ende" name="endereco" placeholder=" " value="<?php echo isset($endereco) ? $endereco : ''; ?>" required />
                    <label for="ende">Endereço</label>
                </div>

                <div class="label-float">
                    <input type="text" id="numero" name="numero" placeholder=" " autocomplete="off" maxlength="9" value="<?php echo isset($numero) ? $numero : ''; ?>" required />
                    <label for="numero">Número</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="complemento" name="complemento" placeholder=" " autocomplete="off" maxlength="90" value="<?php echo isset($complemento) ? $complemento : ''; ?>" required />
                    <label for="complemento">Complemento</label>
                </div>
                
                <div class="label-float">
                    <input type="text" id="bairro" name="bairro" placeholder=" " autocomplete="off" maxlength="9" value="<?php echo isset($bairro) ? $bairro : ''; ?>" required />
                    <label for="cep">Bairro</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="cidade" name="cidade" placeholder=" " autocomplete="off" maxlength="9" value="<?php echo isset($cidade) ? $cidade : ''; ?>" required />
                    <label for="cep">Cidade</label>
                </div>
                <div class="label-float">
                    <input type="text" id="uf" name="estado" placeholder=" " autocomplete="off" maxlength="9" value="<?php echo isset($estado) ? $estado : ''; ?>" required />
                    <label for="cep">Estado</label>
                </div>
            </div>

            <div class="form-row">
                <div class="label-float">
                    <input type="text" id="usuario" name="usuario" placeholder=" " value="<?php echo $usuario ?>" required />
                    <label for="usuario">Usuário</label>
                </div>

                <div class="label-float">
                    <input type="email" id="email" name="email" placeholder=" " value="<?php echo $email ?>" required />
                    <label for="email">E-mail</label>
                </div>
            </div>
            
            <div class="form-row">
                <div class="label-float senha-container">
                    <input type="text" id="senha" name="senha" placeholder=" " value="<?php echo $senha ?>" required />
                    <label for="senha">Senha</label>
                </div>
    
                <div class="label-float senha-container">
                    <input type="test" id="confirmSenha" name="confirmSenha" placeholder=" "  required />
                    <label for="confirmSenha">Confirmar Senha</label>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $id ?>">

            <div class="btntest">
            <button type="submit" name="update" id="update">Salvar</button>

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
