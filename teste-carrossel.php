<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .card{
            width: 280px;
            height: 320px;
            border: 1px solid black;
            object-fit: cover;
        }
        
        .swiper-wrapper{
            margin-bottom: 15px;
            width: 50%;
            margin-left: 10%;
            margin-right: 10%;
        }

        .swiper{
            width: 70%;
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
    </style>
</head>
<body>
    <!-- Slider main container -->
    <div class="plastico swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><div class="card">1</div></div>
            <div class="swiper-slide"><div class="card">2</div></div>
            <div class="swiper-slide"><div class="card">3</div></div>
            <div class="swiper-slide"><div class="card">4</div></div>
            <div class="swiper-slide"><div class="card">5</div></div>
            <div class="swiper-slide"><div class="card">6</div></div>
            <div class="swiper-slide"><div class="card">7</div></div>
            <div class="swiper-slide"><div class="card">8</div></div>
            <div class="swiper-slide"><div class="card">9</div></div>
        </div>
        
        <!-- Pagination -->
        <div class="swiper-pagination" id="pagination-p"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev" id="prev-p"><img src="midias/divisas-carrossel/divisa-esquerda.png" alt=""></div>
        <div class="swiper-button-next" id="next-p"><img src="midias/divisas-carrossel/divisa-direita.png" alt=""></div>
    </div>


    <!-- Slider main container -->
    <div class="metal swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><div class="card">1</div></div>
            <div class="swiper-slide"><div class="card">2</div></div>
            <div class="swiper-slide"><div class="card">3</div></div>
            <div class="swiper-slide"><div class="card">4</div></div>
            <div class="swiper-slide"><div class="card">5</div></div>
            <div class="swiper-slide"><div class="card">6</div></div>
            <div class="swiper-slide"><div class="card">7</div></div>
            <div class="swiper-slide"><div class="card">8</div></div>
            <div class="swiper-slide"><div class="card">9</div></div>
        </div>
        
        <!-- Pagination -->
        <div class="swiper-pagination" id="pagination-m"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev" id="prev-m"><img src="midias/divisas-carrossel/divisa-esquerda-amarelo.png" alt=""></div>
        <div class="swiper-button-next" id="next-m"><img src="midias/divisas-carrossel/divisa-direita-amarelo.png" alt=""></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script></script>
    <script>
        const swiperP = new Swiper('.plastico', {
            speed: 400,
            spaceBetween: 10,
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '#next-p',
                prevEl: '#prev-p',
            },

            autoplay: {
                delay: 2000,
            },

            keyboard: {
                enabled: true,
            },
            
            grabCursor: true,
            
            pagination: {
                el: "#pagination-p",
                clickable: true,
                dynamicBullets: true
            },

            breakpoints:{
                600:{
                    slidesPerView: 2
                },
                1130:{
                    slidesPerView: 3
                }
            }
        });

        const swiperM = new Swiper('.metal', {
            speed: 400,
            spaceBetween: 10,
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '#next-m',
                prevEl: '#prev-m',
            },

            autoplay: {
                delay: 2000,
            },

            keyboard: {
                enabled: true,
            },
            
            grabCursor: true,
            
            pagination: {
                el: "#pagination-m",
                clickable: true,
                dynamicBullets: true
            },

            breakpoints:{
                600:{
                    slidesPerView: 2
                },
                1130:{
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>
</html>