<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>
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
        <section class="singlehero page_hero">
            <div class="info">
                <h1 class="corrected">Our Games</h1>
                <p class="corrected">Our games teach complex topics and get world-class research out to the public.</p>
                <a href="#game_section" class="button yellow filled small">Check out our games</a>
            </div>
            <div class="graphic">


                <div id="home-planet" class="floatslow">
                    <img id="kid-on-moon" src="/assets/img/games/kid-on-moon-04.png">
                </div>

            </div>
        </section>


        <section id="ourstuff" class="ourstuff">
            <div class="wrapper">
                <!-- <h1 class="section-title centered cap">What we've made</h1> -->
                <div id="game_section" class="slide carousel-fade">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <p class="brief padding">We work with researchers to create fun, academically rigorous games that get hundreds of thousands of plays. Researchers love that our games allow for depth and complexity, while providing a playful, engaging experience. We team up with teacher fellows and outreach experts to make sure our games work in classrooms and reach large audiences. <br></p>
                            <!-- Gridder navigation -->
                            <ul class="apps gridder">
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
                                <li class="gridder-list app-card" data-griddercontent="#game-penguin">
                                    <img src="/assets/img/games/thumbs/penguins.jpeg" class="app-logo">
                                    <div class="game-wrapper">
                                        <div class="title">
                                            <span>Penguin Project (Coming Soon)</span>
                                        </div>
                                        <div class="stats">
                                            <p class="italic"> All Ages </p>
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

                                <li class="gridder-list app-card" data-griddercontent="#game-thermovr">
                                    <img src="/assets/img/games/thumbs/thermovr.jpeg" class="app-logo">
                                    <div class="game-wrapper">
                                        <div class="title">
                                            <span>Thermodynamics VR</span>
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


                        </div>

                        <div class="item">

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
                                        <a class="button small black" href="/play/emerald" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
                                </div>
                            </div>
                            <div id="game-penguin" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>Penguin Project - In Progress</h2>
                                        <div class="stats">
                                            <p class="tag ">All Ages</p>
                                            <p>|</p>
                                            <p class="tag ">Polar Research</p>
                                        </div>
                                        <p class="small">
                                            Our in-progress Penguins VR Project will allow players to experience life at the South Pole—as a penguin! We’re thrilled to work with penguin researcher Jean Pennycook to create a fun, playful experience that introduces people to her NSF-funded work.
                                        </p>
                                        <p class="note">
                                            Partners: NSF, Wisconsin Institute for Discovery, Wisconsin IceCube Particle Astrophysics Center
                                        </p>
                                        <!-- <a class="button small black" href="/play/penguin" target="_blank">Learn More</a> -->
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/ice-cube/" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/forevermine" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/lakeland" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/jowilder" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
                                </div>
                            </div>
                            <div id="game-thermovr" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>Thermodynamics VR</h2>
                                        <div class="stats">
                                            <p class="tag ">Undergraduate Level</p>
                                            <p>|</p>
                                            <p class="tag ">Thermodynamics</p>
                                        </div>
                                        <p class="small">
                                            We teamed up with John Pfotenhauer, UW-Madison professor and researcher, to create this VR simulation for teaching undergraduate thermodynamics. The game allows students to interact with the abstract Equation of State in a hands-on, tactile environment.
                                        </p>
                                        <p class="note">
                                            Partners: UW-Madison School of Engineering
                                        </p>
                                        <a class="button small black" href="/play/thermovr" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/atom-touch" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/plate-tectonics" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/rock-sim" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/carbon-sim" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/water-sim" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/force-fields" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/currents" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/food-webs" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/plant-growth" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/living-cell" target="_blank">Learn More</a>
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
                                        <a class="button small black" href="/play/crystal-cave" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/carbon-game" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/water-game" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/nitrogen-game" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/magnet" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/balloon" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/earthquake" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/wave" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/antibiotic" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
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
                                        <a class="button small black" href="/play/wind" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Carousel nav -->
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
            <h2 class="uppercase centered header">Common Questions</h2>
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
                closeText: "Close", // Close button text
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