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
          <li>ThermoVR</li>
        </ul>
      </div>
      <div class="app-info">
        <h1 class="app-title">ThermoVR</h1>
      </div>
      <div class="app-description">
        <p class="small">A VR experience that takes an abstract thermodynamics equation and transforms it into hands-on learning. </p>
        <p class="small">This project is an exciting partnership with John Pfotenhauer, Professor of Thermodynamics at UW-Madison</p>
      </div>

      <div class="buttons">
        <a class="button small white filled" href="#app-about">Learn More</a>
        <a class="button small white" href="https://medium.com/fielddaylab/from-abstract-to-hands-on-using-vr-to-teach-thermodynamics-b9ba78c73404?source=friends_link&sk=6abe3330567c7e9a8f239fbb79cdbcb1" target="_blank">Read the Story</a>
      </div>
    </div>
  </section>
  <!--<section id="app-intro">
  <h2>Welcome to Lakeland</h2>
  <div class="iframe-bg" id="clickload" scrolling="no" style="background-image: url(game/assets/menu-bg.jpg); background-size: cover;">

  </div>
  <iframe id="content" scrolling="no" style="display:none; width:1024px; height:660px; margin:0px auto; overflow:hidden; border:0px;"></iframe>
</section>-->

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#glance">At a Glance</a></li>
            <li><a href="#learninggoal">Learning Goal</a></li>
            <li><a href="#simulation">The Simulation</a></li>
          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">
        <h2 id="glance">What is it?</h2>
        <p>The Thermodynamics VR captures the Equation of State of water--a concept from undergraduate thermo classes--in a simulation that students can touch and see and manipulate. This project is an exciting partnership with John Pfotenhauer, Professor of Thermodynamics at UW-Madison, who uses the simulation with his intro-level students.</p>
        <h3>Quotes</h3>
        <p>“The idea of getting a picture in your mind [of the Equation of State] was the starting point. And then it evolved to, wouldn’t it be cool if you could experience it, and walk around in it?”
          <br />-John Pfotenhauer, Professor of Thermodynamics, UW-Madison
        </p>
        <p>“From a learning standpoint, this project is really elegant,” said David. “It’s not a big, flashy game. It does this one thing. It allows you to interface with the equation of state in what turned out to be a very usable, very natural way.”
          <br />-David Gagnon, Field Day Director
        </p>
        <h2 id="glance">At a Glance</h2>
        <ul>
          <li>Level: Undergraduate</li>
          <li>Free to Play</li>
          <li>Requires a VR Headset</li>
        </ul>
        <h2 id="learninggoal">Learning Goal</h2>
        <p>Introduction to the Thermodynamics Equation of State</p>
        <h2 id="simulation">The Simulation</h2>
        <p>Players stand in front of a virtual table and conduct experiments with a cylinder of water, a common example used in thermodynamics courses. Usually, the example is only theoretical. In the VR simulation, it becomes tactile and hands-on. Players can use tools on the table--a Bunsen burner, cooling coils, weights, balloons, and more--to alter the temperature, volume, and pressure of the substance and see how the water responds.</p>
        <h3>Partners/Funding</h3>
        <p class="note">The School of Engineering’s Education Innovation Award</p>
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