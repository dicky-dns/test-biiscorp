$(function(){
  'use strict'

  if(window.matchMedia('(min-width: 992px)').matches) {
    $('.az-navbar .active').removeClass('show');
    $('.az-header-menu .active').removeClass('show');
  }


  $('.az-header .dropdown > a').on('click', function(e) {
    e.preventDefault();
    $(this).parent().toggleClass('show');
    $(this).parent().siblings().removeClass('show');
  });

  $('.az-navbar .with-sub').on('click', function(e) {
    e.preventDefault();
    $(this).parent().toggleClass('show');
    $(this).parent().siblings().removeClass('show');
  });

  $('.dropdown-menu .az-header-arrow').on('click', function(e){
    e.preventDefault();
    $(this).closest('.dropdown').removeClass('show');
  });

  $('#azNavShow, #azNavbarShow').on('click', function(e){
    e.preventDefault();
    $('body').addClass('az-navbar-show');
  });

  $('#azContentLeftShow').on('click touch', function(e){
    e.preventDefault();
    $('body').addClass('az-content-left-show');
  });

  $('#azContentLeftHide').on('click touch', function(e){
    e.preventDefault();
    $('body').removeClass('az-content-left-show');
  });

  $('#azContentBodyHide').on('click touch', function(e){
    e.preventDefault();
    $('body').removeClass('az-content-body-show');
  })

  $('body').append('<div class="az-navbar-backdrop"></div>');
  $('.az-navbar-backdrop').on('click touchstart', function(){
    $('body').removeClass('az-navbar-show');
  });

  $(document).on('click touchstart', function(e){
    e.stopPropagation();

    var dropTarg = $(e.target).closest('.az-header .dropdown').length;
    if(!dropTarg) {
      $('.az-header .dropdown').removeClass('show');
    }

    if(window.matchMedia('(min-width: 992px)').matches) {


      // Header Menu
      var menuTarg = $(e.target).closest('.az-header-menu .nav-item').length;
      if(!menuTarg) {
        $('.az-header-menu .show').removeClass('show');
      }

      if($(e.target).hasClass('az-menu-sub-mega')) {
        $('.az-header-menu .show').removeClass('show');
      }

    } else {

      //
      if(!$(e.target).closest('#azMenuShow').length) {
        var hm = $(e.target).closest('.az-header-menu').length;
        if(!hm) {
          $('body').removeClass('az-header-menu-show');
        }
      }
    }

  });

  $('#azMenuShow').on('click', function(e){
    e.preventDefault();
    $('body').toggleClass('az-header-menu-show');
  })

  $('.az-header-menu .with-sub').on('click', function(e){
    e.preventDefault();
    $(this).parent().toggleClass('show');
    $(this).parent().siblings().removeClass('show');
  })

  $('.az-header-menu-header .close').on('click', function(e){
    e.preventDefault();
    $('body').removeClass('az-header-menu-show');
  })

});
