<?php include 'includes/header.php';?>
<title>Field Day Learning Games</title>
<meta name="description" content="Field Day Lab">
</head>
<body class="nav-fixed home">
<!--include main navigation-->
<?php include 'includes/main-nav.php';?>
<!-- start page template -->
<div id="mainwrapper">
  <!--<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/curtain.php";  include_once($path); ?>-->

  <!--hero-->
  <div id="carousel" class="hero carousel slide carousel-fade hero-slider " data-ride="carousel">
      <div class="slide-wrap">
        <ul class="carousel-indicators slide-bullets">
            <li class="slide-bullet active" data-target="#carousel" data-slide-to="0">
              <span class="bullet"></span>
              <span class="bullet-caption">Legend of the Lost Emerald</span>
            </li>
            <li class="slide-bullet" data-target="#carousel" data-slide-to="1">
              <span class="bullet"></span>
              <span class="bullet-caption">Lakeland</span>
            </li>
            <li class="slide-bullet" data-target="#carousel" data-slide-to="2">
              <span class="bullet"></span>
              <span class="bullet-caption">Jo Wilder</span>
            </li>
            <li class="slide-bullet" data-target="#carousel" data-slide-to="3">
              <span class="bullet"></span>
              <span class="bullet-caption">Ice Cube</span>
            </li>
        </ul>
      </div>
      <!-- Carousel items -->
      <div class="carousel-inner">

        <div class="active item">
          <div class="info-wrap">
            <div class="item-info">
              <img class="" alt="Legend of the Lost Emerald Logo" src="/assets/img/logos/emerald-logo.png">
              <p class="corrected">Play as a maritime archaeologist uncovering shipwrecks in the Great Lakes. Made in partnership with PBS Wisconsin and Wisconsin Sea Grant. </p>
              <a href="/play/emerald" class="button white xsmall">Check it out</a>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="info-wrap">
            <div class="item-info">
              <img class="" alt="Lakeland Logo" src="/assets/img/logos/lakeland-logo.png?cb=20190820">
              <p class="corrected">This town-building game teaches complex systems. Made in partnership with the Scalable Systems Lab at UW-Madison. Played by thousands of kids a month.</p>
              <a href="/play/lakeland" class="button white xsmall">Check It Out</a>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="info-wrap">
            <div class="item-info">
              <img class="" alt="Jo wilder and the capitol case logo" src="/assets/img/logos/jowilder.png?cb=20190820">
              <h2 class="uppercase"></h2>
              <p class="corrected">This award-winning game turns kids into history detectives! Made in partnership with PBS Wisconsin and archivists at the Wisconsin Historical Society.</p>
              <a class="button xsmall white" href="/play/jowilder">Check It Out</a>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="info-wrap">
            <div class="item-info">
              <img class="" alt="Discover Icecube logo" src="/assets/img/logos/ice-cube-logo-white.png">
              <h2 class="uppercase">Discover Ice Cube</h2>
              <p class="corrected">This virtual reality game introduces players to complex ideas in astrophysics. Made in partnership with the IceCube Neutrino Observatory and the Living Environments Lab at UW-Madison.</p>
              <a class="button xsmall white" href="/play/ice-cube">Check It Out</a>
            </div>
          </div>
        </div>


      </div>
      <!-- Carousel nav -->
  </div>


  <!--<a class="drawer-toggle drawerleft-toggle"><span class="drawer-button"><img src="assets/img/ui/arrow.svg"><p>Make</p></span></a>
  <a class="drawer-toggle drawertop-toggle"><span class="drawer-button"><img src="assets/img/ui/arrow.svg"><p>Play</p></span></a>
  <a class="drawer-toggle drawerright-toggle"><span class="drawer-button"><img src="assets/img/ui/arrow.svg"><p>Learn</p></span></a>-->

  <section id="intro" class="our_process">
    <div class="processbg one"></div>
    <div class="process intro">
      <span class="veryslowreveal spacedust one"></span>
      <span class="veryslowreveal spacedust two"></span>
      <span class="offscreen test one"></span>
      <div class="intro-content">
        <img class="bg1trigger reveal float" alt="astronaut" src="assets/img/illustrations/astronaut1.png" class="astronaut">
        <h2 class="light centered plainreveal uppercase">Make a game, reach more people</h2>
        <p class="corrected plainreveal light">When it comes to sharing your work with the public, the stakes are higher than ever. We'll turn your research into a fun, academically rigorous game that reaches hundreds of thousands of people. Team up with us and become an outreach superstar.</p>
        <!--<p class="corrected plainreveal big light">Based at the Wisconsin Center for Educational Research at the University of Wisconsin - Madison, we are an interdisciplinary research lab of software engineers, artists, educational researchers and storytellers exploring the intersection of current learning science and media design, specializing in mobile media, video games, and simulation. </p>-->
      </div>
      <div class="starfield topright">
        <span class="star star1"></span>
        <span class="star star2"></span>
        <span class="star star3"></span>
        <span class="star star4"></span>
        <span class="star star5"></span>
      </div>
      <div class="starfield topleft">
        <span class="star star1"></span>
        <span class="star star2"></span>
        <span class="star star3"></span>
        <span class="star star4"></span>
        <span class="star star5"></span>
      </div>
      <div class="starfield bottomright">
        <span class="star star1"></span>
        <span class="star star2"></span>
        <span class="star star3"></span>
        <span class="star star4"></span>
        <span class="star star5"></span>
      </div>
      <div class="starfield bottomleft">
        <span class="star star1"></span>
        <span class="star star2"></span>
        <span class="star star3"></span>
        <span class="star star4"></span>
        <span class="star star5"></span>
      </div>
      <!--<div class="hideforsmall plainreveal scrollindicator">
          <a href="#workit" class="icon-scroll"></a>
        </div>-->
    </div>
  </section>
  <section id="workit" class="workit">
    <div class="section-container">
      <div class="header">
        <h2 class="light bright centered uppercase">Get involved</h2>
      </div>
      <div class="content-wrap spaceplane-wrap">
        <img class="spaceplane-illustration" alt="spaceplane taking off" src="assets/img/illustrations/spaceplane-vertical.png">
        <div class="exhaustwrap">
          <img class="exhaust one" alt="exhaust from spaceplane" src="assets/img/illustrations/exhaust.png">
          <img class="exhaust two" alt="exchaust from spaceplane" src="assets/img/illustrations/exhaust2.png">
        </div>
        <div class="exhaustwrap two">
          <img class="exhaust one late" alt="exhaust from spaceplane" src="assets/img/illustrations/exhaust.png">
          <img class="exhaust two late" alt="exhaust from spaceplane" src="assets/img/illustrations/exhaust2.png">
        </div>
      </div>
      <div class="content-wrap workit-content">
        <div class="cta-card one">
          <h3>Teacher Fellowships</h3>
          <p class="small">We work with teachers on all of our learning games. If you're a teacher, come design a game with us!</p>
          <a class="button xsmall black" href="/fellowships">Get started</a>
        </div>
        <div class="cta-card two">
          <h3>Games for Outreach</h3>
          <p class="small">Are you a researcher? Design a game with us and reach hundreds of thousands of people.</p>
          <a class="button xsmall black" href="/work">Work with Us</a>
        </div>
      </div>
    </div>
  </section>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/ourstuff.php";  include_once($path); ?>

  <section class="stayupdated">
    <div class="container">
      <div class="astro-flag">
        <img alt="Astronaught holding field day flag" src="assets/img/illustrations/astro-flag.png">
      </div>
      <div class="info">
        <h3 class="white">Extra, extra!</h3>
        <p class="small white">Read the stories behind our games and meet the researchers and teachers who have teamed up with us.</p>
        <a href="https://medium.com/fielddaylab" class="button xsmall white">Field Day Blog</a>
      </div>
    </div>
  </section>
  <section class="partners">
    <div class="container">
      <img alt="skylab" src="assets/img/illustrations/skylab-small.png" class="header-icon">
      <h3 class="centered uppercase">Who we work with</h3>
      <p class="small">We work with amazing researchers around the world.</p>
      <div class="partner-logos">
        <img alt="logo of PBS Wisconsin Education" src="/assets/img/logos/partnerlogos/partnerlogo24.png?cb=20190820">
        <img alt="logo of Harvard University" src="/assets/img/logos/partnerlogos/partnerlogo1.png?cb=20190820">
        <img alt="logo of Utah State University" src="/assets/img/logos/partnerlogos/partnerlogo2.png?cb=20190820">
        <img alt="logo of Brain Pop" src="/assets/img/logos/partnerlogos/partnerlogo3.png?cb=20190820">
        <img alt="logo of Chippewa Valley Technical College" src="/assets/img/logos/partnerlogos/partnerlogo4.png?cb=20190820">
        <img alt="logo of Minnesota Historical Society" src="/assets/img/logos/partnerlogos/partnerlogo5.png?cb=20190820">
        <img alt="logo of Library of Congress" src="/assets/img/logos/partnerlogos/partnerlogo6.png?cb=20190820">
        <img alt="logo of MacArthur Foundation" src="/assets/img/logos/partnerlogos/partnerlogo7.png?cb=20190820">
        <img alt="logo of National Science Foundation - NSF" src="/assets/img/logos/partnerlogos/partnerlogo8.png?cb=20190820">
        <img alt="logo of Massachusetts Institute of Technology - MIT" src="/assets/img/logos/partnerlogos/partnerlogo9.png?cb=20190820">
        <img alt="logo of Northwestern University" src="/assets/img/logos/partnerlogos/partnerlogo10.png?cb=20190820">
        <img alt="logo of Aalto University" src="/assets/img/logos/partnerlogos/partnerlogo11.png?cb=20190820">
        <img alt="logo of University of New Mexico" src="/assets/img/logos/partnerlogos/partnerlogo12.png?cb=20190820">
        <img alt="logo of Oregon State University" src="/assets/img/logos/partnerlogos/partnerlogo13.png?cb=20190820">
        <img alt="logo of Smithsonian" src="/assets/img/logos/partnerlogos/partnerlogo14.png?cb=20190820">
        <img alt="logo of University of Miami" src="/assets/img/logos/partnerlogos/partnerlogo15.png?cb=20190820">
        <img alt="logo of American University" src="/assets/img/logos/partnerlogos/partnerlogo16.png?cb=20190820">
        <img alt="logo of The Field Museum" src="/assets/img/logos/partnerlogos/partnerlogo17.png?cb=20190820">
        <img alt="logo of Scigirls" src="/assets/img/logos/partnerlogos/partnerlogo18.jpeg?cb=20190820">
        <img alt="logo of European Research Council" src="/assets/img/logos/partnerlogos/partnerlogo19.png?cb=20190820">
        <img alt="logo of Wisconsin Department of Public Instruction" src="/assets/img/logos/partnerlogos/partnerlogo20.jpg?cb=20190820">
        <img alt="logo of Institute of Play" src="/assets/img/logos/partnerlogos/partnerlogo21.jpeg?cb=20190820">
        <img alt="logo of Pearson Foundatoin" src="/assets/img/logos/partnerlogos/partnerlogo22.jpg?cb=20190820">
        <img alt="logo of National Science Foundation - NSF" src="/assets/img/logos/partnerlogos/partnerlogo23.png?cb=20190820">
      </div>
  </div>
  </section>
  <section class="workwithus">
    <div id="maincta" class="maincta">
      <img alt="flying spaceplace rocketship" src="assets/img/illustrations/spaceplane-flight.png">
      <h2 class="uppercase">Work with Us</h2>
      <p>Let's make a game together! We'll help write the Broader Impacts section of your grant.</p>
      <button data-toggle="modal" data-target="#contactModal" class="button small white" >Set up a Meeting</button>
    </div>
  </section>
  <section class="blogs">
    <div class="container">
      <h2 class="centered uppercase">from the blog</h2>
    </div>
    <div class="row container large">
    <div class="starfield topright">
      <span class="star black star1"></span>
      <span class="star black star2"></span>
      <span class="star black star3"></span>
      <span class="star black star4"></span>
      <span class="star black star5"></span>
    </div>
    <div class="starfield topleft">
      <span class="star black star1"></span>
      <span class="star black star2"></span>
      <span class="star black star3"></span>
      <span class="star black star4"></span>
      <span class="star black star5"></span>
    </div>
      <div class="col-md-6  blogpost-wrap blogpostreveal">
        <div class="blogpost one">
          <div class="thumb">
          </div>
          <div class="blogcontent">
            <h3 class="corrected">Data Nerds Unite! How Teachers and Scientists Are Changing the Future of Teaching with Games</h3>
            <div class="row">
              <div class="col-md-8 brief">
                <p class="corrected">We're partnering with teachers from all across Wisconsin to design a dashboard for our complex systems game, Lakeland.
