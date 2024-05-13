<?php 
  include('script-ideias-do-momento.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-melhoresIdeias.css">
    <link rel="stylesheet" href="styles/media-query-melhoresideias.css">
    <link rel="stylesheet" href="styles/style-ideia.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="javascript/script-melhoresIdeias.js">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ideias do Momento</title>
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

        .link-material{
          text-decoration: none;
        }
        .link-material:hover{
          text-decoration: none;
        }

        body{
          background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <main>
      <!-- <nav class="navbar navbar-expand-md fixed-top navbar-light">
        <div class="container-fluid navBar">
          <span class="navbar-brand"> <a href="index.html"><img src="imagens/icon.ico" alt="Biologia - Banner" class="navbarIcon"></a></span>
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
                      <a class="nav-item nav-link padding-navbar" href="indexSobre.html"><button class="cta" onclick="cliquei()">
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
    </nav> -->
    <?php
      include('navbar/navbar.html');
    ?>

    <!--Início Título Principal-->
    <section id="tituloPrincipal">
        <img src="imagens/folhas-de-galho.png" alt="Folha" id="folha">
        <h1 id="escritaPrincipal" class="circeB mr-1">As Ideias do Momento </h1>
        <img src="imagens/folhas-de-galho (4).png" alt="Folha" id="folha">
    </section>
    <!--Fim Título Principal-->

    <!-- Início dos Cards - Ideias do Momento -->
    <div class=" ideias row">
      <!-- <div class="card">
        <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro"><img src="imagens/lembrancinha_vidro.jpeg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro">
            <h5 class="card-title">Lembrancinhas com pote de vidro</h5>
          </a>
          <h6>⭐⭐⭐⭐⭐🟢</h6>
          <p class="card-text">por @calinhos123</p>
        </div>
      </div>
      <div class="card">
        <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro"><img src="imagens/artesanato-reciclagem-caixa-de-leite-6.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro">
            <h5 class="card-title">Lembrancinhas com pote de vidro</h5>
          </a>
          <h6>⭐⭐⭐⭐⭐🟢</h6>
          <p class="card-text">por @calinhos123</p>
        </div>
      </div>
      <div class="card">
        <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro"><img src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro">
            <h5 class="card-title">Lembrancinhas com pote de vidro</h5>
          </a>
          <h6>⭐⭐⭐⭐⭐🟡</h6>
          <p class="card-text">por @calinhos123</p>
        </div>
      </div>
      <div class="card">
        <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro"><img src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <a href="https://www.revistaartesanato.com.br/ideias-reutilizar-embalagens-vazias/#8_Lembrancinhas_com_pote_de_vidro">
            <h5 class="card-title">Lembrancinhas com pote de vidro</h5>
          </a>
          <h6>⭐⭐⭐⭐⭐🔴</h6>
          <p class="card-text">por @calinhos123</p>
        </div>
      </div> -->
        <?php 
          //Carregamento das ideias de reutilazação
          if ($existe){
              foreach($postagens as $post){
                  echo $post;
              }
          }
          else{
              echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
          }
        ?>
    </div>
<!-- Final dos Cards -->

<!-- Início do botão -->
<!-- <div id="botao"><button id="confira"> Confira </button></div> -->
<!-- Fim do botão -->
<div class="my-5"></div>

<!--Início Título Plástico-->
<a href="materiais.php?material=1" class="link-material">
  <section id="titulos">
        <img src="midias/icones-materiais/residuos-plasticos.png" alt="Sacola Plástica" id="sacola">
        <h1 class="circeB" id="plastico">Plástico</h1>
  </section>
</a>
<!--Fim Título Plástico-->

<!-- Início do Carrosel de Plástico -->
<div class="cards-wrapper">
  <div id="carouselExampleControls" class="carousel slide carousel-dark" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div id="card1" class="card">
            <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Título do card</h5>
            </div>
          </div>
          <div id="card2" class="card">
            <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Título do card</h5>
            </div>
          </div>
          <div id="card3" class="card">
            <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Título do card</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div id="card1" class="card">
            <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Título do card</h5>
            </div>
          </div>
          <div id="card2" class="card">
            <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Título do card</h5>
            </div>
          </div>
          <div id="card3" class="card">
            <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Título do card</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" style="background: url(imagens/divisa-esquerda.png) no-repeat center center;"  href="#carouselExampleControls" role="button" data-slide="prev">
      <span  aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" style="background: url(imagens/divisa-direita.png) no-repeat center center;" href="#carouselExampleControls" role="button" data-slide="next">
      <span aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>
<!-- Fim do Carrossel do Plástico -->

<!--Início Título Vidro-->
<a href="materiais.php?material=4" class="link-material">
  <section id="titulos">
    <img src="midias/icones-materiais/vidro.png" alt="Taça de Vidro" id="taça">
    <h1 class="circeB" id="vidro">Vidro</h1>
  </section>
</a>
<!--Fim Título Vidro-->

<!-- Início do Carrosel de Vidro -->
<div class="cards-wrapper">
<div id="carouselExampleControlsVidro" class="carousel slide carousel-dark" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev" style="background: url(imagens/divisa-esquerda-verde.png) no-repeat center center;"  href="#carouselExampleControlsVidro" role="button" data-slide="prev">
  <span  aria-hidden="true"></span>
  <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" style="background: url(imagens/divisa-direita-verde.png) no-repeat center center;" href="#carouselExampleControlsVidro" role="button" data-slide="next">
  <span aria-hidden="true"></span>
  <span class="sr-only">Próximo</span>
</a>
</div>
</div>
<!-- Fim do Carrosel do Vidro -->

<!--Início Título Papel-->
<a href="materiais.php?material=3" class="link-material">
  <section id="titulos">
    <img src="midias/icones-materiais/papel.png" alt="Papel" id="Folhapapel">
    <h1 class="circeB" id="papel">Papel</h1>
  </section>
</a>
<!--Fim Título Papel-->

<!-- Início do Carrosel de Papel -->
<div class="cards-wrapper">
<div id="carouselExampleControlsPapel" class="carousel slide carousel-dark" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev" style="background: url(imagens/divisa-esquerda-azul.png) no-repeat center center;"  href="#carouselExampleControlsPapel" role="button" data-slide="prev">
  <span  aria-hidden="true"></span>
  <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" style="background: url(imagens/divisa-direita-\ azul.png) no-repeat center center;" href="#carouselExampleControlsPapel" role="button" data-slide="next">
  <span aria-hidden="true"></span>
  <span class="sr-only">Próximo</span>
</a>
</div>
</div>
<!-- Fim do Carrossel de Papel -->

<!--Início Título Metal-->
<a href="materiais.php?material=2" class="link-material">
  <section id="titulos">
    <img src="midias/icones-materiais/metal.png" alt="Latinha de metal" id="lataMetal">
    <h1 class="circeB" id="metal">Metal</h1>
  </section>
</a>
<!--Fim Título Metal-->

<!-- Início do Carrosel de Metal -->
<div class="cards-wrapper">
<div id="carouselExampleControlsMetal" class="carousel slide carousel-dark" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev" style="background: url(imagens/divisa-esquerda-amarelo.png) no-repeat center center;"  href="#carouselExampleControlsMetal" role="button" data-slide="prev">
  <span  aria-hidden="true"></span>
  <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" style="background: url(imagens/divisa-direita-amarelo.png) no-repeat center center;" href="#carouselExampleControlsMetal" role="button" data-slide="next">
  <span aria-hidden="true"></span>
  <span class="sr-only">Próximo</span>
</a>
</div>
</div>
<!-- Fim do Carrossel de Metal -->

<!--Início Título Orgânico-->
<a href="materiais.php?material=6" class="link-material">
  <section id="titulos">
    <img src="midias/icones-materiais/desperdicio-organico.png" alt="Maça" id="macaOrganica">
    <h1 class="circeB" id="organico">Orgânico</h1>
  </section>
</a>
<!--Fim Título Orgânico-->

<!-- Início do Carrosel de Orgânico -->
<div class="cards-wrapper">
<div id="carouselExampleControlsOrganico" class="carousel slide carousel-dark" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev" style="background: url(imagens/divisa-esquerda-marromclaro.png) no-repeat center center;"  href="#carouselExampleControlsOrganico" role="button" data-slide="prev">
  <span  aria-hidden="true"></span>
  <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" style="background: url(imagens/divisa-direita-marromclaro.png) no-repeat center center;" href="#carouselExampleControlsOrganico" role="button" data-slide="next">
  <span aria-hidden="true"></span>
  <span class="sr-only">Próximo</span>
</a>
</div>
</div>
<!-- Fim do Carrossel Orgânico -->

<!--Início Título Madeira-->
<a href="materiais.php?material=5" class="link-material">
  <section id="titulos">
    <img src="midias/icones-materiais/madeira.png" alt="Madeira desmatada" id="desmatamento">
    <h1 class="circeB" id="madeira">Madeira</h1>
  </section>
</a>
<!--Fim Título Madeira-->

<!-- Início do Carrosel de Madeira -->
<div class="cards-wrapper">
<div id="carouselExampleControlsMadeira" class="carousel slide carousel-dark" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-caixa-de-sapato-8.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="cards-wrapper">
      <div id="card1" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card2" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
      <div id="card3" class="card">
        <img class="card-img-top" src="imagens/artesanato-reciclagem-garrafa-pet-4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev" style="background: url(imagens/divisa-esquerda-marromescuro.png) no-repeat center center;"  href="#carouselExampleControlsMadeira" role="button" data-slide="prev">
  <span  aria-hidden="true"></span>
  <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" style="background: url(imagens/divisa-direita-marromescuro.png) no-repeat center center;" href="#carouselExampleControlsMadeira" role="button" data-slide="next">
  <span aria-hidden="true"></span>
  <span class="sr-only">Próximo</span>
</a>
</div>
</div>
<!-- Fim do Carrossel de Madeira -->

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