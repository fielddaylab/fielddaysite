<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>
<title>Water Cycle Game - Field Day</title>
<meta name="description" content="- Field Day">
</head>

<body class="singleapp yard water-game">
  <!--include Main Navigation
------------------------>
  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/main-nav.php";
  include_once($path); ?>

  <div id="mainwrapper">
    <!--Start page content
  ------------------------>
    <section class="app-hero">
      <div class="hero-content">
        <div class="info-panel">
          <ul class="breadcrumbs">
            <li><a href="/">Field Day</a></li>
            <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
            <li>Play</li>
            <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
            <li>Water Cycle Game</li>
            <a class="app-logo" target="_blank" href="https://theyardgames.org/"><img src="/assets/img/logos/yard-logo.png" /></a>
          </ul>
        </div>
        <div class="app-info">
          <h1 class="app-title">Water Cycle Game</h1>
        </div>
        <div class="app-description">
          <p class="small">
            This game introduces kids to the water cycle! Made with our partners at Wisconsin DPI and Wisconsin Virtual Schools.
          </p>
        </div>
        <div class="buttons">
          <!-- <a target="_blank" href="https://pbswisconsineducation.org/emerald/about/" class="button xsmall white filled">Play the Game</a> -->
          <a target="_blank" href="#app-about" class="button xsmall white filled">Learn about the Game</a>
          <a target="_blank" href="https://theyardgames.org/game/water.html" class="button xsmall white">Play the Game</a>
        </div>
      </div>
    </section>

    <section id="app-about" class="app-about">

      <div class="row container">
        <div class="col-sm-4">
          <div class="about-nav follow-scroll">
            <ul>
              <li><a href="#glance">At a Glance</a></li>
              <li><a href="#about">About the Game </a></li>
              <li><a href="#yard">The Yard Games </a></li>
              <li><a href="#partners">Partners</a></li>
            </ul>
          </div>
        </div>

        <div id="glance" class="col-sm-8 about-rightpanel">
          <h2 id="glance">At a Glance</h2>
          <ul>
            <li>Grades: 5-8</li>
            <li>Playtime: 10-20 minutes</li>
            <li>Play from a web browser—no logins or downloads required</li>
            <li>Free to play</li>
          </ul>

          <h2 id="about">About the Game</h2>
          <p>
            Learn how water moves through the world! In this board-game style game, players use Action cards, like Condensation and Evaporation, to convert water from one form to another. Available as single player or multiplayer.
          </p>
          <br>
          <h3>Topics Addressed</h3>
          <ul>
            <li>The Water Cycle</li>
            <li>Evaporation</li>
            <li>Runoff</li>
            <li>Condensation</li>
            <li>Precipitation</li>
            <li>Soil Absorption</li>
            <li>Ground Water Expansion</li>
          </ul>
          <h3>Next Gen Science Standards (NGSS)</h3>
          <ul>
            <li>MS-ESS2-4</li>
            <li>MS-ESS3-1</li>
            <li>ESS2.C</li>
          </ul>
          <h3>Game Types</h3>
          <ul>
            <li>single player</li>
            <li>local multiplayer</li>
            <li>network multiplayer</li>
          </ul>


          <h2 id="yard">About the Yard Games</h2>
          <p>
            Water Cycle is part of the Yard Games, our collection of middle school science games. Designed as playful introductions to complex topics, the games are online and free to play.
          </p>

          <h2 id="partners">Partners</h2>
          <p>
            We created the Yard Games with our amazing partners at Wisconsin DPI and Wisconsin Virtual Schools. Our team relied on the expertise of teacher fellows from across Wisconsin to help conceive, design, and test the games.
          </p>

        </div>
      </div>
    </section>













    <!----------------------
  End page content -->
  </div>

  <!--include footer
------------------------>
  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/footer.php";
  include_once($path); ?>

</body>

</html>
