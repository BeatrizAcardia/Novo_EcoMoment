<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoMoment</title>

    <link rel="stylesheet" href="styles/media_query.css">
    <link rel="stylesheet" href="styles/style.css">

    <link rel="stylesheet" href="styles/carrossel.css">
    <link rel="stylesheet" href="javascript/carrossel.js">


    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="javascript/Navbar.js">
    <link rel="stylesheet" href="styles/media_queryNavbar.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="script.js" defer></script>

</head>

<body>     
  <div class="background">
    <nav class="navbar navbar-expand-md fixed-top navbar-light">
      <div class="container-fluid navBar">
        <span class="navbar-brand"> <a href="index.php"><img src="imagens/icon.ico" alt="Biologia - Banner" class="navbarIcon" style="cursor: pointer;"></a></span>
          <button class="navbar-toggler d-md-none rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
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
                    <a class="nav-item nav-link padding-navbar" href="#"><button class="cta" onclick="cliquei()">
                      <span class="sobreNos">Sobre Nós</span>
                        <path
                          id="Path_10"
                          data-name="Path 10"
                          d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                          transform="translate(30)"></path>
                    </button>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item nav-link padding-navbar" href="#rodape"><button class="cta" onclick="cliquei()">
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
                    <a class="nav-item nav-link padding-navbar" href="loginPage.php"><button class="cta"  onclick="cliquei()">
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
                    <a class="nav-item nav-link padding-navbar" href="cadastroPage.php"><button class="cta" onclick="cliquei()">
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
    </nav>
    
    <section>
    <article id="landing-page">
      <div id="landing-page-pequena">
        <h1>Reciclar e<br> reutilizar, não<br> deixe o momento<br> passar!</h1>
        <h3>Aqui as suas ideias são salvadoras.</h3>
         <div class="botao"><button>VEJA MAIS</button></div>
      </div>
         <img src="imagens/ondaDebaixoLanding.png" id="landing-page-onda" alt="">
        </article>
      <article id="landing-page-telasGrandes">
        <div class="containerLanding container-fluid">
          <div class="row">
    
              <div class="col-lg-4 col-md-4">
                <div class="h10"></div>
                <br><br>
                <br><br>
                <div class="bolota">
                <img src="imagens/bolota-removebg.png" alt="" id="bolota">
                  <div class="top-left"> <a href="paginaDeIdeias.html">
                    <button class="button botao">Veja mais</button>
                  </a>
                </div>
                </div>
              </div>
    
              <div class="col-7 col-lg-7">
                <img id="compartilhandoimg" src="imagens/compartilhando.png" class="img-fluid" alt="compartilhando">
              </div>
            </div>
          </div>
      </article>
    </section>
    
    <section>
     <div class="conMapa container-fluid pb-5">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12" style="margin: 0 auto;">
          <br> <br>
          <p class="texto1mapa fw-bold">
            Conheça nosso mapa de pontos de coleta mais próximos da sua casa!
          </p>
          <p class="texto2mapa">
            Para descobrir os pontos de coletas próximos de sua casa é simples!
            <br>
            Digite o seu CEP abaixo e confira.
          </p>
          <div class="search">
            <div class="search-box">
              <div class="search-field">
                <input placeholder="Conheça..." class="input" type="text">
                <div class="search-box-icon">
                  <button class="btn-icon-content">
                    <i class="search-icon">
                      <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#fff"></path></svg>
                    </i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="h5"></div>
          <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14738.302984187023!2d-47.419087502272156!3d-22.557560011791693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c88082d6720c33%3A0x2804dd64dab85840!2sEcoponto%20-%20Anavec!5e0!3m2!1spt-BR!2sbr!4v1696874515450!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
        </div>
      </div>
    </div>
    </section>
    
    
    <section>
    <img src="imagens/ondinhas.png" alt="" id="ondaNoticia">
    <article id="noticias">
     <!-- <img src="imagens/detalhe_noticia (2)-Photoroom.png-Photoroom.png" alt="" id="detalheNoticia">-->
      <h1>Notícias</h1>
      <div class="scroll-container">
    
        <img src="https://source.unsplash.com/random/300x400/?beach" alt="Cinque Terre">
        <img src="https://source.unsplash.com/random/300x400/?florest" alt="Forest">
        <img src="https://source.unsplash.com/random/300x400/?school" alt="Northern Lights">
        <img src="https://source.unsplash.com/random/300x400/?pets" alt="Mountains">
        <img src="https://source.unsplash.com/random/300x400/?newspaper" alt="Cinque Terre">
        <img src="https://source.unsplash.com/random/300x400/?news" alt="Forest">
        <img src="https://source.unsplash.com/random/300x400/?wood" alt="Northern Lights">
        <img src="https://source.unsplash.com/random/300x400/?plastic" alt="Mountains">
      </div>
      </article>
    <img src="imagens/ondaDeBaixo_Noticia.png" alt="" id="ondaDeBaixo_Noticia">
    </section>
    
    <section>
    <article id="Principais-materiais">
    <!--    <img src="imagens/detalhe1-Principais.png" id="detalhe1-Principais" alt=""> --->
    <h1>Principais Materiais</h1>
    <div class="holder">
    
      <div class="card" style="width: 10rem; text-align: center; background-color: #f4f4f4; border: none;">
    <img class="card-img-top" src="imagens/plastico.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Plástico</p>
    </div>
    </div>
    
    
    <div class="card" style="width: 10rem; text-align: center; background-color: #f4f4f4; border: none;">
    <img class="card-img-top" src="imagens/Metal.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Metal</p>
    </div>
    </div>
    
    
    <div class="card" style="width: 10rem; text-align: center; background-color: #f4f4f4; border: none;">
    <img class="card-img-top" src="imagens/vidro.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Vidro</p>
    </div>
    </div>
        <div class="card" style="width: 10rem; text-align: center; background-color: #f4f4f4; border: none;">
          <img class="card-img-top" src="imagens/papel.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Papel</p>
          </div>
        </div>
        <div class="card" style="width: 10rem; text-align: center; background-color: #f4f4f4; border: none;">
          <img class="card-img-top" src="imagens/organicos.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Orgânicos</p>
          </div>
        </div>
      </div>
    </div>
    </article>
    
     <article id="rodape">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <p id="titulo-rodape">Conheça a equipe!</p>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12">    
        <div class="row alinharow">
    
          <div class="col-lg-3 col-md-3">
            <div class="card" style="width: 9rem;">
              <div class="row">
                <div class="col-6 alinha" >
                  <img class="card-img-top" src="imagens/Lórena.png" alt="Card image cap">
                </div>
                <div class="col-6">
                  <div class="card-body">
                  <p class="card-text"> Lorena Ferreira <br>  Desenvolvedora Web. <br> lorena.dev@gmail.com
                  <i class="bi bi-github"></i> <i class="bi bi-instagram"></i>
                </p>
                </div><!-- card-text ---->
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!--- col --->

          <div class="col-lg-3 col-md-3">
            <div class="card" style="width: 9rem; margin-bottom: 40px;">
              <div class="row">
                <div class="col-6 alinha">
                  <img class="card-img-top" src="imagens/bea-linda.png" alt="Card image cap">
                </div>
                <div class="col-6">
                  <div class="card-body">
                  <p class="card-text"> Beatriz Cardia <br>  Desenvolvedora Web. <br> beatrizcardia53@gmail.com</p>
                </div><!-- card-text ---->
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!--- col --->
        </div>
            <div class="row alinharow">
    
          <div class="col-lg-3 col-md-3">
            <div class="card" style="width: 9rem;">
              <div class="row">
                <div class="col-6 alinha">
                  <img class="card-img-top" src="imagens/Vitinho.png" alt="Card image cap">
                </div>
                <div class="col-6">
                  <div class="card-body">
                  <p class="card-text">Vitor Nascimento <br>  dev back-ending <br> vitorhsnascimento.dev@gmail.com</p>
                </div><!-- card-text ---->
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!--- col --->
    
                    <div class="col-lg-3 col-md-3">
                      <div class="card" style="width: 9rem;">
              <div class="row">
                <div class="col-6 alinha">
                  <img class="card-img-top" src="imagens/enzinho-bonitinho.png" alt="Card image cap">
                </div>
                <div class="col-6">
                  <div class="card-body">
                  <p class="card-text"> Enzo Pazian <br>  dev back-ending <br> enzopazian1402@gmail.com</p>
                  <i class="bi bi-github custom-icon"></i> <i class="bi bi-instagram custom-icon"></i>
                </div><!-- card-text ---->
                </div><!-- col-6 -->
              </div><!-- row -->
                      </div><!-- card -->
                    </div><!--- col --->
            </div>
      </div>

      
        <div class="col-lg-6 col-md-12">
            <div class="row">
              <div class="col-lg-1 d-lg-block d-md-none d-sm-none">
                <img src="imagens/pontilhado.png" class="pontilhado" alt="">
              </div>

              <div class="col-lg-5 col-md-6" id="paragrafo">
                <h1>FIQUE POR DENTRO <br> DAS NOVIDADES</h1>
                <h3>DESEJA RECEBER NOTÍCIAS E ATUALIZAÇÕES FUTURAS DIRETAMENTE NA SUA CAIXA DE ENTRADA?</h3>

                <div class="Message">
                  <input title="Write Message" tabindex="i" pattern="\d+" placeholder="Digite seu email" class="MsgInput" type="text">
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="30.000000pt" height="30.000000pt" viewBox="0 0 30.000000 30.000000" preserveAspectRatio="xMidYMid meet" class="SendSVG">
                    <g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)" fill="	#808080" stroke="none">
                      <path d="M44 256 c-3 -8 -4 -29 -2 -48 3 -31 5 -33 56 -42 28 -5 52 -13 52 -16 0 -3 -24 -11 -52 -16 -52 -9 -53 -9 -56 -48 -2 -21 1 -43 6 -48 10 -10 232 97 232 112 0 7 -211 120 -224 120 -4 0 -9 -6 -12 -14z"></path>
                    </g>
                  </svg>
                    <span class="l"></span>
                </div>

                <br>  

                <p>FALE CONOSCO: <a href="mailto:ecomomentcotil@gmail.com">ecomomentcotil@gmail.com</a></p>
                
              </div>

              <div class="col-lg-4 col-md-6" id="buttons">
                <a href="#"><img class="stores" src="imagens/appleStore.png" alt=""></a>
                <a href="#"><img class="stores" src="imagens/googlePlay.png" alt=""></a>

                <img class="stores" src="imagens/rodaEcomoment.png" alt="">
              </div>
            </div>

          </div>
        </div>
      </article>
    
    </section>
  </main>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

  </body>
</html>