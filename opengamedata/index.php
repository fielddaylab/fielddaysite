<!--include  head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php"; include_once($path); ?>
<title>Field Day - Open Game Data</title>
<script>window.location.href = "https://opengamedata.fielddaylab.wisc.edu";</script>
</head>

<body class="singleapp page opengamedata" onload="onload()">
  <!--include Main Navigation
  ------------------------>
  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php"; include_once($path); ?>

  <!--Start page content
  ------------------------>
  <div id="mainwrapper">
    <section class="singlehero page_hero">
      <div class="info">
        <h1 class="corrected">Open Game Data</h1>
        <p class="">Redirecting to the new site...<a target="_blank" href="https://opengamedata.fielddaylab.wisc.edu">https://opengamedata.fielddaylab.wisc.edu</a>
        </p>
      </div>
  </div>

  <!--include footer
------------------------>
  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php"; include_once($path); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css">
  <link rel="stylesheet" href="LocalStyle.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>
  <script src="script/page_handlers.js"></script>
  <script src="script/games_list.js"></script>
  <script src="script/FilesTable.js"></script>
  <script>
    $(function() {

      // Call Gridder
      $('.gridder').gridderExpander({
        scroll: true,
        scrollOffset: 100,
        scrollTo: "panel", // panel or listitem
        animationSpeed: 900,
        animationEasing: "easeInOutExpo",
        showNav: true, // Show Navigation
        nextText: "Next", // Next button text
        prevText: "Previous", // Previous button text
        closeText: "<img src=\"/assets/img/ui/close-icon.png\">", // Close button text
        onStart: function() {
          //Gridder Inititialized
        },
        onContent: function() {
          //Gridder Content Loaded
        },
        onClosed: function() {
          //Gridder Closed
        }
      });
    });
  </script>
</body>

</html>