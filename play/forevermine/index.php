<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Field Day - Lost at the Forever Mine</title>
<meta name="description" content="In this Math Drama, Play a scientist who just crash-landed on an abandoned mining planet. With your oxygen dwindling, you must use mathematical models to predict how you can get enough fuel to escape before time runs out." />
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
};
</script>-->
</head>
<body class="singleapp forevermine">

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<!-- Main Content -->
<section class="app-hero">
  <div class="hero-content">
    <div class="info-panel">
      <ul class="breadcrumbs">
        <li><a href="/">Field Day</a></li>
        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
        <li>Play</li>
        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
        <li>Lost at the Forever Mine</li>
      </ul>
    </div>
    <div class="app-info">
      <h1 class="app-title">Lost at the Forever Mine</h1>
    </div>
    <div class="app-description"><p class="small">This space adventure brings mathematical modeling straight to the classroom. Made in partnership with the UW-MRSEC research center.</p></div>
    <div class="buttons">
      <a target="_blank" href="./game" class="button xsmall white filled">Play the Game</a>
      <a target="_blank" href="#teach" class="button xsmall white">Teach with the Game</a>
    </div>
  </div>
</section>
<!--<section id="app-intro">
  <h2>Lost at the Forever Mine</h2>
  <div class="iframe-bg" id="clickload" scrolling="no">
    <span class="playbutton"
      style="
        background-image: url(game/assets/play.png);
        background-size: cover;
        width: 300px;
        height: 95px;
        margin: 0 auto;
        display: block;
        margin-top: 400px;">
    </span>
  </div>
  <iframe id="content" scrolling="no" style="display:none; width:1024px; height:660px; margin:0px auto; overflow:hidden; border:0px;"></iframe>
