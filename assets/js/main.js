$(document).ready(function() {
  /**
   *  Whole website functions
   * */

  $('body').removeClass('not-scrollable');

  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      $('header').addClass('posfix');
      $('.scroll-logo').addClass('display');
      $('.header-logo__src').hide();
    } else {
      $('header').removeClass('posfix');
      $('.scroll-logo').removeClass('display');
      $('.header-logo__src').show();
    }
  }

  // Mobile header
  //--------------------------------------------

  $('ul.header-items__list').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active')
      .siblings()
      .removeClass('active');
  });

  $('ul.header-main__items-list').on('click', '.subdrop', function() {
    var $submenu = $('.header-dropdown__subitems');
    $submenu.fadeIn('fast', function() {
      $submenu.show();
    });
  });

  $('.header-dropdown__subitems-nav').on('click', function() {
    var $submenu = $('.header-dropdown__subitems');
    $submenu.fadeOut('fast', function() { $submenu.hide(); });
  });

  var $menu = $('.header-dropdown');
  $('.close').hide();
  $menu.hide();

  $('.open').click(function() {
    $('body').addClass('not-scrollable');
    $menu.fadeIn('fast', function() {
      $('.open').hide();
      $('.close').show();
    });
  });

  $('.close').click(function() {
    $('body').removeClass('not-scrollable');
    $menu.fadeOut('fast', function() {
      $('.close').hide();
      $('.open').show();
    });
  });

  $('ul.header-items__list').on('click', '.dropdown', function() {
    $menu.fadeIn();
  });

  // Модальная форма обратной связи
  //--------------------------------------------

  $('.appointment__initial-modal').click(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation;

    let context = $(this);
    let modal = $(context).data('modal');
    $(modal)
      .parents('.appointment-overlay')
      .addClass('active');

    $(modal).addClass('active');
  });

  $('.appointment-modal').each(function() {
    $(this).wrap('<div class="appointment-overlay"></div>');
  });

  $('.appointment-close-modal').click(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation;

    let context = $(this);
    let modal = $(context).data('modal');

    $(modal).removeClass('active');
    $(modal)
      .parents('.appointment-overlay')
      .removeClass('active');
  });

  // Модальная форма благодарности
  //--------------------------------------------

  $('.thanks-modal').each(function() {
    $(this).wrap('<div class="thanks-overlay"></div>');
  });

  $('.thanks__initial-modal').click(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation;

    let context = $(this);
    let modal = $(context).data('modal');

    $(modal)
      .parents('.thanks-overlay')
      .addClass('active');
    setTimeout(function() {
      $(modal).addClass('active');
    }, 350);

    $(document).click(function(e) {
      let target = $(e.target);

      if ($(target).hasClass('thanks-overlay')) {
        $(target)
          .find('.modal')
          .each(function() {
            $(this).removeClass('active');
          });
        setTimeout(function() {
          $(target).removeClass('active');
        }, 350);
      }
    });
  });

  $('.thanks-close-modal').click(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation;

    let context = $(this);
    let modal = $(context).data('modal');

    $(modal).removeClass('active');
    setTimeout(function() {
      $(modal)
        .parents('.thanks-overlay')
        .removeClass('active');
    }, 350);
  });


  // Tabs (news and articles)
  //--------------------------------------------
  $('ul.posts__tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active')
      .siblings()
      .removeClass('active')
      .closest('div.posts__tabs')
      .find('div.posts__tabs__content')
      .removeClass('active')
      .eq($(this).index())
      .addClass('active');
  });

  $('.tab-container__content').hide();
  $('.tab-container__content:first').show();
  $('.tabs li:first').addClass('active');

  $('.tabs li').click(function() {
    $('.tabs li').removeClass('active');
    $(this).addClass('active');
    $('.tab-container__content').hide();

    var selectedTab = $(this).find('a').attr('href');
    $(selectedTab).fadeIn();
  });
});

  /**
   *  Sliders
   * */

  // Ultrasound video modal
  //--------------------------------------------

  $('.dog-block-button-circle').click(function() {
    $('body').addClass('not-scrollable');
    $('.ultrasound-block').addClass('visible');
    $('.ultrasound-slider-modal-block').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      adaptiveHeight: true
    })
    $('video').get(0).play()

    $('.ultrasound-slider-modal-block').on('afterChange', function(event, slick, currentSlide) {
      var currentSlideEl = $('#video-count-' + (currentSlide + 1)).get(0)
      if (currentSlideEl) $(currentSlideEl).get(0).play()
    });
  });

  $('.ultrasound-slider-hide-btn').click(function() {
    $('body').removeClass('not-scrollable');
    $('.ultrasound-block').removeClass('visible')
  });

  // Equipment slider
  //--------------------------------------------

  $('.equipment-slider').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.equipment-slider-nav'
  });

  $('.equipment-slider-nav').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.equipment-slider',
    arrows: true,
    dots: false,
    fade: true,
    centerMode: true,
    focusOnSelect: true,
    nextArrow: `
      <div style="display: flex;background: #fff;" type="button" class="slick-next">
        <img src="./assets/img/posts/icon/right.svg" alt="next-btn">
      </div>
    `,
    prevArrow: `
      <div style="display: flex;background: #fff;" type="button" class="slick-prev">
        <img src="./assets/img/posts/icon/left.svg" alt="prev-btn">
      </div>`
  });


  $('.story-container').not('.slick-initialized').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true
  });

  $('.slider-big').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    adaptiveHeight: true
  });

  $('.accordeon-wrapper__header').click(function() {
    if ($(this).hasClass('active')) $(this).removeClass('active');
    else $(this).addClass('active');
  });

  function showModal(img) {
    $('body').addClass('not-scrollable');
    var modal = document.getElementById('modal');
    modal.style.display = 'block';
    var elem = document.querySelector('.slider-modal-block');
    var flkty = new Flickity(elem, {
      contain: true,
      fullscreen: true,
      setGallerySize: false
    });
  }

  function hideModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';
    $('body').removeClass('not-scrollable');
  }
