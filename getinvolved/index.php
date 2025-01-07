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
                	<p class="small centered white">Whether you're an educator, researcher, game designer, or student, there are countless ways for you to get involved. Explore new opportunities to collaborate with us, share your expertise, and create the next generation of educational games.</p>
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
						<li><a href="#s1">Join the Vault</a></li>
						<li><a href="#s2">Join an Teacher Fellowships</a></li>
						<li><a href="#s3">Make a Game with Us</a></li>
						<li><a href="#s4">Student Internship</a></li>
						<li><a href="#s5">Research Partner</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div id="s1" class="fact">
						<div class="info-section left">
							<h2>Discover New Learning Games</h2>
							<p class="small">
								Explore the largest library of free learning games on the web, including those created by us. Curated by the team at Field Day Lab, these games are designed to make learning fun and engaging.
							</p>
							<a class="button small yellow filled" href="https://vaultlearninggames.org/" target="_blank">Learn More</a>
						</div>
						<div class="img-section right">
							<img src="/assets/img/get-involved/the-vault.png" alt="image of a vintage computer with a logo titled the vault below">
						</div>
					</div>
					<div id="s2" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/educator-fellows.png" alt="teacher fellowship">
						</div>
						<div class="info-section right">
							<h2>Join an educator fellowship</h2>
							<p class="small">
								Are you a teacher passionate about game-based learning? Apply to our Educator Fellowship and design a game with us! All of our games are developed in collaboration with classroom experts like you.
							</p>
							<a class="button small yellow filled" href="/fellowships" target="_blank">Learn More about fellowships</a>
						</div>
					</div>
					<div id="s3" class="fact">
						<div class="info-section left">
							<h2>make a game</h2>
							<p class="small">
								Bring your research to life through games! If you're a researcher with innovative ideas, we’ll help turn your work into a game that reaches a broad audience.
							</p>
							<a class="button small yellow filled" href="/work" target="_blank">Make a game with us</a>
						</div>
						<div class="img-section right">
							<img src="/assets/img/get-involved/make-a-game.png" alt="teacher fellowship">
						</div>
					</div>

					<div id="s4" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/educator-fellows.png" alt="teacher fellowship">
						</div>
						<div class="info-section right">
							<h2>Apply for an internship</h2>
							<p class="small">
								We offer paid internship positions in Research, Engineering, Design, and Art. Join our team to gain real-world experience in education and game design.
							</p>
							<a class="button small yellow filled" href="https://docs.google.com/forms/d/e/1FAIpQLSckj7eC29biieodPyCFRBZFlskKyeMK_Ca3qt5EndYC14XYdw/viewform?usp=sf_link" target="_blank">Apply Now</a>
						</div>
					</div>
					<div id="s5" class="fact">
						<div class="info-section left">
							<h2>Join our Research Community</h2>
							<p class="small">
								Gain access to valuable game data through our Open Game Data project. Researchers can explore data from our games, and game studios can make their data available for study and innovation.
							</p>	
							<a class="button small yellow filled" href="/research" target="_blank">Learn More</a>
						</div>
						<div class="img-section right">
							<img src="/assets/img/get-involved/research-partner.png" alt="teacher fellowship">
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