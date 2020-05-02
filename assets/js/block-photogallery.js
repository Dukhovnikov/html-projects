"use strict";

$(document).ready(function() {
  $(".slider-big").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    adaptiveHeight: true
  })
});

  function showModal(img) {
    const modal = document.getElementById('modal')
    modal.style.display = "block"
    var elem = document.querySelector('.slider-modal-block');
    var flkty = new Flickity( elem, {
      contain: true,
      fullscreen: true,
      setGallerySize: false
    });
  }

  function hideModal() {
    const modal = document.getElementById('modal')
    modal.style.display = "none"
  }
