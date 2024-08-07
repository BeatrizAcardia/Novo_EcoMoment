<?php 
  include '../Controller/script-ideias-do-momento.php';
  if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
    $offcanvas = '    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasConta" aria-labelledby="offcanvasContaLabel">
        <div class="offcanvas-header">
            <div class="center">
                <h1 class="offcanvas-title circeB" id="offcanvasContaLabel">CONTA</h1>
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
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-melhores-ideias.css">
    <link rel="stylesheet" href="styles/style-ideia.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
    <title>Ideias do Momento</title>
</head>
<body>
<main id="navbarMargin">
    <?php
      include 'navbar/navbar.php';
    ?>

    <!--Início Título Principal-->
    <section id="tituloPrincipal">
        <img class="d-none d-sm-inline" src="imagens/folhas-de-galho.png" alt="Folha" id="folha1">
        <h1 id="escritaPrincipal" class="circeB mr-1">As Ideias do Momento </h1>
        <img class="d-none d-sm-inline" src="imagens/folhas-de-galho (4).png" alt="Folha" id="folha2">
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
    
    <?php 
      echo $offcanvas;
    ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../Controller/alerts.js"></script>

    <!-- Carrosséis -->
    <script src="../Controller/carrosseis-ideias.js"></script>

</body>
</html>