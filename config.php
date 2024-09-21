<?php
     
         $dbHost = 'localHost';
         $dbUserName = 'Formulario';
         $dbPassword = '';
         $dbName = 'Formulario_ryan';

         $conexao = new mysqli($dbHost,$dbUserName,$dbName);

         if($conexao->connect_errno){
          echo "erro";
         }
         else{
            echo"conexao efetuada com sucesso";
         }
?>