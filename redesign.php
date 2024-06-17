<?php include 'includes/header.php';?>
<title>Field Day Learning Games</title>
<meta name="description" content="Field Day Lab">
</head>
<!--include main navigation-->
<?php include 'includes/main-nav.php';?>
<!-- start page template -->
<div class="home-page">
    <section id="welcome">
        <h2>Welcome To Field Day</h2>
        <div class="ship">
            <img src="assets/img/home/ship-vector.png">
        </div>
    </section>
    <div class="bottom-frame"></div>
    <section id="whygames" class="lead d-flex flex-col flex-xxl-row">
        <div class="helm-water">
            <div class="helm">
                <h3 class="h2 d-xxl-none">Why Games?</h3>
            </div>
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

</body>
</html>