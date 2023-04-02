<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>Headlines and High Water - Field Day</title>
<meta name="description" content="A journalism adventure game in a the charming, but flooded, city of Twin Lakes." />
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

<body class="singleapp headlines">

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
        <p class="small">In Headlines and High Water,  players take on the role of a young journalist in the fictional town of Twin Lakes, where the annual Cherry Festival is thrown into chaos by a catastrophic flood. The player is tasked with interviewing locals and writing stories to keep the town informed—all while staying safe during the town’s worst flood of the century.</p>
      </div>

      <div class="buttons">
        <a class="button small white filled" href="https://fielddaylab.wisc.edu/play/journalism/ci/production/" target="_blank" onClick="window.open('https://fielddaylab.wisc.edu/play/journalism/ci/production/','pagename','resizable,height=660,width=1024'); return false;">Play the game</a>
        <a class="button small white" href="#app-about">Learn More</a>
      </div>
    </div>
  </section>

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#glance">At a Glance</a></li>
            <li><a href="#gameplay">Gameplay</a></li>
            <li><a href="#learninggoals">Learning Goals</a></li>

          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">
        <h2 id="glance">At a Glance</h2>
        <p>In Headlines and High Water,  players take on the role of a young journalist in the fictional town of Twin Lakes, where the annual Cherry Festival is thrown into chaos by a catastrophic flood. The player is tasked with interviewing locals and writing stories to keep the town informed—all while staying safe during the town’s worst flood of the century.</p>
        <p>Throughout the game, players build trust with the townspeople and interview a cast of quirky characters—like Birdie, the aptly-named nature conservationist, and Fred Finkler, the gardener who’ll talk your ear off. In the end, the player’s reporting will determine if Twin Lakes is still around a year from now, or if future floods wash the town right off the map.</p>
        <h2 id="glance">Target Audience</h2>
        <ul>
          <li>Grades 6-9 </li>
        </ul>
        <h2>Content Areas</h2>
        <ul>
          <li>Journalism</li>
          <li>Media Literacy</li>
          <li>Science</li>
          <li>Social Studies</li>
          <li>Language Arts</li>
        </ul>
        <h2>Time</h2>
        <p>The game includes six levels.  Each level takes approximately 10-20 minutes to play. Most players can complete the game in 2, 45-minute class periods, but Players can save their progress and return to the game, making it usable within a typical classroom context.</p>
        <h2 id="gameplay">Gameplay</h2>
        <p>In this text-based, choose-your-adventure style game, players take on the role of a journalist in the small town of Twin Lakes. When a major flood hits, the player must write news stories for every stage of the disaster:</p>
        <ul>
          <li>Breaking news stories that communicate urgent, life-saving information to the public</li>
          <li>Science-based pieces about flood causes and prevention</li>
          <li>Equity-focused stories that examine equity issues and possible solutions</li>
        </ul>
        <p>By covering these topics, players learn what components are required for different types of stories. They gather quotes, facts, photos, statistics, diagrams, and anecdotes. After each story, players receive a score based on the quality and breakdown of their piece, and they see (through art and feedback) how their story affected people in the town.</p>
        <h2 id="learninggoals">Learning Goals</h2>
        <h3>Media Literacy</h3>
        <p>The Journalism Game includes crosscutting concepts and can be used for teaching science and media literacy. The third and fourth news stories, in particular, focus on the scientific study of flooding, watersheds, and climate change, while the game as a whole introduces players to the process of fact-finding and how journalistic knowledge is created. Players learn about what goes into crafting a news story, including:</p>
        <ul>
          <li>Interviews with experts</li>
          <li>Interviews with bystanders/citizens</li>
          <li>Online research</li>
          <li>Making on-site observations</li>
          <li>Fact checking with credentialed experts</li>
        </ul>
        <p>Through their choices, players can also witness the consequences of cutting corners and failing to check their sources, ranging from losing public trust to getting fired from their job. </p>
        <h3>Science Content</h3>
        <p>This game, and especially the third and fourth news stories, explores topics of flooding, urban planning, wetlands, and climate change. Players learn about the factors that have contributed to flooding in the fictional town of Twin Lakes. This includes the impact of wetland destruction and increased rainfall brought on by climate change. In the course of writing their stories, the player character interviews limnology professors and researchers, DNR experts, and wetland experts and conservationists.</p>
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
