<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>Atom Touch - Field Day</title>
<script>
  function playContent() {
    document.getElementById("content_play").innerHTML = "";
    document.getElementById("content_play").style.display = "none";
    document.getElementById("content").src = "build/iframe.html";
    document.getElementById("content").style.display = "block";
  }
</script>
</head>

<body class="singleapp atomtouch">

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
          <li>Atom Touch</li>
        </ul>
        <img class="logo-small" src="../../assets/img/logos/atomtouch-logo.png"></span>
      </div>
      <div class="app-info">
        <h1 class="app-title">Atom Touch</h1>
        <p class="app-tag">Explore the Atomic World</p>
      </div>
      <div class="app-description">
        <p class="small">AtomTouch is a molecular simulation app, created through a partnership between UW MRSEC and Field Day Lab, that allows learners to explore principles of thermodynamics and molecular dynamics in a tactile, exploratory way.

        </p>
      </div>
      <div class="buttons">
        <a target="_blank" href="#app-intro" class="button xsmall white filled">Play Atom Touch</a>
        <a target="_blank" href="#app-about" class="button xsmall white">Learn about Atom Touch</a>
      </div>
    </div>
  </section>
  <section id="app-intro">
    <div id="content_play" style="width:880px; height:660px;" onclick="playContent()"><span class="button white filled">Play Atom Touch</span></div>
    <iframe id="content" scrolling="no" style="width:1280px; height:800px; display:none; margin:10px auto; overflow:hidden; border:0px;" src="build/null.html"></iframe>
    <!-- <h2>You can also download atom touch: </h2>
    <a href="https://itunes.apple.com/us/app/atomtouch/id1022112547?mt=8" target="_blank"><img class="play-button" src="/assets/img/buttons/apple-badge.png"></a>
    <a href="https://play.google.com/store/apps/details?id=edu.wisc.wid.fielddaylab.atomtouch&hl=en" target="_blank"><img class="play-button" src="/assets/img/buttons/google-play-badge.png"></a> -->
  </section>

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#standards">Standards</a></li>
            <li><a href="#support">Teacher Support</a></li>
            <li><a href="#features">Production Team</a></li>
            <li><a href="#source">Source Code</a></li>
            <li><a href="#funding">Funding</a></li>
          </ul>
        </div>
      </div>

      <div id="about" class="col-sm-8 about-rightpanel">
        <h2>About Atom Touch</h2>
        <p>AtomTouch is a molecular simulation app, created through a partnership between UW MRSEC and Field Day Lab. It allows learners to explore principles of thermodynamics and molecular dynamics in a tactile, exploratory way. The simulation was developed to help students understand the structures and attributes of particles at the molecular level, providing real-time feedback and responding to students’ actions.</p>
        <h2 id="standards">Aligned with Standards</h2>
        <p>AtomTouch can be used to address the Next Generation Science Standards in multiple curricular units, including:</p>
        <ul>
          <li>States and Properties of Matter</li>
          <li>Predicting and modeling how atoms behave as materials change state</li>
          <li>Figure out the most stable structure for a molecule</li>
          <li>Atomic and molecular Theory</li>
          <li>Physical and Chemical Interactions</li>
          <li>Properties of atoms, molecules, and matter</li>
          <li>Size and Scale</li>
        </ul>
        <h2 id="support">Teacher Support</h2>
        <p>Download the <a href="Teacher-Guide-for-the-Free-AtomTouch-App.docx" target="_blank">Teacher Guide</a> and the <a href="Atomtouch_teacherslides_ieg_1_2016.pptx" target="_blankg">Powerpoint Slides for Class.</a></p>
        <h2 id="features">Features</h2>
        <ul>
          <li>Lennard Jones and Buckingham Simulation Engine</li>
          <li>Create molecules from Cu, Au, Pt, Na and Cl</li>
          <li>Change thermodynamics properties</li>
          <li>Control time</li>
          <li>Experiment with the potential energy, finding stable geometries</li>
          <li>Watch the process of melting and vaporizing</li>
        </ul>
        <h2 id="production">Production Team</h2>
        <ul>
          <li>Anne Lynn Gillian-Daniel (Education Lead)</li>
          <li>Dane Morgan (Simulation Lead)</li>
          <li>David Gagnon (Production Lead)</li>
          <li>Ben Hansen (Unity Software Engineer)</li>
          <li>Yucheng Tu (Unity Software Engineer)</li>
          <li>Amirhossein Davoody (Lead Simulation Software Engineer)</li>
          <li>Justin Moeller (Software Engineer)</li>
          <li>Ben Taylor (User Testing, Educational Design)</li>
          <li>Izabela Szlufarska (MRSEC Inderdisciplinary Computational Group Lead)</li>
          <li>Eric Peterson (3d Modeling, Animation, UX Design)</li>
          <li>Tyler Anlauf (3d Modeling, Graphic Design, UX Design)</li>
          <li>Tam Mayeshiba (Simulation Software Engineer)</li>
          <li>Henry Wu (Simulation Software Engineer)</li>
          <li>Kritika Rai (Software Engineer)</li>
          <li>Anup Rathi (Software Engineer)</li>
        </ul>
        <h2 id="source">Source Code</h2>
        <p>This is a MIT Licensed, Opensource project. We would love to have some help in developing new potentials. Contribute to the code at <a href="https://github.com/fielddaylab/atomtouch" target="_blank">https://github.com/fielddaylab/atomtouch</a></p>
        <h2 id="funding">Funding</h2>
        <p>This research was primarily supported by NSF through the University of Wisconsin Materials Research Science and Engineering Center (DMR-1121288)</p>
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