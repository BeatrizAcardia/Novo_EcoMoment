<?php
  if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
    $offcanvas = '    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasConta" aria-labelledby="offcanvasContaLabel">
        <div class="offcanvas-header">
            <div class="center">
                <h1 class="offcanvas-title" id="offcanvasContaLabel">CONTA</h1>
            </div>
            <div class="end"><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body">
            <div class="center nunito canvasBody">
                <img src="midias/icones-perfil/perfil.png" alt="Silhueta de busto">
                <p class="my-3 fw-bold">'.$_COOKIE['user'].'</p>
                <div class="row row-btn-canva">
                  <a href="perfil.php?type=conta&user='.$_COOKIE['user'].'" class="col-6 btn btn-success"><i class="bi bi-person-fill"></i> Minha conta</a>
                  <a href="logout.php" class="col-6 btn btn-danger"><i class="bi bi-box-arrow-left"></i> Sair</a>
                </div>
        </div>
    </div>';
  }
  else{
    $offcanvas = '';
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles/style-padrao.css"> -->
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-tela-inicial.css">
    <link rel="stylesheet" href="styles/media-query-tela-inicial.css">
    <title>EcoMoment</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"></script>

  <style>
#navbarMargin{
    padding-top: 90px;
}
.navbar{
  --mdb-navbar-box-shadow: 0;
}
    
  </style>
</head>
<body>
  <?php 
    include 'navbar/navbar.php';
  ?>
    <main>
      <div class="container inicial" id="container-inicial">
        <div class="row row-style">
          <div class="col circulo">
            <img src="midias/imagens-tela-inicial/circulo.png" alt="" class="imagemCirculo">
            <div class="titulo">
              <p class="principal">Reciclar e<br> reutilizar, não<br> deixe o<br> momento<br> passar!</p>
              <p class="subTitulo">Aqui as suas ideias são salvadoras</p>
              <a href="ideias-momento.php"><button id="botão"><p>Veja mais</p></button></a>
            </div>
          </div>
          <div class="col crianca">
            <img src="midias/imagens-tela-inicial/criancas-mesa.png" alt="" id="imagemCriancas">
          </div>
        </div>
      </div>

      <div class="container ondaVerde">
        <div class="row row-style">
          <div class="col texto1">
            <img src="midias/imagens-tela-inicial/ondaVerde.png" class="w100">
          </div>
        </div>
    </div>

    <!-- Início Mapa -->
      <div class="container-fluid center nunito" id="mapa">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div id="titulo-mapa">Conheça nosso mapa de pontos de coleta seletiva!</div>
            <div id="subtitulo-mapa">Informe seu CEP ou seu endereço e confira as opções cadastradas mais próximas a você! 
              <span id="dica-endereco" tabindex="0" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover focus" data-bs-title="Instruções" data-bs-content="Ao informar um CEP, certifique-se de seguir a formatação '12345-678'. Caso deseje informar um endereço, utilize a formatação 'rua, cidade, estado'.">*</span>
            </div>
            <div class="input-group mt-3">
              <input type="text" class="form-control" id="endereco" placeholder="Buscar">
              <div class="input-group-text" onclick="buscar()"><i class="bi bi-search"></i></div>
            </div>
            <div class="center2" id="area-local">
              <p class="mt-3">ou</p>
              <button class="button" type="button" onclick="localizar()" id="btn-localizar">Me localize <i class="bi bi-geo-alt-fill"></i></button>
            </div>
          </div>
          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
            <div id="mapa-coleta"></div>
          </div>
        </div>
      </div>
      <!-- Fim Mapa -->

      <div class="container ondaAzul">
        <div class="row row-style">
          <div class="col texto1">
            <img src="midias/imagens-tela-inicial/ondaAzul1.png" alt="" class="w100">
          </div>
        </div>
    </div>

    <div class="container-fluid curiosidades">
      <div class="row row-style">
        <div class="col" id="tituloCuri">
          <img src="midias/imagens-tela-inicial/detalheVerde.png" alt=""><h3>Curiosidades</h3>
        </div>
      </div>
      <div class="row row-style" id="row-curiosidades-carrossel">
        <div class="col">
          <div class="center row">
            <div class="swiper" id="carrosselCuriosidades">
              <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card">
                        <img class="card-img-top" src="midias/imagens-tela-inicial/curi1.webp" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">O Brasil é o 4º maior produtor de lixo plástico do mundo</h5>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="card">
                        <img class="card-img-top" src="midias/imagens-tela-inicial/curi2.webp" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">O Brasil recicla 97,4% de latas de alumínio</h5>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="card">
                        <img class="card-img-top" src="midias/imagens-tela-inicial/curi3.webp" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">O símbolo da reciclagem foi criado em um concurso</h5>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="card">
                        <img class="card-img-top" src="midias/imagens-tela-inicial/curi4.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">É possível ter desconto na conta de luz em SP reciclando</h5>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="card">
                        <img class="card-img-top" src="midias/imagens-tela-inicial/curi5.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title"> O Brasil recicla menos de 3% de resíduos produzidos</h5>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="card">
                        <img class="card-img-top" src="midias/imagens-tela-inicial/curi6.png" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">A reciclagem do alumínio economiza 95% do custo de energia para produzir um novo</h5>
                        </div>
                      </div>
                    </div>
              </div>
              <!-- Pagination -->
              <div class="swiper-pagination" id="pag-curiosidades"></div>
              <!-- Navigation buttons -->
              <div class="swiper-button-prev d-none d-md-block" id="prev-curiosidades"><img src="midias/imagens-tela-inicial/divisa-esquerda.png" alt="Seta para a esquerda"></div>
              <div class="swiper-button-next d-none d-md-block" id="next-curiosidades"><img src="midias/imagens-tela-inicial/divisa-direita.png" alt="Seta para a direita"></div>

            </div>
          </div>
        </div>
      </div>
  </div>
  
  <div class="container ondaAzul">
    <div class="row row-style">
      <div class="col">
        <img src="midias/imagens-tela-inicial/ondaAzul2.png" alt="" class="w100">
      </div>
    </div>
