<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>
<title>Earth’s Force Fields - Field Day</title>
<meta name="description" content="- Field Day">
</head>

<body class="singleapp force-fields">
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
            <li>Earth’s Force Fields</li>
          </ul>
        </div>
        <div class="app-info">
          <h1 class="app-title">Earth’s Force Fields</h1>
        </div>
        <div class="app-description">
          <p class="small">
            Learn about Earth’s gravity and magnetic fields! Made with our partners at BrainPOP.
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
              <li><a href="#partners">Partners</a></li>
              <li><a href="#teach">Teach with The Game </a></li>
              <li><a href="#production">Production Team </a></li>
            </ul>
          </div>
        </div>

        <div id="glance" class="col-sm-8 about-rightpanel">
          <h2 id="glance">At a Glance</h2>
          <ul>
            <li>Grades: 6-12</li>
            <li>Playable at BrainPOP</li>
          </ul>

          <h2>About the Game</h2>
          <p>
            In this 2-in-1 simulator, players learn how bodies in the vicinity of Earth are affected by the fields created by the Earth itself. Play in Magnetism Mode to explore how ions move into the magnetic field of the Earth, and play in Gravity Mode to learn about how objects fall towards Earth or get pulled into orbit.
          </p>

          <h2 id="partners">Partners</h2>
          <p>
            We worked with our amazing partners at BrainPOP to create a collection of simulations for their teacher-ready science materials. Our BrainPOP simulations are aligned with Next Generation Science Standards for grades 6-12.
          </p>

          <h2 id="teach">Teach with the Game</h2>
          <p>
            This simulation is available at BrainPOP. To play, go to (link).
          </p>

          <h2 id="production">Production Team</h2>
          <ul>
            <li>Executive Producer: David Gagnon</li>
            <li>Producer: Sarah Gagnon</li>
            <li>Creative Director: Sarah Gagnon</li>
            <li>Software Development: Mike Tolly, Amelia Moser</li>
            <li>User Interface: Eric Lang</li>
            <li>Art/Animation: Emily Meredith Lewis, Eric Lang</li>

          </ul>

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