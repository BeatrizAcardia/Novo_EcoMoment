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
    <title>Curiosidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
    <style>
        .container-padding{
            padding: 0 8%;
        }
        #ft-curiosidade{
            width: 100%;
            height: 60vh;
            background-color: #72A0C1;
            border-radius: 10px;
        }
        .linha{
            height: 0.5px;
            width: 100%;
            background-color: #101010;
        }
        .dados{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        #referencias{
            font-size: 30px;
        }
        /*tela curiosidades*/
        .curiosidades {
        display: flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
        background-color: #72A0C1;
        flex-wrap: wrap;
        }

        #tituloCuri{
        display: flex;
        align-items: flex-start;
        padding-left: 10% !important;
        flex-direction: row;
        justify-content: flex-start;
        }

        #tituloCuri > h3{
        font-size: 2.5vw;
        font-weight: bold;
        color: #000000;
        line-height: 1.2;
        font-family: 'Circe';
        text-transform: uppercase;
        margin-bottom: 0;
        margin-left: -2.5%;
        }

        #pag-curiosidades .swiper-pagination-bullet-active{
        background-color: #263237;
        }

        /*Início dos Cards*/
        .cards{
        display: flex;
        justify-content: center;
        }

        a:link{
        color: black;
        text-decoration: none;
        }

        .card a:hover {
        color: black;
        text-decoration: none; 
        }

        .card-img-top {
        height: 150px; 
        object-fit: cover;
        }

        .card {
        margin: 1%;
        height: 16em;
        text-align: center;
        box-shadow: none;
        background-color: #263237;
        width: 14rem;
        margin-bottom: 20px;
        box-shadow: 2px 2px 25px 1px rgba(0, 0, 0, 0.241);
        }

        .card-body {
        padding: 7px; 
        padding-top: 10px;
        align-content: center;
        }

        .card-title {
        font-size: 1.1rem; 
        text-align: center;
        color: #ffffff !important;
        }

        .card-text {
        font-size: 0.9rem; 
        }

        /*Fim dos Cards*/

        /*fim telas curiosidades*/
    </style>
