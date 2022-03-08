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
                                    <div class="title">
                                        <span class="title">Legend of the Lost Emerald</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app2">
                                    <img src="/assets/img/games/thumbs/penguins.jpeg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Penguin Project <br /> (Coming Soon)</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app3">
                                    <img src="/assets/img/games/thumbs/forevermine.jpeg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Lost at the Forever Mine </span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app4">
                                    <img src="/assets/img/games/thumbs/lakeland.jpeg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Lakeland</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app8">
                                    <img src="/assets/img/games/thumbs/jowilder.jpeg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Jo Wilder and the Capitol Case</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app5">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Crystal Cave</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app9">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Marvelous Modeling</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app7">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Carbon Cycle</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Water Cycle</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Nitrogen Cycle</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Magnet Hunt</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Hot Air Balloon</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Earthquake!</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Wave Combinator</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Antibiotic Resistance</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Wind Simulator</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Atom Touch</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Thermodynamics VR</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Plate Tectonics</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Rock Cycle</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Earth’s Force Fields</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Ocean and Air Currents</span>
                                    </div>
                                </li>
                                <li class="gridder-list app-card" data-griddercontent="#arvr-app6">
                                    <img src="/assets/img/thumbs/webird-thumb.jpg" class="app-logo">
                                    <div class="title">
                                        <span class="title">Energy in Food Webs</span>
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
                                        <p class="small">
                                            Take on the role of a maritime archaeologist uncovering shipwrecks in the Great Lakes! In this historical inquiry game, players use GPS coordinates, go out on dives, take underwater photos, and use artifacts to solve the mystery of each shipwreck.
                                        </p>
                                        <a class="button small black" href="/play/emerald" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
                                </div>
                            </div>

                            <div id="arvr-app2" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>The Station:Maine</h2>
                                        <p class="small">In this Augmented Reality game, students in rural Maine play location-based quests focused on four themes: Water, Forestry, Energy, and Food. Players visit GPS_based tour stops, collect field notes, and take photos to share their observations. </p>
                                        <hr />
                                        <p class="note">Partners: Maine Mathematics and Science Alliance, Vanderbilt University, Smart & Connected Communities Grant through the National Science Foundation.</p>
                                        <a class="button small black" href="/play/thestationmaine/">Learn more</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img class="long" src="/assets/img/illustrations/station_screenshot.png">
                                </div>
                            </div>

                            <div id="arvr-app3" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>ARIS</h2>
                                        <p class="notsupported">No longer supported</p>
                                        <p class="small">Create mobile games, tours and interactive stories with ARIS games. Players experience a hybrid world of virtual characters and media in physical space. Anyone who can read can play and design these games. Used in classrooms or informally. IOS device required.</p>
                                        <a class="button small black" href="/make/aris" target="_blank">Learn More</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/hero-images/arishero.jpg">
                                </div>
                            </div>

                            <div id="arvr-app4" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>Play the Past</h2>
                                        <p class="notsupported">Minnesota History Museum in 2012. No longer supported. </p>
                                        <p class="small">Play the Past was an AR game playable location at the Minnesota History Museum. The app, designed for grades 4-6, allowed kids to uncover stories, collect virtual items, and take on quests related to the exhibit’s topics of immigrations, transportation, mining, and more.</p>
                                        <hr />
                                        <p class="note">Partners: The Minnesota History Museum </p>
                                        <a class="button small black" href="https://vimeo.com/438930774" target="_blank">Watch the video</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/thumbs/ptp-thumb.jpg">
                                </div>
                            </div>

                            <div id="arvr-app5" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>Dow Day</h2>
                                        <p class="notsupported">No longer supported</p>
                                        <p class="small">This Augmented Reality game transports players back to the time of the Vietnam War, when Dow Chemical visited UW-Madison to recruit students and peaceful protests escalated into violent conflicts. Players take on the role of a reporter working during the conflict.</p>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/thumbnails/dowday-thumbnail.jpg">
                                </div>
                            </div>

                            <div id="arvr-app6" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>WeBird</h2>
                                        <p class="notsupported">No longer supported</p>
                                        <p class="small">WeBird is an AR bird-identification game that allows students to document sightings, record bird calls, take photos and videos, and share with others. The game was designed with Animal Science/Zoology researcher Mark Berres in 2013 and used with over 100 students at UW-Madison.</p>
                                        <a class="button small black" href="https://medium.com/fielddaylab/webird-challenges-uw-students-to-see-who-can-discover-the-most-birds-fe5322207eb5" target="_blank">Read the Story</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img class="long" src="/assets/img/thumbnails/webird-thumbnail.jpg">
                                </div>
                            </div>

                            <div id="arvr-app7" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>Sustainable U</h2>
                                        <p class="notsupported">No longer supported</p>
                                        <p class="small">In Sustainable U, an Augmented Reality game about campus sustainability, a visitor from the future shows students a bleak future unless people take action on sustainability. The game takes players on an AR tour of campus, with the goal of inspiring them to see the familiar in a new light.</p>
                                        <hr />
                                        <p class="note">Partners: The UW-Madison Office of Sustainability, The Educational Innovation Initiative </p>
                                        <a class="button small black" href="https://sustainability.wisc.edu/mobile-game-explores-campus-sustainability/" target="_blank">Read the Story</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img class="long" src="/assets/img/thumbnails/sustainableu-thumbnail.jpg">
                                </div>
                            </div>

                            <div id="arvr-app8" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>Viola</h2>
                                        <p class="notsupported">No longer supported</p>
                                        <p class="small">We partnered with UW-Madison Biology professor Catherine Woodward to create a mobile app for plant-identification that is truly pocket-sized! Viola guides users through plant identification using illustrations, which also helps teach the different parts of plants.</p>
                                        <hr />
                                        <p class="note">WisFlora Database, UW-Madison Baldwin Grant</p>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img class="long" src="/assets/img/thumbnails/viola-thumbnail.jpg">
                                </div>
                            </div>

                            <div id="arvr-app9" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>ARISE Nursing</h2>
                                        <p class="notsupported">No longer supported</p>
                                        <p class="small">We teamed up with Madison College to design an AR project to help train nursing students for patient care. ARISE uses simulations and games to help students visualize real situations and feel more emotionally involved with patients in a simulated environment. ARISE also includes games that allow nursing students to practice their skills at home.</p>
                                        <hr />
                                        <p class="note">Partners: The US Department of Labor’s Employment and Training Administration </p>
                                        <a class="button small black" href="https://www.youtube.com/watch?v=O7urXDn88E4" target="_blank">Watch the Video</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img class="long" src="/assets/img/thumbnails/arise-thumbnail.jpg">
                                </div>
                            </div>

                            <div id="arvr-app10" class="app-expanded gridder-content">
                                <div class="app-info app-pane left">
                                    <span class="close-app">
                                        <h2>ThermoVR</h2>
                                        <p class="small">We teamed up with John Pfotenhauer, UW-Madison professor and researcher, to create this Virtual Reality simulation for teaching undergraduate thermodynamics. The game simulates the basic Equation of State used in classrooms across the country, allowing students to interact with this abstract concept in a hands-on, tactile environment.</p>
                                        <hr />
                                        <p class="note">Partners: UW-Madison School of Engineering</p>
                                        <a class="button small black filled" href="/play/thermovr">Learn more</a>
                                        <a class="button small black" href="https://medium.com/fielddaylab/from-abstract-to-hands-on-using-vr-to-teach-thermodynamics-b9ba78c73404?source=friends_link&sk=6abe3330567c7e9a8f239fbb79cdbcb1" target="_blank">Read the Story</a>
                                </div>
                                <div class="app-thumbnail app-pane right">
                                    <img src="/assets/img/thumbnails/thermovr-thumbnail.png">
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