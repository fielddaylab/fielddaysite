<!DOCTYPE html>
<html>
<head>

<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='35491644-1',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="favicon/manifest.json">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta charset="UTF-8">
<title>Atom Touch: A Field Day Lab Experiment</title>
<meta content="True" name="HandheldFriendly">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Roboto:300,400|Volkhov" rel="stylesheet">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10031673-2', 'auto');
  ga('send', 'pageview');
  ga('linker:autoLink', ['arisgames.org','fielddaylab.org','siftr.org'], false, true);
</script>
<link rel="stylesheet" href="../../assets/css/styles.css">

<!-- phil's "play content" code -->
<script>
  function playContent()
  {
    document.getElementById("content_play").innerHTML = "";
    document.getElementById("content_play").style.display = "none";
    document.getElementById("content").src = "build/iframe.html";
    document.getElementById("content").style.display = "block";
  }
</script>

</head>
<body class="singleapp atomtouch">
<nav class="small-nav">
  <ul>
    <li class="logo"><a href="/"><img class="darklogo" src="../../assets/img/logos/fd.png"></a></li>
    <li class="small-navlink"><a class="drawerleft-toggle" onclick="ga('send', 'event', 'Make', 'Click');">Make</a></li>
    <li class="small-navlink"><a  onclick="ga('send', 'event', 'Play', 'Click');" class="drawertop-toggle">Play</a></li>
    <li class="small-navlink"><a onclick="ga('send', 'event', 'Learn', 'Click');" class="drawerright-toggle">Learn</a></li>
    <!--<li class="hideforsmall small-navlink"><a class="drawerright-toggle">For Teachers</a></li>-->
  </ul>
  <button data-toggle="modal" data-target="#contactModal" class="workwithus button xsmall yellow filled hideforsmall">Work with us</button>
  <div class="mobile-nav-toggle-wrap">
    <div class="mobile-nav-container">
      <div class="content">
        <img src="../../assets/img/illustrations/spaceplane-flight.png">
        <ul class="mobile-links">
          <li>
            <a target="_blank" onclick="ga('send', 'event', 'Blog', 'Click');" href="https://medium.com/@fielddaylab">blog</a>
          </li>
          <li>
            <a href="mailto:djgagnon@wisc.edu" onclick="ga('send', 'event', 'Work With FD', 'Click');" target="_blank" class="button white">Work with Field Day</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="nav-toggle">
      <div class="icon"></div>
    </div>
  </div>
</nav>
<div class="drawer drawer-left make">
  <div class="drawer-contents">
    <a href="" class="draweritem drawer-intro"><div class="draweritem-content"><img src="../../assets/img/logos/fd-arrow.png" class="nav-thumb"><h2>Make</h2><p>Discover the world, tell meaningful stories, Explore what’s around you. Free, remixable apps by Field Day.</p></div></a>
    <a target="_blank" href="http://arisgames.org" onclick="ga('send', 'event', 'ARIS', 'Click');" style="background: url('../../assets/img/thumbnails/bg1.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/aris-logo.png" class="nav-thumb"><h2>ARIS</h2><p>Make mobile games, tours and interactive stories and games.</p><span class="go">go</span></div></a>
    <a target="_blank" href="http://siftr.org" onclick="ga('send', 'event', 'Siftr', 'Click');" style="background: url('../../assets/img/thumbnails/bg5.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/siftr-logo.png" class="nav-thumb"><h2>Siftr</h2><p>Use Siftr to make field research activities easy.</p><span class="go">go</span></div></a>
    <a target="_blank" href="https://nomenproject.org/" onclick="ga('send', 'event', 'Nomen', 'Click');" style="background: url('../../assets/img/thumbnails/bg3.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/nomen-logo.png" class="nav-thumb"><h2>Nomen</h2><p>Create your own digital field guide, no coding required.</p><span class="go">go</span></div></a>
  </div>
