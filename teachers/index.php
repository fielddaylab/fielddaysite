<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Teachers</title>
</head>

<body class="nav-fixed teachers link-work page">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

  <div id="mainwrapper">
    <section class="singlehero page_hero">
      <div class="info">
        <h1 class="corrected">Field Day is for teachers</h1>
        <p>Games aren’t just entertainment. They help kids learn. Join a community of teachers who teach with games.</p>
        <a href="#how-we-work" class="button white small">Learn More</a>
      </div>
      <div class="graphic">
        <img class="cloud one hide-for-small" src="/assets/img/illustrations/cloud.png">
        <img class="cloud two hide-for-small" src="/assets/img/illustrations/cloud.png">

        <div class="starfield topright hide-for-small">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <div class="starfield topleft big hide-for-small">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <img class="teachernaut float" src="/assets/img/illustrations/teachernaut.png">
        <img class="kidstronaut floatslow" src="/assets/img/illustrations/kidstronaut2.png">
        <img class="kidstronaut two float" src="/assets/img/illustrations/kidstronaut1.png">
        <img class="kidstronaut three floatslow" src="/assets/img/illustrations/kidstronaut3.png">
      </div>
    </section>
    <section class="threeup">
    <div class="card">
      <h2>Teach with our free apps and games</h2>
      <p class="small" >Honestly, a lot of the learning games online are pretty bad. We set out to research great learning games, but the kinds of games we were looking for didn’t even exist. So we make our own games and platforms. Check them out and see what you think. </p>
    </div>
    <div class="card">
      <h2>Learn how to teachwith games </h2>
      <p class="small" >Many online games reduce to flashy quizzes or concepts glued to unrelated activities. Great games allow a kid to explore and experiment with complex concepts in playful contexts.Together, we explore new ways to bring cutting-edge technology and theory to the classroom.</p>
    </div>
    <div class="card">
      <h2>Connect with Creative Teachers</h2>
      <p class="small" >We’re building a community of inspired teachers who know how to ignite their students’ curiosity. Good learning games aren’t a way to escape the world but to dive into exploring it.</p>
    </div>
    </section>
    <section class="page-facts">
      <div class="fact">
        <div class="info">
          <img src="/assets/img/ui/dots.png">
          <h3>We are a Research Lab</h3>
          <p class="small">At a bare minimum, we provide real time complex analytics for who, how long and when people play your game or app into every project we do. Our real passion comes from using these games an instruments to measure and understand learning. If the project budget allows, we are able to use this data as part of a larger research and evaluation protocol to understand what and how our audience is learning. These analysis lead to design revisions, academic publications and research grant proposals. </p>
        </div>
        <div class="photo">
          <img src="/assets/img/hero-images/arishero.jpg">
        </div>
      </div>

      <div class="fact">
        <div class="photo">
          <img src="/assets/img/hero-images/arishero.jpg">
        </div>
        <div class="info">
          <img src="/assets/img/ui/dots.png">
          <h3>What can we build together?</h3>
          <p class="small">Learning Games - short and long<br>Digital Field Guides<br>VR and AR experiences<br>Citizen Science Apps<br>Museum apps<br>Teacher Fellowships - Partner with us to work directly with a group of teachers.</p>
        </div>
      </div>
    </section>
    <section class="faq">
      <h2 class="uppercase centered header">Common Questions</h2>
      <div id="faq" class="carousel slide carousel-fade " data-ride="carousel">
        <div class=" questions">
          <ul class="carousel-indicators">
              <li class="active" data-target="#faq" data-slide-to="0">
                How are your games all offered free of charge?
              </li>
              <li class="" data-target="#faq" data-slide-to="1">
                Will this work for “real” teachers?
              </li>
              <li class="" data-target="#faq" data-slide-to="2">
                Can I get credit for Professional Development?
              </li>
              <li class="" data-target="#faq" data-slide-to="3">
                How much do you pay teachers for joining fellowships?
              </li>
          </ul>
        </div>
        <div class="answers carousel-inner">
          <div class="item active">
            <h3>Magic!</h3>
            <p class="small" >Really though, We partner with awesome researchers and institutions. They sponsor our work, so you don’t have to. If you see the Field Day name on something, it’s free for anyone to use. </p>
          </div>
          <div class="item">
            <h3>Yes.</h3>
            <p class="small" >We know it’s not enough to just offer free resources. We also work to make sure our tools work on the devices you use. We don’t require logins or downloads. Our games work from a browser. Our mobile citizen science and A/R apps require a mobile device. We build our fellowships around the needs and schedules of teachers.
  </p>
          </div>
          <div class="item">
            <h3>Totally!</h3>
            <p class="small" >We’ll help with whatever paperwork you need to get the credit requirement you need for your PD.
  </p>
          </div>
          <div class="item">
            <h3>It Depends</h3>
            <p class="small" >We know teachers work hard when they are in our fellowships. Each fellowship pays a different amount depending on the length and the available funds. Thank you for your professional insights. You make our work relevant to actual kids.
  </p>
          </div>
        </div>
      </div>
    </section>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/ourstuff.php";  include_once($path); ?>

  </div>

<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<script>
  $('#faq').carousel({interval: false });

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
