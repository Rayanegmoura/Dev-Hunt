<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos</title>
    <link rel="stylesheet" href="style-planos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="script-acessibilidade.js" defer></script>
    <link rel="stylesheet" type="text/css" href="style-acessibilidade.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src=""></script>
</head>
<body>
    <header class="menu-principal">

        <div class="logo">
            <a href="index.php">
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
                        <a href="login.php">Freelancer</a>
                        <a href="login.php">Empresas</a>
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
            <a href="login.php"><button>Publicar Projeto</button></a>
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
                        <a href="login.php">Publicar Projeto</a>
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
            <h1>Nossos Planos</h1>
        <div class="planos-container">        
                <div class="plano">
                    <div class="plano-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <h2>Plano Freelancer</h2>
                    <p><strong>R$ 24,99/mês</strong></p>
                    <ul>
                        <li><i class="bi bi-star"></i>Acesso Prioritário a Projetos</li>
                        <li><i class="bi bi-shield-check"></i>Credibilidade Aumentada</li>
                        <li><i class="bi bi-envelope-heart"></i>Mais Convites Diretos</li>
                        <li><i class="bi bi-tools"></i>Ferramentas Exclusivas</li>
                        <li><i class="bi bi-person-bounding-box"></i>Apoio e Suporte Personalizado</li>
                    </ul>
                    <button class="btn-plano">Assinar</button>
                </div>
                   
                <div class="plano">
                    <div class="plano-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h2>Plano Empresa</h2>
                    <p><strong>R$ 49,99/mês</strong></p>
                    <ul>
                        <li><i class="bi bi-person-check"></i>Acesso a Talentos Qualificados</li>
                        <li><i class="bi bi-clock-history"></i>Economia de Tempo</li>
                        <li><i class="bi bi-file-earmark-check"></i>Maior Garantia de Entrega</li>
                        <li><i class="bi bi-filter"></i>Filtragem Avançada</li>
                        <li><i class="bi bi-headset"></i>Suporte Prioritário</li>
                        <li><i class="bi bi-graph-up-arrow"></i>Relatórios e Insights</li>
                    </ul>
                    <button class="btn-plano">Assinar</button>
                </div>
        </div>
        </div>
        
    </main>

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

