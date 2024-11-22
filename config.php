<?php

    // Configuração dos dados de conexão com o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "dev_hunt";

    // Cria uma nova instância da classe mysqli para estabelecer a conexão
    $conexao = new mysqli($hostname, $username, $password, $database);

    // Verifica se houve algum erro durante a conexão
    if ($conexao->connect_error) {
        // Em caso de erro, interrompe a execução do script e exibe a mensagem de erro
        die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
    }

?>