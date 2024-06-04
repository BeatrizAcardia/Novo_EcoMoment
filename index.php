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
      <div class="container inicial" id="navbarMargin" style="margin: 0; padding: 90px 0 0 0; border: 0;">
        <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
          <div class="col circulo" style="padding: 0;">
            <img src="midias/imagens-tela-inicial/circulo.png" alt="" class="imagemCirculo" style="width: 100%; z-index: auto;">
            <div class="titulo">
              <p class="principal" style="margin-bottom: 3%;">Reciclar e<br> reutilizar, não<br> deixe o<br> momento<br> passar!</p>
              <p class="subTitulo" style="margin-bottom: 3%;">Aqui as suas ideias são salvadoras</p>
              <a href="ideias-momento.php"><button id="botão" style="border-radius: 10vw;"><p>Veja mais</p></button></a>
            </div>
          </div>
          <div class="col crianca" style="padding: 0;">
            <img src="midias/imagens-tela-inicial/criancas-mesa.png" alt="" class="imagemCriancas" style="width: 70%;">
          </div>
        </div>
      </div>

      <div class="container ondaVerde" style="margin: 0;padding: 0;border: 0; margin-top: -1%;">
        <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
          <div class="col texto1" style="padding: 0;">
            <img src="midias/imagens-tela-inicial/ondaVerde.png" alt="" style="width: 100%;">
          </div>
        </div>
    </div>

        <div class="container mapa" style="margin: 0;padding: 0;border: 0; margin-top: 5%; ">
          <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
            <div class="col texto1" style="padding: 0;">
              <div class="textoMapa" style="width: 70%;">
                <p class="principal2">Conheça nosso mapa de<br> pontos de coleta mais<br> próximos da sua casa!</p>
                <p class="subTitulo2" style="margin-bottom: 3%;">Para descobrir os pontos de coletas<br> próximos de sua casa é simples!<br>
                Digite o seu CEP abaixo e confira.</p>
                  <form class="search-container">
                    <div class="input-group" style="width: 80%;">
                      <input type="text" class="form-control" placeholder="Buscar">
                      <div class="input-group-text"><i class="bi bi-search"></i></div>
                    </div>
                  </form>
              </div>
            </div>
            <div class="col incorpMapa" style="padding: 0;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2002736446557!2d-47.396336524922376!3d-22.571611679492396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c880e6f2dd07d3%3A0x9a5417cb77a025c4!2sEcoponto%20-%20Marginal%20Tatu!5e0!3m2!1spt-BR!2sbr!4v1716932303085!5m2!1spt-BR!2sbr" width="90%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
      </div>

      <div class="container ondaAzul" style="margin: 0; padding: 0;border: 0; margin-top: -5%;">
        <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
          <div class="col texto1" style="padding: 0;">
            <img src="midias/imagens-tela-inicial/ondaAzul1.png" alt="" style="width: 100%;">
          </div>
        </div>
    </div>

    <div class="container-fluid curiosidades" style="margin: 0; padding: 0; border: 0; margin-top: -6%;">
      <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
        <div class="col" id="tituloCuri" style="padding: 0;">
          <img src="midias/imagens-tela-inicial/detalheVerde.png" alt="" style="width: 5%; margin-top: -1.8%;"><h3>Curiosidades</h3>
        </div>
      </div>
      <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0; margin-top: 1%; margin-bottom: 2%;">
        <div class="col" style="padding: 0;">
          <div class="cards-wrapper">
            <div id="carouselExampleControls" class="carousel slide carousel-dark" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cards-wrapper">
                    <div id="card1" class="card">
                      <img class="card-img-top" src="midias/imagens-tela-inicial/curi1.webp" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">O Brasil é o 4º maior produtor de lixo plástico do mundo</h5>
                      </div>
                    </div>
                    <div id="card2" class="card">
                      <img class="card-img-top" src="midias/imagens-tela-inicial/curi2.webp" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">O Brasil recicla 97,4% de latas de alumínio</h5>
                      </div>
                    </div>
                    <div id="card3" class="card">
                      <img class="card-img-top" src="midias/imagens-tela-inicial/curi3.webp" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">O símbolo da reciclagem foi criado em um concurso</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <div id="card1" class="card">
                      <img class="card-img-top" src="midias/imagens-tela-inicial/curi4.jpg" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">É possível ter desconto na conta de luz em SP reciclando</h5>
                      </div>
                    </div>
                    <div id="card2" class="card">
                      <img class="card-img-top" src="midias/imagens-tela-inicial/curi5.jpg" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title"> O Brasil recicla menos de 3% de resíduos produzidos</h5>
                      </div>
                    </div>
                    <div id="card3" class="card">
                      <img class="card-img-top" src="midias/imagens-tela-inicial/curi6.png" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">A reciclagem do alumínio economiza 95% do custo de energia para produzir um novo</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" style="background: url(midias/imagens-tela-inicial/divisa-esquerda.png) no-repeat right center;"  href="#carouselExampleControls" role="button" data-slide="prev">
                <span  aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" style="background: url(midias/imagens-tela-inicial/divisa-direita.png) no-repeat left center;" href="#carouselExampleControls" role="button" data-slide="next">
                <span aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
            </div>
        </div>
      </div>
  </div>
  
  <div class="container ondaAzul" style="margin: 0; padding: 0;border: 0;">
    <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
      <div class="col" style="padding: 0;">
        <img src="midias/imagens-tela-inicial/ondaAzul2.png" alt="" style="width: 100%;">
      </div>
    </div>
