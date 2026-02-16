<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Games</title>
</head>

<body class="singleapp page play">
    <!--include Main Navigation
------------------------>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/main-nav.php";
    include_once($path); ?>

    <!--<div class="header-notification">
  <h4>looking for Aris? go <a href="/make/aris">here</a></h4>
</div>-->

    <div id="mainwrapper">
        <!--Start page content
  ------------------------>

        <!--<section class="singlehero page_hero">
            <span class="scanlines"></span>
            <video autoplay muted loop id="playback">
                <source src="../assets/video/gameplay_footage.mp4#t=0.1" type="video/mp4">
            </video>

            <div class="info">
                <h1 class="corrected">Our Games</h1>
                <p class="small corrected">We work with researchers to create fun, academically rigorous games that get millions of plays.</p>
                <a href="#game_section" class="button yellow filled small hideforsmall">Check out our games</a>
            </div>
        </section>-->
        <!--<section class="singlehero page_hero">
            <h1 class="creme centered">Games</h1>
        </section>-->

        <section id="ourstuff" class="ourstuff">
            <!-- <h1 class="section-title centered cap">What we've made</h1> -->
            <div id="game_section">

                        <!--<p class="brief padding">We work with researchers to create fun, academically rigorous games that get hundreds of thousands of plays. Researchers love that our games allow for depth and complexity, while providing a playful, engaging experience. We team up with teacher fellows and outreach experts to make sure our games work in classrooms and reach large audiences. <br></p>-->
                        <!-- Gridder navigation -->
                        <ul class="apps gridder">
                            <li class="gridder-list app-card" data-griddercontent="#game-hatched">
                                <img src="/assets/img/games/thumbs/hatched-thumb.jpg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>On the Ice: Hatched</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Ages 10+</p>
                                        <p>Polar Research</p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-hercules">
                                <img src="/assets/img/games/thumbs/astro-thumb.jpg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Project Hercules</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grade Level: 8-12</p>
                                        <p>Astronomy</p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-ontheice">
                                <img src="/assets/img/games/thumbs/ontheice.jpg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>On The Ice: Weather Station</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Ages 10+</p>
                                        <p>Polar Research</p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-bloom">
                                <img src="/assets/img/games/thumbs/bloom.jpg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Bloom: The Saga of the fertilizer economy</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 9-12</p>
                                        <p>Life Sciences</p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-headlines">
                                <img src="/assets/img/games/thumbs/headlines-thumb.jpg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Headlines and High Water</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-9 </p>
                                        <p>Journalism, Science</p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-wake">
                                <img src="/assets/img/games/thumbs/wake.jpg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Wake: Tales from the Aqualab</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-9 </p>
                                        <p> Life Sciences </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-emerald">
                                <img src="/assets/img/games/thumbs/emerald.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Legend of the Lost Emerald</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 4-6 </p>
                                        <p> History </p>
                                    </div>
                                </div>

                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-forevermine">
                                <img src="/assets/img/games/thumbs/forevermine.jpeg" class="app-logo" />
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Lost at the Forever Mine</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-9</p>
                                        <p> Scientific Modeling </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-lakeland">
                                <img src="/assets/img/games/thumbs/lakeland.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Lakeland</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 7-12 </p>
                                        <p> Complex Systems </p>
                                    </div>

                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-jowilder">
                                <img src="/assets/img/games/thumbs/jowilder.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Jo Wilder and the Capitol Case</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 3-5</p>
                                        <p> History </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-waddle">
                                <img src="/assets/img/games/thumbs/penguins.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Waddle: A Penguin's Tale</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic"> Ages 5+ </p>
                                        <p> Polar Research </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-icecube">
                                <img src="/assets/img/games/thumbs/icecube.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Discover IceCube</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic"> All Ages </p>
                                        <p> Polar Research </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-thermovr">
                                <img src="/assets/img/games/thumbs/thermolab-thumb.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Thermolab</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Undergraduate Level</p>
                                        <p> Thermodynamics </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-atom">
                                <img src="/assets/img/games/thumbs/atom.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Atom Touch</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="apps gridder">
                            <h1 class="collection-title">The Yard Games Collection</h1>
                            <li class="gridder-list app-card" data-griddercontent="#game-crystal">
                                <img src="/assets/img/games/thumbs/crystal.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Crystal Cave</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-carbongame">
                                <img src="/assets/img/games/thumbs/carbongame.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Carbon Cycle Game</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-watergame">
                                <img src="/assets/img/games/thumbs/watergame.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Water Cycle Game</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-nitrogengame">
                                <img src="/assets/img/games/thumbs/nitrogengame.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Nitrogen Cycle Game</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-magnet">
                                <img src="/assets/img/games/thumbs/magnet.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Magnet Hunt</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-balloon">
                                <img src="/assets/img/games/thumbs/balloon.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Hot Air Balloon</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-earthquake">
                                <img src="/assets/img/games/thumbs/earthquake.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Earthquake!</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-wave">
                                <img src="/assets/img/games/thumbs/wave.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Wave Combinator</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-antibiotic">
                                <img src="/assets/img/games/thumbs/bacteria.jpeg" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Antibiotic Resistance</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-windsim">
                                <img src="/assets/img/games/thumbs/wind.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Wind Simulator</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 5-8</p>
                                        <p> Science </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Gridder content -->

                        <!--<ul class="apps gridder">
                            <h1 class="collection-title">Science Simulations</h1>
                            <li class="gridder-list app-card" data-griddercontent="#game-tectonics">
                                <img src="/assets/img/games/thumbs/tectonics-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Plate Tectonics</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-rocksim">
                                <img src="/assets/img/games/thumbs/rocksim-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Rock Cycle Simulation</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-carbonsim">
                                <img src="/assets/img/games/thumbs/carbonsim-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Carbon Cycle Simulation</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-watersim">
                                <img src="/assets/img/games/thumbs/watersim-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Water Cycle Simulation</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-forcefields">
                                <img src="/assets/img/games/thumbs/forcefields-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Earth’s Force Fields</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-currents">
                                <img src="/assets/img/games/thumbs/currents-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Ocean and Air Currents</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-foodwebs">
                                <img src="/assets/img/games/thumbs/foodwebs-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Energy in Food Webs</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-plant">
                                <img src="/assets/img/games/thumbs/plant-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Plant Growth</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                            <li class="gridder-list app-card" data-griddercontent="#game-cell">
                                <img src="/assets/img/games/thumbs/cells-nosplash.png" class="app-logo">
                                <div class="game-wrapper">
                                    <div class="title">
                                        <span>Living Cell</span>
                                    </div>
                                    <div class="stats">
                                        <p class="italic">Grades 6-12</p>
                                        <p> Aligned with NGSS </p>
                                    </div>
                                </div>
                            </li>
                        </ul>-->


                    </div>

                    <div class="item">
                        <div id="game-hatched" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>On the Ice: Hatched</h2>
                                    <div class="stats">
                                        <p class="tag ">Ages 10+</p>
                                        <p>|</p>
                                        <p class="tag ">Polar Research</p>
                                    </div>
                                    <p class="small">
                                        n On the Ice: Hatched, you play as a novice wildlife biologist making your first visit to Ross Island in Antarctica to study Adélie penguins. Your daily research tasks, such as conducting population counts, placing identification bands, and removing GPS trackers can be challenging - especially when the penguins don’t cooperate. But don’t worry, you’ll have Margo, your trusted digital assistant to guide you. The game takes place across a single research season and mirrors the tasks that real scientists do as they study how Adélie penguins behave and interact with each other. 
                                    </p>
                                    <a class="button small white filled" href="/play/hatched" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/hatched-gameplay.jpg">
                            </div>
                        </div>
                        <div id="game-hercules" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Project Hercules</h2>
                                    <div class="stats">
                                        <p class="tag ">Grade Level: 8-12</p>
                                        <p>|</p>
                                        <p class="tag ">Astronomy</p>
                                    </div>
                                    <p class="small">
                                        A catostrophic Solar Flare has destroyed modern life as we know it, in the recovering aftermath, Play as Astrid as she embarks on an astronomy adventure to unravel the mystery of an impending celestial event.
                                    </p>
                                    <a class="button small white filled" href="/play/projecthercules" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/astro-gameplay.jpg">
                            </div>
                        </div>
                        <div id="game-ontheice" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>On The Ice: Weather Station</h2>
                                    <div class="stats">
                                        <p class="tag ">Ages 10+</p>
                                        <p>|</p>
                                        <p class="tag ">Polar Research</p>
                                    </div>
                                    <p class="small">
                                        Battle extreme weather conditions in Antarctica while repairing a network of broken weather stations. This VR experience is based on the real world adventures of polar researchers who build and maintain weather stations in Antarctica in order to collect valuable meteorological data.
                                    </p>
                                    <a class="button small white filled" href="/play/on-the-ice" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/games/thumbs/ontheice.jpg">
                            </div>
                        </div>
                        <div id="game-bloom" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Bloom: The Saga of the Fertilizer Economy</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 9-12</p>
                                        <p>|</p>
                                        <p class="tag ">Life Sciences</p>
                                    </div>
                                    <p class="small">
                                        In <em>Bloom</em>, you’ll create trade networks and enact policies that keep farmers in business, while stopping excess manure from entering local lakes and rivers. Made with UW-Madison’s Scalable Systems Lab (Directed by Victor Zavala) with funding from the Environmental Protection Agency. 

                                    </p>
                                    <a class="button small white filled" href="/play/bloom" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/bloom.jpg">
                            </div>
                        </div>
                        <div id="game-headlines" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Headlines and High Water</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-9</p>
                                        <p>|</p>
                                        <p class="tag ">Journalism, Science</p>
                                    </div>
                                    <p class="small">
                                        In <em>Headlines and High Water,</em>  players take on the role of a young journalist in the fictional town of Twin Lakes, where the annual Cherry Festival is thrown into chaos by a catastrophic flood. The player is tasked with interviewing locals and writing stories to keep the town informed—all while staying safe during the town’s worst flood of the century.
                                    </p>
                                    <a class="button small white filled" href="/play/headlines" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/headlines.jpg">
                            </div>
                        </div>
                        <div id="game-wake" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Wake: Tales from the Aqualab</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-9</p>
                                        <p>|</p>
                                        <p class="tag ">Life Sciences</p>
                                    </div>
                                    <p class="small">
                                        <em>Wake: Tales from the Aqualab</em> is a 6th-9th grade science game that challenges students with engaging, authentic missions in a variety of ocean-based ecosystems. In Wake, students take on the role of a scientist studying ocean ecosystems, traveling to different ocean research sites to answer questions and solve problems. As they progress at their own pace, players are guided to gradually take on more complex science challenges.
                                    </p>
                                    <a class="button small white filled" href="/play/wake" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/wake-gameplay.jpg">
                            </div>
                        </div>
                        <div id="game-emerald" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Legend of the Lost Emerald</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 4-6</p>
                                        <p>|</p>
                                        <p class="tag ">History</p>
                                    </div>
                                    <p class="small">
                                        Take on the role of a maritime archaeologist uncovering shipwrecks in the Great Lakes! In this historical inquiry game, players use GPS coordinates, go out on dives, take underwater photos, and use artifacts to solve the mystery of each shipwreck.
                                    </p>
                                    <p class="note">
                                        Partners: PBS Wisconsin, Wisconsin Sea Grant
                                    </p>
                                    <a class="button small white filled" href="/play/emerald" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/emerald.jpg">
                            </div>
                        </div>
                        <div id="game-waddle" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Waddle: A Penguin's Tale</h2>
                                    <div class="stats">
                                        <p class="tag "> Ages 5+ </p>
                                        <p>|</p>
                                        <p class="tag ">Polar Research</p>
                                    </div>
                                    <p class="small">
                                        Our in-progress Penguins VR Project will allow players to experience life as a penguin in Cape Royds, Antarctica! We’re thrilled to work with penguin researcher Jean Pennycook to create a fun, playful experience that introduces people to her NSF-funded work.
                                    </p>
                                    <p class="note">
                                        Partners: NSF, Wisconsin Institute for Discovery, Wisconsin IceCube Particle Astrophysics Center
                                    </p>
                                    <a class="button small white filled" href="/play/waddle" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/waddle.jpg">
                            </div>
                        </div>
                        <div id="game-icecube" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Discover IceCube </h2>
                                    <div class="stats">
                                        <p class="tag ">All Ages</p>
                                        <p>|</p>
                                        <p class="tag ">Polar Research</p>
                                    </div>
                                    <p class="small">
                                        The IceCube Virtual Reality experience puts you in the role of an astrophysicist. Journey deep into space to track down the source of a neutrino detected by the IceCube observatory in Antarctica. Play at the Wisconsin Institute for Discovery in Madison, WI, or download for your own VR device.
                                    </p>
                                    <p class="note">
                                        Partners: NSF, Wisconsin Institute for Discovery, Wisconsin IceCube Particle Astrophysics Center
                                    </p>
                                    <a class="button small white filled" href="/play/ice-cube/" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/icecube-thumb.png">
                            </div>
                        </div>
                        <div id="game-forevermine" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Lost at the Forever Mine</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-9</p>
                                        <p>|</p>
                                        <p class="tag ">Scientific Modeling</p>
                                    </div>
                                    <p class="small">
                                        This space adventure brings mathematical modeling straight to the classroom. To escape an abandoned planet, players set up equations, input data, work with graphs, and use models as a tool to make decisions.
                                    </p>
                                    <p class="note">
                                        Partners: UW-MRSEC
                                    </p>
                                    <a class="button small white filled" href="/play/forevermine" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/forevermine.jpg">
                            </div>
                        </div>
                        <div id="game-lakeland" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Lakeland</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 7-12</p>
                                        <p>|</p>
                                        <p class="tag ">Complex Systems </p>
                                    </div>
                                    <p class="small">
                                        This award-winning game teaches complex systems! Players create their own town, manage resources, and learn about the relationship between dairy farming, soil nutrition, and lake pollution.
                                    </p>
                                    <p class="note">
                                        Partners: UW-Madison Scalable Systems Lab
                                    </p>
                                    <a class="button small white filled" href="/play/lakeland" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/lakeland-thumb.jpg">
                            </div>
                        </div>
                        <div id="game-jowilder" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Jo Wilder and the Capitol Case</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 3-5</p>
                                        <p>|</p>
                                        <p class="tag ">History</p>
                                    </div>
                                    <p class="small">
                                        This award-winning game turns kids into history detectives! In this point-and-click adventure, players use the methods of real historians to uncover the story behind each mystery artifact.
                                    </p>
                                    <p class="note">
                                        Partners: PBS Wisconsin, Wisconsin Historical Society
                                    </p>
                                    <a class="button small white filled" href="/play/jowilder" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/jowilder.jpg">
                            </div>
                        </div>
                        <div id="game-thermovr" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Thermolab</h2>
                                    <div class="stats">
                                        <p class="tag ">Undergraduate Level</p>
                                        <p>|</p>
                                        <p class="tag ">Thermodynamics</p>
                                    </div>
                                    <p class="small">
                                        Explore the world of thermodynamics by conducting experiments using a water-based piston-cylinder apparatus. The simulation allows users to control a collection of tools: a bunsen burner, cooling coils, weights, stops, and environmental controls, to develop an intuitive understanding of thermodynamic processes.
                                    </p>
                                    <p class="note">
                                        Partners: UW-Madison School of Engineering
                                    </p>
                                    <a class="button small white filled" href="/play/thermolab" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/gameplay/thermo-lab.jpg">
                            </div>
                        </div>
                        <div id="game-atom" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Atom Touch</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        This molecular simulation app allows players to explore the abstract principles of thermodynamics and molecular dynamics in a tactile, exploratory way.
                                    </p>
                                    <p class="note">
                                        Partners: UW-MRSEC
                                    </p>
                                    <a class="button small white filled" href="/play/atom-touch" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/atomtouchbg.jpg">
                            </div>
                        </div>
                        <div id="game-tectonics" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Plate Tectonics</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        This vector field simulator allows kids to explore how magma flow creates forces that move the Earth’s tectonic plates. The game introduces kids to phenomena like volcanoes, earthquakes, and the formation of trenches.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/plate-tectonics" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-rocksim" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Rock Cycle Simulation</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        Learn about how rocks and minerals form from one another! Players choose transitional events, like a volcanic eruption or the formation of volcanic rock, and explore how rocks and minerals move through the world.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/rock-sim" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-carbonsim" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Carbon Cycle Simulation</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        Learn how carbon moves through the ecosystem! In this simulator, players trigger events—like the burning of fossil fuel—and watch how the carbon moves among the air, ocean, rocks, and living things.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/carbon-sim" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-watersim" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Water Cycle Simulation</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        Learn about the water cycle! This simulator allows players to trigger events and trace how water moves through the atmosphere, bodies of water, living things, and more.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/water-sim" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-forcefields" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Earth’s Force Fields</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        In this 2-in-1 simulator, players learn how bodies in the vicinity of Earth are affected by the fields created by the Earth itself. Play in Magnetism Mode to explore how ions move into the magnetic field of the Earth, and play in Gravity Mode to learn about how objects fall towards Earth or get pulled into orbit.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/force-fields" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-currents" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Ocean and Air Currents</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        This simulation uses a map to show how physical matter is moved around by ocean and air currents. Players can move between different layers of the map, measure temperatures, follow currents through the ocean, and place a balloon or a ship in a bottle in the current to see how it moves.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/currents" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-foodwebs" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Energy in Food Webs</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        This game shows how energy from the sun and from geologic thermal processes flows through living things. Use nodes and arrows to trigger the movement of energy through food webs, from the sun to plants to herbivores, all the way up to apex predators, and then back to the soil again.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/food-webs" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-plant" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Plant Growth</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        This simulation teaches the life cycle of plants! Set variables, choose actions (like “Send in bees” or “Windy weather”) and then launch the simulation. Watch your plant move from a tiny seed to a flowering plant, and then start again with a new seed—if it survives that long.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/plant-growth" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>
                        <div id="game-cell" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Living Cell</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 6-12</p>
                                        <p>|</p>
                                        <p class="tag ">Aligned with NGSS</p>
                                    </div>
                                    <p class="small">
                                        Use this simulation to teach cellular processes! Players can trigger metabolic events in three types of cells: cobra venom glands, Venus fly traps, and E. Coli. Set your conditions, launch the simulation, and watch as processes like cellular respiration and protein production play out.
                                    </p>
                                    <p class="note">
                                        Partners: BrainPOP
                                    </p>
                                    <a class="button small white filled" href="/play/living-cell" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/hero-images/arishero.jpg">
                            </div>
                        </div>

                        <div id="game-crystal" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Crystal Cave</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        This simple puzzle game introduces kids to crystals! Players try their hand at arranging molecules with different shapes and properties into an ordered, stable configuration.
                                    </p>
                                    <p class="note">
                                        Partners: UW-MRSEC, Wisconsin DPI
                                    </p>
                                    <a class="button small white filled" href="/play/crystal-cave" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/crystal-thumb.png">
                            </div>
                        </div>
                        <div id="game-carbongame" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Carbon Cycle Game</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        Learn how carbon moves through the world! In this board-game style game, players use Action cards, like Photosynthesis and Soil Respiration, to convert carbon from one form to another.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/carbon-game" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/cycle-carbon-thumb.jpg">
                            </div>
                        </div>
                        <div id="game-watergame" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Water Cycle Game</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        Learn how water moves through the world! In this board-game style game, players use Action cards, like Condensation and Evaporation, to convert water from one form to another.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/water-game" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/cycle-water-thumb.jpg">
                            </div>
                        </div>
                        <div id="game-nitrogengame" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Nitrogen Cycle Game</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        Learn how nitrogen moves through the world! In this board-game style game, players use Action cards, like Plant Death and Plant Assimilation, to convert nitrogen atoms from one form to another.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/nitrogen-game" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/cycle-nitrogen-thumb.jpg">
                            </div>
                        </div>
                        <div id="game-magnet" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Magnet Hunt</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        In this introduction to magnetism, players use magnetic fields and iron filings to find magnets hidden in the sand. The game covers topics like magnetic forces, poles, and magnetic fields.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/magnet" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                              <img src="/assets/img/thumbs/thumb-magnetism.png">
                            </div>
                        </div>
                        <div id="game-balloon" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Hot Air Balloon</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        Time to fly! In this game, players control the altitude of a hot air balloon by heating the balloon or releasing air with the air flap. Players learn about buoyancy, volume, and air pressure.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/balloon" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/balloon-thumb.png">
                            </div>
                        </div>
                        <div id="game-earthquake" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Earthquake!</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        This playful simulation uses shockwaves and tin-can towns to introduce players to how scientists study earthquakes! Players learn about topics like S and P waves, epicenters, and triangulation.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/earthquake" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                              <img src="/assets/img/thumbs/thumb-earthquake.png">

                            </div>
                        </div>
                        <div id="game-wave" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Wave Combinator</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        This game invites kids to explore how waves interact. Kids can use the Wave Combinator to learn about concepts like amplitude, offset, wavelength, and frequency.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/wave" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                              <img src="/assets/img/thumbs/thumb-wave.png">

                            </div>
                        </div>
                        <div id="game-antibiotic" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Antibiotic Resistance</h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        In this playful introduction to the world of bacteria, players get a visual representation of reproduction, mutation, and antibiotic resistance.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/antibiotic" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                                <img src="/assets/img/thumbs/bacteria-thumb.png">
                            </div>
                        </div>
                        <div id="game-windsim" class="app-expanded gridder-content">
                            <div class="app-info app-pane left">
                                <span class="close-app">
                                    <h2>Wind Simulator </h2>
                                    <div class="stats">
                                        <p class="tag ">Grades 5-8</p>
                                        <p>|</p>
                                        <p class="tag ">Science</p>
                                    </div>
                                    <p class="small">
                                        In this game, a ruined tower-building contest leads to a crash course on the science of wind. Players learn about wind direction, wind speed, pressure systems, and how scientists use wind to predict weather.
                                    </p>
                                    <p class="note">
                                        Partners: Wisconsin DPI, Wisconsin Virtual Schools
                                    </p>
                                    <a class="button small white filled" href="/play/wind" target="_blank">Learn More</a>
                            </div>
                            <div class="app-thumbnail app-pane right">
                              <img src="/assets/img/thumbs/thumb-wind.png">
                            </div>
                        </div>

                    </div>

        </section>


        <section id="page-facts" class="page-facts">
            <div class="wrapper">
                <div class="astrovr_wrap">
                    <img src="/assets/img/illustrations/stars1.png" alt="gold star accent" class="stars stars1">
                    <img id="play-teacher" src="/assets/img/games/teachernaut.png" alt="floating astronaut teacher with a tablet" class="astrovr floatslow centered teacher">
                    <img id="play-kid1" src="/assets/img/games/kidstronaut2.png" alt="floating astronaut kid with tablet" class="astrovr float centered kidA">
                    <img id="play-kid2" src="/assets/img/games/kidstronaut3.png" alt="floating astronaut kid having so much fun" class="astrovr floatslow centered kidB">
                    <img src="/assets/img/illustrations/stars1.png" alt="gold star accent" class="stars stars2">
                </div>
                <h1 class="section-title centered cap">Let’s make a game together!</h1>
                <div class="fact">
                    <div class="info">
                        <h3 class="nocap">How Much Do Games Cost? </h3>
                        <p class="small">
                            Our games cost a fraction of a penny per minute of engagement and last for years. The exact cost will depend on the size and scope of your project. We’ll work with you to define the project and raise funds. As part of WCER, we have access to a full grant-writing team. We’ll help you with the Broader Impacts portion of your grant, or build a grant around your project.
                        </p>
                    </div>
                    <div class="photo">
                        <img class="mr_coins responsive" alt="illustrations of floating coins" src="/assets/img/illustrations/coins.png">
                    </div>
                </div>

                <div class="fact">
                    <div class="photo">
                        <img class="forevermine_screenshot responsive" alt="image of the AR game The Station:Maine" src="/assets/img/games/complex-topics.png">
                    </div>
                    <div class="info">
                        <h3 class="nocap">Use Games to Teach Complex Topics</h3>
                        <p>
                            If the information feels too complicated, kids won’t engage. Our games allow for depth and complexity, while creating a playful, engaging experience for kids. Set up a meeting to learn more! We’re excited to partner with you.
                        </p>
                        <a href="/work" class="button pink filled small">Have an idea? Let's talk!</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq">
            <h1 class="uppercase centered header">Common Questions</h1>
            <div id="faq" class="carousel slide carousel-fade " data-ride="carousel">
                <div class=" questions">
                    <ul class="carousel-indicators">
                        <li class="active" data-target="#faq" data-slide-to="0">
                            Who do we work with?
                        </li>
                        <li class="" data-target="#faq" data-slide-to="1">
                            How are our projects funded?
                        </li>
                        <li class="" data-target="#faq" data-slide-to="2">
                            Why use games for outreach?
                        </li>
                        <li class="" data-target="#faq" data-slide-to="3">
                            Are games cost effective?
                        </li>
                        <li class="" data-target="#faq" data-slide-to="4">
                            How do games help with research?
                        </li>
                    </ul>
                </div>
                <div class="answers carousel-inner">
                    <div class="item active">
                        <!-- <h3>Many!</h3> -->
                        <p class="small">
                            We’ve worked with researchers, museums, public media, and large research institutions. Some of our partners already have an idea for a game or project, while others are looking to revamp their outreach strategy.
                        </p>
                    </div>
                    <div class="item">
                        <!-- <h3> </h3> -->
                        <p class="small">
                            Some of our partners already have funding, while others need to raise funds. We know how to work with granting agencies and fit within Broader Impacts budgets. As part of WCER, we have access to a full grants department that will provide support throughout your project.
                        </p>
                    </div>
                    <div class="item">
                        <!-- <h3>So that kids can engage!</h3> -->
                        <p class="small">
                            If the information feels too complicated, kids won’t engage. Our games allow for depth and complexity, while also allowing kids to have fun and feel like they’re playing!
                        </p>
                    </div>
                    <div class="item">
                        <h3>Yes!</h3>
                        <p class="small">
                            Our games cost a fraction of a penny per minute of engagement. Millions of dollars each year are invested in Broader Impacts projects that reach just a few people. Our games reach hundreds of thousands of kids and last for years.
                        </p>
                    </div>
                    <div class="item">
                        <!-- <h3>A lot!</h3> -->
                        <p class="small">
                            Our games include built-in evaluation and learning assessments. You’ll have access to real-time data that you can use in your research and share with your granting agency, coworkers, and leaders.
                        </p>
                    </div>
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

    <script>
        $('.augmentedreality_selector').click(function() {
            $('#ourstuff').addClass('augmentedreality_selected');
            $('#ourstuff').removeClass('virtualreality_selected');
        });

        $('.virtualreality_selector').click(function() {
            $('#ourstuff').addClass('virtualreality_selected');
            $('#ourstuff').removeClass('augmentedreality_selected');
        });

        $(function() {

            // Call Gridder
            $('.gridder').gridderExpander({
                scroll: true,
                scrollOffset: 100,
                scrollTo: "panel", // panel or listitem
                animationSpeed: 900,
                animationEasing: "easeInOutExpo",
                showNav: true, // Show Navigation
                nextText: "Next", // Next button text
                prevText: "Previous", // Previous button text
                closeText: "<img src=\"/assets/img/ui/close-icon.png\">", // Close button text
                onStart: function() {
                    //Gridder Inititialized
                },
                onContent: function() {
                    //Gridder Content Loaded
                },
                onClosed: function() {
                    //Gridder Closed
                }
            });
        });
    </script>
</body>

</html>
