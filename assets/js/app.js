// fixed navigation and class additions
var mn = $(".small-nav");
    mns = "nav-fixed";
    bd = $('body');
    ct = $('.curtain-toggle');
    hdr = $('.hero').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > 200 ) {
    mn.addClass(mns);
    bd.addClass(mns);
    ct.addClass('curtain-toggle-hidden');
    bd.removeClass('drawerleft-open');
    bd.removeClass('drawerright-open');
    bd.removeClass('drawertop-open');
  }
  else {
    ct.removeClass('curtain-toggle-hidden');
  }
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
  $('.mobile-nav-container a').each(
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
  $('body').hasClass('nav-open') ? $('.mobile-nav-container a').attr('tabindex', 0) : $('.mobile-nav-container a').attr('tabindex', -1);
  if ($('body').hasClass('nav-open')) {
    fixNavScroll();
  }
});

// Nav scroll fix for mobile landscape
$(window).resize(function(){
  if ($('body').hasClass('nav-open')) {
    fixNavScroll();
  }
});
/* Drawers removed from new nav. 
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

$('.drawerclose').click(function(){
  $('body').removeClass('drawerleft-open');
  $('body').removeClass('drawerright-open');
  $('body').removeClass('drawertop-open');
});
*/
// remove tap delay on mobile
$(function() {
    FastClick.attach(document.body);
});

// carousel
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

$('.curtain-close').click(function(){
  $('#mainwrapper').removeClass('curtain-show');
  $('.curtain').removeClass('curtain-show');
  $('.curtain-toggle').addClass('curtain-toggle-show');
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


//Curtain scripts. comment out when not in use

/*
$(document).ready(function() {
    var curtainshow = sessionStorage.getItem('.curtain');
    if (curtainshow== null) {
        sessionStorage.setItem('.curtain', 1);

        // Show curtain here
        $('.curtain').addClass('curtain-show');
        $('#mainwrapper').addClass('curtain-show');
        $('body').addClass('curtain-show');
    }
});
*/
$(document).ready(function() {
    if ($('body').hasClass('curtain-show')) {
        $('.curtain-toggle').addClass('curtain-toggle-hidden');
    }
});

$(document).ready(function() {
    var curtainshow = sessionStorage.getItem('.curtain');
    if (curtainshow== null) {
        sessionStorage.setItem('.curtain', 1);

        $(window).ready(function(){
          setTimeout(function(){
            $('.curtain').addClass("curtain-show")
            $('.curtain').removeClass("curtain-hidden")
            $('.curtain-toggle').addClass('curtain-toggle-hidden')
          }, 1000);
        });
    }
});

$('.curtain-close').click(function(){
  $('#mainwrapper').addClass('curtain-hidden');
  $('.curtain').addClass('curtain-hidden');
  $('.curtain-toggle').removeClass('curtain-toggle-hidden')
});

$('.curtain-toggle').click(function(){
  $('#mainwrapper').removeClass('curtain-hidden');
  $('.curtain').removeClass('curtain-hidden');
  $('.curtain-toggle').addClass('curtain-toggle-hidden')
});

// Function to add scrolling within mobile nav if window height is less than the nav container 
// (Container height needs to be hard-coded because it starts at 0 prior to the transition effect.)
function fixNavScroll() {
  if ($(window).height() <= 558) {
    $('.mobile-nav-container').removeClass('drop-shadow'); // fix blurry text
    $('.mobile-nav-container .content').addClass('content-scroll');
  } else {
    $('.mobile-nav-container').addClass('drop-shadow');
    $('.mobile-nav-container .content').removeClass('content-scroll');
  }
}
/* Home page - Carousel */

jQuery(function(){

  // If we're at a mobile resolution, we'll hide the optional 4th slide
  showOrHideOptionalSlides();

  // Find the first carousel video
  jQuery('#carousel-hero .item.active .carousel-video:first').each(function(){
      
      const firstVideoElement = this;

      // Begin playing first carousel video
      firstVideoElement.play();

      // Once the first video file has loaded
      firstVideoElement.addEventListener('loadeddata', () => {
          if(firstVideoElement.readyState >= 3){

              // Find the other carousel videos
              jQuery('#carousel-hero .item:not(".active") .carousel-video').each(function(){
                  // Start loading other videos
                  this.load();
              });

              initCarousel();

          }
      });


  });

  // When the window is resized
  jQuery(window).on('resize', function(){
      showOrHideOptionalSlides();
  });

});

let initCarousel = function(){

  jQuery('#carousel-hero')
                  .carousel('cycle') // Beging cycling the carousel
                  .on('slide.bs.carousel', function (e){ // When the slide transition starts

                      // Start playing the next video before the next slide is active.
                      // If we wait until the "slid" event there's a visual blip
                      // from the static background image transitioning to the video, the first time the video plays.

                      e.relatedTarget.querySelector('.carousel-video').play();

                      // Pause the current video
                      let currentVideo = e.delegateTarget.querySelector('.item.active .carousel-video');

                      if(currentVideo)
                      {
                          currentVideo.pause()        
                      }

                  })
}

let previousWindowWidth = null;

let showOrHideOptionalSlides = function (){

  // Get the current window width
  let windowWidth = jQuery(window).width();

  // Breakpoint where we transition from 3 to 4 slides
  let mobileWidthBreakpoint = 1132;

  // If we're currently at mobile resolution
  if (windowWidth < mobileWidthBreakpoint)
  {
      // If we've transitioned from desktop to mobile, or if this is the initial page load
      if(previousWindowWidth > mobileWidthBreakpoint || previousWindowWidth === null)
      {
          // Ensure we're not on a slide that we're hiding
          jQuery('#carousel-hero').carousel(0);
          jQuery('#carousel-hero').carousel('pause');

          // Loop through the slides that we don't show on mobile
          jQuery('#carousel-hero .item-nomobile').each(function(){

              // Hide slide
              this.classList.add('hide');
              this.classList.remove('item');
              this.classList.remove('active');
          });

          // If this isn't the initial page load
          if(previousWindowWidth !== null)
          {
              // Reinitialize the carousel
              initCarousel();
          }
          

      }

  }
  else // We're at desktop resolution
  { 
      // If we're switching from mobile to desktop
      if(previousWindowWidth < mobileWidthBreakpoint)
      {                
          jQuery('#carousel-hero').carousel(0);
          jQuery('#carousel-hero').carousel('pause');

          // Restore slides that were hidden at mobile resolutions
          jQuery('#carousel-hero .item-nomobile').each(function(){
              this.classList.add('item');
              this.classList.remove('hide');
          });

          // Reinitialize the carousel
          initCarousel();

      }
  }

  previousWindowWidth = windowWidth;
}