'use strict';
$(document).ready(function() {
  var header = $('.header');
  var popup = $('.header__toggle');
  var menu = $('.header__group');
  var linkCollection = document.querySelectorAll('.main-nav__item a');
  var buyTokensModal = $('#buyTokensModal');
  var buyTokensBtn = $('.header__button');
  var closeModal = $('.close-modal');

  $(document).on('scroll', onScroll);

  $(linkCollection).on('click', function(evt) {
    var offset = header.outerHeight();

    evt.preventDefault();
    $(document).off("scroll");

    $(linkCollection).each(function () {
      $(this).removeClass('main-nav__link--active');
    });
    $(this).addClass('main-nav__link--active');

    hideMenu();

    var target = this.hash,
      $target = $(target);



    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 500, function () {
      window.location.hash = target;
      $(document).on("scroll", onScroll);
    });

  });

  function hideMenu() {
    if (document.documentElement.clientWidth < 1200) {
      popup.toggleClass('header__toggle--active');
      menu.toggleClass('header__group--active');
    }
  }

  function onScroll() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    var scrollPos = $(document).scrollTop();

    // Add class .header--white to <header> while window.pageYOffset > 0
    if (scrolled > 0 && !header.hasClass('header--white')) {
      header.addClass('header--white');
    } else if (scrolled === 0 && header.hasClass('header--white')) {
      header.removeClass('header--white');
    }

    // Add and remove active class of main-nav links while scrolling
    $('.main-nav a').each(function() {
      var curLink = $(this);
      var refElement = $(curLink.attr("href"));

      if (refElement.offset().top - header.outerHeight() <= scrollPos && refElement.offset().top + refElement.height() > scrollPos) {
        curLink.addClass('main-nav__link--active');
      }
      else{
        curLink.removeClass("main-nav__link--active");
      }
    });
  }
  popup.click(function() {
    popup.toggleClass('header__toggle--active');
    menu.toggleClass('header__group--active');
  });



//--------------------------------------------------

  $(document).ready(function () {
    buyTokensBtn.click(function () {
      buyTokensModal.css('display', 'flex');
    });

    closeModal.click(function () {
      buyTokensModal.css('display', 'none');
    });

    $(window).click(function (event) {
      if (event.target.id == 'buyTokensModal') {
        buyTokensModal.css('display', 'none');
      }
    });

    $(".buy-tokens-form").submit(function () {
      $.ajax({
        type: "POST",
        url: "php/white-list.php",
        data: $(this).serialize(),
      }).done(function (data) {
        buyTokensModal.css('display', 'none');
        alert('You have been added to the Whitelist.');
      });
      return false;
    });
  });
});
