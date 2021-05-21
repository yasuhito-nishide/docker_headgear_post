'use strict';

$('#top-logo').fadeIn(2000);

      $(function() {

        var swiper = new Swiper('.swiper-container', {
          autoplay: {
            delay:2500,
            disableOnInteraction: true,
          },
          speed: 1000,
          loop: true,
          effect: 'coverflow',
          slidesPerView: 2, // or 'auto'
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: '.swiper-pagination',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

        });

      });
