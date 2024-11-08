<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>The Station: Maine - Field Day Learning Games</title>
<meta name="description" content="In The Station: Maine, students in rural Maine play location-based quests focused on four themes: Water, Forestry, Energy, and Food. Players visit GPS-based tour stops, collect field notes, and take photos to share their own observations." />
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

<body class="singleapp stationmaine">

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
          <li>The Station: Maine</li>
        </ul>
      </div>
      <div class="app-info">
        <h1 class="app-title">The Station:Maine</h1>
      </div>
      <div class="app-description">
        <p class="small">In The Station: Maine, students in rural Maine play location-based quests focused on four themes: Water, Forestry, Energy, and Food.</p>
        <p class="small">Made in partnership with Maine Math and Science Alliance</p>
      </div>
      <div class="buttons">
        <a class="button xsmall white filled" href="https://mmsa.org/stemports/">Learn More at MMSA</a>
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
            <li><a href="#gamestory">Game Story</a></li>
            <li><a href="#quests">The Quests</a></li>
          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">

        <h3>Teacher Quote:</h3>
        <p>“These students have walked this trail dozens of times on school trips, but [their teacher] had never seen them actually think about the place . . . It was amazing and so satisfying to see!”
          -Susannah Gorden-Messer, STEM Education Specialist at MMSA
        </p>
        <h2 id="glance">At a Glance</h2>
        <ul>
          <li>Grades: 6-9</li>
          <li>GPS-based</li>
          <li>Free to play </li>
          <li>Playable offline after download</li>
          <li>Requires a smartphone or tablet</li>
          <li>Only playable on location in Maine</li>
        </ul>
        <h2 id="gamestory">Game Story</h2>
        <p>You play an adventurer who just got invited to join a secret group of explorers and scientists. Your guide: a puffin who helps you in your quest, but mostly just wants snacks.</p>
        <h2>What you do:</h2>
        <ul>
          <li>take on quests at GPS-based locations called Science Stations</li>
          <li>visit GPS-based tour stops</li>
          <li>collect virtual notes hidden in caches</li>
          <li>sort the notes and grow your field guide</li>
          <li>take photos and make your own observations </li>
        </ul>
        <h2 id="quests">Quests</h2>
        <p>In The Station Maine, each quest starts at a partner location in rural Maine. The partner locations are organizations working on concrete solutions that most kids would never get to interact with at this level. The content of individual quests was created by scientists and STEM education specialists at MMSA and their partners. </p>
        <h3>Partners/Funding</h3>
        <p class="note">This game was created in partnership with MMSA.</p>
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
