<?php
 
    include('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $usuario = $_POST['usuario'];
        $nome = $_POST['nome'];
        $mae = $_POST['mae'];
        $cpf = $_POST['cpf'];
        $dat_nasc = $_POST['dat_nasc'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];

        $sqlUpadate = "UPDATE freelance SET usuario='$usuario', nome='$nome', mae='$mae', cpf='$cpf', dat_nasc='$dat_nasc', email='$email', celular='$celular', telefone='$telefone', endereco='$endereco', estado='$estado' , cidade='$cidade', cep='$cep' ,senha='$senha',sexo='$sexo', bairro='$bairro', numero='$numero', complemento='$complemento'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpadate);
    }

    header('Location: tabela.php');
   


?>