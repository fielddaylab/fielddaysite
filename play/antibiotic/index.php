<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>
<title>Antibiotic Resistance - Field Day</title>
<meta name="description" content="- Field Day">
</head>

<body class="singleapp yard antibiotic">
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
            <li>Antibiotic Resistance</li>
            <a class="app-logo" target="_blank" href="https://theyardgames.org/"><img src="/assets/img/logos/yard-logo.png" /></a>
          </ul>
        </div>
        <div class="app-info">
          <h1 class="app-title">Antibiotic Resistance</h1>
        </div>
        <div class="app-description">
          <p class="small">
            A fun, simple simulation that shows how bacteria reproduce and mutate! Made with our partners at Wisconsin DPI and Wisconsin Virtual Schools.
          </p>
        </div>
        <div class="buttons">
          <!-- <a target="_blank" href="https://pbswisconsineducation.org/emerald/about/" class="button xsmall white filled">Play the Game</a> -->
          <a target="_blank" href="#app-about" class="button xsmall white filled">Learn about the Game</a>
          <a target="_blank" href="https://theyardgames.org/game/bacteria.html" class="button xsmall white">Play the Game</a>
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
            In this playful introduction to the world of bacteria, players create a simple visual representation of bacteria reproduction, mutation, and antibiotic resistance. Click to add bacteria and watch as they reproduce, mutate, and pass on their attributes.
          </p>
          <br>
          <h3>Topics Addressed</h3>
          <ul>
            <li>Heredity</li>
            <li>Inheritance</li>
            <li>Variation of Traits</li>
            <li>Mutation</li>
            <li>Genes</li>
            <li>Developing and Using Models</li>
            <li>Antibiotics</li>
          </ul>
          <h3>Next Gen Science Standards (NGSS)</h3>
          <ul>
            <li>MS-LS3</li>
            <li>MS-LS3-1</li>
          </ul>
          <h3>Game Types</h3>
          <ul>
            <li>single player</li>
            <li>multiplayer</li>
          </ul>


          <h2 id="yard">About the Yard Games</h2>
          <p>
            Antibiotic Resistance is part of the Yard Games, our collection of middle school science games. Designed as playful introductions to complex topics, the games are online and free to play.
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
