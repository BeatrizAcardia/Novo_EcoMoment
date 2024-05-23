<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .card{
            height: 200px;
            width: 300px;
            border: 1px solid black;
        }
        .swiper-slide{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <!-- Slider main container -->
    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="card">1</div>
            <div class="card">2</div>
            <div class="card">3</div>
        </div>
        <div class="swiper-slide">
            <div class="card">4</div>
            <div class="card">5</div>
            <div class="card">6</div>
        </div>
        <div class="swiper-slide">
            <div class="card">7</div>
            <div class="card">8</div>
            <div class="card">9</div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="prev"><img src="midias/divisas-carrossel/divisa-esquerda-amarelo.png" alt=""></div>
    <div class="next"><img src="midias/divisas-carrossel/divisa-direita-amarelo.png" alt=""></div>

    <!-- If we need scrollbar -->
    <!-- <div class="swiper-scrollbar"></div>
    </div> -->
    
    <script>
        const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 100,
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.next',
                prevEl: '.prev',
            },

            autoplay: {
                delay: 2000,
            },

            keyboard: {
                enabled: true,
            },
            
            grabCursor: true,
            
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
</html>