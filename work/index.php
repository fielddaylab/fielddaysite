<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Work with Field Day</title>
</head>

<body class="nav-fixed workwithus">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

  <div id="mainwrapper">
    <section class="singlehero work_hero">
      <div class="info">
        <h1 class="corrected">Work with Field Day</h1>
        <p>We partner with researchers, labs and museums to engage the public with innovative digital media like augmented and mixed reality, games, youth digital media production, coding and </p>
        <button class="button black small">Learn how we work</button>
      </div>
      <div class="graphic">
        <div class="starfield topright">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <div class="starfield topleft big">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <img class="spaceplane-illustration" src="/assets/img/illustrations/spaceplane-vertical.png">
        <div class="exhaustwrap">
          <img class="exhaust one" src="/assets/img/illustrations/exhaust.png">
          <img class="exhaust two" src="/assets/img/illustrations/exhaust2.png">
        </div>
        <div class="exhaustwrap two">
          <img class="exhaust one late" src="/assets/img/illustrations/exhaust.png">
          <img class="exhaust two late" src="/assets/img/illustrations/exhaust2.png">
        </div>
      </div>
    </section>
    <section class="how-we-work">
      <div id="carousel" class="hero carousel slide carousel-fade " data-ride="carousel">
          <div class="slide-wrap">
            <ul class="carousel-indicators slide-bullets">
                <li class="slide-bullet active" data-target="#carousel" data-slide-to="0">
                  <span class="bullet">1</span>
                  <span class="rule"></span>
                  <span class="bullet-caption">Let's Talk</span>
                </li>
                <li class="slide-bullet" data-target="#carousel" data-slide-to="1">
                  <span class="bullet">2</span>
                  <span class="rule"></span>
                  <span class="bullet-caption">Production</span>
                </li>
                <li class="slide-bullet" data-target="#carousel" data-slide-to="2">
                  <span class="bullet">3</span>
                  <span class="rule"></span>
                  <span class="bullet-caption">Distribution</span>
                </li>
                <li class="slide-bullet" data-target="#carousel" data-slide-to="3">
                  <span class="bullet">4</span>
                  <span class="bullet-caption">Evaluation</span>
                </li>
            </ul>
          </div>
          <!-- Carousel items -->
          <div class="carousel-inner">
              <div class="active item">
              </div>
              <div class="item">
              </div>
              <div class="item">
              </div>
              <div class="item">
              </div>
          </div>
          <!-- Carousel nav -->
      </div>
    </section>


  </div>

<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<script>
  $('.ourwork').carousel({interval: false });
</script>

</body>
</html>
