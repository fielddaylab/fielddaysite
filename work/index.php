<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Work with Field Day</title>
</head>

<body class="nav-fixed workwithus link-work">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

  <div id="mainwrapper">
    <section class="singlehero work_hero">
      <div class="info">
        <h1 class="corrected">Work with Field Day</h1>
        <p>We partner with researchers, labs and museums to engage the public with innovative digital media like augmented and mixed reality, games, youth digital media production, coding and </p>
        <a href="#how-we-work" class="button black small">Learn how we work</a>
      </div>
      <div class="graphic">
        <img class="cloud one hide-for-small" src="/assets/img/illustrations/cloud.png">
        <img class="cloud two hide-for-small" src="/assets/img/illustrations/cloud.png">

        <div class="starfield topright">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <div class="starfield topleft big">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <img class="spaceplane-illustration" src="/assets/img/illustrations/spaceplane-vertical.png">
        <div class="exhaustwrap">
          <img class="exhaust one" src="/assets/img/illustrations/exhaust.png">
          <img class="exhaust two" src="/assets/img/illustrations/exhaust2.png">
        </div>
        <div class="exhaustwrap two">
          <img class="exhaust one late" src="/assets/img/illustrations/exhaust.png">
          <img class="exhaust two late" src="/assets/img/illustrations/exhaust2.png">
        </div>
      </div>
    </section>
    <section id="how-we-work" class="how-we-work">
      <div id="carousel" class="carousel slide carousel-fade " data-ride="carousel">
          <div class="slide-wrap">
            <ul class="carousel-indicators slide-bullets">
                <li class="slide-bullet active" data-target="#carousel" data-slide-to="0">
                  <span class="bullet">1</span>
                  <span class="rule"></span>
                  <span class="bullet-caption">Let's Talk</span>
                </li>
                <li class="slide-bullet" data-target="#carousel" data-slide-to="1">
                  <span class="bullet">2</span>
                  <span class="rule"></span>
                  <span class="bullet-caption">Production</span>
                </li>
                <li class="slide-bullet" data-target="#carousel" data-slide-to="2">
                  <span class="bullet">3</span>
                  <span class="rule"></span>
                  <span class="bullet-caption">Distribution</span>
                </li>
                <li class="slide-bullet" data-target="#carousel" data-slide-to="3">
                  <span class="bullet">4</span>
                  <span class="bullet-caption">Evaluation</span>
                </li>
            </ul>
          </div>
          <!-- Carousel items -->
          <div class="carousel-inner">
              <div class="active item">
                <div class="info">
                  <span class="">Let's talk</span>
                  <h3>It starts with a conversation</h3>
                  <p class="small">Each project is unique so we like to start with a couple conversations. Share your goals and check out our portfolio. Some things you’ll learn about us: we always include teachers in our projects, we can help find funding.</p>
                  <button data-toggle="modal" data-target="#contactModal" class="button small white" >Work with Us</button>
                </div>
                <div class="graphic">
                  <img class="slideimg" src="/assets/img/illustrations/spaceplane-blueprint.png">
                </div>
              </div>
              <div class="item">
                <div class="info">
                  <span class="">Blast Off</span>
                  <h3>Project Kick-Off to Final Product</h3>
                  <p class="small">You will join us for a 1-2 day kick-off where we clarify the goals and the audience and design direction for our new project. We create a production schedule where you join us frequently. We design, test and evaluate at each phase of the project with you either in person or remotely. Our iterative design process includes our designers, your subject expertise and audience representatives  at each phase of the design. </p>
                  <button data-toggle="modal" data-target="#contactModal" class="button small white" >Work with Us</button>
                </div>
                <div class="graphic">
                  <img class="slideimg" src="/assets/img/illustrations/spaceplane-vertical.png">
                  <div class="exhaustwrap">
                    <img class="exhaust one" src="/assets/img/illustrations/exhaust.png">
                    <img class="exhaust two" src="/assets/img/illustrations/exhaust2.png">
                  </div>
                  <div class="exhaustwrap two">
                    <img class="exhaust one late" src="/assets/img/illustrations/exhaust.png">
                    <img class="exhaust two late" src="/assets/img/illustrations/exhaust2.png">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="info">
                  <span class="">Distribution</span>
                  <h3>How we get 100s of thousands of plays</h3>
                  <p class="small">We have a three part strategy for getting big play numbers. First, we give everything we make away to the public for free removing the cost barrier for play. Second we don’t require login for players which allows schools to use our games. Third, we network with public schools, public television, media outlets and large online distributors. Because of this we typically see hundreds of thousands of plays on our projects. <a href="https://datastudio.google.com/open/0B3XkHYR1Or_fMVdxOVZ6M3I2TEE" target="_blank">See live data from the Yard Games:</a></p>
                  <button data-toggle="modal" data-target="#contactModal" class="button small white" >Work with Us</button>
                </div>
                <div class="graphic">
                  <img class="slideimg" src="/assets/img/illustrations/ship-docked.png">
                </div>
              </div>
              <div class="item">
                <div class="info">
                  <span class="">Evaluation</span>
                  <h3>Learning from Big Data</h3>
                  <p class="small">At a bare minimum, we provide real time complex analytics for who, how long and when people play your game or app into every project we do. Our real passion comes from using these games an instruments to measure and understand learning. If the project budget allows, we are able to use this data as part of a larger research and evaluation protocol to understand what and how our audience is learning. These analysis lead to design revisions, academic publications and research grant proposals.</p>
                  <button data-toggle="modal" data-target="#contactModal" class="button small white" >Work with Us</button>
                </div>
                <div class="graphic fixed">
                  <img class="slideimg fixed" src="/assets/img/illustrations/mountainrange.png">
                </div>
              </div>
          </div>
          <!-- Carousel nav -->
      </div>
    </section>
    <section class="work-facts">

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

      <div class="fact">
        <div class="info">
          <img src="/assets/img/ui/dots.png">
          <h3>What Does a Game Cost?</h3>
          <p class="small">The entry point for our games start around $30,000. Where can you find tens or even hundreds of thousands of dollars? Well, we have a plan. We raise money in partnership with you through three methods. The first type of funding we look for is the Broader Impacts on your research grants. We work with you to design the Broader Impacts project and write the section of your grant. The next approach is through local university grants.  And finally if these approaches aren’t available we do a search of options for tech, education and public outreach grants. We work with you to find and write the grants.</p>
        </div>

        <div class="photo">
          <img src="/assets/img/hero-images/arishero.jpg">
        </div>
      </div>

    </section>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/ourstuff.php";  include_once($path); ?>

    <section class="workwithus">
      <div id="maincta" class="maincta">
        <img src="/assets/img/illustrations/spaceplane-flight.png">
        <h2 class="uppercase">Work with Us</h2>
        <p>We work with scientists, researchers, teachers, artists, story tellers, and all-around rad people to make things together to impact our communities.  </p>
        <button data-toggle="modal" data-target="#contactModal" class="button small white" >Work with Field Day</button>
      </div>
    </section>
  </div>


<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<script>
  $('.carousel').carousel({interval: false });

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