</div>

<div class="container-fluid materiais" style="margin: 0; padding: 0; border: 0;">
  <div class="row" style="border: 0; width: 100vw; margin: 0 auto; padding: 0;">
    <div class="col" id="tituloMateriais" style="padding: 0;">
      <img src="midias/imagens-tela-inicial/detalheAzulEsquerda.png" alt="" style="width: 3%; margin-top: -3%;"><h3>Principais Materiais</h3><img src="midias/imagens-tela-inicial/detlaheAzulDireira.png" alt="" style="width: 3%; margin-top: -3%;margin-left: -1.5%;">
    </div>
  </div>
  <div class="row" id="linhaLixeiras" style="border: 0; margin: 0 auto; padding: 0; display: flex;flex-direction: row;justify-content: center;
  align-items: center;  margin-top: 4%;">
    <div class="col lixeiras"  style=" width: 10vw !important;">
    <a href="#">
      <img src="midias/imagens-tela-inicial/lixeiraPlástico.png" style="width: 100%;" alt="">
      <h6 class="descLixeiras">Plástico</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="#">
      <img src="midias/imagens-tela-inicial/lixeiraVidro.png" style="width: 100%;" alt="">
      <h6 class="descLixeiras">Vidro</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="#">
      <img src="midias/imagens-tela-inicial/lixeiraMetal.png" style="width: 100%;" alt="">
      <h6 class="descLixeiras">Metal</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="#">
      <img src="midias/imagens-tela-inicial/lixeiraPapel.png" style="width: 100%;" alt="">
      <h6 class="descLixeiras">Papel</h6>
    </a>
  </div>
  <div class="col lixeiras">
    <a href="#">
      <img src="midias/imagens-tela-inicial/lixeiraOrganico.png" style="width: 100%;" alt="">
      <h6 class="descLixeiras">Orgânico</h6>
    </a>
  </div>
  </div>

  <div class="row rowPadrao" id="separador"></div>

  <!-- Footer -->
<footer class="bg-900 text-center" style="width: 100%; color: azure; background-color:#3B5364 ;">
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
        <div class="devs col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/beatriz.png" alt="" style="width: 25%; border-radius: 50%;"></h5>

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
            <li>
              <a class="text-light" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="devs col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/enzo.png" alt="" style="width: 25%; border-radius: 50%;"></h5>

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
            <li>
              <a class="text-body" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="devs col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/lorena.png" alt="" style="width: 23%; border-radius: 50%;"></h5>

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
            <li>
              <a class="text-light" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="devs col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><img src="midias/imagens-tela-inicial/vitor.jpg" alt="" style="width: 25%; border-radius: 50%;"></h5>

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
            <li>
              <a class="text-light" href="#!"><img src="midias/imagens-tela-inicial/instagram.png" alt=""> <img src="imagens/github.png" alt=""></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
        <div class="col-lg-1 col-md-12 mb-12 mb-md-0" style="margin: 0 !important;">
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
              <h2 class="titulo-rodape" id="rodape-2">DESEJA RECEBER NOTICIAS E ATUALIZAÇÕES FUTURAS DIRETAMENTE NA SUA CAIXA DE ENTRADA?</h2>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div data-mdb-input-init class="mb-4">
              <input type="email" id="form5Example24" class="form-control" placeholder="Seu endereço de email" />
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn mb-4" style="background-color: white;">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>