<!--include head -->
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Get Involved - Field Day</title>
<meta name="description" content="Get Involved - Field Day">
</head>

<body class="nav-fixed get-involved link-getinvolved page">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

  <div id="mainwrapper">
  <!--Start page content -->

    <div class="get-involved">
        <!-- Hero Section -->
        <section id="heroscope" class="singlehero page_hero">
            <div class="container">
                <h1>Get involved with Field Day</h1>
            </div>
          <div class="helm-frame-top"></div>
        </section> 
        <!-- Marquee Section -->
        <section id="marquee">
          <div class="marquee-content" aria-hidden="true">
				<p><span>WE ARE PERISHING FOR LACK OF<span style="color:#1B7FA7"><em>WONDER,</em></span>NOT FOR LACK OF<span style="color:#A1766C"><em>WONDERS.</em></span>WE ARE PERISHING FOR LACK OF<span style="color:#1B7FA7"><em>WONDER,</em></span>NOT FOR LACK OF<span style="color:#A1766C"><em>WONDERS.</em></span></span></p>
				<p><span>NOT FOR LACK OF<span style="color:#A1766C"><em>WONDERS.</em></span>WE ARE PERISHING FOR LACK OF<span style="color:#1B7FA7"><em>WONDER,</em></span>NOT FOR LACK OF<span style="color:#A1766C"><em>WONDERS.</em></span>WE ARE PERISHING FOR LACK OF<span style="color:#1B7FA7"><em>WONDER,</em></span></span></p>
				<p><span>FOR LACK OF<span style="color:#1B7FA7"><em>WONDER,</em></span>NOT FOR LACK OF<span style="color:#A1766C"><em>WONDERS.</em></span>WE ARE PERISHING FOR LACK OF<span style="color:#1B7FA7"><em>WONDER,</em></span>NOT FOR LACK OF<span style="color:#A1766C"><em>WONDERS.</em></span>WE ARE PERISHING </span></p>
          </div>
        </section>
        <!-- Body -->
		<section id="content-body">
        <div class="helm-frame-bottom"></div>
			<div class="row">
				<div class="nav-wrap sticky col-lg-4">
					<div class="nav">
						<ul>
						<li><a href="#s1">Join an Teacher Fellowships</a></li>
						<li><a href="#s2">Make a Game with Us</a></li>
						<li><a href="#s3">Student Internship</a></li>
						<li><a href="#s4">Research Partner</a></li>
						<li><a href="#s5">Join the Vault</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div id="s1" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/educator-fellows.png" alt="teacher fellowship">
						</div>
						<div class="info-section right">
							<h2>educator fellowships</h2>
							<p class="small">
								Are you a teacher interested in games for learning? Join us at a Teacher Fellowship and design a game with us! We want our games to reach classrooms, so we’re partnering up with the classroom experts: teachers like you.
							</p>
							<a class="button small yellow filled" href="/fellowships" target="_blank">Learn More</a>
						</div>
					</div>
					<div id="s2" class="fact">
						<div class="info-section left">
							<h2>make a game with us</h2>
							<p class="small">
								Are you looking to bring your research to the public? We’ll turn your amazing work into a game that reaches huge audiences. Our games cost a fraction of a penny per minute of engagement and last for a decade.
							</p>
							<a class="button small yellow filled" href="/work" target="_blank">Learn More</a>
						</div>
						<div class="img-section right">
							<img src="/assets/img/get-involved/make-a-game.png" alt="teacher fellowship">
						</div>
					</div>

					<div id="s3" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/educator-fellows.png" alt="teacher fellowship">
						</div>
						<div class="info-section right">
							<h2>college internships</h2>
							<p class="small">
								Are you a student looking to work with Field Day? We offer paid  internship positions in Research, Engineering, Design, and Art. 
							</p>
							<a class="button small yellow filled" href="/" target="_blank">Learn More</a>
						</div>
					</div>
					<div id="s4" class="fact">
						<div class="info-section left">
							<h2>Become a research partner</h2>
							<p class="small">
								We have built an open-source and community-maintained data storage and processing pipeline for educational game data. From the logging libraries that studios can integrate into their games, all the way to the final visualizations that allow design researchers to build new theory, we are thinking about modularity, scalability and performance.
							</p>	
							<a class="button small yellow filled" href="/research" target="_blank">Learn More</a>
						</div>
						<div class="img-section right">
							<img src="/assets/img/get-involved/research-partner.png" alt="teacher fellowship">
						</div>
					</div>
					<div id="s5" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/the-vault.png" alt="image of a vintage computer with a logo titled the vault below>
						</div>
						<div class="info-section right">
							<h2>Join the Vault</h2>
							<p class="small">
								Be a part of the largest free library of learning games on the web. 
							</p>
							<a class="button small yellow filled" href="/" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>

    </div>

  <!-- End page content -->
  </div>

<!--include footer -->
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<script src='../assets/js/vendor/graphemescope.js'></script>
<script>
var images = [
  "../assets/img/hero-images/getinvolved-bg.jpg"
];


// Let's create graphemescope object inside the container
var container = $("#heroscope");
var scope = new Graphemescope( container[0] );


var index = 0;
function changePicture() {
    scope.setImage(images[index]);  
    index = (index + 1) % images.length;
};

setInterval(changePicture, 2000);
changePicture();

$(window).mousemove(function(event) {
  var factorx = event.pageX / $(window).width();
  var factory = event.pageY / $(window).height()
  
  // This will move kaleidoscope
  scope.angleTarget = factorx;
  scope.zoomTarget  = 1.5 + 0.1 * factory;
});


var resizeHandler = function() {
  container.width( $(window).width() );
};

$(window).resize(resizeHandler);
$(window).resize();

container.click(changePicture);	

</script>

</body>
</html>