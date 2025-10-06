<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>Project Hercules - Field Day</title>
<meta name="description" content="A astronomy puzzle game set in a post apocolyptic future." />

<script>
window.onload = function()
{
  function detectMobile() {
    const toMatch = [
        /Android/i,
        /webOS/i,
        /iPhone/i,
        /iPad/i,
        /iPod/i,
        /BlackBerry/i,
        /Windows Phone/i
    ];
    return toMatch.some((toMatchItem) => {
        return navigator.userAgent.match(toMatchItem);
    });
}
  console.log("Mobile Device: " + detectMobile());
  if (detectMobile()) {
    button = document.getElementById("playButton");
    button.target="_self";
    button.href = "javascript:void(0)";
    button.classList.remove("filled");
    button.textContent = "Play on Desktop";
    console.log("In the if");
  }
};
</script>

</head>


<body class="singleapp projecthercules">

  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/main-nav.php";
  include_once($path); ?>

  <!-- Main Content -->
  <section class="app-hero">
    <div class="hero-content">
      <div class="info-panel">
        <ul class="breadcrumbs">
          <li><a href="/">Field Day</a></li>
          <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
          <li>Play</li>
          <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
          <li>Project Hercules</li>
        </ul>
      </div>
      <div class="app-info">
        <h1 class="app-title">Project Hercules</h1>
      </div>
      <div class="app-description">
        <p class="small">In Project Hercules, you play Astrid, an astronomer in the distant future, working to identify objects in the night sky and uncover the mystery of an impending celestial event.</p>
      </div>

      <div class="buttons">
        <a id="playButton" class="button small white filled" href="https://fielddaylab.wisc.edu/play/astrogame/ci/production/" target="_blank" onClick="window.open('https://fielddaylab.wisc.edu/play/astrogame/ci/production/','pagename','resizable,height=768,width=1024'); return false;">Play the game</a>
      </div>
    </div>
  </section>

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#glance">At a Glance</a></li>
            <li><a href="#academicstandards">Academic Standards</a></li>
            <li><a href="#ngssstandards">NGSS Standards</a></li>
            <li><a href="#partners">Partners</a></li>
          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">
        <h2 id="glance">At a Glance</h2>
        <p>Project Hercules is designed to spark excitement and curiosity about astronomy by communicating the professional practices of observational astronomers, including the use of instruments like visible telescopes, photometers, and spectrograms, as well as participation in a community of scientists. Players will learn about technologies of astronomical observation, the data they are able to collect, and the various types of celestial objects they allow us to study.</p>
        <h2 id="glance">Target Audience</h2>
        <ul>
          <li>Grade Level: 8-12</li>
        </ul>
        <h2>Time</h2>
        <p>The game includes six sections: a prologue, five “core” levels, a finale, and an epilogue. Many players can complete the game in 45-minutes. However, they can also use a save code to return to a game in progress, making it usable within a typical classroom context.</p>
        <h2 id="academicstandards">Academic Standards:</h2>
        <div class="standards-block">
            <div class="">
                <p class="small"><span class="bold">Terminology and Concepts: </span><br/>Develop an understanding of basic astronomy-based terminology and phenomena.</p>
                <p class="small"><span class="bold">Gather and Interpret Data:</span><br/>Gather and interpret astronomical data using a variety of tools. </p>
                <p class="small"><span class="bold">Compare and Contrast: </span><br/>Compare and contrast different types of celestial objects.</p>
                <p class="small"><span class="bold">Identify and Classify: </span><br/>Identify and classify different stars by their measured properties. </p>
                <p class="small"><span class="bold">Mathematical Deduction: </span><br/>Develop the ability to use a logic grid to solve multi-variable logic puzzles. </p>
            </div>
        </div>
        <h2 id="ngssstandards">NGSS Standards:</h2>
        <div class="standards-block">
            <div class="">
                <p class="small"><span class="bold">MS-ESS1-3. </span><br/>Analyze and interpret data to determine scale properties of objects in the solar system.</p>
                <p class="small"><span class="bold">Disciplinary Core Ideas - ESS1.A: </span><br/>The Universe and Its Stars.</p>
                <p class="small"><span class="bold">Disciplinary Core Ideas HS-ESS1-3.</span><br/>Communicate scientific ideas about the way stars, over their life cycle, produce elements.</p>
            </div>
        </div>
        <h2 id="partners">Partners</h2>
        <p>Project Hercules was created through a partnership between Field Day, The Department of Public Instruction, The Wisconsin IceCube Particle Astrophysics Center (WIPAC), and an amazing group of Wisconsin librarians and teachers. Special thanks to Jim Lattis and the Washburn Observatory (at UW-Madison).</p>
      </div>
    </div>
  </section>

  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/footer.php";
  include_once($path); ?>

  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/modals.php";
  include_once($path); ?>

</body>

</html>
