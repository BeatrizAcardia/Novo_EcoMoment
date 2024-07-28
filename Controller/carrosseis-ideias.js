//Mehores ideias
const swiperBest = new Swiper('#carrosselMelhores', {
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
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-melhores",
        clickable: true,
        dynamicBullets: true
    },
    breakpoints:{
        600:{
          slidesPerView: 2
        }
    }
  });
  //Plástico
  const swiperPlastico = new Swiper('#carrosselPlastico', {
    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,
    
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#next-plastico',
        prevEl: '#prev-plastico',
    },
    autoplay: {
        delay: 2000,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-plastico",
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
        // 1440:{
        //   slidesPerView: 4
        // }
    }
});
  //Metal  
  const swiperMetal = new Swiper('#carrosselMetal', {
    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,
    
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#next-metal',
        prevEl: '#prev-metal',
    },
    autoplay: {
        delay: 2000,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-metal",
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
        // 1440:{
        //   slidesPerView: 4
        // }
    }
  });
  //Papel
  const swiperPapel = new Swiper('#carrosselPapel', {
    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,
    
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#next-papel',
        prevEl: '#prev-papel',
    },
    autoplay: {
        delay: 2000,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-papel",
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
        1440:{
          slidesPerView: 4
        }
    }
  });
  //Vidro
  const swiperVidro = new Swiper('#carrosselVidro', {
    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,
    
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#next-vidro',
        prevEl: '#prev-vidro',
    },
    autoplay: {
        delay: 2000,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-vidro",
        clickable: true,
        dynamicBullets: true
    },
    // breakpoints:{
    //     // 600:{
    //     //   slidesPerView: 2
    //     // },
    //     // // 1130:{
    //     // //   slidesPerView: 3
    //     // // },
    //     // // 1440:{
    //     // //   slidesPerView: 4
    //     // // }
    // }
  });
  //Madeira
  const swiperMadeira = new Swiper('#carrosselMadeira', {
    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,
    
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#next-madeira',
        prevEl: '#prev-madeira',
    },
    autoplay: {
        delay: 2000,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-madeira",
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
        1440:{
          slidesPerView: 4
        }
    }
  });
  //Orgânico
  const swiperOrganico = new Swiper('#carrosselOrganico', {
    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,
    
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#next-organico',
        prevEl: '#prev-organico',
    },
    autoplay: {
        delay: 2000,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#pag-organico",
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
        1440:{
          slidesPerView: 4
        }
    }
  });