let swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 5000,
  },
  speed: 400,
  spaceBetween: 20,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    hide: false,
  },
});