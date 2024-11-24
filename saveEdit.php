<?php
 
    include('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $usuario = $_POST['usuario'];
        $nome = $_POST['nome'];
        $cep = $_POST['cep'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $sqlUpadate = "UPDATE freelance SET usuario='$usuario', nome='$nome', cep='$cep',senha='$senha',sexo='$sexo'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpadate);
    }

    header('Location: tabela.php');
   


?>