</div>
<div class="drawer drawer-top play">
  <div class="drawer-contents">
    <a target="_blank" href="" class="draweritem drawer-intro"><div class="draweritem-content"><img src="../../assets/img/logos/fd-arrow.png" class="nav-thumb"><h2>Play</h2><p>Field Day makes apps that change the way people see the world. play around, or remix them.</p></div></a>
    <a target="_blank" href="http://theyardgames.org" onclick="ga('send', 'event', 'Yard Games', 'Click');" style="background: url('../../assets/img/thumbnails/bg7.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/yard-logo.png" class="nav-thumb"><h2>The Yard Games</h2><p>Teach Science with free, beautiful games on the web.</p><span class="go">go</span></div></a>
    <a target="_blank" href="https://medium.com/@fielddaylab/atomtouch-lets-you-interact-with-the-world-s-universal-building-blocks-7e01caa5dbf6#.qtjjwl4m9" onclick="ga('send', 'event', 'Atom Touch', 'Click');" style="background: url('../../assets/img/thumbnails/bg9.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/atomtouch-logo.png" class="nav-thumb"><h2>Atom Touch</h2><p>Explore how atoms work with this tactile simulation. 8+</p><span class="go">go</span></div></a>
    <a target="_blank" href="https://www.thegamecrafter.com/games/the-n-game" onclick="ga('send', 'event', 'N Game', 'Click');" style="background: url('../../assets/img/thumbnails/bg8.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/nitrogen-logo.png" class="nav-thumb"><h2>The N Game</h2><p>Explore the complicated Nitrogen Cycle with this board game, 16+</p><span class="go">go</span></div></a>
    <a target="_blank" href="https://medium.com/@fielddaylab/wisco-teacher-dominique-lark-teaches-like-a-gamer-b8ecb973e735#.hvr69qt4e"  onclick="ga('send', 'event', 'Dominique Blog', 'Click');"style="background: url('../../assets/img/thumbnails/medium1.jpg'); background-size: cover;" class="draweritem"><div class="draweritem-content"><img src="../../assets/img/logos/fd-arrow.png" class="nav-thumb"><h2>Dominique Lark Teaches like a gamer.</h2><span class="go">go</span></div></a>
  </div>
</div>
<div class="drawer drawer-right learn">
  <div class="drawer-contents">
    <a href="" class="draweritem drawer-intro">
      <div class="draweritem-content">
        <img src="../../assets/img/logos/fd-arrow.png" class="nav-thumb">
        <h2>Learn</h2>
        <p>Learn how to use all the things Field Day makes.</p>
      </div>
    </a>
    <a target="_blank" onclick="ga('send', 'event', 'Courses', 'Click');" style="background: url('../../assets/img/thumbnails/bg8.jpg'); background-size: cover;"  href="https://fielddaylab.org/courses/" class="draweritem">
      <div class="draweritem-content">
        <h2>Field Day Courses</h2>
        <p>Online courses to teach you make stuff with Field Day tools like Siftr and ARIS</p>
        <span class="go">go</span>
      </div>
    </a>
    <a target="_blank" onclick="ga('send', 'event', 'Forums', 'Click');" style="background: url('../../assets/img/thumbnails/bg10.jpg'); background-size: cover;"  href="https://fielddaylab.org/forums/" class="draweritem">
      <div class="draweritem-content">
        <h2>Forums</h2>
        <p>Learn more about Field Day apps, get answers to your questions</p>
        <span class="go">go</span>
      </div>
    </a>
    <a target="_blank" onclick="ga('send', 'event', 'Fellowships', 'Click');" style="background: url('../../assets/img/thumbnails/bg11.jpg'); background-size: cover;"  href="https://fielddaylab.org/fellowships" class="draweritem">
      <div class="draweritem-content">
        <h2>Teacher Fellowships</h2>
        <p>You’ve got superheros in your school but even superheros need support. Join project based PD with Field Day. </p>
        <span class="go">go</span>
      </div>
    </a>
  </div>
