<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Discover Ice Cube</title>
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
      <a target="_blank" href="#app-about" class="button xsmall white filled">Learn More</a>
    </div>
  </div>
</section>

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
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

      <h2 id="production">Production Team</h2>
      <ul>
        <li>David Gagnon</li>
        <li>Kevin Ponto</li>
        <li>Phil Dougherty</li>
        <li>Eric Lang</li>
      </ul>
      <h2 id="source">Source Code</h2>
      <p>This is a MIT Licensed, Opensource project. We would love to have some help in developing new potentials. Contribute to the code at <a href="https://github.com/fielddaylab/icecube" target="_blank">https://github.com/fielddaylab/atomtouch</a></p>
      <h2 id="funding">Funding</h2>
      <p>funding info goes here</p>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
