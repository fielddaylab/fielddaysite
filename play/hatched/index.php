<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>On the Ice: Hatched</title>
<meta name="description" content="" />
</head>

<body class="singleapp hatched">

    <?php $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/main-nav.php";
    include_once($path); ?>

    <!-- Main Content -->
    <section class="app-hero light_theme">
        <div class="hero-content">
            <div class="info-panel">
                <ul class="breadcrumbs">
                    <li><a href="/">Field Day</a></li>
                    <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
                    <li>Play</li>
                    <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
                    <li>On the Ice: Hatched</li>
                </ul>
            </div>
            <div class="app-info">
                <h1 class="app-title">On the Ice: Hatched</h1>
            </div>
            <div class="app-description">
                <p>Experience what it’s like to be a wildlife biologist as you spend a season in Antarctica studying Adélie Penguins.</p>
            </div>
            <div class="buttons">
                <a class="button small white filled" href="https://www.meta.com/experiences/on-the-ice-hatched/8377427255613669/" target="_blank">Play Hatched</a>
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
                        <li><a href="#gamestory">About the Game</a></li>
                        <li><a href="#partners">Partners</a></li>
                    </ul>
                </div> 
            </div>

            <div id="glance" class="col-sm-8 about-rightpanel">
                <h2 id="glance">On the Ice: Hatched</h2>
                <ul>
                    <li>Ages 10+</li>
                    <li>Virtual Reality</li>
                    <li><a target="_blank" href="https://www.meta.com/experiences/on-the-ice-hatched/8377427255613669/">Download for Free</a> and play with a VR headset</li>
                </ul>
                <h2 id="gamestory">About the Game</h2>
                <p>In On the Ice: Hatched, you play as a novice wildlife biologist making your first visit to Ross Island in Antarctica to study Adélie penguins. Your daily research tasks, such as conducting population counts, placing identification bands, and removing GPS trackers can be challenging - especially when the penguins don’t cooperate. But don’t worry, you’ll have Margo, your trusted digital assistant to guide you. The game takes place across a single research season and mirrors the tasks that real scientists do as they study how Adélie penguins behave and interact with each other.</p>

                <h2 id="partners">Partners</h2>
                <p>On the Ice: Hatched was created in collaboration with our amazing partners</p>
                <ul>
                    <li>the Virtual Environments Group</li>
                    <li>Wisconsin IceCube Particle Astrophysics Center</li>
                    <li>Jean Pennycook: Adélie Penguin researcher</li>
                    <li>The game was funded by the National Science Foundation (Award number 2116046) </li>
                </ul>
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
