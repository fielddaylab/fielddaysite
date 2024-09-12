<?php include 'includes/header.php';?>
<title>Field Day Learning Games</title>
<meta name="description" content="Field Day Lab">
</head>
<!--include main navigation-->
<?php include 'includes/main-nav.php';?>
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
    <section id="whygames" class="lead d-flex flex-col flex-xxl-row">
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
                <p>Games are an important tool for teachers because they allow players to take on the role of scientists, journalists, explorers, and more.</p>
            </div>
        </div>
    </section>
    <div class="bottom-frame"></div>
    <section id="modelingroom" class="lead d-flex flex-col flex-xxl-reverse">
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
            <p>Our research team leverages data science to create meaningful insights out of mountains of player data. We help researchers and educators understand how kids learn.</p>
        </div>
    </section>
    <div class="bottom-frame"></div>
    <section id="howdowemake" class="d-flex flex-col deepsea">
        <div class="container d-flex flex-col">
            <h2>
                HOW DO WE MAKE GAMES?
            </h2>
            <h3>
                Partnerships are the foundation of our design practice.
            </h3>
            <p>
                Field Day Lab was started as a partnership between the Wisconsin Department of Public Instruction and the
                University of Wisconsin-Madison.
            </p>
            <p>
                Each of our games is made in collaboration with a team of researchers, subject matter experts, scientists,
                teachers, and kids.
            </p>

            <div class="bios">
                <!-- Gridder navigation -->
                <ul class="apps gridder">
                    <li class="gridder-list" data-griddercontent="#person1">
                        <img src="/assets/img/home/placeholder-headshot.png" class="">
                    </li>
                    <li class="gridder-list" data-griddercontent="#person2">
                        <img src="/assets/img/home/placeholder-headshot.png" class="">
                    </li>
                    <li class="gridder-list" data-griddercontent="#person4">
                        <img src="/assets/img/home/placeholder-headshot.png" class="">
                    </li>
                    <li class="gridder-list" data-griddercontent="#person4">
                        <img src="/assets/img/home/placeholder-headshot.png" class="">
                    </li>
                </ul>
                <!-- Gridder content -->

            
                <div id="person1" class="app-expanded gridder-content">
                    <div>
                        <span class="close-app">
                        <div>
                            <h2>
                                Sue Robinson:
                            </h2>
                            <h3>
                                Headlines and High Water
                            </h3>
                            <p>
                                "Working with Field Day Lab on our Headlines and High Water journalism video game has been a highlight of
                                my career to date. The team is competent, responsive, creative, and brilliant and, furthermore, they are
                                a dream to collaborate with. I am already seeking new projects we might do together!"
                            </p>
                        </div>
                        <div>
                            <img src="/assets/img/home/placeholder-headshot.png">
                        </div>
                    </div>
                </div>
            </div>
     

            <div class="divider"></div>

            <h2>
                GAMES DESIGNED FOR THE CLASSROOM
            </h2>
            <p>
                Sure, sure, it feels great when kids ask if they can keep playing our games when class is over (the answer
                is yes!) but our games are designed and tested to work in class.
            </p>
            <p>
                Our games can provide a meaningful experience in a single class period. We create them with input from
                education standards and our teacher fellowship program.
            </p>
            <p>
                You're never too old to learn through play! We make games for elementary through college and beyond.
            </p>
            
        
            <div class="divider"></div>

             <h3>
                And did we mention they're free?
             </h3>
            <p>
                We don't ever make pay-to-play games. No ads. No grinding. No subscriptions, no logins, no hidden fees,
                and no microtransactions.
            </p>
            <p>
                Our games are always completely free for the public and available online. Funding comes from public
                projects, partnerships, and grants.
            </p>
            <button class="button yellow filled">
                PLAY OUR GAMES
            </button>

            <!-- BUBBLES SECTIONS -->

            
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
</script>
<script>
    $(function() {

// Call Gridder
$('.gridder').gridderExpander({
    scroll: true,
    scrollOffset: 100,
    scrollTo: "panel",                  // panel or listitem
    animationSpeed: 900,
    animationEasing: "easeInOutExpo",
    showNav: true,                      // Show Navigation
    nextText: "Next",                   // Next button text
    prevText: "Previous",               // Previous button text
    closeText: "Close",                 // Close button text
    onStart: function(){
        //Gridder Inititialized
    },
    onContent: function(){
        //Gridder Content Loaded
    },
    onClosed: function(){
        //Gridder Closed
    }
});
});
</script>
</body>
</html>