</div>



<!-- Main Content -->
<section class="app-hero">
  <div class="hero-content">
    <div class="info-panel">
      <ul class="breadcrumbs">
        <li><a href="/">Field Day</a></li>
        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
        <li>Play</li>
        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
        <li>Atom Touch</li>
      </ul>
      <img class="logo-small" src="../../assets/img/logos/atomtouch-logo.png"></span>
    </div>
    <div class="app-info">
      <h1 class="app-title">Atom Touch</h1>
      <p class="app-tag">Explore the Atomic World</p>
    </div>
    <div class="app-description"><p class="small">AtomTouch is a molecular simulation app, created through a partnership between UW MRSEC and Field Day Lab, that allows learners to explore principles of thermodynamics and molecular dynamics in an tactile, exploratory way.

</p></div>
    <div class="buttons">
      <a target="_blank" href="#app-intro" class="button xsmall white filled">Play Atom Touch</a>
      <a target="_blank" href="#app-about" class="button xsmall white">Learn about Atom Touch</a>
    </div>
  </div>
</section>
<section id="app-intro">
  <h2>Play Atom Touch</h2>
  <div id="content_play" style="width:880px; height:660px;" onclick="playContent()"><span class="button white filled">Play Atom Touch</span></div>
  <iframe id="content" scrolling="no" style="width:880px; height:660px; display:none; margin:10px auto; overflow:hidden; border:0px;" src="build/null.html"></iframe>
  <h2>You can also download atom touch: </h2>
  <a href="https://itunes.apple.com/us/app/atomtouch/id1022112547?mt=8" target="_blank"><img class="play-button" src="/assets/img/buttons/apple-badge.png"></a>
  <a href="https://play.google.com/store/apps/details?id=edu.wisc.wid.fielddaylab.atomtouch&hl=en" target="_blank"><img class="play-button" src="/assets/img/buttons/google-play-badge.png"></a>
</section>

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#standards">Standards</a></li>
        <li><a href="#support">Teacher Support</a></li>
        <li><a href="#features">Production Team</a></li>
        <li><a href="#source">Source Code</a></li>
        <li><a href="#funding">Funding</a></li>
        </ul>
      </div>
    </div>

    <div id="about" class="col-sm-8 about-rightpanel">
      <h2>About Atom Touch</h2>
      <p>AtomTouch is a molecular simulation app, created through a partnership between UW MRSEC and Field Day Lab. It allows learners to explore principles of thermodynamics and molecular dynamics in an tactile, exploratory way. The simulation was developed to help students understand the structures and attributes of particles at the molecular level, providing real-time feedback and responding to students’ actions.</p>
      <h2 id="standards">Aligned with Standards</h2>
      <p>AtomTouch can be used to address the Next Generation Science Standards in multiple curricular units, including:</p>
      <ul>
        <li>States and Properties of Matter</li>
        <li>Predicting and modeling how atoms behave as materials change state</li>
        <li>Figure out the most stable structure for a molecule</li>
        <li>Atomic and molecular Theory</li>
        <li>Physical and Chemical Interactions</li>
        <li>Properties of atoms, molecules, and matter</li>
        <li>Size and Scale</li>
      </ul>
      <h2 id="support">Teacher Support</h2>
      <p>Download the <a href="/userdownloads/Teacher-Guide-for-the-Free-AtomTouch-App.docx" target="_blank">Teacher Guide</a> and the <a href="/userdownloads/Atomtouch_teacherslides_ieg_1_2016.pptx" target="_blankg">Powerpoint Slides for Class.</a></p>
      <h2 id="features">Features</h2>
      <ul>
        <li>Lennard Jones and Buckingham Simulation Engine</li>
        <li>Create molecules from Cu, Au, Pt, Na and Cl</li>
        <li>Change thermodynamics properties</li>
        <li>Control time</li>
        <li>Experiment with the potential energy, finding stable geometries</li>
        <li>Watch the process of melting and vaporizing</li>
      </ul>
      <h2 id="production">Production Team</h2>
      <ul>
        <li>Anne Lynn Gillian-Daniel (Education Lead)</li>
        <li>Dane Morgan (Simulation Lead)</li>
        <li>David Gagnon (Production Lead)</li>
        <li>Ben Hansen (Unity Software Engineer)</li>
        <li>Yucheng Tu (Unity Software Engineer)</li>
        <li>Amirhossein Davoody (Lead Simulation Software Engineer)</li>
        <li>Justin Moeller (Software Engineer)</li>
        <li>Ben Taylor (User Testing, Educational Design)</li>
        <li>Izabela Szlufarska (MRSEC Inderdisciplinary Computational Group Lead)</li>
        <li>Eric Peterson (3d Modeling, Animation, UX Design)</li>
        <li>Tyler Anlauf (3d Modeling, Graphic Design, UX Design)</li>
        <li>Tam Mayeshiba (Simulation Software Engineer)</li>
        <li>Henry Wu (Simulation Software Engineer)</li>
        <li>Kritika Rai (Software Engineer)</li>
        <li>Anup Rathi (Software Engineer)</li>
      </ul>
      <h2 id="source">Source Code</h2>
      <p>This is a MIT Licensed, Opensource project. We would love to have some help in developing new potentials. Contribute to the code at <a href="https://github.com/fielddaylab/atomtouch" target="_blank">https://github.com/fielddaylab/atomtouch</a></p>
      <h2 id="funding">Funding</h2>
      <p>This research was primarily supported by NSF through the University of Wisconsin Materials Research Science and Engineering Center (DMR-1121288)</p>
    </div>
  </div>
