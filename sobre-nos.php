<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-sobre-nos.css">
    <link rel="stylesheet" href="styles/media-querys-sobre-nos.css">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/ideia (3).png" type="image/x-icon">
    <title>Sobre Nós</title>
    <style>
      .circeR{
        font-family: "circe", sans-serif;
        font-weight: 400;
        font-style: normal;
      }

      .circeB{
        font-family: "circe", sans-serif;
        font-weight: 700;
        font-style: normal;
      } 

      .mp-0{
        padding: 0;
        margin: 0;
      }

      .descricao2{
        box-shadow: -10px 10px 0px #3A7D44;
      }

      .reverse{
        display: flex;
        flex-direction: row-reverse;
      }

      main{
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>

      <!-- <nav class="navbar navbar-expand-md fixed-top navbar-light">
      <div class="container-fluid navBar">
        <span class="navbar-brand"><a href="index.html"><img src="imagens/icon.ico" alt="Biologia - Banner" class="navbarIcon"></a></span>
          <button class="navbar-toggler d-md-none rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-item nav-link padding-navbar" href="index.html"><button class="cta" onclick="cliquei()">
                    <span class="ideias">Início</span>
                      <path
                        id="Path_10"
                        data-name="Path 10"
                        d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                        transform="translate(30)"></path>
                  </button>
                  </a>
                </li>
                  <li class="nav-item">
                    <a class="nav-item nav-link padding-navbar" href="paginaDeIdeias.html"><button class="cta" onclick="cliquei()">
                      <span class="ideias">Ideias</span>
                        <path
                          id="Path_10"
                          data-name="Path 10"
                          d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                          transform="translate(30)"></path>
                    </button>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item nav-link padding-navbar" href="index.html#footer"><button class="cta" onclick="cliquei()">
                      <span class="contato">Contato</span>
                        <path
                          id="Path_10"
                          data-name="Path 10"
                          d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                          transform="translate(30)"></path>
                    </button>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item nav-link padding-navbar" href="#"><button class="cta"  onclick="cliquei()">
                      <span class="login">Login</span>
                        <path
                          id="Path_10"
                          data-name="Path 10"
                          d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                          transform="translate(30)"></path>
                    </button>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item nav-link padding-navbar" href="#"><button class="cta" onclick="cliquei()">
                      <span class="cadastro">Cadastro</span>
                        <path
                          id="Path_10"
                          data-name="Path 10"
                          d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                          transform="translate(30)"></path>
                    </button>
                    </a>
                  </li>
              </ul>
          </div>
      </div>
    </nav> -->
      <header>
        <?php
          include('navbar/navbar.php');
        ?>
      </header>
      
      <main>
      <!--Início Título Principal-->
      <section>
          <h1 class="escrita circeB" id="tituloPrincipal">O projeto EcoMoment</h1>
      </section>
      <!--Fim Título Principal-->

      <section class="texto">
          <div id="texto">
            <p class="conteudo">Bem-vindo ao nosso site dedicado à reutilização de materiais recicláveis e reciclagem! Aqui, acreditamos no poder da criatividade e da sustentabilidade para transformar o mundo ao nosso redor. Nossa plataforma é um espaço colaborativo onde você pode encontrar inspiração, compartilhar ideias e aprender maneiras inovadoras de dar uma nova vida a materiais que, de outra forma, seriam descartados.</p>
            <p class="conteudo">A ideia para este site surgiu durante uma aula, onde percebemos o potencial enorme que a reutilização de materiais recicláveis tem para reduzir o desperdício e promover práticas mais sustentáveis. Movidos por essa visão, reunimos uma equipe apaixonada e comprometida em tornar essa ideia uma realidade.</p>
            <p class="conteudo">Aqui, você encontrará uma variedade de conteúdos, desde tutoriais passo a passo sobre como transformar materiais recicláveis em objetos úteis e criativos até artigos informativos sobre os benefícios da reciclagem para o meio ambiente. Além disso, incentivamos a comunidade a compartilhar suas próprias ideias e projetos, criando assim uma rede de apoio e inspiração para todos os interessados em fazer a diferença.</p>
            <p class="conteudo">Junte-se a nós nessa jornada de transformação e descoberta. Vamos trabalhar juntos para criar um mundo mais sustentável, onde cada pequena ação faz a diferença. O futuro do nosso planeta está em nossas mãos, e juntos podemos fazer grandes coisas!</p>
          </div>
      </section>

      <!--Início Título Secundário-->
      <span>
          <h1 class="escrita circeB" id="tituloSecundario">Sobre nós</h1>
      </span>
      <!--Fim Título Secundário-->

      <!-- Início da Informação sobre a Lorena -->
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-12">
            <div class="row circeB nome" id="lorena">
              Lorena Silva
            </div>
            <div class="row perfis">
              <img class="perfil img-fluid" src="imagens/Lórena.png" alt="">
            </div>
            <div class="centrar">
              <div class="row icons">
                <div class="col-4 mp-0">
                  <img class="icon" src="imagens/github-sobre.png" alt="">
                </div>
                <div class="col-4 mp-0">
                  <img class="icon" src="imagens/instagram-sobre.png" alt="">
                </div>
                <div class="col-4 mp-0">
                  <img class="icon" src="imagens/linkedin.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-12 descricao">
            <div>
              <span class="funcao circeB">Desenvolvedora Front-End e Designer</span>
              <p>Olá! Meu nome é Lorena Silva, nasci na cidade de Limeira, no interior de São Paulo. Desde cedo, descobri minha paixão pela tecnologia e pela criação de soluções inovadoras. A busca pelo conhecimento em programação me levou a sonhar alto: quero me tornar uma desenvolvedora full-stack, capaz de criar aplicações web incríveis e impactantes.</p>
              <p>Mas minha ambição não se limita apenas ao universo da tecnologia. Tenho um grande sonho de morar no Canadá, país conhecido por sua qualidade de vida, diversidade e oportunidades de crescimento.</p>
              <p>Em resumo, sou uma pessoa determinada a alcançar meus objetivos profissionais, mas também apaixonada por desbravar o mundo e viver experiências únicas. Estou pronta para enfrentar desafios, aprender continuamente e transformar meus sonhos em realidade.</p>
            </div>
          </div>
        </div>
      </div>

    <!-- Início da Informação sobre o Vitor -->
    <div class="container">
      <div class="row reverse">
        <div class="col-md-3 col-12">
          <div class="row circeB nome">
            Vitor Nascimento
          </div>
          <div class="row perfis">
            <img class="perfil img-fluid" src="imagens/Vitinho.png" alt="">
          </div>
          <div class="centrar">
            <div class="row icons">
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/github-sobre.png" alt="">
              </div>
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/instagram-sobre.png" alt="">
              </div>
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/linkedin.png" alt="">
              </div>
          </div>
          </div>
        </div>
        <div class="col-md-9 col-12 descricao descricao2">
          <div>
            <span class="funcao circeB">Desenvolvedor Back-Ending e Database Administrator</span>
            <p>Olá! Me chamo Vitor H.S. Nascimento nasci na cidade de Limeira, e tenho como objetivo me especializar na área de Tecnologia da Informação, com foco especialmente no desenvolvimento de sistemas back-end.</p> 
            <p>Além disso, tenho um grande interesse em explorar o mundo através de viagens. Acredito que combinar minha especialização em TI com a oportunidade de viajar seria uma experiência enriquecedora, permitindo-me conhecer diferentes culturas e expandir minha visão profissional. </p>
            <p>Estou determinado a alcançar esses objetivos e estou aberto a oportunidades que me permitam crescer tanto profissional quanto pessoalmente. Agradeço por visitar nossa página e estou aberto para conexões e colaborações.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Início da Informação sobre o Enzo -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-12">
          <div class="row circeB nome">
            Enzo Pazian
          </div>
          <div class="row perfis">
            <img class="perfil img-fluid" src="imagens/enzo.png" alt="">
          </div>
          <div class="centrar">
            <div class="row icons">
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/github-sobre.png" alt="">
              </div>
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/instagram-sobre.png" alt="">
              </div>
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/linkedin.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-12 descricao">
          <div>
            <span class="funcao circeB">Desenvolvedor Back-Ending e Database Administrator</span>
            <p>Olá! Meu nome é Enzo e sou baseado na cidade de Americana, em São Paulo. Desde muito cedo, desenvolvi um profundo interesse pela tecnologia e sua capacidade de transformar o mundo ao nosso redor. Sonho em utilizar minha paixão pela tecnologia para fazer a diferença, contribuindo para criar um impacto positivo na sociedade e na vida das pessoas.</p>
            <p>Busco constantemente a felicidade em tudo o que faço. Acredito que a vida é uma jornada para ser vivida com entusiasmo, gratidão e em busca do bem-estar pessoal e coletivo. Procuro encontrar alegria nas pequenas coisas e cultivar relacionamentos significativos com as pessoas ao meu redor.</p>
            <p>Em resumo, sou um indivíduo apaixonado pela tecnologia, pelo desenho e pela busca da felicidade. Estou determinado a utilizar minhas habilidades e paixões para deixar minha marca no mundo e fazer a diferença, sempre com um sorriso no rosto e o coração cheio de esperança.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Início da Informação sobre o Enzo -->
    <div class="container">
      <div class="row reverse">
        <div class="col-md-3 col-12 ">
          <div class="row circeB nome">
            Beatriz A. Cardia
          </div>
          <div class="row perfis">
            <img class="perfil img-fluid" src="imagens/beatriz.png" alt="">
          </div>
          <div class="centrar">
            <div class="row icons">
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/github-sobre.png" alt="">
              </div>
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/instagram-sobre.png" alt="">
              </div>
              <div class="col-4 mp-0">
                <img class="icon" src="imagens/linkedin.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-12 descricao descricao2">
          <div>
            <span class="funcao circeB">Desenvolvedora Front-End e Designer</span>
            <p>Oi eu sou a Bia, nascida em Americana, São Paulo. Desde a infância, me encantei pelo universo da tecnologia, mas sempre nutri um grande sonho: tornar-me professora na educação infantil. Tenho uma forte convicção de que educar e inspirar as mentes jovens é uma das vocações mais nobres que alguém pode ter.</p>
            <p>Além da minha paixão pela educação, tenho uma afinidade especial com as artes. Adoro desenhar e tenho habilidades manuais que me permitem criar diferentes projetos criativos. A arte é uma forma de expressão que me permite transmitir emoções e contar histórias de maneira única.</p>
            <p>Em resumo, sou uma pessoa apaixonada pela educação, pela arte e pela aventura. Estou determinada a seguir meu sonho de ser professora na educação infantil, enquanto nutro minha criatividade através do desenho e realizo meu desejo de explorar o mundo. Estou ansiosa para ver onde essa jornada me levará.</p>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <?php
        include('rodape/rodape.html');
      ?>
    </footer>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>