<?php
    session_start(); 
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) 
    {
        header('location: login.php');                                 
    }

    $logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Freelancer</title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="css/userfreela.css">

    <link rel="stylesheet" type="text/css" href="/css/acessibilidade.css">
    <script src="/js/acessibilidade.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src=""></script>

</head>

<body>

    <header class="menu">

        <nav class="menu-lateral">

            <div class="logo-uf">
                <a href="/index.html">
                    <img id="imagemAcessibilidade" src="/img/logo.png" alt="Dev Hunt" />
                </a><!--link-logo-->
            </div><!--logo-->

            <div class="btn-expandir">
                <i class="bi bi-list" id="btn-exp"></i>
            </div><!--btn-expandir-->
    
            <ul>
                <li class="item-menu">
                    <a href="index.html">
                        <span class="icon"><i class="bi bi-house" title="Início"></i></span>
                        <span class="txt-link" href="index.html">Início</span>
                    </a>
                </li>

                <li class="item-menu ativo">
                    <a href="userempresa.html">
                        <span class="icon"><i class="bi bi-bar-chart-steps"></i></span>
                        <span class="txt-link" href="index.html">Feed</span>
                    </a>
                </li>
                
                <li class="item-menu">
                    <a href="quemsomos.html">
                        <span class="icon"><i class="bi bi-file-person" title="quemsomos"></i></span>
                        <span class="txt-link">Sobre</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="planos.html">
                        <span class="icon"><i class="bi bi-clipboard-check-fill"></i></span>
                        <span class="txt-link">Planos</span>
                    </a>
                </li>
    
                <li class="item-menu">
                    <a href="ajuda.html">
                        <span class="icon"><i class="bi bi-info-circle-fill"></i></span>
                        <span class="txt-link">Ajuda</span>
                    </a>
                </li>
            </ul>
        </nav><!--menu-lateral-->
    
        <script src="js/userempresa.js"></script>

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
        <section class="cards">

            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg?t=st=1729221494~exp=1729225094~hmac=96d466ba07a73cf8875ccdc1bd011290d62825c451ee95385928e57d403fae62&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>TEC Room</h1>
                        <h3>2 Vagas - Back end (Período - A Combinar)</h3>
                        <p>Salário - A Combinar</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                </div><!--btn-cards-->
            </div><!--cards-->

            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/plano-de-fundo-realista-em-estilo-futurista_23-2149129125.jpg?t=st=1729221544~exp=1729225144~hmac=bf42ee70beb2c8e5eab85d36026e4ecf39f163bfd7b05dc072790ba9e841ca41&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>WebSize</h1>
                        <h3>5 Vagas - Front-end (Período - 4 Meses)</h3>
                        <p>Salário - A Combinar</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                </div><!--btn-cards-->
            </div><!--cards-->

            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/fotos-gratis/homem-usando-tecnologia-inteligente-de-maquete-psd-de-tablet-digital_53876-110815.jpg?t=st=1729221573~exp=1729225173~hmac=6056e27284fa5960c831b80e89e619bb285e07a7d84de4a9786afd1a8d34d742&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>HardPC</h1>
                        <h3>2 Vagas - Full Stack (Período - Indeterminado)</h3>
                        <p>Salário - R$7,500</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                </div><!--btn-cards-->
            </div><!--cards-->

            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/copie-o-fundo-digital-dos-circuitos-azuis-do-espaco_23-2148821699.jpg?t=st=1729221614~exp=1729225214~hmac=5b237072d971d50f641e857b8c046509e3725d03159b6c9ba6719d2ef8533c41&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>GlobeTEC</h1>
                        <h3>2 Vagas - Desenvolvedor Mobile (Período - 1 ano e 4 meses)</h3>
                        <p>Salário - A Combinar</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->
            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/copie-o-fundo-digital-dos-circuitos-azuis-do-espaco_23-2148821699.jpg?t=st=1729221614~exp=1729225214~hmac=5b237072d971d50f641e857b8c046509e3725d03159b6c9ba6719d2ef8533c41&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>DeVideo</h1>
                        <h3>1 Vagas - Data Science(Período - indeterminado)</h3>
                        <p>Salário - R$15,200</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->
            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/fundo-de-tecnologia-digital-de-fio-de-rede_1017-27428.jpg?t=st=1729221648~exp=1729225248~hmac=2f6ed80ddbdd4b9ffc56cf25f038bf459fa6ebf34fee16ad104508ccf4a20bac&w=1480">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>BookTEC</h1>
                        <h3>2 Vagas - Estagio Programador Jr (Período - 6 Meses)</h3>
                        <p>Salário - R$1,200</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->
            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/fotos-gratis/homem-tiro-medio-usando-oculos-vr_23-2149126949.jpg?t=st=1729221672~exp=1729225272~hmac=2b6c7423bd00cbf2ca37a908ec4c1309030273a5438a8482e25ed5513414e862&w=1480">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>WebGames</h1>
                        <h3>2 Vagas - Dev Game (Período - A Combinar)</h3>
                        <p>Salário - A Combinar</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->
            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/copie-o-fundo-digital-dos-circuitos-azuis-do-espaco_23-2148821699.jpg?t=st=1729221614~exp=1729225214~hmac=5b237072d971d50f641e857b8c046509e3725d03159b6c9ba6719d2ef8533c41&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>GlobeTEC</h1>
                        <h3>2 Vagas - Back end (Período - A Combinar)</h3>
                        <p>Salário - A Combinar</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->
            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/fotos-gratis/homem-usando-tecnologia-inteligente-de-maquete-psd-de-tablet-digital_53876-110815.jpg?t=st=1729221573~exp=1729225173~hmac=6056e27284fa5960c831b80e89e619bb285e07a7d84de4a9786afd1a8d34d742&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>HardPC</h1>
                        <h3>3 Vagas - Front-end (Período - A Combinar)</h3>
                        <p>Salário - R$2,500</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->
            <div class="card">
                <div class="card-box">
                    <div class="img-card">
                        <img src="https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg?t=st=1729221494~exp=1729225094~hmac=96d466ba07a73cf8875ccdc1bd011290d62825c451ee95385928e57d403fae62&w=1380">
                    </div><!--img-card-->
    
                    <div class="txt-card">
                        <h1>TEC Room</h1>
                        <h3>5 Vagas - Front-end (Período - A Combinar)</h3>
                        <p>Salário - A Combinar</p>
                    </div><!--txt-card-->
                </div><!--card-box-->

                <div class="btn-card">
                    <div class="btn-conectar">
                        <button>Conectar</button>
                    </div>
                    <div class="btn-mensagem">
                        <button>Mensagem</button>
                    </div>
                    
                </div><!--btn-cards-->
            </div><!--cards-->

        </div>
        </section>

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