</section>
<section id="footer">
    <div class="starfield topright">
      <span class="star black star1"></span>
      <span class="star black star2"></span>
      <span class="star black star3"></span>
      <span class="star black star4"></span>
      <span class="star black star5"></span>
    </div>
    <div class="footer">
      <div class="row container">
        <div class="col-md-3">
          <div class="footer-signup">
            <img class="signup-badge img-responsive" src="../../assets/img/illustrations/astro-badge.png">
            <h3>Stay in Touch</h3>
            <p class="small">If you want to hear the latest about what we’re up to, drop your
email below. We won’t spam
you, promise.</p>
             <a target="_blank" onclick="ga('send', 'event', 'Signup', 'Click');" href="http://fielddaylab.us11.list-manage.com/subscribe?u=41e606b89f5a8bc633e161cf3&id=dd53cb95db" class="button xsmall">Sign up</a>
          </div>
        </div>
        <div class="col-md-9 footerinfo">
          <img class="footerlogo" src="../../assets/img/logos/fd.png">
          <p class="small">Based at the Wisconsin Center for Educational Reserach at the University of Wisconsin - Madison, we are a truly interdisciplinary team of educational researchers, software engineers, artists, and storytellers, exploring the intersection of current learning science and media design, specializing in mobile media, video games, and simulation. Seeking to do what’s never been done before, we constantly innovate, play, take risks, and
