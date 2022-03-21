<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>
<title>title - Field Day</title>
<meta name="description" content="- Field Day">
</head>

<body class="singleapp wind">
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
            <li>Wind Simulator </li>
          </ul>
        </div>
        <div class="app-info">
          <h1 class="app-title">Wind Simulator</h1>
        </div>
        <div class="app-description">
          <p class="small">
            When a low pressure system moves in, the kids of the Yard learn about the science of wind! Made with our partners at Wisconsin DPI and Wisconsin Virtual Schools.
          </p>
        </div>
        <div class="buttons">
          <!-- <a target="_blank" href="https://pbswisconsineducation.org/emerald/about/" class="button xsmall white filled">Play the Game</a> -->
          <a target="_blank" href="#app-about" class="button xsmall white">Learn about the Game</a>
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
            A ruined tower-building contest leads to a crash course on the science of wind. Players learn about wind direction, wind speed, pressure systems, and how scientists use wind to predict weather.
          </p>
          <br>
          <h3>Topics Addressed</h3>
          <ul>
            <li>Earth’s systems</li>
            <li>Air Masses and weather conditions</li>
            <li>Weather Patterns</li>
          </ul>
          <h3>Next Gen Science Standards (NGSS)</h3>
          <ul>
            <li>MS-ESS2</li>
            <li>MS-ESS2-5</li>
            <li>ESS2.D</li>
          </ul>
          <h3>Game Types</h3>
          <ul>
            <li>single player</li>
          </ul>


          <h2 id="yard">About the Yard Games</h2>
          <p>
            Wind Simulator is part of the Yard Games, our collection of middle school science games. Designed as playful introductions to complex topics, the games are online and free to play.
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