</p>
                <a target="_blank" href="https://medium.com/fielddaylab/data-nerds-unite-how-teachers-and-scientists-are-changing-the-future-of-teaching-with-games-3d43c74e0210" class="button xsmall"><span class="text">Read story</span><span class="mediumlogo"><i class="fa fa-medium" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6  blogpost-wrap blogpostreveal">
        <div class="blogpost two">
            <div class="thumb">
            </div>
          <div class="blogcontent">
            <h3 class="corrected">Lost at the Forever Mine: A Game Where Only Math Will Save You</h3>
            <div class="row">
              <div class="col-md-8 brief">
                <p class="corrected">In this Math Drama, designed in partnership with UW-MRSEC, slope intercept is your best hope for survival.</p>
                <a target="_blank" href="https://medium.com/fielddaylab/lost-at-the-forever-mine-a-game-where-only-math-will-save-you-60e3cd45f072" class="button xsmall"><span class="text">Read story</span> <span class="mediumlogo"><i class="fa fa-medium" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row container large">
      <div class="starfield topright">
      <span class="star black star1"></span>
      <span class="star black star2"></span>
      <span class="star black star3"></span>
      <span class="star black star4"></span>
      <span class="star black star5"></span>
    </div>
    <div class="starfield topleft">
      <span class="star black star1"></span>
      <span class="star black star2"></span>
      <span class="star black star3"></span>
      <span class="star black star4"></span>
      <span class="star black star5"></span>
    </div>
      <div class="col-md-6  blogpost-wrap blogpostreveal">
        <div class="blogpost three">
          <div class="thumb">
          </div>
          <div class="blogcontent">
            <h3 class="corrected">Trouble in Lakeland: This Game Teaches the Impact of the Dairy Industry on the Lakes
