// fixed nav
var mn = $(".small-nav");
    mns = "nav-fixed";
    bd = $('body');
    hdr = $('.hero').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > 120 ) {
    mn.addClass(mns);
    bd.addClass(mns);
    bd.removeClass('drawerleft-open');
    bd.removeClass('drawerright-open');
    bd.removeClass('drawertop-open');
  } /*else {
    mn.removeClass(mns);
    bd.removeClass(mns);
  }*/
});

// stickyfill
var elements = document.querySelectorAll('.sticky');
Stickyfill.add(elements);

// smooth scroll
$(document).ready(function(){
  $('a[href^="#"]:not([data-toggle="tab"])').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top-80
      }, 1500, 'swing', function () {
      });
  });
});

// Current page-aware links
$(document).ready(function(){
  $('a').each(
      function(i) {
          var classes = this.className.split(/\s+/);
          for (var i=0,len=classes.length; i<len; i++){
              if ($('body').hasClass(classes[i])){
                  $(this).addClass('activepage');
              }
          }
      });
   });
// mobile navigation
$('.mobile-nav-toggle-wrap').click(function(){
  $('body').toggleClass('nav-open');
});

$('.drawerleft-toggle').click(function(){
  if ($("body").hasClass("drawertop-open") || $("body").hasClass("drawerright-open")){
    setTimeout(function(){ $('body').toggleClass('drawerleft-open'); }, 300);
  }
  else {
    $('body').toggleClass('drawerleft-open');
  }
  $('body').removeClass('drawerright-open');
  $('body').removeClass('drawertop-open');
  return false;
});

$('.drawerright-toggle').click(function(){
  if ($("body").hasClass("drawertopopen") || $("body").hasClass("drawerleft-open")){
    setTimeout(function(){ $('body').toggleClass('drawerright-open'); }, 300);
  }
  else {
    $('body').toggleClass('drawerright-open');
  }
  $('body').removeClass('drawerleft-open');
  $('body').removeClass('drawertop-open');
  return false;
});

$('.drawertop-toggle').click(function(){
  if ($("body").hasClass("drawerleft-open") || $("body").hasClass("drawerright-open")){
    setTimeout(function(){ $('body').toggleClass('drawertop-open'); }, 300);
  }
  else {
    $('body').toggleClass('drawertop-open');
  }
  $('body').removeClass('drawerright-open');
  $('body').removeClass('drawerleft-open');
  return false;
});

$('.hero').click(function(){
  $('body').removeClass('drawerleft-open');
  $('body').removeClass('drawerright-open');
  $('body').removeClass('drawertop-open');
});

// remove tap delay on mobile
$(function() {
    FastClick.attach(document.body);
});

// remove tap delay on mobile
$(window).scroll(function () {
   $('.bg1trigger').each(function () {
      if (isScrolledIntoView(this) === true) {
        $('.processbg').addClass('bg1active');
        $('.processbg').removeClass('bg4active, bg2active , bg3active');
      }
   });
   $('.bg2trigger').each(function () {
      if (isScrolledIntoView(this) === true) {
        $('.processbg').addClass('bg2active');
        $('.processbg').removeClass('bg1active, bg3active , bg4active');
      }
   });
   $('.bg3trigger').each(function () {
      if (isScrolledIntoView(this) === true) {
        $('.processbg').addClass('bg3active');
        $('.processbg').removeClass('bg2active, bg1active , bg4active');
      }
   });
   $('.bg4trigger').each(function () {
      if (isScrolledIntoView(this) === true) {
        $('.processbg').addClass('bg4active');
        $('.processbg').removeClass('bg1active, bg2active , bg3active');
      }
   });
});



$('.corrected').buddySystem();

$(document).ready(function(){
  if ($("body").hasClass("workwithus")){
    $('.worklink').append('<button data-toggle="modal" data-target="#contactModal" class="workwithus button xsmall yellow filled hideforsmall">Schedule a meeting</button>');
  }
  else {
    $('.worklink').append('<a href="/work" class="workwithus button xsmall blue-black filled hideforsmall">Work with us</a>');
  }
});
