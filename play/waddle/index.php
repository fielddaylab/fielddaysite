<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>Waddle: A Penguin's Tale</title>
<meta name="description" content="" />
</head>

<body class="singleapp waddle">

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
                    <li>Waddle: A Penguin's Tale</li>
                </ul>
            </div>
            <div class="app-info">
                <h1 class="app-title">Waddle: A Penguin's Tale</h1>
            </div>
            <div class="app-description">
                <p class="small">This short little VR game introduces players to polar research at Cape Royds, Antarctica by letting them embody an adorable adelie penguin.</p>
                <p class="small italic">Made in partnership with the National Science Foundation.</p>
            </div>
            <div class="buttons">
                <a class="button small white filled" href="https://www.meta.com/experiences/5621806444549296" target="_blank">Play Waddle</a>
                <a class="button small black filled" href="#app-about">Learn More</a>
                <a class="button small black filled" href="https://opengamedata.fielddaylab.wisc.edu/gamedata.php?game=PENGUINS">Do Research with Waddle</a>
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
                <h2 id="glance">Waddle: A Penguin's Tale</h2>
                <ul>
                    <li>Ages 5+</li>
                    <li>Virtual Reality</li>
                    <li>Free to play with a VR headset or on location at the Wisconsin Institute for Discovery</li>
                </ul>
                <h2 id="gamestory">About the Game</h2>
                <p>Named after the collective noun for a group of penguins on land, Wadde: A Penguin’s Tale introduces players to polar research at Cape Royds, Antarctica. We worked closely on this project with Jean Pennycook, a polar researcher and educator who has been studying Adelie penguins at the South Pole for more than twenty years. The game immerses players in a beautiful, distant world they wouldn’t otherwise be able to experience: the Antarctic ice. Take on the role of a penguin, play some adorable mini games, and learn how penguins build nests and defend their eggs against the predatory skua. </p>

                <h2 id="partners">Partners</h2>
                <p>We created this game in collaboration with the National Science Foundation, The Wisconsin Institute for Discovery, The Wisconsin IceCube Particle Astrophysics Center, as well as Jean Pennycook, Adelie penguin researcher. The game was funded by a generous grant from the National Science Foundation. </p>
                <ul>
                    <li>Principal Investigator: Kevin Ponto</li>
                    <li>Executive Producer: David Gagnon</li>
                    <li>Producer/Designer: Bobby Lockhart</li>
                    <li>Creative Direction: Sarah Gagnon</li>
                    <li>Software Development: Ross Tredinnick</li>
                    <li>Art Direction: Eric Lang</li>
                    <li>3D Art/Animation: Mary Benetti</li>
                    <li>Music/Sound: Cyril Peck</li>
                    <li>Playtesting Coordination: Jim Matthews</li>
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