</head>
<body>
    <header>
        <?php 
            require_once('navbar/navbar.php');
        ?>
    </header>

    <main id="navbarMargin">
        <section class="center">
            <h1 class="display-5 fw-bold text-center mb-4">TÍTULO DA CURIOSIDADE</h1>
        </section>

        <section>
            <div class="container container-padding mb-5 nunito">
                <div class="dados my-2 nunito">
                    <span>Publicado por: Equipe EcoMoment</span>
                    <span>11/11/1111</span>
                </div>
                <div class="mb-4" id="ft-curiosidade"></div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad vel recusandae accusamus maxime aspernatur. Provident voluptatem eum porro temporibus suscipit odit perferendis consequatur rerum omnis iure. Veniam, sed ullam beatae cumque adipisci voluptas vitae! Ut laudantium officia dolore est voluptatem molestiae, ipsa numquam nobis at dolores ad eligendi illo quasi nihil inventore! Magni, hic, perspiciatis officia natus quos commodi exercitationem molestiae assumenda maxime autem, sequi itaque nihil quidem obcaecati perferendis quam? Veniam aperiam asperiores ad tempora accusantium molestias cupiditate blanditiis sed officiis saepe, voluptate eveniet ut, nostrum magni illum! Doloremque laboriosam ipsam modi laudantium. Maiores modi velit, praesentium officiis rerum reprehenderit consequuntur reiciendis libero tempore dolor laboriosam earum cupiditate autem sed fugiat numquam, soluta culpa sit iusto est! Unde vel eos veritatis non praesentium doloribus inventore consequuntur corporis recusandae qui sapiente repellendus, officiis vero ad dolores adipisci deserunt ab quis, mollitia iste assumenda officia nobis. Delectus, doloremque amet! Quo, unde totam. Autem dicta, omnis error amet minima fugiat, commodi, laboriosam reprehenderit veritatis quasi facilis qui. Nesciunt labore at, nihil dicta voluptate quia voluptates tempora voluptatem, nostrum ullam quae officiis ad? Hic rem nobis molestias facilis fugit est quae ab cupiditate consequuntur, impedit adipisci unde magni sequi inventore autem, maiores ipsum eveniet sapiente non veniam? Itaque nam nesciunt ab velit dolores, dolor mollitia, omnis iusto sed voluptas dolorem illum! Distinctio adipisci qui earum soluta cum magnam nemo possimus, maiores, ad animi suscipit culpa numquam aut. At corrupti placeat officiis suscipit consectetur vitae id, aliquam quos ipsa vero, accusantium fuga ullam a nulla dolorum officia sequi! Voluptatum, eos aliquid ipsum rerum eligendi rem ad qui mollitia doloribus accusamus neque velit hic veritatis numquam voluptas. Labore officia dolorum culpa ipsum sit excepturi aliquid quae vitae dignissimos minima itaque ut atque perferendis aliquam quidem nisi dolore totam assumenda laboriosam, quibusdam vero soluta ex magni mollitia. Facilis nam optio expedita soluta quo! Dolorum porro ab eos laborum voluptas facilis quidem sunt soluta, incidunt maiores mollitia, aliquam itaque repellat commodi quasi sed sequi, beatae qui alias. Beatae voluptate eaque voluptatem amet neque libero animi, nihil quo fugiat alias, soluta facilis officiis id excepturi maxime sapiente. Reprehenderit asperiores, dolor rem velit amet voluptate quae, dignissimos alias animi molestias reiciendis minima repellendus, ullam illo doloremque ratione soluta quod. Vitae doloremque quos, omnis quas unde quasi accusamus et similique voluptates, itaque veritatis reprehenderit exercitationem fugiat. Excepturi inventore at aut minus ex quod libero quae laborum vel obcaecati quos quo dolorem fugit delectus, omnis quasi! Tenetur quas pariatur culpa voluptas obcaecati vero illo unde esse fugit, non laborum corrupti velit, quaerat accusamus sed nulla neque suscipit, repellat praesentium odit voluptatum. Deleniti quod suscipit qui, illo quidem, unde, eos at aliquam inventore placeat fugiat vel aut voluptatem hic veniam debitis quibusdam sit recusandae! Eveniet cupiditate eius repellendus, totam deserunt nesciunt minima tempora quia repellat hic ad sunt voluptatibus magnam corrupti quis veritatis tenetur quibusdam consectetur, modi voluptates assumenda distinctio repudiandae itaque. Commodi, ducimus saepe beatae distinctio, odio rem accusantium maxime, inventore eveniet voluptates voluptatibus! Pariatur ad porro repellat unde est iure? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, voluptatum ipsam ad eos dicta odio consequatur modi nam rem doloremque assumenda et quaerat suscipit reprehenderit tenetur quisquam voluptatibus. Minus, suscipit. Praesentium vel, iusto harum corporis sint, similique quam at dicta repellat cumque laudantium deserunt illum est perferendis doloremque! Est distinctio hic accusamus blanditiis sed sunt, qui ullam illo exercitationem, fuga tempore necessitatibus quia molestias, cupiditate ratione veniam iusto laudantium. Sint veritatis ut vero harum quibusdam recusandae doloribus, minima adipisci veniam maxime eveniet non voluptates culpa necessitatibus quas magni? Non enim maiores vero harum reiciendis quo eum nulla distinctio rem ad, facere itaque, dolores tenetur odit quibusdam quam eveniet perferendis ab eos nemo iure voluptatem est minima unde. Expedita asperiores repudiandae, odio voluptates modi tenetur nobis soluta. A ducimus atque harum rerum consectetur eum? Repudiandae debitis expedita illum ullam natus reiciendis, magnam modi ut nam veniam totam itaque aliquid, saepe adipisci quasi porro asperiores voluptatum quam architecto autem rem et iure esse. Ipsam ex perspiciatis voluptas. Cumque voluptatibus quibusdam praesentium nobis assumenda ab illo similique! Eaque voluptate eum animi consectetur reiciendis iusto fuga maiores est at. Quaerat, voluptatibus ullam commodi vitae inventore, exercitationem tenetur nesciunt perferendis consequuntur aliquam repudiandae ut.</p>
            </div>
            <div class="container container-padding my-5 nunito">
                <h1 class="fw-bold mb-4" id="referencias">REFERÊNCIAS BIBLIOGRÁFICAS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas est, dignissimos quos omnis esse consequuntur magnam. Veniam earum aspernatur magnam dolores, error tempore quam nulla saepe quod quo doloribus distinctio cum! Sequi vel doloremque cupiditate eligendi qui aut voluptas alias, possimus earum mollitia, porro sint impedit vero maxime quasi ut eos corporis modi quis laborum magnam ullam, fugit assumenda? Earum rerum odio adipisci a expedita fugiat minus nam alias inventore voluptates praesentium consequuntur at, fugit in? Aperiam voluptates ex minus hic provident, cumque magnam suscipit, accusantium alias, officia quia voluptatem unde officiis assumenda. Quisquam ea asperiores natus est, commodi veniam.</p>
            </div>
            <div class="container container-padding text-center my-5">
                <div class="row mb-5">
                    <div class="col-3 col-md-4 center"><div class="linha"></div></div>
                    <div class="col-6 col-md-4 center"><h1 class="display-6 fw-bold">VEJA MAIS</h1></div>
                    <div class="col-3 col-md-4 center"><div class="linha"></div></div>
                </div>
                
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
        </section>
    </main>

    <footer>
        <?php 
            require_once('rodape/rodape.html');
        ?>
    </footer>
    
    <?php
        echo $offcanvas;
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="alerts.js"></script>
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