</h3>
            <div class="row">
              <div class="col-md-8 brief">
                <p class="corrected">We teamed up with the Scalable Systems Lab at UW-Madison to design a fun game that introduces kids to complex systems.</p>
                <a target="_blank" href="https://medium.com/fielddaylab/kids-are-using-lakeland-to-play-through-the-phosphorus-cycle-and-talk-about-poop-in-class-7c5bed32461c" class="button xsmall"><span class="text">Read story</span><span class="mediumlogo"><i class="fa fa-medium" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6  blogpost-wrap blogpostreveal">
        <div class="blogpost four">
            <div class="thumb">
            </div>
          <div class="blogcontent">
            <h3 class="corrected">Shipwrecks and Sea Shanties: Designing a Game to Teach the Great Lakes</h3>
            <div class="row">
              <div class="col-md-8 brief">
                <p class="corrected">We're partnering with maritime archaeologists and Wisconsin teachers to design a game about Great Lakes shipwrecks!</p>
                <a target="_blank" href="https://medium.com/@fielddaylab/learning-language-with-an-post-apocalyptic-survival-game-eco-pod-63efc90dc5a5#.242bkzqks" class="button xsmall"><span class="text">Read story</span> <span class="mediumlogo"><i class="fa fa-medium" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--end of main wrapper-->
