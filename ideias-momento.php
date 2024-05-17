<?php 
  include('script-ideias-do-momento.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-melhoresIdeias.css">
    <!-- <link rel="stylesheet" href="styles/media-query-melhoresideias.css"> -->
    <link rel="stylesheet" href="styles/style-ideia.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="javascript/script-melhoresIdeias.js">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        }

        .img-card{
            padding-left: 2px;
            padding-right: 2px;
            padding-top: 3px;
        }

        .card-content{
            padding: 5px;
            text-align: center;
        }

        .card-text{
            width: 100%;
            justify-content: center;
        }
                
        /*Início do Carrosel*/
        #carouselExampleControls, #carouselExampleControlsVidro, #carouselExampleControlsPapel, #carouselExampleControlsMetal, #carouselExampleControlsOrganico, #carouselExampleControlsMadeira{
          width: 80%;
        }

        .sr-only{
          display: none;
        }
        /*Fim do Carrossel*/

    </style>
</head>
<body>
<main id="navbarMargin">
    <?php
      include('navbar/navbar.html');
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
        <div class="container ideias row">
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
    </div>
    <!-- Final dos Cards -->

    <!-- Ideias por material -->
    <div class="my-5">

      <!--Início Título Plástico-->
      <a href="materiais.php?material=1" class="link-material">
        <section id="titulos">
            <img src="midias/icones-materiais/residuos-plasticos.png" alt="Sacola Plástica" id="sacola">
            <h1 class="circeB" id="plastico">Plástico</h1>
        </section>
      </a>
      <!--Fim Título Plástico-->
      <!-- Início do carrossel Plástico -->
      <div class="cards-wrapper">
        <div id="carouselExampleControls" class="carousel  carousel-dark" data-ride="carousel">
          <div class="carousel-inner">
            <?php
                //Carregamento das ideias de reutilazação
                if ($existe){
                    foreach($carrossel as $item){
                        echo $item;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
              ?>
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
      <!-- Fim do carrossel Plástico -->

      <!--Início Título Metal-->
      <a href="materiais.php?material=2" class="link-material">
        <section id="titulos">
          <img src="midias/icones-materiais/metal.png" alt="Latinha de metal" id="lataMetal">
          <h1 class="circeB" id="metal">Metal</h1>
        </section>
      </a>
      <!--Fim Título Metal-->

      <!--Início Título Papel-->
      <a href="materiais.php?material=3" class="link-material">
        <section id="titulos">
          <img src="midias/icones-materiais/papel.png" alt="Papel" id="Folhapapel">
          <h1 class="circeB" id="papel">Papel</h1>
        </section>
      </a>
      <!--Fim Título Papel-->
      
      <!--Início Título Vidro-->
      <a href="materiais.php?material=4" class="link-material">
        <section id="titulos">
          <img src="midias/icones-materiais/vidro.png" alt="Taça de Vidro" id="taça">
          <h1 class="circeB" id="vidro">Vidro</h1>
        </section>
      </a>
      <!--Fim Título Vidro-->

      <!--Início Título Madeira-->
      <a href="materiais.php?material=5" class="link-material">
        <section id="titulos">
          <img src="midias/icones-materiais/madeira.png" alt="Madeira desmatada" id="desmatamento">
          <h1 class="circeB" id="madeira">Madeira</h1>
        </section>
      </a>
      <!--Fim Título Madeira-->

      <!--Início Título Orgânico-->
      <a href="materiais.php?material=6" class="link-material">
        <section id="titulos">
          <img src="midias/icones-materiais/desperdicio-organico.png" alt="Maça" id="macaOrganica">
          <h1 class="circeB" id="organico">Orgânico</h1>
        </section>
      </a>
      <!--Fim Título Orgânico-->

    </div>
    <!-- Final das ideias por material -->



    <footer>
    <?php
        include('rodape/rodape.html');
    ?>
    </footer>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>