</div>

<div class="container-fluid materiais mpb0">
  <div class="row row-style">
    <div class="col" id="tituloMateriais">
      <img src="midias/imagens-tela-inicial/detalheAzulEsquerda.png" alt="" id="detalheAzul1"><h3>Principais Materiais</h3><img src="midias/imagens-tela-inicial/detlaheAzulDireira.png" alt="" id="detalheAzul2">
    </div>
  </div>
  <div class="row row-style center" id="linhaLixeiras">
    <div class="col lixeiras" id="col-lixeiras">
    <a href="materiais.php?material=1">
      <img src="midias/imagens-tela-inicial/lixeiraPlástico.png" class="w100" alt="">
      <h6 class="descLixeiras">Plástico</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="materiais.php?material=2">
      <img src="midias/imagens-tela-inicial/lixeiraMetal.png" class="w100" alt="">
      <h6 class="descLixeiras">Metal</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="materiais.php?material=3">
      <img src="midias/imagens-tela-inicial/lixeiraPapel.png" class="w100" alt="">
      <h6 class="descLixeiras">Papel</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="materiais.php?material=4">
      <img src="midias/imagens-tela-inicial/lixeiraVidro.png" class="w100" alt="">
      <h6 class="descLixeiras">Vidro</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="materiais.php?material=6">
      <img src="midias/imagens-tela-inicial/lixeiraOrganico.png" class="w100" alt="">
      <h6 class="descLixeiras">Orgânico</h6>
    </a>
  </div>
  </div>

  <div class="row rowPadrao" id="separador"></div>

  <!-- Footer -->
