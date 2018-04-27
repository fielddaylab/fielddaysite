<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Field Day - Discover Ice Cube</title>
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
<body class="singleapp icecube">

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<!-- Main Content -->
<section class="app-hero">
  <div class="hero-content">
    <div class="info-panel">
      <ul class="breadcrumbs">
        <li><a href="/">Field Day</a></li>
        <img class="breadcrumb-arrow" src="/assets/img/ui/breadcrumb-arrow.png">
        <li>Play</li>
        <img class="breadcrumb-arrow" src="/assets/img/ui/breadcrumb-arrow.png">
        <li>Discover Ice Cube</li>
      </ul>
    </div>
    <div class="app-info long-title">
      <h1 class="app-title">Discover Ice Cube</h1><br>
      <p class="app-tag">Chasing down the most extreme objects in the universe from the South Pole</p>
    </div>
    <div class="app-description"><p class="small">The IceCube VR experience puts you in the role of an astrophysicist who journeys deep into space to track down the source of a neutrino detected by the IceCube observatory in Antarctica.

</p></div>
    <div class="buttons">
      <a href="https://github.com/fielddaylab/ICECUBEVR/releases" target="_blank" target="_blank" class="button xsmall white filled">Download</a>
      <a href="#app-video" class="button xsmall white">Watch Video</a>
      <a href="#app-about" class="button xsmall white">Learn More</a>
    </div>
  </div>
</section>

<section class="app-about">
  
  <div id="app-video" class="app-video">
    <div class="reveal embed-wrap">
      <div class='embed-container'>
        <iframe src="https://player.vimeo.com/video/251570914" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div id="app-about" class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#goal">Goal</a></li>
        <li><a href="#objectives">Learning Objectives</a></li>
        <li><a href="#museums">Museums</a></li>
        <li><a href="#production">Production Team</a></li>
        <li><a href="#source">Source Code</a></li>
        <li><a href="#funding">Funding</a></li>
        </ul>
      </div>
    </div>

    <div id="about" class="col-sm-8 about-rightpanel">
      <h2>About Discover Ice Cube</h2>
      <p>The IceCube VR experience puts you in the role of an astrophysicist who journeys deep into space to track down the source of a neutrino detected by the IceCube observatory in Antarctica. At the research station at the South Pole, you will see the large instrument, buried in the ice, detect a mesage from across the universe. Using your “impossibility drive,” you will follow the neutrinos path back to the black hole it was emitted from.
Along the way, you will be able to take in awe inspiring views from the edge of the solar system, looking back from the milky way and dangerously close to a black hole. You will be able to see using not only your normal visible spectrum, but also using X-ray vision and neutrino vision, revealing entirely different views of space.
</p>
      <h2 id="goal">Goal, Audience and Context</h2>
      <p>Explain the exciting, but hard to understand research taking place by the NSF funded IceCube project to middle-school and higher aged public audiences in museum contexts.</p>

      <h2 id="objectives">Learning Objectives</h2>
      <ul>
        <li>IceCube is a research project in Antartica that studies the universe by detecting Neutrinos</li>
        <li>Neutrinos are very interesting particles that usually pass right through matter and allow us to detect extreme objects like black holes.</li>
      </ul>
      
      <h2 id="museums">Museums</h2>
      <p>We are looking for additional museums who would like to put this VR experience on exhibit. Feel free to use it right now, no strings attached. Better yet, reach out by clicking "Work With Us" if you would like a consultation or would like to discuss customization.</p>


      <h2 id="production">Production Team</h2>
      <ul>
        <li>Kevin Ponto : Principal Investigator</li>
        <li>David Gagnon : Production Managment, Audio Engineering</li>
        <li>Sarah Gagnon : Art Direction</li>
        <li>Phil Dougherty : Software Engineering</li>
        <li>Eric Lang : UI/UX, 2d Art</li>
        <li>Eric Peterson : 3d Modeling. 3d Lighting</li>
        <li>Lindy Biller : Script Writing</li>
        <li>Andrew Fitzpatrick : Music, Sound</li>
        <li>Ross Tredinnick : Design Consulting, Playtesting Coordination</li>
        <li>Silvia Bravo : Subject Expert</li>
        <li>James Madsen : Subject Expert</li>
        <li>Rebecca Cors : Evaluation</li>
      </ul>
      
      <h2 id="source">Source Code</h2>
      <p>This is a MIT Licensed, Opensource project. We would love to have some help in developing new potentials. Contribute to the code at <a href="https://github.com/fielddaylab/ICECUBEVR" target="_blank">https://github.com/fielddaylab/ICECUBEVR</a></p>
      
      <h2 id="funding">Funding</h2>
      <img src="/assets/img/logos/colored/nsf1.jpg">
      <p>This project was funded by NSF OPP #1612504</p>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
