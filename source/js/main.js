'use strict';
$(document).ready(function() {
  var header = $('.header');
  var popup = $('.header__toggle');
  var menu = $('.header__group');

  popup.click(function() {
    popup.toggleClass('header__toggle--active');
    menu.toggleClass('header__group--active');
  });

  window.onscroll = function() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;

    if (scrolled > 0 && !header.hasClass('header--white')) {
      header.addClass('header--white');
    } else if (scrolled === 0 && header.hasClass('header--white')) {
      header.removeClass('header--white');
    }
  }
});
