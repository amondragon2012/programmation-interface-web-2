// import Swiper bundle with all modules installed
import Swiper from './node_modules/swiper/swiper-bundle.esm.browser.js';
//import Swiper from 'swiper/bundle';


const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
  
    // Pagination
    pagination: {
        el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  
    // Scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    }
});