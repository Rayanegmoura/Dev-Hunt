<?php

//print_r($_REQUEST);
if(isset($_POST['sibmit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $usuario = $POST['usuario'];
    $senha = $POST['senha'];

    print_r('usuario: ' . $usuario);
    print_r('senha: ' . $senha);

}
 else
 {
    header('location: login.php');
 }
?>