</div>

<!--include footer-->
<?php include 'includes/footer.php';?>

<!--include modals-->
<?php include 'includes/modals.php';?>

<!--template js-->
<script>

//carousels
$('.carousel').carousel();
$('.ourwork').carousel({interval: false });

// toggle more partner logos
$('.partner-toggle').click(function(){
  $('partners').toggleClass('open');
});

// homepage scripts & scroll reveal elements & animations
var fastreveal = {
  delay    : 00,
  distance : '50px',
  easing   : 'ease-in-out',
  scale    : 1.1
};

var plainreveal = {
  delay    : 00,
  distance : '30px',
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

window.sr = ScrollReveal({ duration: 300, mobile: false});
sr.reveal('.reveal', fastreveal, { viewFactor: 0.3 });
sr.reveal('.slowreveal', slowreveal, { viewFactor: 0.3 });
sr.reveal('.revealfull', fastreveal, { viewFactor: 0.8 });
sr.reveal('.skylabreveal', skylabreveal);
sr.reveal('.plainreveal', plainreveal);
sr.reveal('.star', 90, { mobile: true });
sr.reveal('.blueprint-icon', 90);
sr.reveal('.blogpostreveal', 90);
sr.reveal('.processreveal', 30);
sr.reveal('.upreveal', upreveal);
sr.reveal('.dockreveal', skylabreveal, 200);
sr.reveal('.exhaustreveal', 90, { viewFactor: 0.1 });

$(function() {

    // Call Gridder
    $('.gridder').gridderExpander({
        scroll: true,
        scrollOffset: 100,
        scrollTo: "panel",                  // panel or listitem
        animationSpeed: 900,
        animationEasing: "easeInOutExpo",
        showNav: true,                      // Show Navigation
        nextText: "Next",                   // Next button text
        prevText: "Previous",               // Previous button text
        closeText: "Close",                 // Close button text
        onStart: function(){
            //Gridder Inititialized
        },
        onContent: function(){
            //Gridder Content Loaded
        },
        onClosed: function(){
            //Gridder Closed
        }
    });
});
</script>
</body>
</html>
