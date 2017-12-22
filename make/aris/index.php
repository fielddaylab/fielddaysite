<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Aris</title>
</head>

<body class="singleapp aris">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<section class="app-hero">
  <div class="hero-content">
    <div class="info-panel">
      <ul class="breadcrumbs">
        <li><a href="/">Field Day</a></li>
        <img class="breadcrumb-arrow" src="/assets/img/ui/breadcrumb-arrow.png">
        <li>Make</li>
        <img class="breadcrumb-arrow" src="/assets/img/ui/breadcrumb-arrow.png">
        <li>ARIS</li>
      </ul>
      <img class="logo-small" src="/assets/img/logos/aris-logo.png"></span>
    </div>
    <div class="app-info">
      <h1 class="app-title">ARIS</h1>
      <p class="app-tag">Create location-based games and stories</p>
    </div>
    <div class="app-description"><p class="small">Create mobile games, tours and interactive stories with ARIS games. Players experience a hybrid world of virtual characters and media in physical space.</p></div>
    <div class="buttons">
      <a target="_blank" href="https://itunes.apple.com/ca/app/aris/id371788434?mt=8" class="button xsmall white filled">Get ARIS</a>
      <a target="_blank" href="http://arisgames.org/editor" onclick="ga('send', 'event', 'Editor', 'Launch');" class="button xsmall white">Make Games</a>
      <a href="#learn" target="_blank" class="button xsmall white">Learn ARIS</a>
    </div>
  </div>
</section>
<section class="app-intro">
  <div class="row container">
    <div class="col-md-6 intro-text">
      <h2>What can I build with ARIS?</h2>
      <p class="small">With ARIS, you can build an interactive story, tour or game that takes the player Players can complete quests, collect items, and talk to virtual characters, all while exploring the world around them. </p>
      <a href="https://itunes.apple.com/ca/app/aris/id371788434?mt=8" target="_blank" class="button black xsmall">get ARIS</a>
    </div>
    <div class="col-md-6">
      <div id="Glide" class="glide">

      <div class="glide__wrapper">
        <ul class="glide__track">
          <li class="glide__slide"><img src="assets/img/iphone1.png"></li>
          <li class="glide__slide"><img src="assets/img/iphone2.png"></li>
          <li class="glide__slide"><img src="assets/img/iphone3.png"></li>
        </ul>
      </div>

      <div class="glide__bullets"></div>

      </div>
    </div>
  </div>
</section>

<section class="blogs">
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
          <div style="background:url('../../assets/img/thumbnails/blogthumb5.jpg'); background-size:cover;" class="thumb">
          </div>
          <div class="blogcontent">
            <h3 class="corrected">Teacher Craig Brumwell Designs a Mobile Game with ARIS to Create Emotional Impact for His Students</h3>
            <div class="row">
              <div class="col-md-8 brief">
                <p class="corrected">Craig used ARIS to create a situated documentary game called “Dilemma 1944” to convey the impact of the Second World War. In the game, players travel back to Kitsilano High School in Vancouver during WWII.</p>
                <a target="_blank" href="https://medium.com/@fielddaylab/designing-for-emotional-impact-the-making-of-dilemma-1944-19500f8adde8" class="button xsmall"><span class="text">Read story</span><span class="mediumlogo"><i class="fa fa-medium" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6  blogpost-wrap blogpostreveal">
        <div class="blogpost two">
            <div style="background:url('../../assets/img/thumbnails/blogthumb6.jpg'); background-size:cover;" class="thumb">
            </div>
          <div class="blogcontent">
            <h3 class="corrected">Beth Stofflet and Larry Moberly Take 250 Kids on an Adventure to Africa with ARIS</h3>
            <div class="row">
              <div class="col-md-8 brief">
                <p class="corrected">Seventh grade social studies teachers Beth Stofflet and Larry Moberly wanted to take their 250 kids to dozens of African nations — but since that wasn’t possible, they took them there virtually with a Field Day tool called ARIS.</p>
                <a target="_blank" href="https://medium.com/@fielddaylab/250-kids-adventure-through-africa-with-aris-5e455c96a901" class="button xsmall"><span class="text">Read story</span> <span class="mediumlogo"><i class="fa fa-medium" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="app-about">
  <div class="app-video">
    <div class="reveal embed-wrap">
       <div class='embed-container'>
         <iframe src='https://www.youtube.com/embed//tt6rn5fVnN4' frameborder='0' allowfullscreen></iframe>
      </div>
    </div>
    <p class="small">Situated Documentary ARIS (Dilemma 1944) </p>
  </div>


