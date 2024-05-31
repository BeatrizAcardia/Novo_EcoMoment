<?php 
  include('script-ideias-do-momento.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-melhores-ideias.css">
    <link rel="stylesheet" href="styles/style-ideia.css">
    <link rel="stylesheet" href="javascript/script-melhoresIdeias.js">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
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
        
        .row-av-ideia > *{
            width: min-content;
        }

        /*Começo do Título Principal*/
        #tituloPrincipal{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-bottom: 3%;
        }

        #folha{
        margin-top: -3px;
        margin-right: 5px;
        width: 2.5em;
        height: 2.5em;
        }

        #escritaPrincipal{
        color: #05440F;
        font-size: 35px;
        text-transform: uppercase;
        }
        /*Fim do Título Principal*/

        /* Cards */
        .card{
            width: 280px;
            height: 320px;
            object-fit: cover;
        }

        .img-card{
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 5px;
        }

        .card-content{
            padding: 15px;
            padding-top: 5px;
            text-align: center;
            font-weight: bold;
        }

        .card-text{
            width: 100%;
            justify-content: center;
        }
                
        /*Início do Carrosel*/
        .swiper-wrapper{
            margin-bottom: 15px;
            width: 80%;
        }

        .swiper{
            margin-left: 10%;
            margin-right: 10%;
        }

        .swiper-slide{
          width: fit-content;
        }

        .swiper-button-prev{
            left: 0;
        }

        .swiper-button-next{
            right: 0;
        }

        .swiper-button-prev:after{
            content: '';
        }

        .swiper-button-next:after{
            content: '';
        }

        .swiper-slide{
          display: flex;
          align-items: center;
          justify-content: center;
        }

        #containerCarrossel{
          max-width: 100%;
        }
        
        #pag-melhores .swiper-pagination-bullet-active{
          background-color: #05440F;
        }

        #pag-plastico .swiper-pagination-bullet-active{
          background-color: #CF1212;
        }

        #pag-metal .swiper-pagination-bullet-active{
          background-color: #FFC30F;
        }

        #pag-papel .swiper-pagination-bullet-active{
          background-color: #55A4DD;
        }

        #pag-vidro .swiper-pagination-bullet-active{
          background-color: #4E9E5A;
        }

        #pag-madeira .swiper-pagination-bullet-active{
          background-color: #423023;
        }

        #pag-madeira .swiper-pagination-bullet-active{
          background-color: #A8642B;
        }
        /*Fim do Carrossel*/

        /* Início dos botões */
        #btn-plastico{
          border: 2px solid #CF1212;
        }
        #btn-plastico::before{
          background-color: #CF1212;
        }
        
        #btn-metal{
          border: 2px solid #FFC30F;
        }
        #btn-metal::before{
          background-color: #FFC30F;
        }

        #btn-papel{
          border: 2px solid #55A4DD;
        }
        #btn-papel::before{
          background-color: #55A4DD;
        }

        #btn-vidro{
          border: 2px solid #4E9E5A;
        }
        #btn-vidro::before{
          background-color: #4E9E5A;
        }

        #btn-madeira{
          border: 2px solid #423023;
        }
        #btn-madeira::before{
          background-color: #423023;
        }

        #btn-organico{
          border: 2px solid #A8642B;
        }
        #btn-organico::before{
          background-color: #A8642B;
        }

        /* Fim dos botões */


    </style>
