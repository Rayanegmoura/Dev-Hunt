<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href= "style-Login.css">
    <link rel="stylesheet" href="style-acessibilidade.css">
    <script src="login.js" defer></script>
    <script src="script-acessibilidade.js" defer></script>
</head>
<body>
    <main>
    <div class="login-container">
        <div class="logo-container">
            <a href="index.html">
            <img src="img-logo.png" alt="Dev Hunt Logo" class="logo">
            </a>
        </div>

        <form action="testusuario.php" method="POST" id="">
            <label for="usuario">Qual seu Usuário?</label>
            <input type="text" id="usuario" name="usuario" maxlength="10" required>
            <div class="button-container">
                <button type="submit" name="submit">Enviar</button>
                <button type="reset" id="clearBtn">Limpar</button>
            </div>

            <p id="errorMessage"></p>
        </form>

    </div>
    <div class="btn-fixo" id="btn-fixo">
        <button class="fixo" id="toggleAcessibilidade"><i class="bi bi-universal-access-circle"></i></button>
    
        <div class="acessibilidade" id="acessibilidade">
            <h6 class="acess">Acessibilidade</h6>
            
            <div class="modo-escuro">
                <div class="trilho" id="trilho">
                    <div class="indicador"></div><!--indicador-->
                </div><!--trilho-->
            </div><!--modo-escuro-->
    
            <div class="maior-menor" id="maior-menor">
                <button type="button" id="btnAumentar">A+</button>
                <button type="button" id="btnDiminuir">A-</button>
            </div> <!--maior-menor-->
        </div><!--acessibilidade-->
    </div><!--btn-fixo-->

    <script src="script.js"></script>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html>
