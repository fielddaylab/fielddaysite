<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-29QRJ22477"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-29QRJ22477');
</script>

<title>Wake - Field Day</title>
<meta name="description" content="A 6th-9th grade science game that challenges students with engaging, authentic missions in a variety of ocean-based ecosystems." />
<!--<script>
window.onload = function()
{
  var clickload = document.getElementById("clickload");
  var iframe = document.getElementById("content");

  function loadiframe()
  {
    iframe.style.display = "block";
    if(location.href.indexOf("?") > -1)
      iframe.src = "game/iframe.html"+location.href.substring(location.href.indexOf("?"))
    else
      iframe.src = "game/iframe.html";
    clickload.removeEventListener("click",loadiframe);
    clickload.parentNode.removeChild(clickload);
    clickload = null;
  }
  clickload.addEventListener("click",loadiframe);
  console.log("v0.0.1");
  loadiframe();
};
</script>-->
</head>

<body class="singleapp wake">

  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/main-nav.php";
  include_once($path); ?>

  <!-- Main Content -->
  <section class="app-hero">
    <div class="hero-content">
      <div class="info-panel">
        <ul class="breadcrumbs">
          <li><a href="/">Field Day</a></li>
          <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
          <li>Play</li>
          <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
          <li>Wake</li>
        </ul>
      </div>
      <div class="app-info">
        <h1 class="app-title">Wake</h1>
      </div>
      <div class="app-description">
        <p class="small">Play as a young scientist faced with scientific challenges across multiple oceanic ecosystems. Made in partnerhsip with Harvard, Carnegie Mellon, and the Penn Center for Learning Analytics. Funding provided by NSF</p>
      </div>

      <div class="buttons">
        <a class="button small white filled" href="https://fielddaylab.org/play/wake/ci/production/" target="_blank">Play Wake</a>
        <a class="button small white" href="https://sites.google.com/wisc.edu/waketeacherguide/home">Support Site</a>
        <a class="button small white" href="https://docs.google.com/document/d/1CUAAmyAP0YpvhqAlC01GmQvWkoTzx_tMSMQZTEOU50c/edit?usp=sharing">Teaching Guide</a>
        <a class="button small white" href="https://groups.google.com/g/wake-educators">Educator Community</a>
        <!--<a class="button small white" href="#app-about">Learn More</a>-->
      </div>
    </div>
    <div class="hero-img"><img src="../../assets/img/hero-images/wake-hero.png" class="img-fluid"></div>
  </section>

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#glance">At a Glance</a></li>
            <li><a href="#practices">Scientific Practices</a></li>
            <li><a href="#standards">Academic Standards</a></li>
            <li><a href="#partners">Partners</a></li>
            <li><a href="#funding">Funding</a></li>
          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">
        <h2>At a Glance</h2>
        <ul>
          <li>Grade levels: 6-9 Life Sciences</li>
          <li>Academic Practices: Experimentation, Modeling, Argumentation</li>
          <li>Content [Ecosystems]: Kelp forest, Coral reef, Arctic, Bayou, Deep sea</li>
          <li>Content [Key Concepts]: Food webs, environmental stressors, ecological restoration</li>
          <li>Minimum Session Length: 40-minute minimum for a single session</li>
          <li>Total Gameplay: 10 hours of total gameplay possible</li>
          <li>Compatibility: Chromebook, PC or Mac with Internet access</li>
        </ul>
        <h2 id="practices">Scientific Practices</h2>
        <p><em>Wake: Tales from the Aqualab</em> targets the NGSS science practices of experimentation, modeling, and argumentation. The tools students will use to explore the ecosystems and complete challenges in the game, include:</p>
        <p>Experimentation Tools:</p>
        <ul>
            <li>Observation Tank to collect information about organism interactions.</li>
            <li>Stress Tank to learn about organism tolerance to different levels of temperature, light, and pH.</li>
            <li>Measurement Tank to measure rates and processes over time.</li>
        </ul>
        <p>Modeling Tools:</p>
        <ul>
            <li>Visual Modeling to represent ecosystem interactions.</li>
            <li>Numerical Modeling to run simulations of future change and make predictions.</li>
            <li>Intervention Modeling, to perform what-if experiments and predict the impact of changes to the ecosystem.</li>
        </ul>
        <p>Argumentation Tools:</p>
        <ul>
            <li>Claim, evidence, reasoning structure.</li>
            <li>Support arguments with data collected from observation, experimentation, and modeling.</li>
        </ul>

        <h2 id="standards">Academic Standards:</h2>
        <p>The following <a href="https://www.nextgenscience.org/" target="_blank">NGSS standards</a> are most closely tied to Aqualab activities:</p>
        <div class="standards-block">
            <div class="">
                <p class="small"><span class="bold">MS-LS1-4.</span><br/> Use argument based on empirical evidence and scientific reasoning to support an explanation for how characteristic animal behaviors and specialized plant structures affect the probability of successful reproduction of animals and plants respectively.</p>
                <p class="small"><span class="bold">MS-LS1-5.</span><br/> Construct a scientific explanation based on evidence for how environmental and genetic factors influence the growth of organisms.</p>
                <p class="small"><span class="bold">MS-LS2-1.</span><br/> Analyze and interpret data to provide evidence for the effects of resource availability on organisms and populations of organisms in an ecosystem.</p>
                <p class="small"><span class="bold">MS-LS2-3.</span><br/> Develop a model to describe the cycling of matter and flow of energy among living and nonliving parts of an ecosystem.</p>
                <p class="small"><span class="bold">MS-LS2-4.</span><br/> Construct an argument supported by empirical evidence that changes to physical or biological components of an ecosystem affect populations.</p>
                <p class="small"><span class="bold">MS-LS4-4.</span><br/> Construct an explanation based on evidence that describes how genetic variations of traits in a population increase some individuals' probability of surviving and reproducing in a specific environment.</p>
                <p class="small"><span class="bold">MS-LS4-6.</span><br/> Use mathematical representations to support explanations of how natural selection may lead to increases and decreases of specific traits in populations over time.</p>
                <p class="small"><span class="bold">MS-ESS3-3.</span><br/> Apply scientific principles to design a method for monitoring and minimizing a human impact on the environment.</p>
            </div>
        </div>

        <h2 id="partners">Partners</h2>
        <p><em>Wake</em> was developed as the result of a partnership between Field Day Learning Games, the Wisconsin Center for Education Research (UW-Madison), Harvard University, Carnegie Mellon University, and the Penn Center for Learning Analytics.</p>

        <h2 id="funding">Funding</h2>
        <p>NSF Collaborative Research: Developing an Online Game to Teach Middle School Students Science Research Practices in the Life Sciences; DRL-1907384, DRL-1907398, and DRL-1907437</p>
      </div>
    </div>
  </section>

  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/footer.php";
  include_once($path); ?>

  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/modals.php";
  include_once($path); ?>

</body>

</html>
