<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Teachers</title>
</head>

<body class="nav-fixed teachers link-teachers page">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

  <div id="mainwrapper">
    <section class="singlehero page_hero">
      <div class="info">
        <h1 class="corrected">Field Day is for teachers</h1>
        <p class="corrected">Games aren’t just entertainment. They help kids learn. Join a community of teachers who teach with games.</p>
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
        <img class="teachernaut float" src="/assets/img/illustrations/teachernaut.png">
        <img class="kidstronaut floatslow" src="/assets/img/illustrations/kidstronaut2.png">
        <img class="kidstronaut two float" src="/assets/img/illustrations/kidstronaut1.png">
        <img class="kidstronaut three floatslow" src="/assets/img/illustrations/kidstronaut3.png">
      </div>
    </section>
    <section id="how-we-work" class="threeup">
    <div class="card">
      <h2>Teach</h2>
       <h3>Use our free games and apps</h3>
      <p class="small" >We apply the best learning theory from the University of Wisconsin games and learning research to design games for your classroom. Our games and apps are free and available online.</p>
    </div>
    <div class="card">
      <h2>Learn</h2>
      <h3>Join our courses and fellowships</h3>
      <p class="small" >Use our courses and fellowships to find games and tools that work in your classroom. We want to help you become a master teacher with this new media.</p>
    </div>
    <div class="card">
      <h2>Connect</h2>
      <h3>Sign up to get connected</h3>
      <p class="small" >We’re building a community of teachers who are willing to try new things, even when it’s messy. Join Field Day to get updates about meetups, events, fellowships and new games.</p>
    </div>
    </section>
    <section class="page-facts">
      <div class="fact">
        <div class="info">
          <img src="/assets/img/ui/dots.png">
          <h3>Courses and forumns</h3>
          <p class="small">Teachers use games and simulations for a reason: they’re awesome! But sometimes it’s hard to know where to start. Get support by joining our courses and forums.</p>
          <a class="button black xsmall" href="https://fielddaylab.wisc.edu/courses/" target="_blank">Online Courses</a>
          <a class="button black xsmall" href="https://fielddaylab.org/forums/" target="_blank">Forums</a>
        </div>
        <div class="photo">
          <img src="/assets/img/callouts/teacher-thumb2.jpg">
        </div>
      </div>

      <div class="fact">
        <div class="photo">
          <img src="/assets/img/callouts/teacher-group.jpg">
        </div>
        <div class="info">
          <img src="/assets/img/ui/dots.png">
          <h3>Professional Development</h3>
          <p class="small">Our program is aligned with the most current research on effective professional development. We recruit a cohort of the best teachers in Wisconsin to participate in a mix of face-to-face and online activities over a period of months. As a teacher fellow, you’ll implement an innovative teaching practice in your classroom. We help teachers leverage new technologies and teaching approaches. Each cohort will produce courses, games or designs that benefit other teachers on a national scale.</p>
          <a href="https://fielddaylab.wisc.edu/fellowships/" class="button black xsmall" target="_blank">Join a Fellowship</a>
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
            <p class="small" >We know it’s not enough to just offer free resources. We also work to make sure our tools work on the devices you use. We don’t require logins or downloads. Our games work from a browser. Our mobile citizen science and AR apps require a mobile device. We build our fellowships around the needs and schedules of teachers.
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
