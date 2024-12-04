<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevHunt - Ajuda</title>
    <link rel="stylesheet" type="text/css" href="style-ajuda.css">
    <link rel="stylesheet" type="text/css" href="style-acessibilidade.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="script-acessibilidade.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src=""></script>
</head>
<body>
    <header class="menu-principal">

        <div class="logo">
            <a href="/index.php">
                <img id="imagemAcessibilidade" src="img-logo.png" alt="Dev Hunt" />
            </a><!--link-logo-->
        </div><!--logo-->

        <nav class="menu-desktop">
            <ul>
                <li>
                    <a href="index.php">Início</a>
                </li>

                <li>
                    <a href="quemsomos.php">Quem Somos</a>
                </li>

                <li class="dropdown">
                    <a href="#">Serviços<i class="bi bi-caret-down"></i></a>

                    <div class="dropdown-menu">
                        <a href="planos.php">Planos</a>
                        <a href="login.html">Freelancer</a>
                        <a href="login.html">Empresas</a>
                    </div>
                </li>

                <li>
                    <a href="ajuda.php">Ajuda</a>
                </li>
            </ul><!---ul-->
        </nav><!--links-->

        <div class="btn-topo btn">
        <?php
    include 'header.php';
    ?>
            <a class="btn-logout" href="#" id="logout-btn" style="display: none;">Logout</a>
            <a href="login.html"><button>Publicar Projeto</button></a>
        </div><!--botao-topo-->

        <!--menu-mobile-->
        
        <div class="btn-abrir-menu" id="btn-menu">
            <i class="bi bi-list"></i>
        </div><!--btn-abrir-menu-->

        <div class="menu-mobile" id="menu-mobile">

            <div class="btn-fechar">
                <i class="bi bi-x-lg"></i>
            </div><!--btn-fechar-->

            <nav>
                <ul>

                    <li>
                        <a class="btn-login" href="#"><i class="bi bi-person-square"></i>Olá, seja bem-vindo</a>
                    </li>

                    <li>
                        <a href="index.php">Início</a>
                    </li>

                    <li>
                        <a href="quemsomos.php">Quem Somos</a>
                    </li>

                    <li>
                        <a href="ajuda.php">Ajuda</a>
                    </li>

                    <li>
                        <a href="login.html">Publicar Projeto</a>
                    </li>
                </ul><!---ul-->
            </nav><!--links-->

        </div><!--menu-mobile-->

        <div class="overlay-menu" id="overlay-menu">
            <!--estilo do menu mobile-->
        </div><!--overlay-menu-->

    </header><!--fim-menu-principal-->
    

    <main>

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
        <div id="content">
        
            <section class="Bemvindo">
                <h1>Olá, Estamos aqui para ajudar.</h1>
                <div class="Barra">
    
                    <input type="text" placeholder="Como podemos ajudar?">
                    <button><i class="bi bi-search"></i></button>
                </div>
            </section>
    
            <section class="Links">
                <h2>Atalhos para DevHunt</h2>
                <div class="link">
                    <a href="#">Adicionar ou alterar e-mail</a>
                    <a href="#">Redefinir sua senha</a>
                    <a href="#">Cancelar assinatura Premium</a>
                    <a href="#">Encerrar sua conta</a>
                    <a href="#">Visibilidade do perfil</a>
                    <a href="#">Candidatar-se a projetos</a>
                </div>
            </section>
    
            <section class="Recomendados">
                <h2>Tópicos recomendados</h2>
                <div class="topicos">
                    <div class="topico">Informações básicas</div>
                    <div class="topico">Privacidade dos Dados</div>
                    <div class="topico">Cobrança da Assinatura</div>
                    <div class="topico">Seu perfil</div>
                    <div class="topico">Conexões</div>
                    <div class="topico">Projetos e oportunidades</div>
                </div>
            </section>
        </div>
    </main>
    
    <div id="content">
        <aside class="ajuda1">
            <h2>Outras maneiras pelas quais podemos ajudar</h2>
            <div class="ajuda2">
                <h3>Políticas para Comunidades</h3>
                <p>Nossas políticas garantem que você tenha uma experiência segura e profissional.</p>
                <a href="#">Saiba mais</a>
            </div>
            <div class="ajuda2">
                <h3>Central de Transparência</h3>
                <p>A segurança da sua conta e a segurança on-line são nossas maiores prioridades.</p>
                <a href="#">Saiba mais</a>
            </div>
        </aside>
        </div>
    </div>

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

     <footer>
            <div class="interface">
                <div class="footer-1">
                    <div class="flex">
                        <div class="btn-redes">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div><!--btn-redes-->
                    </div><!--flex-->
                </div><!--footer-1-->
    
                <div class="footer-2">
                    <p><i class="bi bi-envelope"></i><a href="mailto:contato@devhunt.com.br"> contato@devhunt.com.br</a></p>
                    <p class="desc">© 2024 www.devhunt.com.br | Todos os direitos reservados.</p>
                </div><!--footer-2-->
            </div><!--interface-->
        </footer><!--rodapé-->
</body>
</html>
