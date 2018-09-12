'use strict';
$(document).ready(function() {
  var popup = $('.header__toggle');
  var menu = $('.header__group');

  popup.click(function() {
    popup.toggleClass('header__toggle--active');
    menu.toggleClass('header__group--active');
  });
});
