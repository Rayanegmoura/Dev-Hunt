<?php
     
         $dbHost = 'localHost';
         $dbUserName = 'root';
         $dbPassword = 'admin';
         $dbName = 'Formulario-ryan';

         $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

         if($conexao->connect_errno){
          echo "erro";
         }
         else{
            echo"conexao efetuada com sucesso";
         }
?>