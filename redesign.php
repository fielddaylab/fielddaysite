<?php include 'includes/header.php'; ?>
<title>Field Day Learning Games</title>
<meta name="description" content="Field Day Lab">
</head>
<!--include main navigation-->
<?php include 'includes/main-nav.php'; ?>
<!-- start page template -->
<div class="home-page">
    <section id="carousel">
        <div id="carousel-hero" class="carousel slide">

            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background: url('assets/img/home/carousel/bloom-poster.jpg');">
                    <a href="play/bloom">
                        <span class="scanlines"></span>
                        <video preload="none" muted loop class="carousel-video">
                            <source src="assets/video/home/carousel/bloom.mov" type="video/mp4">
                        </video>
                     </a>
                </div>
                <div class="item" style="background: url('assets/img/home/carousel/wake-poster.jpg');">
                    <a href="play/wake">
                        <span class="scanlines"></span>
                        <video preload="none" muted loop class="carousel-video">
                            <source src="assets/video/home/carousel/wake.mov" type="video/mp4">
                        </video>
                    </a>
                </div>

                <div class="item" style="background: url('assets/img/home/carousel/journalism-poster.jpg');">
                    <a href="play/headlines">
                        <span class="scanlines"></span>
                        <video preload="none" muted loop class="carousel-video">
                            <source src="assets/video/home/carousel/journalism.mov" type="video/mp4">
                        </video>
                    </a>
                </div>
                <div class="item item-nomobile" style="background: url('assets/img/home/carousel/shipwrecks-poster.jpg');">
                    <a href="play/emerald">
                        <span class="scanlines"></span>
                        <video preload="none" muted loop class="carousel-video">
                            <source src="assets/video/home/carousel/shipwrecks.mov" type="video/mp4">
                        </video>
                     </a>
                </div>

            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-hero" data-slide-to="0" class="active">
                    <img src="assets/img/games/thumbs/bloom.jpg" alt="Bloom Thumbnail" />
                    <div class="thumb-caption">Bloom: The Saga of the Fertilizer Economy</div>
                </li>
                <li data-target="#carousel-hero" data-slide-to="1">
                    <img src="assets/img/games/thumbs/wake.jpg" alt="Wake Thumbnail" />
                    <div class="thumb-caption">Wake: Tales From The Aqualab</div>
                </li>
                <li data-target="#carousel-hero" data-slide-to="2">
                    <img src="assets/img/games/thumbs/headlines-thumb.jpg" alt="Headlines Thumbnail" />
                    <div class="thumb-caption">Headlines and High Water</div>
                </li>
                <li data-target="#carousel-hero" data-slide-to="3" class="indicator-nomobile">
                    <img src="assets/img/games/thumbs/emerald.jpeg" alt="Emerald Thumbnail" />
                    <div class="thumb-caption">Legend of the Lost Emerald</div>
                </li>
                <li>
                    <a href="play">
                        <div class="chevron"></div>
                        <div class="thumb-caption">
                                Play all of our games
                        </div>
                    </a>
                </li>
            </ol>

            <div class="info">
                <img src="assets/img/logos/fd-logo-yellow.png" alt="Field Day - Learning Games" />
                <p>We're artists and researchers who make beautiful, impactful educational video games.</p>
                <a href="about" class="button yellow filled small">Learn More</a>
            </div>

        </div>
    </section>
    <section id="welcome">
        <div class="container">
            <h2>We are Field Day</h2>
            <p>We are a team of artists, engineers, designers, researchers, teachers, subject experts, writers, parents, kids, and game lovers.</p>
            <p>Welcome to our lab. Here's how we steer the ship.</p>
            <img src="assets/img/home/yellow-arrow.png" alt="down arrow">
        </div>
        <div class="ship">
            <img src="assets/img/home/site-boat.png" alt="ship cutaway">
        </div>
        <div class="water-pattern"></div>
    </section>
    <div class="bottom-frame z1"></div>
    <section id="whygames" class="ship-room lead d-flex flex-col flex-xxl-row">
        <div class="helm-water">
            <div class="helm"></div>
            <h3 class="d-xxl-none ribbon">Why Games?</h3>
            <div class="helm-frame"></div>
        </div>
        <div class="container d-flex flex-col flex-lg-reverse flex-xxl-col">
            <div class="section-img">
                <img src="assets/img/home/game-card.png" alt="gamer id card">
            </div>
            <div class="hero-text">
                <h4>Games let you try on a new identity.</h4>
                <p>Games are an important tool for teachers because they allow players to take on the role of
                    scientists, journalists, explorers, and more.</p>
            </div>
        </div>
    </section>
    <div class="bottom-frame z1"></div>
    <section id="wherethekidsare" class="lead d-flex flex-col flex-xxl-row">
        <div class="cabin-water">
            <div class="cabin"></div>
            <div class="helm-frame"></div>
        </div>
        <div class="container d-flex flex-col flex-lg-reverse flex-xxl-col">
            <div class="section-img">
                <img src="assets/img/home/kids.png" alt="a group of young explorers posing heroically">
            </div>
            <div class="hero-text">
                <h4>Games are where the kids are.</h4>
                <p>Kids spend a lot of time playing games these days. We love making something that
                    can help them interact with the complicated, amazing world that they live in.
                    Our games get played by millions of kids each year.
                </p>
            </div>
        </div>
    </section>
    <div class="bottom-frame"></div>
    <section id="complextopics" class="lead d-flex flex-col flex-xxl-reverse">
        <div class="workshop-container">
            <div class="workshop">
            </div>
        </div>
        <div class="container hero-text">
            <h4>Games explore complex topics.</h4>
            <p>It's hard to communicate super complex topics in a short time frame. Games turn complicated topics into fun,
                hands-on experiences that actually reach people. Our games get millions of plays.
            </p>
        </div>
    </section>
    <div class="bottom-frame"></div>
    <section id="modelingroom" class="ship-room lead d-flex flex-col flex-xxl-reverse">
        <div class="modeling-container">
            <div class="modeling-monitor">
                <video autoplay muted loop>
                    <source src="assets/video/ModelingRoom_Monitor.mp4" type="video/mp4">
                </video>
            </div>
            <div class="modeling-room">
                <img class="modeling-reel" src="assets/img/home/ModelingRoom_Reel.png">
            </div>
        </div>
        <div class="container hero-text">
            <h4>Games as assessment</h4>
            <p>Our research team leverages data science to create meaningful insights out of mountains of player data.
                We help researchers and educators understand how kids learn.</p>
        </div>
    </section>
    <div class="bottom-frame"></div>
    <section id="howdowemake" class="d-flex flex-col deepsea">
        <div class="container d-flex flex-col">
            <h3>
                HOW DO WE MAKE GAMES?
            </h3>
            <h4>
                Partnerships are the foundation of our design practice.
            </h4>
            <p>
                Field Day Lab was started as a partnership between the Wisconsin Department of Public Instruction and the University of Wisconsin-Madison.
            </p>
            <p>
                Each of our games is made in collaboration with a team of researchers, subject matter experts, scientists, teachers, and kids.
            </p>

            <div class="bios">
                <!-- Gridder navigation -->
                <ul class="apps gridder">
                    <li class="gridder-list app-card" data-griddercontent="#person1">
                        <img src="/assets/img/home/partners/sue-robinson.jpg" alt="Sue Robinson" class="partner-img">
                        <img class="collapse-arrow invisible" src="/assets/img/home/blue-arrow.png" alt="down arrow">
                    </li>
                    <li class="gridder-list app-card" data-griddercontent="#person2">
                        <img src="/assets/img/home/partners/victor-zavala.jpg" alt="Victor Zavala" class="partner-img">
                        <img class="collapse-arrow invisible" src="/assets/img/home/blue-arrow.png" alt="down arrow">
                    </li>
                    <li class="gridder-list app-card" data-griddercontent="#person3">
                        <img src="/assets/img/home/partners/john-pfotenhauer.jpg" alt="John Pfotenhauer" class="partner-img">
                        <img class="collapse-arrow invisible" src="/assets/img/home/blue-arrow.png" alt="down arrow">
                    </li>
                    <li class="gridder-list app-card" data-griddercontent="#person4">
                        <img src="/assets/img/home/partners/tamara-thomsen.jpg" alt="Tamara Thomsen" class="partner-img">
                        <img class="collapse-arrow invisible" src="/assets/img/home/blue-arrow.png" alt="down arrow">
                    </li>
                </ul>
                <!-- Gridder content -->          
                <div id="person1" class="app-expanded gridder-content">
                    <div class="panel">
                        <div class="panel-body text-left d-flex flex-col flex-lg-row">
                            <div class="panel-img">
                                <img src="/assets/img/gameplay/headlines2.jpg" alt="Headlines and High Water game play">
                            </div>
                            <div class="panel-text">
                                <h4>
                                    Sue Robinson:
                                </h4>
                                <h5>
                                    Headlines and High Water
                                </h5>
                                <p>"Working with Field Day Lab on our Headlines and High Water journalism video game has been a highlight of
                                my career to date. The team is competent, responsive, creative, and brilliant and, furthermore, they are
                                a dream to collaborate with. I am already seeking new projects we might do together!"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="person2" class="app-expanded gridder-content">
                    <div class="panel">
                        <div class="panel-body text-left d-flex flex-col flex-lg-row">
                            <div class="panel-img">
                                <!-- <img src="/assets/img/gameplay/headlines2.jpg" alt="Headlines and High Water game play"> -->
                            </div>
                            <div class="panel-text">
                                <h4>
                                    Victor Zavala:
                                </h4>
                                <h5>
                                    <!-- Victor Zavala game -->
                                </h5>
                                <p>
                                    <!-- Victor Zavala text -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="person3" class="app-expanded gridder-content">
                    <div class="panel">
                        <div class="panel-body text-left d-flex flex-col flex-lg-row">
                            <div class="panel-img">
                                <!-- <img src="/assets/img/gameplay/headlines2.jpg" alt="Headlines and High Water game play"> -->
                            </div>
                            <div class="panel-text">
                                <h4>
                                    John Pfotenhauer:
                                </h4>
                                <h5>
                                    <!-- John Pfotenhauer game -->
                                </h5>
                                <p>
                                    <!-- John Pfotenhauer text -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="person4" class="app-expanded gridder-content">
                    <div class="panel">
                        <div class="panel-body text-left d-flex flex-col flex-lg-row">
                            <div class="panel-img">
                                <!-- <img src="/assets/img/gameplay/headlines2.jpg" alt="Headlines and High Water game play"> -->
                            </div>
                            <div class="panel-text">
                                <h4>
                                    Tamara Thomsen:
                                </h4>
                                <h5>
                                    <!-- Tamara Thomsen game -->
                                </h5>
                                <p>
                                    <!-- Tamara Thomsen text -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     

            <div class="divider"></div>

            <h3>
                GAMES DESIGNED FOR THE CLASSROOM
            </h3>
            <p>
                Sure, sure, it feels great when kids ask if they can keep playing our games when class is over (the answer is yes!) but our games are designed and tested to work in class.
            </p>
            <p>
                Our games can provide a meaningful experience in a single class period. We create them with input from education standards and our teacher fellowship program.
            </p>
            <p>
                You're never too old to learn through play! We make games for elementary through college and beyond.
            </p>            
        
            <div class="divider"></div>

             <h4>
                And did we mention they're free?
             </h4>
            <p>
                We don't ever make pay-to-play games. No ads. No grinding. No subscriptions, no logins, no hidden fees,
                and no microtransactions.
            </p>
            <p>
                Our games are always completely free for the public and available online. Funding comes from public
                projects, partnerships, and grants.
            </p>
            <button class="button small yellow filled">Play our games</button>

            <!-- BUBBLES SECTION -->
            <div class="bubble-container">
                <figure class="bubble bubble-xl float">
                    <blockquote>
                        <p>"Jo Wilder helps develop historical inquiry skills while meeting state standards and, of course, keeps kids engaged and excited! The game brought our existing fourth-grade curriculum full circle."</p>
                    </blockquote>
                    <figcaption>
                        Mike Scoville<br>
                        K-12 Library Media Specialist,<br>
                        Gibraltar Area School District
                    </figcaption>
                </figure>
                <figure class="bubble bubble-lg float">
                    <blockquote>
                        <p>"An excellent experience in linking evidence to claims. This well crafted game is well worth those precious classroom minutes. My students keep begging me to play again!"</p>
                    </blockquote>
                    <figcaption>
                        Katherine Seibel<br>
                        Educator,<br>
                        Auburndale Elementary
                    </figcaption>
                </figure>
                <figure class="bubble bubble-md floatslow">
                    <blockquote>
                        <p>"If I didn't play this game, I wouldn't have been into history."</p>
                    </blockquote>
                    <figcaption>
                        4th Grader<br>
                        Elmwood Elementary
                    </figcaption>
                </figure>
                <figure class="bubble bubble-sm floatslow">
                    <blockquote>
                        <p>"Can we play it again?"</p>
                    </blockquote>
                    <figcaption>
                        4th grader<br>
                        Burlington, WI
                    </figcaption>
                </figure>
                <div class="bubble-empty bubble-xs float"></div>
                <div class="bubble-empty bubble-xxs floatslow"></div>
                <img class="deepsea-sub floatslow" src="/assets/img/home/deepsea-sub.png" alt="submarine">
            </div>
        </div>
    </section>
    <div class="ocean-floor"></div>    
