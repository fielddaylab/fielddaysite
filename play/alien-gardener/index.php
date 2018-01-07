<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Field Day - Alien Gardener</title>
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
<body class="singleapp aliengardener">

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
        <li>Alien Gardener</li>
      </ul>
      <img class="logo-small" src="/assets/img/logos/aliengardener.png"></span>
    </div>
    <div class="app-info long-title">
      <h1 class="app-title">Alien Gardener</h1><span class="coming soon">coming soon</span><br>

      <p class="app-tag"> You’re humanity’s most important gardener… and it’s up to you to help astronauts survive.</p>
    </div>
    <div class="app-description"><p class="small">The IceCube VR experience puts you in the role of an astrophysicist who journeys deep into space to track down the source of a neutrino detected by the IceCube observatory in Antarctica.

</p></div>
    <div class="buttons">
      <a target="_blank" href="#app-about" class="button xsmall white filled">Learn More</a>
    </div>
  </div>
  <span class="grad"></span>
</section>

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#how">How to Play</a></li>
        <li><a href="#topics">Educational Topics</a></li>
        <li><a href="#standards">Standards</a></li>
        <li><a href="#production">Production Team</a></li>
        </ul>
      </div>
    </div>

    <div id="about" class="col-sm-8 about-rightpanel">
      <h2>Alien Gardener</h2> <span class="small comingsoon">Coming soon</span>
      <p>You are a biosphere scientist based on Earth — it’s your job to research optimal growing conditions for an EcoCELL on the alien world. The lives of the astronauts colonizing other planets depends on your success. If you fail, the astronauts are at risk. If you succeed, the colonies of this new planet can grow and flourish.</p>
      <p>While on Earth, you will simulate the growing conditions that the astronaut gardeners experience so you can create experiments to help understand their unique growing conditions. Based on the insights you gain from your experiments, you can recommend that the astronauts adjust variables like water, sunlight, oxygen, soil composition, and more, to improve crop output or to provide some other key benefit.
</p>
      <p>Alien Gardner will be available on all platforms and systems with an internet connection. The game can be played in 30 minutes.</p>
      <h2 id="how">How to Play</h2>
      <p>Alien Gardner will be available on all platforms and systems with an internet connection. The game can be played in 30 minutes.
</p>
      <h2 id="topics">Educational Topics</h2>
      <p>Alien Gardener is an educational game to communicate the scientific uses of the EcoCELLs at the Desert Research Institute (DRI) to the public. Topics covered by this game include the scientific method, problem solving, how to make decisions based on data; biospheres, biology, EcoCELLs, botany, space travel, the solar system, and other topics.</p>
      <h2 id="standards">Standards</h2>
      <p>The game will address Next Generation Science Standards including, but not limited to:</p>
<p class="small">HS-ESS3-2: Evaluate competing design solutions for developing, managing, and utilizing, energy and mineral resources based on cost benefit ratios.</p>
<p class="small">HS-ESS3-3: Create a computational simulation to illustrate the relationship!s among management of natural resources, the sustainability of human populations, and biodiversity.</p>
</p>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
