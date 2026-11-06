<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>

<title>Locke's Gambit - Field Day</title>
<meta name="description" content="Locke's Gambit is an electrical engineering puzzle strategy game set on a space-faring microchip fabrication ship in the distant future." />

</head>


<body class="singleapp lockesgambit">

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
          <li>Locke's Gambit</li>
        </ul>
      </div>
      <div class="app-info">
        <h1 class="app-title">Locke's Gambit</h1>
      </div>
      <div class="app-description">
        <p class="small">An electrical engineering puzzle strategy game created in collaboration with IEEE TryEngineering. Set aboard a microchip fabrication ship in the distant future, players explore a distant star system while researching materials, building supply chains, designing chips, and fabricating wafers—mastering the science and engineering of microchip fabrication along the way.</p>
      </div>

      <div class="buttons">
        <a id="playButton" class="button small white filled" href="https://vaultlearninggames.org/lockesgambit#play" target="_blank">Play on the Vault</a>
      </div>
    </div>
  </section>

  <section id="app-about" class="app-about">

    <div class="row container">
      <div class="col-sm-4">
        <div class="about-nav follow-scroll">
          <ul>
            <li><a href="#glance">At a Glance</a></li>
            <li><a href="#gameplay">Gameplay</a></li>
            <li><a href="#learninggoals">Learning Goals</a></li>
            <li><a href="#academicstandards">Academic Standards</a></li>
          </ul>
        </div>
      </div>

      <div id="glance" class="col-sm-8 about-rightpanel">
        <div id="app-video" class="app-video">
            <div class='embed-container'>
                <iframe src="https://player.vimeo.com/video/1238244911" width="100%" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <h2 id="glance">At a Glance</h2>
        <p>Locke's Gambit is an electrical engineering puzzle strategy game set on a space-faring microchip fabrication ship in the distant future. Through a series of challenges, players explore the microchip creation process. They will source and research new materials, build a supply chain, design chips, and fabricate wafers. They will explore a distant star system while mastering the science and engineering concepts associated with chip fabrication.</p>
        <p>The game was created in collaboration with IEEE TryEngineering, an initiative inspiring the next generation of engineers through STEM learning.</p>
        <h2>Target Audience</h2>
        <ul>
          <li>Grades 5-8</li>
          <li>Grades 9-12</li>
        </ul>
        <h2>Content Areas</h2>
        <ul>
          <li>Science</li>
          <li>Math</li>
          <li>Information Technology</li>
          <li>Technology Education</li>
        </ul>
        <h2 id="gameplay">Gameplay</h2>
        <p>Players take on the role of a crew member aboard a microchip fabrication ship in the distant future. To keep the ship's fab operational, they must master a chain of engineering decisions:</p>
        <ul>
          <li>Explore a distant star system and source new materials for the fab</li>
          <li>Research material properties and build a supply chain, balancing costs across routes</li>
          <li>Design microchips using metal, vias, n- and p-type semiconductors, and gates to create diodes and transistors</li>
          <li>Test different design solutions to solve problems and build understanding</li>
          <li>Fabricate wafers, investigating how semiconductor devices are made and how they are tested and used alongside conductors and insulators</li>
        </ul>
        <p>Each challenge builds on the last, taking players from raw materials to finished devices while introducing the physical, chemical, and engineering concepts behind real-world chip manufacturing.</p>
        <h2 id="learninggoals">Learning Goals</h2>
        <p>Through Locke's Gambit, learners will:</p>
        <ul>
          <li>Construct microchip designs using metal, vias, n- and p-type semiconductors, and gates to create diodes and transistors</li>
          <li>Test different design solutions to solve problems and build understanding</li>
          <li>Analyze different supply chain routes, balancing costs to efficiently secure the materials needed to produce microchips</li>
          <li>Investigate the physical properties of semiconductors and learn how they are tested and used alongside conductors and insulators</li>
          <li>Develop their understanding of how semiconductor devices are manufactured, including the associated materials, technologies, and processes</li>
        </ul>
        <h2 id="academicstandards">Academic Standards</h2>
        <h3>Science [Wisconsin Standards for Science]</h3>
        <ul>
          <li>PS1.A: Structure and Properties of Matter — The changes of state that occur with variations in temperature or pressure can be described and predicted using these models of matter. (MS-PS1-4)</li>
          <li>PS1.B: Chemical Reactions — Substances react in characteristic ways. In a chemical process, the atoms of the reactants are regrouped into different molecules, and these new substances have different properties than the reactants. (MS-PS1-3)</li>
          <li>PS1: Structure and Function — Structures can be designed to serve particular functions by taking into account properties of different materials, and how materials can be shaped and used. (MS-PS1-3)</li>
          <li>HS-PS1-2 Matter and its Interactions — Construct and revise an explanation for the outcome of a simple chemical reaction based on the outermost electron states of atoms, trends in the periodic table, and knowledge of the patterns of chemical properties.</li>
        </ul>
        <h3>Engineering [Wisconsin Standards for Engineering and Technology]</h3>
        <ul>
          <li>ETS1.B: Developing Possible Solutions — A solution needs to be tested, and then modified on the basis of the test results, in order to improve it. (secondary to MS-PS1-6)</li>
          <li>HS-ETS1-3 Engineering Design — Evaluate a solution to a complex real-world problem based on prioritized criteria and trade-offs that account for a range of constraints, including cost, safety, reliability, and aesthetics as well as possible social, cultural, and environmental impacts.</li>
          <li>Interdependence of Science, Engineering, and Technology — Engineering advances have led to important discoveries in virtually every field of science, and scientific discoveries have led to the development of entire industries and engineered systems. (MS-PS1-3)</li>
          <li>Influence of Science, Engineering and Technology on Society and the Natural World — The uses of technologies and any limitations on their use are driven by individual or societal needs, desires, and values; by the findings of scientific research; and by differences in such factors as climate, natural resources, and economic conditions. Thus technology use varies from region to region and over time. (MS-PS1-3)</li>
        </ul>
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
