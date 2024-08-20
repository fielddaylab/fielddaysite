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
            
        </div>
    </section>
    <section id="welcome">
        <h2>Welcome To Field Day</h2>
        <div class="ship">
            <img src="assets/img/home/ship-vector.png">
        </div>
    </section>
    <div class="bottom-frame z1"></div>
    <section id="whygames" class="lead d-flex flex-col flex-xxl-row">
        <div class="helm-water">
            <div class="helm"></div>
            <h3 class="h2 d-xxl-none">Why Games?</h3>
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
</div>

<!--include footer-->
<?php include 'includes/footer.php';?>

<!--include modals-->
<?php include 'includes/modals.php';?>
<script>

    // TODO: Move this to a .js file for production

    jQuery(function(){

        // If we're at a mobile resolution, we'll hide the optional 4th slide
        showOrHideOptionalSlides();

        // Find the first carousel video
        jQuery('#carousel-hero .item.active .carousel-video:first').each(function(){
            
            const firstVideoElement = this;

            // Begin playing first carousel video
            firstVideoElement.play();

            // Once the first video file has loaded
            firstVideoElement.addEventListener('loadeddata', () => {
                if(firstVideoElement.readyState >= 3){

                    // Find the other carousel videos
                    jQuery('#carousel-hero .item:not(".active") .carousel-video').each(function(){
                        // Start loading other videos
                        this.load();
                    });

                    initCarousel();

                }
            });


        });

        // When the window is resized
        jQuery(window).on('resize', function(){
            showOrHideOptionalSlides();
        });

    });

    let initCarousel = function(){

        jQuery('#carousel-hero')
                        .carousel('cycle') // Beging cycling the carousel
                        .on('slide.bs.carousel', function (e){ // When the slide transition starts

                            // Start playing the next video before the next slide is active.
                            // If we wait until the "slid" event there's a visual blip
                            // from the static background image transitioning to the video, the first time the video plays.

                            e.relatedTarget.querySelector('.carousel-video').play();

                            // Pause the current video
                            let currentVideo = e.delegateTarget.querySelector('.item.active .carousel-video');

                            if(currentVideo)
                            {
                                currentVideo.pause()        
                            }

                        })
    }

    let previousWindowWidth = null;

    let showOrHideOptionalSlides = function (){

        // Get the current window width
        let windowWidth = jQuery(window).width();

        // Breakpoint where we transition from 3 to 4 slides
        let mobileWidthBreakpoint = 1132;

        // If we're currently at mobile resolution
        if (windowWidth < mobileWidthBreakpoint)
        {
            // If we've transitioned from desktop to mobile, or if this is the initial page load
            if(previousWindowWidth > mobileWidthBreakpoint || previousWindowWidth === null)
            {
                // Ensure we're not on a slide that we're hiding
                jQuery('#carousel-hero').carousel(0);
                jQuery('#carousel-hero').carousel('pause');

                // Loop through the slides that we don't show on mobile
                jQuery('#carousel-hero .item-nomobile').each(function(){

                    // Hide slide
                    this.classList.add('hide');
                    this.classList.remove('item');
                    this.classList.remove('active');
                });

                // If this isn't the initial page load
                if(previousWindowWidth !== null)
                {
                    // Reinitialize the carousel
                    initCarousel();
                }
                

            }

        }
        else // We're at desktop resolution
        { 
            // If we're switching from mobile to desktop
            if(previousWindowWidth < mobileWidthBreakpoint)
            {                
                jQuery('#carousel-hero').carousel(0);
                jQuery('#carousel-hero').carousel('pause');

                // Restore slides that were hidden at mobile resolutions
                jQuery('#carousel-hero .item-nomobile').each(function(){
                    this.classList.add('item');
                    this.classList.remove('hide');
                });

                // Reinitialize the carousel
                initCarousel();

            }
        }

        previousWindowWidth = windowWidth;
    }

</script>
</body>
</html>