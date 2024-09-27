
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="cadastro.php" method="POST">
          <h1>Cadastrar</h1>
   
            <div id="msgError"></div>
            <div id="msgSuccess"></div>

            <div class="label-float">
               <input type="text" id="nome" placeholder=" " autocomplete="off" maxlength="60" required />
               <label id="labelNome" name="nome" for="nome">Nome Completo</label>
            </div>

            <div class="label-float">
               <input type="text" id="mae" placeholder=" " autocomplete="off" maxlength="60" required />
               <label id="labelMae" name="mae" for="mae">Nome da Mãe</label>
            </div>

            <div class="label-float">
               <input type="text" id="cpf" placeholder=" " autocomplete="off" maxlength="14" required />
               <label id="labelcpf" name="cpf" for="usuario">CPF</label>
            </div>

            <div class="label-float">
               <input type="text" id="nasc" placeholder=" " maxlength="10" required />
               <label id="labelNasc" name="nasc" for="nasc">Data de Nascimento</label>
            </div> 

            <div class="label-float">
               <input type="text" id="email" placeholder=" " required />
               <label id="labelEmail" name="email" for="email">E-mail</label>
            </div>

            <div class="label-float">
               <input type="celular" id="celular" placeholder=" " autocomplete="off" maxlength="15" required />
               <label id="labelCelular" name="celuar" for="Celular">Celular</label>
            </div>
            <div class="label-float">
               <input type="text" id="ende" placeholder=" " required />
               <label id="labelEnde" name="ende" for="ende">Endereço</label>
            </div>
            <div class="label-float">
               <input type="text" id="cep" placeholder=" " autocomplete="off" maxlength="9"required />
               <label id="labelCep" name="cep" for="cep">CEP</label> 
            </div>
            <div class="label-float">
               <input type="password" id="senha" placeholder=" " required />
               <label id="labelSenha" name="senha" for="senha">Senha</label>
               <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
            </div>

            <div class="label-float">
               <input type="password" id="confirmSenha" placeholder=" " required />
               <label id="labelConfirmSenha" name="confirmSenha" for="confirmSenha">Confirmar Senha</label>
               <i id="verConfirmSenha" class="Senha" aria-hidden="true"></i>
            </div>
            <div class="Genero" >
               <label>Sexo :</label>
               <input type="radio" id="masculino" name="sexo" value="masculino" required>
                           <label for="masculino">Masculino</label>
                           <input  type="radio" id="feminino" name="sexo" value="feminino" required>
                           <label  for="feminino">Feminino</label>
                           <input type="radio" id="outros" name="sexo" value="outros" required>
                           <label  for="outros">Outros</label>
            </div>

            <div class="justify-center">
               <input type="submit" name="submit" id="submit">Cadastrar</input>
            </div>
            </div>
        </form>
      </div>
    </div>
      <script src="./js/signUp.js"></script>    
</body>
</html>