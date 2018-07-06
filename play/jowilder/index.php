<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Field Day - Jo Wilder and the Capitol Case</title>
<script>
  function playContent()
  {
    document.getElementById("content_play").innerHTML = "";
    document.getElementById("content_play").style.display = "none";
    document.getElementById("content").src = "build/iframe.html";
    document.getElementById("content").style.display = "block";
  }
</script>
</head>
<body class="singleapp jowilder">

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<!-- Main Content -->
<section class="app-hero">
  <div class="hero-content">
    <div class="info-panel">
      <ul class="breadcrumbs">
        <li><a href="/">Field Day</a></li>
        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
        <li>Play</li>
        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
        <li>Jo Wilder and the Capitol Case</li>
      </ul>
    </div>
    <div class="app-info">
      <h1 class="app-title">Jo Wilder and the Capitol Case</h1>
    </div>
    <div class="app-description"><p class="small">Play as Jo Wilder, a scrappy girl who spends her days with her pet badger Teddy and her grampa, a historian at the Wisconsin Historical Society. When some mysterious artifacts show up at the museum, you must unravel the clues to figure out real stories they have to tell.

</p></div>
    <div class="buttons">
      <a target="_blank" href="#app-intro" class="button xsmall white filled">Play the Game</a>
      <a target="_blank" href="#app-about" class="button xsmall white">Learn about the Game</a>
    </div>
  </div>
</section>
<section id="app-intro">
  <h2>Play Jo Wilder and the Capitol Case</h2>
  <iframe id="content" scrolling="no" style="width:880px; height:660px; margin:10px auto; overflow:hidden; border:0px;" src="capitol_prototype/iframe.html"></iframe>
</section>

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#production">Production Team</a></li>
        <li><a href="#source">Source Code</a></li>
        <li><a href="#funding">Funding</a></li>
        </ul>
      </div>
    </div>

    <div id="about" class="col-sm-8 about-rightpanel">
      <h2>About the Game</h2>
      <p>Play as Jo Wilder, a scrappy girl who spends her days with her pet badger Teddy and her grampa, a historican at the Wisconsin Historical Society. When some misterious artifacts show up at the museum, you must unravel the clues to figure out real stories they have to tell.Play as Jo Wilder, a scrappy girl who spends her days with her pet badger Teddy and her grampa, a historian at the Wisconsin Historical Society. When some mysterious artifacts show up at the museum, you must unravel the clues to figure out real stories they have to tell.</p>
      <h2 id="production">Production Team</h2>
      <h3> Field Day:</h3>
      <ul>
        <li>Producer, David Gagnon</li>
        <li>Creative Direction, Sarah Gagnon</li>
        <li>Art Direction, Eric Lang</li>
        <li>Software Development, Phil Dougherty</li>
        <li>Content Scripting, Mike Tolly</li>
        <li>Writing, Lindy Biller</li>
        <li>2d Illustration, Reyna Groff</li>
        <li>Fellowship and Testing Coordination, Jim Mathews</li>
        <li>Music and Sound, Cyril Peck</li>
        <li>QA, Daniel Hying</li>
        <li>Concept Art, Jennifer Leaver</li>
      </ul>
      <h3>Wisconsin Public Television</h3>
      <ul>
        <li>Executive Producer, Alyssa Tsagong</li>
        <li>Producer, John Dollar</li>
        <li>Animation and Concept Art, Rodney Lambright II</li>
      </ul>
      <h2 id="source">Source Code</h2>
      <p>This is a MIT Licensed, Opensource project. <a href="https://github.com/fielddaylab/atomtouch" target="_blank">https://github.com/fielddaylab/capitol_prototype</a></p>
      <h2 id="funding">Funding</h2>
      <p>This research was primarily supported by the Department of Public Instruction</p>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
