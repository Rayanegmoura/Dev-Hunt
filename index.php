<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Hunt</title>
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-acessibilidade.css">

    <script src="script-pginicial.js" defer></script>
    <script src="script-acessibilidade.js" defer></script>

    <script src="https://unpkg.com/scrollreveal"></script>

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
            <a href="useroufreela.html"><button>Cadastre-se</button></a>
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
                        <a class="btn-login" href="login.php"><i class="bi bi-person-square"></i>Olá <span id="username">Visitante</span>, seja bem-vindo</a>
                         <a class="btn-logout" href="#" id="logout-btn" style="display: none;">Logout</a>
                    </li>

                    <li>
                        <a href="index.php">Início</a>
                    </li>

                    <li>
                        <a href="quemsomos.php">Quem Somos</a>
                    </li>

                    <li>
                        <a href="planos.php">Planos</a>
                    </li>

                    <li>
                        <a href="login.php">Cadastre-se</a>
                    </li>

                    <li>
                        <a href="ajuda.php">Ajuda</a>
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
            <section class="topo-do-site">
                <div class="interface">
                    <div class="flex">
                        <div class="video-topo">
                        <video autoplay muted loop>
                            <source src="img-video.mp4" type="video/mp4">
                        </video>
                        </div>
                        </div><!---video-topo--->
                        <div class="txt-topo-site efeito-txt-topo">
                            <h1>
                                Os melhores freelancers do mercado para realizar o seu projeto!
                            </h1>
                            <ul>
                                <li><i class="bi bi-caret-right"></i>Economiza Tempo: Encontre rapidamente o freelancer ideal
                                    para suas necessidades.</li>
                                <li><i class="bi bi-caret-right"></i>Flexibilidade: Trabalhe em projetos que se encaixam no seu
                                    horário e estilo de vida.</li>
                                <li><i class="bi bi-caret-right"></i>Segurança: Transações seguras e suporte dedicado para
                                    garantir uma experiência tranquila.</li>
                                <li><i class="bi bi-caret-right"></i>Variedade de Talentos: Acesse uma ampla gama de habilidades
                                    e expertise.</li>
                            </ul>
                            <div class="btn-txt btn">
                                <div class="btn-txt-1">
                                    <a href="userempresa.html"><button>Contratar um Freelancer</button></a><!--txt-btn-->
                                </div><!--bdn-txt-1-->
                                <div class="btn-txt-2">
                                    <a href="userfreela.html"><button>Trabalhar como Freelancer</button></a><!--txt-btn-->
                                </div><!--btn-txt-2-->
                            </div><!--btn-txt-->
                        </div><!--txt-topo-site-->
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--topo-do-site-->
    </div>
    <div id="content">
            <section class="txt-2">
                <div class="interface">
                    <h1 class="efeito-titulo">Encontre ou seja um <span>Freelancer</span></h1>
                    <div class="flex">
                        <div class="txt-box efeito-box-1">
                            <h3>Transforme Seu Negócio com Freelancers</h3>
                            <p>Dê um novo impulso ao seu negócio conectando-se com talentos especializados. Nossa plataforma
                                oferece acesso a uma rede de profissionais que podem trazer inovação e crescimento para sua
                                empresa. Ao unir negócios com freelancers de alta qualidade, você pode transformar projetos
                                em sucessos.</p>
                        </div><!--txt-box-->
    
                        <div class="txt-box efeito-box-2">
                            <h3>Oportunidades Flexíveis para Freelancers</h3>
                            <p>Encontre a liberdade de construir a carreira dos seus sonhos. Nossa plataforma oferece uma
                                ampla variedade de projetos em diversas áreas, permitindo que você escolha como e onde
                                trabalhar. Histórias de sucesso mostram como freelancers alcançaram novos patamares de
                                realização pessoal e profissional.</p>
                        </div><!--txt-box-->
    
                        <div class="txt-box efeito-box-3">
                            <h3>Contrate Talentos de Forma Simples e Segura</h3>
                            <p>Simplifique a contratação de especialistas para seus projetos. Nossa plataforma garante um
                                processo seguro e eficiente, com suporte em todas as etapas. Concentre-se no crescimento do
                                seu negócio enquanto nós cuidamos de conectar você com os profissionais certos.</p>
                        </div><!--txt-box-->
    
                        <div class="txt-box efeito-box-4">
                            <h3>Encontre o Freelancer Ideal para Seu Projeto</h3>
                            <p>Nossa plataforma é o ponto de encontro entre empresas e freelancers talentosos. Economize
                                tempo e recursos encontrando o profissional perfeito para suas necessidades. Seja para
                                projetos curtos ou de longo prazo, temos a solução ideal. </p>
                        </div><!--txt-box-->
    
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--txt-2-->
    <div id="content">
            <section class="encontre">
                <div class="interface">
                    <div class="flex">
                        <div class="serv-box efeito-serv-1">
                            <a href="login.php">
                                <button>
                                    <i class="bi bi-briefcase-fill"></i>
                                    <p>Quero elaborar um projeto</p>
                                    <h2>Empresas</h2>
                                </button>
                            </a>
                        </div><!--serv-box-->
    
                        <div class="serv-box efeito-serv-2">
                            <a href="login.php">
                                <button>
                                    <i class="bi bi-code-square"></i>
                                    <p>Quero fazer um projeto</p>
                                    <h2>Freelancers</h2>
                                </buttom>
                            </a>
                        </div><!--serv-box-->
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--encontre-->
    </div>       
    <div id="content">
            <section class="txt-3">
                <div class="interface">
                    <div class="flex">
                            <h1 class="efeito-titulo">Quem Somos</h1>
                        <div class="quem-somos efeito-quem-somos">
                            <p>Somos uma plataforma dedicada a conectar empresas a profissionais autônomos qualificados para
                                projetos pontuais ou de longo prazo. Nossa missão é simplificar o processo de contratação,
                                eliminando a burocracia e oferecendo a liberdade de trabalhar com especialistas de diversas
                                áreas. Valorizamos a flexibilidade e acreditamos no poder do trabalho freelancer para
                                transformar a maneira como você trabalha. Junte-se a nós e descubra novas oportunidades de
                                crescimento e inovação!</p>
                        </div><!--quem-somos-->
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--quem somos-->
    
            <section class="depoimentos">
                <div class="interface">
                    <div class="flex">
    
                        <div class="depoimentos-box efeito-depoimentos-1">
                            <img src="img-1.jpg">
                            <h4>Carlos</h4>
                            <p>“Trabalhar com a <span>Dev Hunt</span> foi uma experiência incrível. Eles entenderam
                                exatamente o que eu precisava e entregaram um trabalho de alta qualidade dentro do prazo.
                                Recomendo fortemente seus serviços!”</p>
                        </div><!--depoimentos-box-->
    
                        <div class="depoimentos-box efeito-depoimentos-2">
                            <img src="img-2.jpg">
                            <h4>Rebeca</h4>
                            <p>“Desde que comecei a colaborar com a <span>Dev Hunt</span>, minha carreira como freelancer
                                decolou. Eles me conectaram com clientes incríveis e projetos desafiadores que me ajudaram a
                                crescer profissionalmente.”</p>
                        </div><!--depoimentos-box-->
    
                        <div class="depoimentos-box efeito-depoimentos-3">
                            <img src="img-4.jpg">
                            <h4>Pedro</h4>
                            <p> “A flexibilidade e o suporte oferecidos pela <span>Dev Hunt</span> são incomparáveis. Eles
                                sempre estão disponíveis para ajudar e garantir que eu tenha tudo o que preciso para
                                realizar meu trabalho da melhor forma possível.”</p>
                        </div><!--depoimentos-box-->
    
                        <div class="depoimentos-box efeito-depoimentos-4">
                            <img src="img-3.jpg">
                            <h4>Bruna</h4>
                            <p>“Graças ao trabalho com a <span>Dev Hunt</span>, consegui alcançar uma independência
                                financeira que nunca imaginei ser possível. Agora, posso focar em projetos que realmente me
                                apaixonam e ainda ter tempo para minha família.”</p>
                        </div><!--depoimentos-box-->
    
                        <div class="depoimentos-box efeito-depoimentos-5">
                            <img src="img-5.jpg">
                            <h4>Henrique</h4>
                            <p>“A qualidade e o profissionalismo da <span>Dev Hunt</span> são excepcionais. Cada projeto é
                                tratado com o máximo cuidado e atenção aos detalhes, resultando em entregas que superam as
                                expectativas.”</p>
                        </div><!--depoimentos-box-->
    
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--depoimentos-->
    
            <section class="planos">
                <div class="interface">
                    <h1 class="efeito-titulo">Transformando vidas e carreiras através de parcerias de sucesso.</h1>
                    <p class="efeito-titulo">Descubra como revolucionar sua trajetória profissional com acesso a uma rede
                        exclusiva de oportunidades, suporte especializado e ferramentas avançadas.
                    <p class="efeito-titulo">Invista no seu futuro e transforme seus sonhos em realidade. Contrate agora e
                        veja a diferença!</p>
                    </p>
                    <div class="flex">
                        <div class="p-planos efeito-planos">
                            <h3>Empresas</h3>
                            <h4>R$ 49,99</h4>
                            <ul>
                                <li><i class="bi bi-check2-circle"></i>Acesso a Talentos Qualificados</li>
                                <li><i class="bi bi-check2-circle"></i>Economia de Tempo</li>
                                <li><i class="bi bi-check2-circle"></i>Maior Garantia de Entrega</li>
                                <li><i class="bi bi-check2-circle"></i>Filtragem Avançada</li>
                                <li><i class="bi bi-check2-circle"></i>Suporte Prioritário</li>
                                <li><i class="bi bi-check2-circle"></i>Relatórios e Insights</li>
                            </ul>
                            <div class="btn-planos">
                                <a href="planos.php"><button>Contratar</button></a>
                            </div><!--btn-planos-->
                        </div><!--p-empresa-->
    
                        <div class="p-planos efeito-planos">
                            <h3>Freelancer</h3>
                            <h4>R$ 24,99</h4>
                            <ul>
                                <li><i class="bi bi-check2-circle"></i>Maior Visibilidade</li>
                                <li><i class="bi bi-check2-circle"></i>Acesso Prioritário a Projetos</li>
                                <li><i class="bi bi-check2-circle"></i>Credibilidade Aumentada</li>
                                <li><i class="bi bi-check2-circle"></i>Mais Convites Diretos</li>
                                <li><i class="bi bi-check2-circle"></i>Ferramentas Exclusivas</li>
                                <li><i class="bi bi-check2-circle"></i>Apoio e Suporte Personalizado</li>
                            </ul>
                            <div class="btn-planos">
                                <a href="planos.php"><button>Contratar</button></a>
                            </div><!--btn-planos-->
                        </div><!--p-freelancer-->
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--planos-->
    
            <section class="ajuda">
                <div class="interface">
                    <h1 class="efeito-titulo">Precisa de ajuda?</h1>
                    <div class="flex">
    
                        <div class="p-ajuda efeito-ajuda">
                            <i class="bi bi-code-slash"></i>
                            <h2>Procuro Freelancer</h2>
                            <p>Escolha o tipo de talento que precisa de acordo com a categoria e escopo do seu projeto.</p>
                            <ul>
                                <li><a href="login.php">Encontre um freelance</a></li>
                                <li><a href="planos.php">Planos e preços</a></li>
                            </ul>
                        </div><!--p-ajuda-->
    
                        <div class="p-ajuda efeito-ajuda">
                            <i class="bi bi-person-workspace"></i>
                            <h2>Quero Trabalhar</h2>
                            <p>Escolha o tipo de trabalho que está procurando de acordo com a sua profissão e
                                disponibilidade.</p>
                            <ul>
                                <li><a href="login.php">Encontre um projeto</a></li>
                                <li><a href="planos.php">Planos e preços</a></li>
                            </ul>
                        </div><!--p-ajuda-->
    
                        <div class="p-ajuda efeito-ajuda">
                            <i class="bi bi-question-circle"></i>
                            <h2>Quero Ajuda</h2>
                            <p>Tire suas dúvidas e receba assistência em até 24hrs. Através do email, WhatsApp ou Central de atendimento.</p>
                            <ul>
                                <li><a href="ajuda.php">Central de Ajuda</a></li>
                                <li><a href="ajuda.php">Perguntas Frequentes</a></li>
                            </ul>
                        </div><!--p-ajuda-->
    
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--ajuda-->
        </main><!--main-->
        
    </div><!--content-->

    <!--botão de libras-->

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

     <!--botão de libras-->
    
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