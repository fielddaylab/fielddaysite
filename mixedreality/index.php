<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Mixed Reality</title>
</head>

<body class="singleapp page mixedreality">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<!--<div class="header-notification">
  <h4>looking for Aris? go <a href="/make/aris">here</a></h4>
</div>-->

  <div id="mainwrapper">
  <!--Start page content
  ------------------------>
  <section class="singlehero page_hero">
    <div class="info">
      <h1 class="corrected">Mixed Reality</h1>
      <p class="corrected">Use AR and VR to teach complex topics and create an immersive, memorable experience.</p>
      <a href="#mr_sections" class="button black filled small">What we've made</a>
    </div>
    <div class="graphic">
      <img class="floatslow" src="/assets/img/illustrations/mask.png">
    </div>
  </section>


    <section id="ourstuff" class="ourstuff">
      <div class="wrapper">
      <h1 class="section-title centered cap">What we've made</h1>
      <div id="mr_sections" class="slide carousel-fade">
          <ul class="carousel-indicators app-bullets">
              <li class="app-bullet" data-target="#mr_sections" data-slide-to="1">
                <h2 class="virtualreality_selector">Virtual Reality</h2>
              </li>            
              <li class="app-bullet active" data-target="#mr_sections" data-slide-to="0">
                <h2 class="augmentedreality_selector">Augmented Reality</h2>
              </li>
          </ul>
          <!-- Carousel items -->
          <div class="carousel-inner">
              <div class="active item">
                <p class="brief padding">Interested in using AR to design a unique learning experience? We’ve been exploring AR since the first iPhone was released in 2007. Games like Pokemon Go are wildly popular, but there is untapped potential in using AR for learning. We see exciting possibilities for AR in museums, K-12 education, municipalities,and more.<br></p>
                <!-- Gridder navigation -->
                <ul class="apps gridder">
                  <li class="gridder-list app-card" data-griddercontent="#ar-app1">
                    <img src="/assets/img/thumbs/siftr-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">Siftr</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app2">
                    <img src="/assets/img/thumbs/stationmaine-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">The Station:Maine</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app3">
                    <img src="/assets/img/thumbs/aris-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">ARIS</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app4">
                    <img src="/assets/img/thumbs/ptp-logo.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">Play the Past</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app8">
                    <img src="/assets/img/thumbs/viola-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">Viola</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app5">
                    <img src="/assets/img/thumbs/dowday-thumb.png" class="app-logo">
                    <div class="title">
                      <span class="title">Dow Day</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app9">
                    <img src="/assets/img/thumbs/arise-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">ARISE Nursing</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app7">
                    <img src="/assets/img/thumbs/sustainableu-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">Sustainable U</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">WeBird</span>
                    </div>
                  </li>
                </ul>
                <!-- Gridder content -->


              </div>
              <div class="item">
                <p class="brief">A lot of researchers and museums are curious about using VR for learning. At Field Day, we love designing VR experiences, and not just because VR is awesome. The situated nature of VR allows players to experience things that wouldn’t be possible in the real world.<br></p>

                <ul class="apps gridder">
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app10">
                    <img src="/assets/img/thumbs/thermovr_thumb.jpg" class="app-logo">
                    <div class="title">
                      <span class="title">ThermoVR</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app11">
                    <img class="app-logo" src="/assets/img/thumbs/icecube-thumb.jpg">
                    <div class="title">
                      <span class="title">Discover IceCube</span>
                    </div>
                  </li>
                  <li class="gridder-list app-card" data-griddercontent="#arvr-app12">
                    <img class="app-logo" src="/assets/img/thumbs/penguins-thumb.jpg">
                    <div class="title">
                      <span class="title">Waddle: A Penguin's Tale</span>
                    </div>
                  </li>
                </ul>

                <div id="arvr-app1" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>ARIS</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">Create mobile games, tours and interactive stories with ARIS games. Players experience a hybrid world of virtual characters and media in physical space. Anyone who can read can play and design these games. Used in classrooms or informally. IOS device required.</p>
                      <a class="button small black" href="/make/aris" target="_blank">Learn More</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/hero-images/arishero.jpg">
                  </div>
                </div>

                <div id="arvr-app2" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>The Station:Maine</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">In this Augmented Reality game, students in rural Maine play location-based quests focused on four themes: Water, Forestry, Energy, and Food. Players visit GPS_based tour stops, collect field notes, and take photos to share their observations. </p>
                      <hr />
                      <p class="note">Partners:  Maine Mathematics and Science Alliance, Vanderbilt University, Smart & Connected Communities Grant through the National Science Foundation.</p>
                      <a class="button small black" href="/play/thestationmaine/">Learn more</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img class="long" src="/assets/img/illustrations/station_screenshot.png">
                  </div>
                </div>

                <div id="arvr-app3" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>ARIS</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">Create mobile games, tours and interactive stories with ARIS games. Players experience a hybrid world of virtual characters and media in physical space. Anyone who can read can play and design these games. Used in classrooms or informally. IOS device required.</p>
                      <a class="button small black" href="/make/aris" target="_blank">Learn More</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/hero-images/arishero.jpg">
                  </div>
                </div>

                <div id="arvr-app4" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>Play the Past</h2>
                      <p class="notsupported">Minnesota History Museum in 2012. No longer supported. </p>
                      <p class="small">Play the Past was an AR game playable location at the Minnesota History Museum. The app, designed for grades 4-6, allowed kids to uncover stories, collect virtual items, and take on quests related to the exhibit’s topics of immigrations, transportation, mining, and more.</p>
                      <hr />
                      <p class="note">Partners: The Minnesota History Museum </p>
                      <a class="button small black" href="https://vimeo.com/438930774" target="_blank">Watch the video</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/thumbs/ptp-thumb.jpg">
                  </div>
                </div>

                <div id="arvr-app5" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>Dow Day</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">This Augmented Reality game transports players back to the time of the Vietnam War, when Dow Chemical visited UW-Madison to recruit students and peaceful protests escalated into violent conflicts. Players take on the role of a reporter working during the conflict.</p>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/thumbnails/dowday-thumbnail.jpg">
                  </div>
                </div>

                <div id="arvr-app6" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>WeBird</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">WeBird is an AR bird-identification game  that allows students to document sightings, record bird calls, take photos and videos, and share with others. The game was designed with Animal Science/Zoology researcher Mark Berres in 2013 and used with over 100 students at UW-Madison.</p>
                      <a class="button small black" href="https://medium.com/fielddaylab/webird-challenges-uw-students-to-see-who-can-discover-the-most-birds-fe5322207eb5" target="_blank">Read the Story</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img class="long" src="/assets/img/thumbnails/webird-thumbnail.jpg">
                  </div>
                </div>

                <div id="arvr-app7" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>Sustainable U</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">In Sustainable U, an Augmented Reality game about campus sustainability, a visitor from the future shows students a bleak future unless people take action on sustainability. The game takes players on an AR tour of campus, with the goal of inspiring them to see the familiar in a new light.</p>
                      <hr />
                      <p class="note">Partners:  The UW-Madison Office of Sustainability, The Educational Innovation Initiative </p>
                      <a class="button small black" href="https://sustainability.wisc.edu/mobile-game-explores-campus-sustainability/" target="_blank">Read the Story</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img class="long" src="/assets/img/thumbnails/sustainableu-thumbnail.jpg">
                  </div>
                </div>

                <div id="arvr-app8" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>Viola</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">We partnered with UW-Madison Biology professor Catherine Woodward to create a mobile app for plant-identification that is truly pocket-sized! Viola guides users through plant identification using illustrations, which also helps teach the different parts of plants.</p>
                      <hr />
                      <p class="note">WisFlora Database, UW-Madison Baldwin Grant</p>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img class="long" src="/assets/img/thumbnails/viola-thumbnail.jpg">                  </div>
                </div>

                <div id="arvr-app9" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>ARISE Nursing</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">We teamed up with Madison College to design an AR project to help train nursing students for patient care. ARISE uses simulations and games to help students visualize real situations and feel more emotionally involved with patients in a simulated environment. ARISE also includes games that allow nursing students to practice their skills at home.</p>
                      <hr />
                      <p class="note">Partners: The US Department of Labor’s Employment and Training Administration </p>
                      <a class="button small black" href="https://www.youtube.com/watch?v=O7urXDn88E4" target="_blank">Watch the Video</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img class="long" src="/assets/img/thumbnails/arise-thumbnail.jpg">
                  </div>
                </div>

                <div id="arvr-app10" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>ThermoVR</h2>
                      <p class="small">We teamed up with John Pfotenhauer, UW-Madison professor and researcher, to create this Virtual Reality simulation for teaching undergraduate thermodynamics. The game simulates the basic Equation of State used in classrooms across the country, allowing students to interact with this abstract concept in a hands-on, tactile environment.</p>
                      <hr />
                      <p class="note">Partners: UW-Madison School of Engineering</p>
                      <a class="button small black filled" href="/play/thermovr">Learn more</a>
                      <a class="button small black" href="https://medium.com/fielddaylab/from-abstract-to-hands-on-using-vr-to-teach-thermodynamics-b9ba78c73404?source=friends_link&sk=6abe3330567c7e9a8f239fbb79cdbcb1" target="_blank">Read the Story</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/thumbnails/thermovr-thumbnail.png">
                  </div>
                </div>

                <div id="arvr-app11" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>IceCube</h2>
                      <p class="small">The IceCube Virtual Reality experience puts you in the role of an astrophysicist. You will journey deep into space to track down the source of a neutrino detected by the IceCube observatory in Antarctica. Players learn about the IceCube observatory at the South Pole and the neutrinos they detect. Play at the Wisconsin Institute for Discovery in Madison, WI or download for your own VR device.</p>
                      <a class="button small black" href="/play/ice-cube" target="_blank">Learn about Discover IceCube</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/thumbs/icecube-thumb.png">
                  </div>
                </div>

                <div id="arvr-app12" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>Waddle: A Penguin's Tale</h2>
                      <p class="small">Our in-progress Penguins VR Project will allow players to experience life at the South Pole--as a penguin! We’re thrilled to be working with the Virtual Environments Lab and penguin research Jean Pennycook to create a fun, playful experience that introduces people to her NSF-funded work. </p>
                      <hr />
                      <p class="note">Partners: NSF, Wisconsin Institute for Discovery, Wisconsin IceCube Particle Astrophysics Center</p>
                      <a class="button small black" href="/play/waddle" target="_blank">Learn about Waddle</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img src="/assets/img/thumbnails/penguins-thumbnail.jpg">
                  </div>
                </div>

              </div>
              <div class="item">
                <ul class="apps gridder">
                  <li class="gridder-list app-card" data-griddercontent="#field-app1">
                    <img class="app-logo" src="/assets/img/logos/colored/siftr-logo.png">
                    <span>Siftr</span>
                  </li>
                </ul>

                <div id="ar-app1" class="app-expanded gridder-content">
                  <div class="app-info app-pane left">
                    <span class="close-app">
                      <h2>Siftr</h2>
                      <p class="notsupported">No longer supported</p>
                      <p class="small">Use Siftr to make fieldwork activities easy. Teachers take 5 minutes to create a Siftr and students use mobile devices to collect data and observations outside of the classroom. Siftr helps you focus students, organizes their data and creates automatic visualizations to facilitate discussions in classrooms or online.</p>
                      <a class="button small small black" href="http://siftr.org" target="_blank">Get Siftr</a>
                  </div>
                  <div class="app-thumbnail app-pane right">
                    <img class="long" src="/assets/img/thumbnails/siftr-thumbnail.jpg">
                  </div>
                </div>
              </div>
          </div>
          <!-- Carousel nav -->
      </div>
        </div>
    </section>


  <section id="page-facts" class="page-facts">
    <div class="wrapper">
      <div class="astrovr_wrap">
        <img src="/assets/img/illustrations/stars1.png" alt="gold star accent" class="stars stars1">
        <img src="/assets/img/illustrations/astrovr.png" alt="floating astronaut wearing a virtual reality headset" class="astrovr floatslow centered">
        <img src="/assets/img/illustrations/stars1.png" alt="gold star accent" class="stars stars2">
      </div>
      <h1 class="section-title centered cap">Let’s make a mixed reality game together!</h1>
      <div class="fact">
        <div class="info">
          <h3 class="nocap">What does a VR Project Cost?</h3>
          <p class="small">VR projects start at about $100K and can go to the millions. We’ll meet with you for free to determine the scope of your project. Most of our partners are funded through research grants. Others work with us to develop a concept and raise funds. </p>
          <p>As part of WCER, we have access to a full grant-writing team. We can help you with the Broader Impacts portion of your grant or build a grant around your VR project. Step one is to reach out and set up a meeting! We’re excited to partner with you.</p>
        </div>
        <div class="photo">
          <img class="mr_coins responsive" alt="illustrations of floating coins" src="/assets/img/illustrations/coins.png">
        </div>
      </div>

      <div class="fact">
        <div class="photo">
          <img class="station_screenshot responsive" alt="image of the AR game The Station:Maine" src="/assets/img/illustrations/station_screenshot.png">
        </div>
        <div class="info">
          <h3 class="nocap">Your next Augmented Reality Game: <br />Powered by Field Day</h3>
          <p>Our customizable game and design platform is centered around community-based quests. Players collect virtual notes spawned on their map. learn about key concepts, visit stops, and make observations. Think Pokemon GO, but for learning.</p>
          <hr />
          <h4>How much does it cost?</h4>
          <p>Cost depends on how you’d like to use it. There are different tiers of involvement, from simply customizing your own quests to partnering with us to rebrand the platform with unique art, characters, and story. We’re looking for people interested in testing and prototyping. If you’re familiar with ARIS and have worked with us before, reach out to us.</p>
          <p class="supersmall note">Partners: Vanderbilt University, Smart & Connected Communities Grant through the National Science Foundation</p>
          <a href="/work" class="button pink filled small">Have an idea? Let's talk!</a>
        </div>
      </div>
    </div>
  </section>
  <section class="whataboutaris">
    <div class="container">
      <img class="centered" src="/assets/img/logos/aris-logo-dark.png">
      <h2 class="section-title centered cap">What about Aris?</h2>
      <p>ARIS was our popular AR game design platform. Over the last decade, we’ve loved seeing the creative ways that researchers and educators have used ARIS all over the world. (See our Past Projects below for some awesome ARIS projects.)</p>
      <br />
      <p>In 2020, we made the difficult decision to stop supporting this platform. ARIS might still work on older operating systems, but it has the potential to stop working at any time.</p>
      <br />
      <p>What’s next? There isn’t a tool that directly replaces ARIS, which leaves a gap for many designers. But we haven’t given up on AR. Siftr includes the field collection elements from ARIS. The Station, also focused on fieldwork, is a customizable game with quest-driven mechanics. We’ll continue to share new opportunities for collaborative design projects. </p>
      <br />
      <a class="button small black" href="/make/aris" target="_blank">Learn More</a>

    </div>
  </section>




  <!----------------------
  End page content -->
  </div>

<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<script>
$('.augmentedreality_selector').click(function(){
  $('#ourstuff').addClass('augmentedreality_selected');
  $('#ourstuff').removeClass('virtualreality_selected');
});

$('.virtualreality_selector').click(function(){
  $('#ourstuff').addClass('virtualreality_selected');
  $('#ourstuff').removeClass('augmentedreality_selected');
});

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