</head>
<body>
<main id="navbarMargin">
    <?php
      include('navbar/navbar.php');
    ?>

    <!--Início Título Principal-->
    <section id="tituloPrincipal">
        <img class="d-none d-sm-inline" src="imagens/folhas-de-galho.png" alt="Folha" id="folha">
        <h1 id="escritaPrincipal" class="circeB mr-1">As Ideias do Momento </h1>
        <img class="d-none d-sm-inline" src="imagens/folhas-de-galho (4).png" alt="Folha" id="folha">
    </section>
    <!--Fim Título Principal-->

    <!-- Início dos Cards - Ideias do Momento -->
    <div class="center">
        <div class="container center ideias d-none d-md-flex row">
            <?php
              //Carregamento das ideias de reutilazação
              if ($existe && sizeof($postagens)>0){
                  foreach($postagens as $post){
                      echo '<div class="center col-12 col-md-6 col-xl-3">'.$post.'</div>';
                  }
              }
              else{
                  echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
              }
            ?>
        </div>
        <div class="container center d-block d-md-none" id="containerCarrossel">
          <div class="swiper" id="carrosselMelhores">
            <div class="swiper-wrapper">
              <?php
                //Carregamento das ideias de reutilazação
                if ($existe && sizeof($postagensCarrossel)>0){
                    foreach($postagensCarrossel as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
              ?>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination" id="pag-melhores"></div>

          </div>
        </div>
    </div>
    <!-- Final dos Cards -->

    <!-- Ideias por material -->
    <div class="my-5">

      <!--Início Título Plástico-->
      <section id="titulos">
          <img src="midias/icones-materiais/residuos-plasticos.png" alt="Sacola Plástica" id="sacola">
          <a href="materiais.php?material=1">
            <h1 class="circeB" id="plastico">Plástico</h1>
          </a>
      </section>
      <!--Fim Título Plástico-->
      <!-- Início do carrossel Plástico -->
      <div class="center">
        <div class="swiper" id="carrosselPlastico">
          <div class="swiper-wrapper">
            <?=carregaPlastico()?>
          </div>
          <!-- Pagination -->
          <div class="swiper-pagination" id="pag-plastico"></div>
          <!-- Navigation buttons -->
          <div class="swiper-button-prev d-none d-md-block" id="prev-plastico"><img src="midias/divisas-carrossel/divisa-esquerda.png" alt="Seta para a esquerda"></div>
          <div class="swiper-button-next d-none d-md-block" id="next-plastico"><img src="midias/divisas-carrossel/divisa-direita.png" alt="Seta para a direita"></div>

        </div>
      </div>
      <!-- Fim do carrossel Plástico -->

      <!-- Botão Plástico -->
      <div class="center mt-2 mb-5"><a href="materiais.php?material=1#ideias" class="button" id="btn-plastico">Ver mais</a></div>
      <!-- Fim do botão Plástico -->

      <!--Início Título Metal-->
      <section id="titulos">
        <img src="midias/icones-materiais/metal.png" alt="Latinha de metal" id="lataMetal">
        <a href="materiais.php?material=2">
          <h1 class="circeB" id="metal">Metal</h1>
        </a>
      </section>
      <!--Fim Título Metal-->

      <!-- Início do carrossel Metal -->
      <div class="center">
        <div class="swiper" id="carrosselMetal">
          <div class="swiper-wrapper">
            <?=carregaMetal()?>
          </div>
          <!-- Pagination -->
          <div class="swiper-pagination" id="pag-metal"></div>
          <!-- Navigation buttons -->
          <div class="swiper-button-prev d-none d-md-block" id="prev-metal"><img src="midias/divisas-carrossel/divisa-esquerda-amarelo.png" alt="Seta para a esquerda"></div>
          <div class="swiper-button-next d-none d-md-block" id="next-metal"><img src="midias/divisas-carrossel/divisa-direita-amarelo.png" alt="Seta para a direita"></div>

        </div>
      </div>
      <!-- Fim do carrossel Metal -->

      <!-- Botão Metal -->
      <div class="center mt-2 mb-5"><a href="materiais.php?material=2#ideias" class="button" id="btn-metal">Ver mais</a></div>
      <!-- Fim do botão Metal -->

      <!--Início Título Papel-->
        <section id="titulos">
          <img src="midias/icones-materiais/papel.png" alt="Papel" id="Folhapapel">
          <a href="materiais.php?material=3">
            <h1 class="circeB" id="papel">Papel</h1>
          </a>
        </section>
      <!--Fim Título Papel-->

      <!-- Início do carrossel Papel -->
      <div class="center">

        <!-- VERSÃO OBSOLETA -->

        <div id="carouselExampleControlsPapel" class="carousel carousel-dark" data-ride="carousel">
          <div class="carousel-inner">
            <?=carregaPapel()?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControlsPapel" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-esquerda-azul.png" alt="Anterior"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControlsPapel" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-direita-azul.png" alt="Anterior"></span>
          </a>
        </div>

        <!-- VERSÃO ATUALIZADA -->

        <!-- <div class="swiper" id="carrosselPapel">
          <div class="swiper-wrapper">
            <?=carregaPapel()?>
          </div>
          <! -- Pagination -- >
          <div class="swiper-pagination" id="pag-papel"></div>
          <! -- Navigation buttons -- >
          <div class="swiper-button-prev d-none d-md-block" id="prev-papel"><img src="midias/divisas-carrossel/divisa-esquerda-azul.png" alt="Seta para a esquerda"></div>
          <div class="swiper-button-next d-none d-md-block" id="next-papel"><img src="midias/divisas-carrossel/divisa-direita-azul.png" alt="Seta para a direita"></div>

        </div> -->
      </div>
      <!-- Fim do carrossel Papel -->

      <!-- Botão Papel -->
      <div class="center mt-2 mb-5"><a href="materiais.php?material=3#ideias" class="button" id="btn-papel">Ver mais</a></div>
      <!-- Fim do botão Papel -->
      
      <!--Início Título Vidro-->
      <section id="titulos">
        <img src="midias/icones-materiais/vidro.png" alt="Taça de Vidro" id="taça">
        <a href="materiais.php?material=4">
          <h1 class="circeB" id="vidro">Vidro</h1>
        </a>
      </section>
      <!--Fim Título Vidro-->

      <!-- Início do carrossel Vidro -->
      <div class="center">
        
        <!-- VERSÃO OBSOLETA -->

        <div id="carouselExampleControlsVidro" class="carousel carousel-dark" data-ride="carousel">
          <div class="carousel-inner">
            <?=carregaVidro()?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControlsVidro" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-esquerda-verde.png" alt="Anterior"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControlsVidro" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-direita-verde.png" alt="Anterior"></span>
          </a>
        </div>

        <!-- VERSÃO ATUALIZADA -->

        <!-- <div class="swiper" id="carrosselVidro">
          <div class="swiper-wrapper">
            <?=carregaVidro()?>
          </div>
          <! -- Pagination -- >
          <div class="swiper-pagination" id="pag-vidro"></div>
          <! -- Navigation buttons -- >
          <div class="swiper-button-prev d-none d-md-block" id="prev-vidro"><img src="midias/divisas-carrossel/divisa-esquerda-verde.png" alt="Seta para a esquerda"></div>
          <div class="swiper-button-next d-none d-md-block" id="next-vidro"><img src="midias/divisas-carrossel/divisa-direita-verde.png" alt="Seta para a direita"></div>

        </div> -->
      </div>
      <!-- Fim do carrossel Vidro -->

      <!-- Botão Vidro -->
      <div class="center mt-2 mb-5"><a href="materiais.php?material=4#ideias" class="button" id="btn-vidro">Ver mais</a></div>
      <!-- Fim do botão Vidro -->

      <!--Início Título Madeira-->
      <section id="titulos">
        <img src="midias/icones-materiais/madeira.png" alt="Madeira desmatada" id="desmatamento">
        <a href="materiais.php?material=5">
          <h1 class="circeB" id="madeira">Madeira</h1>
        </a>
      </section>
      <!--Fim Título Madeira-->

      <!-- Início do carrossel Madeira -->
      <div class="center">

        <!-- VERSÃO OBSOLETA -->

        <div id="carouselExampleControlsMadeira" class="carousel carousel-dark" data-ride="carousel">
          <div class="carousel-inner">
            <?=carregaMadeira()?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControlsMadeira" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-esquerda-marromescuro.png" alt="Anterior"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControlsMadeira" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-direita-marromescuro.png" alt="Anterior"></span>
          </a>
        </div>
        
        <!-- VERSÃO ATUALIZADA -->

        <!-- 
          <div class="swiper" id="carrosselMadeira">
          <div class="swiper-wrapper">
          <?=carregaMadeira()?>
          </div>
          <! -- Pagination -- >
          <div class="swiper-pagination" id="pag-madeira"></div>
          <! -- Navigation buttons -- >
          <div class="swiper-button-prev d-none d-md-block" id="prev-madeira"><img src="midias/divisas-carrossel/divisa-esquerda-marromescuro.png" alt="Seta para a esquerda"></div>
          <div class="swiper-button-next d-none d-md-block" id="next-madeira"><img src="midias/divisas-carrossel/divisa-direita-marromescuro.png" alt="Seta para a direita"></div>
        </div>
         -->
      </div>
      <!-- Fim do carrossel Madeira -->

      <!-- Botão Madeira -->
      <div class="center mt-2 mb-5"><a href="materiais.php?material=5#ideias" class="button" id="btn-madeira">Ver mais</a></div>
      <!-- Fim do botão Madeira -->

      <!--Início Título Orgânico-->
      <section id="titulos">
        <img src="midias/icones-materiais/desperdicio-organico.png" alt="Maça" id="macaOrganica">
        <a href="materiais.php?material=6">
          <h1 class="circeB" id="organico">Orgânico</h1>
        </a>
      </section>
      <!--Fim Título Orgânico-->

      <!-- Início do carrossel Orgânico -->
      <div class="center">
        
        <!-- VERSÃO OBSOLETA -->

        <div id="carouselExampleControlsOrganico" class="carousel carousel-dark" data-ride="carousel">
          <div class="carousel-inner">
            <?=carregaOrganico()?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControlsOrganico" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-esquerda-marromclaro.png" alt="Anterior"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControlsOrganico" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only"><img src="midias/divisas-carrossel/divisa-direita-marromclaro.png" alt="Anterior"></span>
          </a>
        </div>

        <!-- VERSÃO ATUALIZADA -->

        <!-- 
          <div class="swiper" id="carrosselMadeira">
          <div class="swiper-wrapper">
          <?=carregaMadeira()?>
          </div>
          <! -- Pagination -- >
          <div class="swiper-pagination" id="pag-madeira"></div>
          <! -- Navigation buttons -- >
          <div class="swiper-button-prev d-none d-md-block" id="prev-madeira"><img src="midias/divisas-carrossel/divisa-esquerda-marromescuro.png" alt="Seta para a esquerda"></div>
          <div class="swiper-button-next d-none d-md-block" id="next-madeira"><img src="midias/divisas-carrossel/divisa-direita-marromescuro.png" alt="Seta para a direita"></div>
        </div>
         -->
      </div>
      <!-- Fim do carrossel Orgânico -->

      <!-- Botão Orgânico -->
      <div class="center mt-2 mb-5"><a href="materiais.php?material=6#ideias" class="button" id="btn-organico">Ver mais</a></div>
      <!-- Fim do botão Orgânico -->

    </div>
    <!-- Final das ideias por material -->



    <footer>
    <?php
        include('rodape/rodape.html');
    ?>
    </footer>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Carrosséis -->
    <script src="carrosseis-ideias.js"></script>

</body>
</html>