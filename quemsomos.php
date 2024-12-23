<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="style-quemsomos.css">
    <link rel="stylesheet" type="text/css" href="style-acessibilidade.css">

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
         
        <section class="quem-somos">
            <div class="video-topo">
                <video autoplay muted loop>
                    <source src="img-apertomao.mp4" type="video/mp4">
                </video>
            </div><!---video-topo--->
                   
            <div class="txt-quems">
                <div class="legenda">
                    <p>Somos uma plataforma dedicada a conectar empresas a profissionais autônomos qualificados para projetos pontuais ou de longo prazo.</p>
                    <p>Nossa missão é simplificar o processo de contratação, eliminando a burocracia e oferecendo a liberdade de trabalhar com especialistas de diversas áreas.</p>
                    <p>Valorizamos a flexibilidade e acreditamos no poder do trabalho freelancer para transformar a maneira como você trabalha.</p>
                    <p>Junte-se a nós e descubra novas oportunidades de crescimento e inovação!</p>
                </div>

                <div class="legenda2">
                    <p>A Dev Hunt é formada por um grupo de programadores que estão graduando o curso de Análise e Deselvolvimento de Sistemas da UNISUAM no RJ.</p>
                    <p> O grupo é composto por Gabriel Oliveira, Lucas Gomes, Lucas Rafael, Matheus Luis, Rayane Gomes e Ryan Roger.</p>
                    <p>Ambos apaixonados por tecnologia e programação, se juntaram com o intuito de criar uma plataforma que ajude e faça o intermédio entre empresas e desenvolvedores de todas as áreas da tecnologia, em especial os desenvolvedores recém formados ou que encontram alguma dificuldade no mercado de trabalho. </p>
                </div>

                <div class="legenda3">
                    <p>Funciona da Seguinte forma: O primeiro passo é o desenvolvedor ou a empresa se cadastrarem em nosso site.</p>
                    <p> Tendo se cadastrado, haverá uma página própria pra cada um, mostrando os desenvolvedores para a empresa, e as empresas para os desenvolvedores. </p>
                    <p>Nas vagas são informadas o tempo de contraro, salário e requisito ou tipo de vaga que a empresa deseja.</p>
                </div>
            </div>
        </section>      
                       
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