<div id="learn" class="row container aris-learn">
    <div class="col-sm-4 learn-card">
      <img src="assets/img/logo-thumb1.png">
      <h3>ARIS Manual</h3>
      <a href="http://manual.arisgames.org" onclick="ga('send', 'event', 'ARIS Manual', 'Click');" class="button white xsmall">Open Manual</a>
    </div>
    <div class="col-sm-4 learn-card">
      <img src="assets/img/logo-thumb2.png">
      <h3>Online Courses</h3>
      <a class="small" target="_blank" onclick="ga('send', 'event', 'Courses', 'Click', 'ARIS Basics');" href="https://fielddaylab.wisc.edu/courses/aris">ARIS Basics</a><br>
      <a class="small" target="_blank" onclick="ga('send', 'event', 'Courses', 'Click', 'ARIS AR');" href="https://fielddaylab.wisc.edu/courses/aris-ar">Augmented Reality</a><br>
      <a class="small" target="_blank" onclick="ga('send', 'event', 'Courses', 'Click', 'NeighborhoodTour');" href="https://fielddaylab.wisc.edu/courses/aris-neighborhood-tour">Neighborhood Tour</a>
    </div>
    <div class="col-sm-4 learn-card">
      <img src="assets/img/logo-thumb3.png">
      <h3>Forums</h3>
      <p class="small">Whether your are a beginner, have design questions or want to dive into more complicated technical question you can find help at the <a class="small" href="https://fielddaylab.wisc.edu/forums/viewforum.php?f=1" onclick="ga('send', 'event', 'Forums', 'Click');">ARIS Forums.</a></p>
    </div>
  </div>




  <div class="row container">
    <div class="col-sm-4">
      <img class="biglogo responsive" src="assets/img/aris-biglogo.png"></img>
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#about">About ARIS</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#make">Make Games with ARIS</a></li>
        <li><a href="#licensing">Licensing</a></li>
        <li><a href="#production">Production Team</a></li>
        <li><a href="#learn">Learn ARIS</a></li>
        </ul>
        <div class="buttons">
          <button class="button xsmall white filled">Get ARIS</button>
          <button class="button xsmall white">Learn More</button>
        </div>
      </div>
    </div>


    <div id="about" class="col-sm-8 about-rightpanel">
      <h2>About ARIS</h2>
      <p>ARIS works on iOS devices and requires an internet connection to play. ARIS consists of three pieces of software. </p>
      <ul>
        <li><a class="small" href="https://itunes.apple.com/ca/app/aris/id371788434?mt=8" target="_blank">Client</a> (The iOS App) - to play games and collect data</li>
        <li><a class="small" href="http://arisgames.org/editor/" onclick="ga('send', 'event', 'Editor', 'Launch');" target="_blank">Editor</a> - to make ARIS games.</li>
        <li>Server - Games live on a database in the cloud. The client and editor read from and write to it.</li>
      </ul>
      <h2 id="pricing">Pricing</h2>
      <p>ARIS is free for all to use. If your project begins to see more than 100 players monthy, or you need help designing or modifying ARIS, Contact us to setup a consultation.</p>
      <h2 id="features">Features</h2>
      <ul>
        <li>Player location (GPS)</li>
        <li>QR codes</li>
        <li>Bluetooth beacons (iBeacons)</li>
        <li>Image Recognition</li>
        <li>Augmented Reality</li>
        <li>Navigation of the on-screen map</li>
        <li>Alphanumeric codes</li>
        <li>Media collection</li>
        <li>Social interaction around media collection</li>
      </ul>
      <h2 id="make">Make Games with ARIS</h2>
      <p>ARIS Allows you to create Mobile Games, Interactive Stories, Scavenger Hunts, Tours and Data Collection Activities</p>
      <a class="button xsmall white" href="http://arisgames.org/editor/" onclick="ga('send', 'event', 'Editor', 'Launch');" target="_blank">Launch Editor</a>
      <h2 id="licensing">Licensing</h2>
      <p>ARIS Games is open-source under the MIT license and free to use. The MIT License is a permissive free software license.</p>
      <h2 id="production">Production Team</h2>
      <p class="small">David Gagnon, Phil Dougherty, Mike Tolly, Chris Holden, Eric Lang, Sarah Gagnon and Jim Mathews have worked formally and informally to bring you the ARIS software.</p>

      <p class="small">Special thanks to the following contributors: Kevin Alford, Carl Burnstein, Scott Morison, Julie Sykes, Kurt Squire, Chris Blakesley, Sean Dikkers, John Martin, Kevin Harris.</p>

      <p class="small">ARIS wouldn’t exist without the institutional support of the University of Wisconsin as well as from Engage, WID, WCER, Minnesota Historical Society, The Library of Congress Teaching with Primary Sources Initiative, the MacArthur Foundation, the Pearson Foundation, CASLS, Chippewa Valley Technical College and many others for years of investment and support.</p>
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

<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<script>
  var carousel = $('#Glide').glide({
    type: 'carousel',
    paddings: '20%',
    startAt: 1,
  });
</script>
</body>
</html>