</section>-->

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#glance">At a Glance</a></li>
        <li><a href="#about">About the Game</a></li>
        <li><a href="#teach">Teach with Lost at the Forever Mine</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="#production">Production Team</a></li>
        <li><a href="#source">Source Code</a></li>
        </ul>
      </div>
    </div>

    <div id="glance" class="col-sm-8 about-rightpanel">
      <h2 id="glance">At a Glance</h2>
      <ul>
        <li>Subject: Scientific Modeling </li>
        <li>Grades: 5-9 </li>
        <li>Playtime: 25-35 minutes </li>
        <li>Play from a web browser—no logins or downloads required</li>
        <li>Free to play </li>
      </ul>
      <h2 id="About">About the Game</h2>
      <p>You are a material scientist who just crash-landed on an abandoned mining planet. You’re out of fuel, and your suit’s oxygen is running low. You need to mine enough fuel to power your ship, or you won’t survive.</p>
      <p>You stumble into the old mining facility. That’s where you meet MAL, the mine’s Artificial Intelligence, who is thrilled to have someone to talk to. With MAL’s help, you’ll build scientific models to predict if you’re mining fast enough and what you need to do next. </p>
      <p>Each level puts the student in the role of the scientific modeler. Students will set up equations, work with graphs, input data, and use models to make predictions. Along the way, as obstacles keep popping up, students will experience how models are used as a tool to make decisions.</p>
      <p class="note">Note: For best compatibility, use Chrome</p>
      <h2 id="teach">Teach with Lost at the Forever Mine</h2>
      <a class="button small yellow filled" target="_blank" href="https://docs.google.com/document/d/1jDi1Otff-5r4LN8vPcJxZju1SjGcAyM07rnA0Hf-7zo/edit?usp=sharing">View the Teaching Guide</a>
      <p>Use Lost at the Forever Mine to introduce units on graphing or scientific modeling. The game was designed to help kids experience the need for math to make predictions. This story-based game gives a context to why graphing, math equations, and collecting data can help us solve problems.</p>
      <p>Try introducing a unit with this game. Let the kids figure out how the game works with little introduction. Remember, struggling to figure it out is part of the process. Games are safe places for struggle and failure to become part of the fun.</p>
      <h3>Learning Objectives</h3>
      <ul>
        <li>Models are tools for scientific inquiry that allow us to describe and predict complex phenomena</li>
        <li>Models must first fit known data before they are useful as prediction tools</li>
        <li>Models must be evaluated and refined</li>
      </ul>
      <h3>Teaching Standards</h3>
      <p>Developing and using models is one of the eight cross-cutting science and engineering practices in the NGSS Framework</p>
      <p>From the NGSS Framework: “Developing and Using Models. A practice of both science and engineering is to use and construct models as helpful tools for representing ideas and explanations. These tools include diagrams, drawings, physical replicas, mathematical representations, analogies, and computer simulations.”</p>
      <p>This game is designed as an introduction to mathematical models and their utility in describing and predicting phenomena.</p>
      <div class="row standards-block">
        <div class="col-sm-7">
          <p class="small"><span class="bold">MS-ETS1-4</span><br>Develop a model to generate data for iterative testing and modification of a proposed object, tool, or process such that an optimal design can be achieved.</p>
        </div>
        <div class="col-sm-5">
          <p class="small standards-explanation">This standard is met in the game by having the player iteratively improve the mining process such that an optimal design can be achieved and the player survives.</p>
        </div>
      </div>
      <h2 id="partners">Partners</h2>
      <ul>
        <li>Material Research Science & Engineering Center</li>
        <li>Wisconsin Department of Public Instruction</li>
      </ul>
      <h2 id="production">Production Team</h2>
        <h3>Executive Producer</h3>
        <ul><li>Anne Lynn Gillian-Daniel</li></ul>
        <h3>Producer</h3>
        <ul><li>David Gagnon</li></ul>
        <h3>Education Fellows Director</h3>
        <ul><li>Jim Mathews</li></ul>
        <h3>Creative Director</h3>
        <ul><li>Sarah Gagnon</li></ul>
        <h3>Software Development</h3>
        <ul><li>Philip Dougherty</li></ul>
        <h3>Graphic Design and User Interface</h3>
        <ul><li>Eric Lang</li></ul>
        <h3>Art & Animation</h3>
        <ul>
          <li>Reyna Groff</li>
          <li>Eric Lang</li>
          <li>Rodney Lambright II</li>
        </ul>
        <h3>Content</h3>
        <ul>
          <li>Anne Lynn Gillian-Daniel</li>
          <li>Matthew Stilwell</li>
          <li>David Gagnon</li>
        </ul>
        <h3>Content Consultants</h3>
        <ul>
          <li>Wendy Crone</li>
          <li>Amanda Smith</li>
          <li>Eli Towle</li>
          <li>Benjamin Afflerbach</li>
          <li>Tesia Janicki</li>
          <li>Marc Brousseau</li>
          <li>Noah Edelstein</li>
          <li>Sarah Sprangers</li>
          <li>MRSEC faculty, graduate students, and staff</li>
        </ul>
        <h3>Writing</h3>
        <ul>
          <li>Lindy Biller</li>
          <li>Sarah Gagnon</li>
          <li>Eric Lang</li>
          <li>Philip Dougherty</li>
        </ul>
        <h3>Original Music & Sound</h3>
        <ul><li>Cyril Peck</li></ul>
        <h3>Administration Support</h3>
        <ul>
          <li>Angel Cartagena</li>
          <li>Adam Chase</li>
          <li>Ahna Holliday</li>
          <li>Becki Kohl</li>
          <li>Jim Lyne</li>
        </ul>
        <h3>Testing and Design Feedback</h3>
        <ul>
          <li>Joe Rieder and the students of Wisconsin Rapids Public School</li>
          <li>Olivia Dachel and the students of Merril High School</li>
          <li>Jenny Karpelenia and the students of Bartles Middle School</li>
          <li>Marsella Aguila and the students of Waterford Graded School District</li>
        </ul>
      <h2 id="funding">Funding</h2>
      <ul>
        <li>NSF through the University of Wisconsin Materials Research Science and Engineering Center (DMR-1720415)</li>
        <li>Wisconsin Center for Education Research</li>
        <li>Wisconsin Department of Public Instruction</li>
      </ul>
      <h2 id="source">Source Code</h2>
      <p>Lost at the Forever Mine is an open-source project licensed under the <a target="_blank" href="https://opensource.org/licenses/MIT">MIT license</a> and is available at <a target="_blank" href="https://github.com/fielddaylab/forevermine">https://github.com/fielddaylab/forevermine</a></p>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
