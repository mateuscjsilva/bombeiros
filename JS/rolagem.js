var swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 0,
    on: {
      slideChange: function () {
        document.documentElement.scrollTop = 0; // Para navegadores modernos
        document.body.scrollTop = 0; // Para navegadores antigos
      }
    }
  });