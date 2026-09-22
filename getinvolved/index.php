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
                <h1>Get involved with<br />Field Day</h1>
                	<p class="centered white">Whether you're an educator, researcher, game designer, or student, there are countless ways for you to get involved.</p>
            </div>
        </section> 
        <!-- Body -->
		<section id="content-body">
			<div class="row">
				<!--<div class="nav-wrap sticky col-lg-4">
					<div class="nav">
						<ul>
						<li><a href="#s1">Join the Vault</a></li>
						<li><a href="#s2">Join an Teacher Fellowships</a></li>
											<li><a href="#s4">Student Internship</a></li>
						<li><a href="#s5">Research Partner</a></li>
						</ul>
					</div>
				</div>-->
				<div class="col-lg-12">
					<div id="s1" class="fact">
						<div class="info-section left">
							<h2>Play Games at The Vault</h2>
							<p class="small">
								Explore the largest library of free learning games on the web, including those created by us. Curated by the team at Field Day Lab, these games are designed to make learning fun and engaging.
							</p>
							<a class="button small yellow filled" href="https://vaultlearninggames.org/" target="_blank">Play</a>
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
							<h2>Join a Game Incubator</h2>
							<p class="small">
								Are you a teacher, researcher, or organization ready to shape the next generation of learning games? Our Game Incubators bring educators, scientists, and sponsors together to design and build free classroom games from cutting-edge research — in one intensive kickoff event plus follow-up sessions. Educators receive a stipend and travel. Researchers get lasting public outreach. Sponsors get a creative seat and real reach.
							</p>
							<a class="button small yellow filled" href="/fellowships-incubators" target="_blank">See the Incubators</a>
						</div>
					</div>
					<div id="s4" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/internship.jpg" alt="teacher fellowship">
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
							<a class="button small yellow filled" href="https://opengamedata.fielddaylab.wisc.edu/" target="_blank">Learn More</a>
						</div>
						<div class="img-section right">
							<img src="/assets/img/get-involved/research-partner.png" alt="teacher fellowship">
						</div>
					</div>
					<div id="s6" class="fact">
						<div class="img-section left">
							<img src="/assets/img/get-involved/sponsor-incubator.png" alt="Researchers and educators collaborating at a Field Day Game Incubator kickoff event">
						</div>
						<div class="info-section right">
							<h2>Sponsor An Incubator</h2>
							<p class="small">
								Every Game Incubator runs because an organization believed in the mission. As a sponsor, you bring the theme and the question — Field Day brings researchers, educators, and game designers together to build a free classroom game around it. Sponsors participate in the full creative process, get a seat at the green-light decision, and see their research reach students nationwide. Costs vary by cohort size and scope.
							</p>
							<a class="button small yellow filled" href="mailto:djgagnon@wisc.edu">Reach Out</a>
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
  "../assets/img/hero-images/about-hero.jpg"
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
  scope.zoomTarget  = 1.0 + 0.1 * factory;
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