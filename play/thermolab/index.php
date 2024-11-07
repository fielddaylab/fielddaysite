<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>ThermoVR - Field Day</title>
<meta name="description" content="A VR experience that takes an abstract thermodynamics equation and transforms it into hands-on learning." />
<!--<script>
window.onload = function()
{
  var clickload = document.getElementById("clickload");
  var iframe = document.getElementById("content");

  function loadiframe()
  {
    iframe.style.display = "block";
    if(location.href.indexOf("?") > -1)
      iframe.src = "game/iframe.html"+location.href.substring(location.href.indexOf("?"))
    else
      iframe.src = "game/iframe.html";
    clickload.removeEventListener("click",loadiframe);
    clickload.parentNode.removeChild(clickload);
    clickload = null;
  }
  clickload.addEventListener("click",loadiframe);
  console.log("v0.0.1");
  loadiframe();
};
</script>-->
</head>

<body class="singleapp thermovr">

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
          <li>Thermo Lab</li>
        </ul>
      </div>
      <div class="app-info">
        <h1 class="app-title">Thermo Lab</h1>
      </div>
      <div class="app-description">
        <p class="small">ThermoLab is a thermodynamics simulator designed to introduce the Vapor Dome using a familiar Piston-Cylinder scenario. The simulation allows students to view a 3-dimensional graph of pressure, volume, and temperature while manipulating the cylinder properties, to gain a situated intuition for their relationships.</p>
      </div>

      <div class="buttons">
        <a class="button small white filled"  href="https://www.meta.com/experiences/6091561924275485/">Play on Quest</a>
        <a class="button small white filled"  href="https://fielddaylab.wisc.edu/play/thermovr/ci/desktop/">Play Online</a>
        <a class="button small white" href="https://forms.gle/9KZCfNm67EChs4yn9">How's it going?</a>
        <a class="button small white" href="https://medium.com/fielddaylab/from-abstract-to-hands-on-using-vr-to-teach-thermodynamics-b9ba78c73404?source=friends_link&sk=6abe3330567c7e9a8f239fbb79cdbcb1" target="_blank">Read the Story</a>
      </div>
    </div>
  </section>

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#glance">At a Glance</a></li>
            <li><a href="#simulation">The Simulation</a></li>
            <li><a href="#partners">Partners</a></li>
          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">
        <h2 id="glance">What is Thermo Lab?</h2>
        <p>We teamed up with professor emeritus and researcher John Pfotenhauer, to create a digital simulation for teaching undergraduate thermodynamics. The simulation, which can be played in VR or via a standard web browser, allows players to explore equations of state in a hands-on, tactile way. </p>
        <h2 id="glance">At a Glance</h2>
        <ul>
          <li>Target Audience: Post-secondary.</li>
          <li>Free to Play</li>
          <li>Virtual Reality(VR) version (Oculus Quest 2 and 3)</li>
          <li>Download the VR version for free via the Oculus Quest Store</li>
          <li>Desktop version is playable on any WebGL web browser, Chrome recommended </li>
        </ul>
        <h2 id="simulation">The Simulation</h2>
        <p>Explore the world of thermodynamics by conducting experiments using a water-based piston-cylinder apparatus. The simulation allows users to control a collection of tools: a bunsen burner, cooling coils, weights, stops, and environmental controls, to develop an intuitive understanding of thermodynamic processes. Players can choose to engage with the system in an open sandbox mode or through a series of labs that walk them through the key constructs associated with thermodynamics. The labs, which are each focused on a key concept, include: Properties and Regions, Boundaries and Points of Interest, and Cycles and Processes.</p>
        <h2 id="partners">Partners/Funding</h3>
        <p>ThermoLAB was created in collaboration with John Pfotenhauer (Professor Emeritus) in the College of Engineering at the University of Wisconsin - Madison. The content development team was John Pfotenhauer, Arganthaël Berson, Amelia Moser, and David Gagnon. Additional thanks goes to the subject expertise team including Jonathan Aurand, Ana Dyreson, Joonsik Hwang, Kenneth Katz, Sastry Pamidi and Venkata Avinash Paruchuri for their input on the design. </p>
        <h3>Funding</h3>
        <p>UW College of Engineering’s Education Innovation Award<br />
          National Science Foundation IUSE #2142103
</p>
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
