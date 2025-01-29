<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>On the Ice: Weather Station</title>
<meta name="description" content="" />
</head>

<body class="singleapp ontheice">

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
                    <li>On the Ice: Weather Station</li>
                </ul>
            </div>
            <div class="app-info">
                <h1 class="app-title">On the Ice: Weather Station</h1>
            </div>
            <div class="app-description">
                <p class="small white">Battle extreme weather conditions in Antarctica while repairing a network of broken weather stations. This VR experience is based on the real world adventures of polar researchers who build and maintain weather stations in Antarctica in order to collect valuable meteorological data. </p>
            </div>
            <div class="buttons">
                <!--<a class="button small white filled" href="https://www.meta.com/experiences/5621806444549296" target="_blank">Play Weather Station</a>-->
                <a class="button small white filled" href="#app-about">Learn More</a>
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
                <div id="app-video" class="app-video">
                    <div class='embed-container'>
                        <iframe src="https://player.vimeo.com/video/1049485198" width="100%" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <h2 id="glance">On the Ice: Weather Station</h2>
                <ul>
                    <li>Ages 10+</li>
                    <li>Virtual Reality (Oculus Quest 2 and 3)</li>
                    <li>Download for free via the Oculus Quest Store</li>
                </ul>
                <h2 id="gamestory">About the Game</h2>
                <p>On the Ice: Weather Station transports you to remote locations in Antarctica, where you are tasked with repairing a collection of weather stations. At each station, you’ll identify the components that are in disrepair, fix them in your mobile repair workshop, and then reinstall them. You’ll need to work quickly, though, to avoid getting stuck in a dangerous windstorm or left behind by your pilot. If you succeed, you’ll help restore a network of weather stations that are linked via satellites and used by researchers to understand and predict weather and climate patterns in Antarctica.  </p>

                <h2 id="partners">Partners</h2>
                <p>On the Ice: Weather Station was created in collaboration with our amazing partners: the Virtual Environments Group, Wisconsin IceCube Particle Astrophysics Center, and Antarctic weather and climate researcher Matthew Lazzara. The game was funded by the National Science Foundation (Award number 2116046).</p>
                <ul>
                    <li>Co-Principal Investigator: Kevin Ponto</li>
                    <li>Co-Principal Investigator: Diego Roman</li>
                    <li>Co-Principal Investigator: Jim Madsen</li>
                    <li>Executive Producer: David Gagnon</li>
                    <li>Producer/Designer: Sarah Gagnon</li>
                    <li>Creative Direction: Sarah Gagnon</li>
                    <li>Software Development: Ross Tredinnick</li>
                    <li>Art Direction: Eric Lang</li>
                    <li>3D Art/Animation: Mary Benetti</li>
                    <li>Music/Sound: Cyril Peck</li>
                    <li>Fellowship Director: Jim Mathews</li>
                    <li>QA/Playtesting Coordination: Jim Matthews</li>
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
