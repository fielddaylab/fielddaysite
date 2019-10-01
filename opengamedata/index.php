<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Open Game Data</title>
</head>

<body class="singleapp page opengamedata" onload="onload()">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<div id="mainwrapper">
  <!--Start page content
  ------------------------>
  <section class="singlehero page_hero">
    <div class="info">
      <h1 class="corrected">Open Game Data</h1>
      <p class="">These anonymous data are provided in service of future educational data mining research. They are made available under the <a target="_blank" href="https://creativecommons.org/publicdomain/zero/1.0/">Creative Commons CCO 1.0 Universal license.</a> Source code for this website and related data processing is available on <a target="_blank" href="https://github.com/fielddaylab/opengamedata">github</a></p>
    </div>
    <div class="graphic">
      <img class="graph_img" src="/assets/img/illustrations/mountainrange.png">
    </div>

    <nav class="nav nav-tabs press-toggles">
      <ul>
        <li class="press-toggle press-toggle1 active"><a href="#data" role="tab" data-toggle="tab">Game Data</a></li>
        <li class="press-toggle press-toggle2"><a href="#realtime" role="tab" data-toggle="tab">Realtime player data</a></li>
      </ul>
    </nav>
  </section>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="data">
      <section class="publications">
        <div class="row">
          <div class="pub-nav-wrap sticky col-sm-3">
            <h2>Select Game:</h2></h2>
            <select id="mySelect"></select>
          </div>
          <div class="col-sm-9">
            <table id="table"></table>
          </div>
        </div>
      </section>
    </div>
    <div role="tabpanel" class="tab-pane fade in" id="realtime">
      <div class="row">
        <div class="pub-nav-wrap sticky col-sm-2">
          <div class="pub-nav">
            <h2 id="whatis">Choose a game:</h2>
            <p>View sessions with Player IDs: 
            <input type="checkbox" id="require_pid" value="View sessions with Player IDs">
            </p> 
            <ul>
              <li><a href="javascript:rt_change_games(sess_list, 'CRYSTAL');">Crystal</a></li>
              <li><a href="javascript:rt_change_games(sess_list, 'WAVES');">Waves</a></li>
              <li><a href="javascript:rt_change_games(sess_list, 'LAKELAND');">Lakeland</a></li>
              <li><a href="javascript:rt_change_games(sess_list, 'JOWILDER');">Jo Wilder</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
        <ul id="session_list"></ul>
        </div>
        <div class="wrap col-md-8">
          <div class="playstats" id="playstats">
            <span class="playstat">
              <p>Odds of player completing level 1</p>
              <h3>75%</h3>
            </span>
          </div>
          <h2 id="whatis">Heading 1</h2>
          <div class="pub-wrap">
            <h3>Heading 3</h3>
            <p class="small">Field Day Lab develops games and use them as instruments to understand learning. We use game analytics, including machine learning, to understand how players interact with our games. Our research includes desktop, mobile, virtual reality, and augmented reality games. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <span class="spreader"></span>
  <!----------------------
  End page content -->
</div>

<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>
<script src="scripts.js"></script>
<script src="RTServer.js"></script>
<script src="realtime.js"></script>
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