</div>

<!--include footer-->
<?php include 'includes/footer-homepage.php';?>

<!--include modals-->
<?php include 'includes/modals.php';?>
<script>
  // toggle navbar spotlight when make games section scrolls into view
  $(window).scroll(function() {
      $(this).scrollTop() >= $('#howdowemake').offset().top-$('.small-nav').height() ? $('.spotlight').removeClass('hide') : $('.spotlight').addClass('hide');
  });

    $(function() {
        // Call Gridder
        $('.gridder').gridderExpander({
            scroll: true,
            scrollOffset: 100,
            scrollTo: "panel",                  // panel or listitem
            animationSpeed: 900,
            animationEasing: "easeInOutExpo",
            showNav: true,                      // Show Navigation
            nextText: "",                   // Next button text
            prevText: "",               // Previous button text
            closeText: "<img src=\"/assets/img/home/blue-close.png\">", // Close button text
            onStart: function(){
                //Gridder Inititialized
            },
            onContent: function(){
                //Gridder Content Loaded
                // hide any visible down arrows
                $('.gridder-list:not(.selectedItem) .collapse-arrow').addClass('invisible');
                // show arrow for selected person
                $('.gridder-list.selectedItem .collapse-arrow').removeClass('invisible');
            },
            onClosed: function(){
                //Gridder Closed
                // hide down arrows
                $('.gridder-list .collapse-arrow').addClass('invisible');
            }
        });
    });
</script>
</body>

</html>