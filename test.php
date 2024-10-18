<?php

//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    print_r('usuario: ' . $usuario);
    print_r('senha: ' . $senha);

}
 else
 {
    header('location: userfreela.html');
 }
?>