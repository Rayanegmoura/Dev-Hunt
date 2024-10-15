<?php
   $dbHost = 'localHost';
   $dbUserName = 'root';
   $dbPassword = '';
   $dbName = 'dev_hunt';

   $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

   if($conexao->connect_errno){
    echo "erro";
   }
   else{
      echo"conexao efetuada com sucesso";
   }
?>