<footer class="bg-900 text-center" id="footer">
  <!-- Grid container -->
  <div class="container p-4">

    
  <div class="col-auto">
      <p class="pt-2">
        <h2 class="titulo-rodape">CONHEÇA A EQUIPE</h2>
      </p>
    </div>

    <!-- Section: Links -->
    <section class="center">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="devs col-lg-3 col-sm-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/beatriz.png" alt="" class="img-rodape-perfil"></h5>

          <ul class="list-unstyled mb-2">
            <li>
              <a class="text-light text-uppercase" href="#!">BEATRIZ CARDIA</a>
            </li>
            <li>
              <a class="text-light fw-bold text-uppercase" href="#!">dev designer</a>
            </li>
            <li>
              <a class="text-light" href="#!">beatrizcardia53@gmail.com</a>
            </li>
            <li class="mt-1">
              <a class="text-light" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="devs col-lg-3 col-sm-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/enzo.png" alt="" class="img-rodape-perfil"></h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-light text-uppercase" href="#!">ENZO OLIVATO</a>
            </li>
            <li>
              <a class="text-light fw-bold text-uppercase" href="#!">dev back-ending</a>
            </li>
            <li>
              <a class="text-light" href="#!">enzopazian1402@gmail.com</a>
            </li>
            <li class="mt-1">
              <a class="text-body" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="devs col-lg-3 col-sm-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/lorena.png" alt="" class="img-rodape-perfil"></h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-light text-uppercase" href="#!">LORENA SILVA</a>
            </li>
            <li>
              <a class="text-light fw-bold text-uppercase" href="#!">dev front-ending</a>
            </li>
            <li>
              <a class="text-light" href="#!">lorenasilva.dev@gmail.com</a>
            </li>
            <li class="mt-1">
              <a class="text-light" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="devs col-lg-3 col-sm-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/vitor.jpg" alt="" class="img-rodape-perfil"></h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-light text-uppercase" href="#!">VITOR NASCIMENTO</a>
            </li>
            <li>
              <a class="text-light fw-bold text-uppercase" href="#!">dev back-ending</a>
            </li>
            <li>
              <a class="text-light" href="#!">vitorhsnascimento.dev@gmail.com</a>
            </li>
            <li class="mt-1">
              <a class="text-light" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
        <div class="col-lg-1 col-md-12 mb-12 mb-md-0" class="mpb0">
        </div>
      <!--Grid column-->
      </div>
      
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  
    <!-- Section: Form -->
    <section class="center formEmail mt-3">
      <form action="" class="center">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <h2 class="titulo-rodape" id="rodape-2">ENCONTROU ALGUM PROBLEMA? NOS INFORME PARA QUE POSSAMOS CORRIGI-LO!</h2>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="mb-4">
              <textarea id="form5Example24" class="form-control" placeholder="O que houve?"></textarea>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto center">
            <!-- Submit button -->
            <button type="submit" class="mb-4" id="btn-rodape">
              Enviar
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

  </div>
  <!-- Grid container -->
  <div class="text-center p-3">
    <a href="#"><img id="rodapeImagem" src="midias/imagens-tela-inicial/ecoMomentLogo.png" alt=""></a><a href="#"><img src="midias/imagens-tela-inicial/AppStore.png" alt="" id="rodapeImagem"></a><a href="#"><img id="rodapeImagem" src="midias/imagens-tela-inicial/googlePlay.png" alt=""></a>
  </div>
  <!-- Copyright -->
  <div class="text-center p-3">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">EcoMoment.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
    </main>

    <?=$offcanvas?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../Controller/alerts.js"></script>
    <!-- Mapa -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="../Controller/mapa.js"></script>
    <!-- Carrossel -->
     <script>
        //Notícias
        const swiperBest = new Swiper('#carrosselCuriosidades', {
            speed: 400,
            spaceBetween: 10,
            slidesPerView: 1,
            
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 2000,
            },
            // Navigation arrows
            navigation: {
                nextEl: '#next-curiosidades',
                prevEl: '#prev-curiosidades',
            },
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: "#pag-curiosidades",
                clickable: true,
                dynamicBullets: true
            },
            breakpoints:{
              600:{
                slidesPerView: 2
              },
              1130:{
                slidesPerView: 3
              },
              1600:{
                slidesPerView: 4
              },
              2000:{
                slidesPerView: 5
              }
            }
          });
     </script>
</body>
</html>