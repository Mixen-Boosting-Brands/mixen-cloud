// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Autoplay, Navigation } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';

// init Swipers:
const swiperJumbotron = new Swiper('.swiper-jumbotron', {
    // configure Swiper to use modules
    modules: [Navigation],

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const swiperSolucionesTop = new Swiper('.swiper-soluciones-top', {
    // configure Swiper to use modules
    modules: [Autoplay],

    speed: 5000,
    centeredSlides: true,
    slidesPerView: 2,
    loop: true,
    autoplay: {
        delay: 1,
        disableOnInteraction: false,
    },
    noSwiping: true,
    noSwipingClass: 'no-swiping',
    breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        992: {
          slidesPerView: 6,
        },
        1200: {
            slidesPerView: 8,
        },
    },
});

const swiperSolucionesBottom = new Swiper('.swiper-soluciones-bottom', {
    // configure Swiper to use modules
    modules: [Autoplay],

    speed: 5000,
    centeredSlides: true,
    slidesPerView: 2,
    loop: true,
    autoplay: {
        delay: 1,
        disableOnInteraction: false,
        reverseDirection: true,
    },
    noSwiping: true,
    noSwipingClass: 'no-swiping',
    breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        992: {
          slidesPerView: 6,
        },
        1200: {
            slidesPerView: 8,
        },
    },
});

const swiperResultados = new Swiper('.swiper-resultados', {
  // configure Swiper to use modules
  modules: [Navigation],

  // Navigation arrows
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

const swiperPodcast = new Swiper('.swiper-podcast', {
  // configure Swiper to use modules
  modules: [Navigation],

  // Navigation arrows
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});