mess-make. </p>
           <div class="row footernav">
             <div class="col-md-4">
               <h3>Make</h3>
                <a target="_blank" onclick="ga('send', 'event', 'ARIS', 'Click');" href="/make/aris/">ARIS</a>
                <a target="_blank" onclick="ga('send', 'event', 'Siftr', 'Click');" href="http://siftr.org">Siftr</a>
                <a target="_blank" onclick="ga('send', 'event', 'Nomen', 'Click');" href="http://nomenproject.org">Nomen</a>
             </div>
             <div class="col-md-4">
               <h3>Play</h3>
                <a target="_blank" onclick="ga('send', 'event', 'Yard Games', 'Click');" href="http://theyardgames.org">The Yard Games</a>
                <a target="_blank" onclick="ga('send', 'event', 'Blog', 'Click');" href="https://medium.com/@fielddaylab/atomtouch-lets-you-interact-with-the-world-s-universal-building-blocks-7e01caa5dbf6#.qtjjwl4m9">AtomTouch</a>
                <a target="_blank" onclick="ga('send', 'event', 'N Game', 'Click');" href="https://www.thegamecrafter.com/games/the-n-game">The N Game</a>
             </div>
             <div class="col-md-4">
               <h3>Learn</h3>
                <a target="_blank" onclick="ga('send', 'event', 'Fellowships', 'Click');" href="https://fielddaylab.org/fellowships">Fellowship Program</a>
                <a target="_blank" onclick="ga('send', 'event', 'Courses', 'Click');" href="https://fielddaylab.org/courses/">Field Day Courses</a>
             </div>
           </div>
        </div>
      </div>
    </div>
  </section>


<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contact-modal">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <img src="../../assets/img/illustrations/spaceplane-flight.png">
      <h2>Work with field Day</h2>
      <p class="small">You have a great idea, we are a team that can partner with you to make your idea reach people who will benefit most from it. Drop David Gagnon an email at <a class="small" href="mailto:djgagnon@wisc.edu">djgagnon@wisc.edu</a> and let's get talking.</p>
    </div>
  </div>
</div>

<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src='/assets/js/vendor/fastclick.js'></script>
<script src='/assets/js/vendor/buddysystem.jquery.js'></script>
<script src='/assets/js/vendor/scrollreveal.min.js'></script>
<script src='/assets/js/vendor/isscrolledintoview.js'></script>
<script src='/assets/js/vendor/glide.min.js'></script>
<script>

// scroll reveal elements & animations
var fastreveal = {
  delay    : 00,
  distance : '50px',
  easing   : 'ease-in-out',
  scale    : 1.1
};

var plainreveal = {
  delay    : 00,
  distance : '0px',
  easing   : 'ease-in-out',
  scale    : 1.0
};

var slowreveal = {
  delay    : 1580,
  distance : '30px',
  easing   : 'ease-in-out',
  scale    : 1.1
};

var upreveal = {
  origin   : 'bottom',
  delay    : 200,
  distance : '50px',
  easing   : 'ease-in-out'
};

var skylabreveal = {
  origin   : 'left',
  delay    : 1200,
  distance : '500px',
  duration : 900,
  easing   : 'ease-in-out'
};

window.sr = ScrollReveal({ duration: 1000, mobile: false});
sr.reveal('.reveal', fastreveal, { viewFactor: 0.3 });
sr.reveal('.slowreveal', slowreveal, { viewFactor: 0.3 });
sr.reveal('.revealfull', fastreveal, { viewFactor: 0.8 });
sr.reveal('.skylabreveal', skylabreveal);
sr.reveal('.plainreveal', plainreveal);
sr.reveal('.star', 90, { mobile: true });
sr.reveal('.blueprint-icon', 90);
sr.reveal('.blogpostreveal', 90);
sr.reveal('.processreveal', 30);
sr.reveal('.dockreveal', skylabreveal, 200);
sr.reveal('.exhaustreveal', 90, { viewFactor: 0.1 });

// fixed nav
var mn = $(".small-nav");
    mns = "nav-fixed";
    bd = $('body');
    hdr = $('.hero').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
    bd.addClass(mns);
    bd.removeClass('drawerleft-open');
    bd.removeClass('drawerright-open');
    bd.removeClass('drawertop-open');
  } else {
    mn.removeClass(mns);
    bd.removeClass(mns);
  }
});

// smooth scroll
$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 1500, 'swing', function () {
          window.location.hash = target;
      });
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

var carousel = $('#Glide').glide({
        type: 'carousel',
        paddings: '20%',
        startAt: 1,
      });

</script>

</body>
</html>