<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Field Day - Jo Wilder and the Capitol Case</title>
<script>
window.onload = function()
{
  var clickload = document.getElementById("clickload");
  var iframe = document.getElementById("content");

  function loadiframe()
  {
    iframe.style.display = "visible";
    iframe.src = "capitol_prototype/iframe.html";
    clickload.removeEventListener("click",loadiframe);
    clickload.parentNode.removeChild(clickload);
    clickload = null;
  }
  clickload.addEventListener("click",loadiframe);
};
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
    <div class="app-description"><p class="small">Play as Jo Wilder, a scrappy girl who spends her days with her pet badger Teddy and her grandpa, a historian. When some mysterious artifacts show up at the History Museum, you must unravel the clues to find the real stories behind the artifacts.

</p></div>
    <div class="buttons">
      <a target="_blank" href="#app-intro" class="button xsmall white filled">Play the Game</a>
      <a target="_blank" href="#app-about" class="button xsmall white">Learn about the Game</a>
    </div>
  </div>
</section>
<section id="app-intro">
  <h2>Play Jo Wilder and the Capitol Case</h2>
  <div id="clickload" scrolling="no" style="background-size: cover; width:880px; height:660px; display:block; margin:0px auto; overflow:hidden; border:0px;">
    <span class="playbutton"
      style="
        background-image: url(capitol_prototype/assets/play.png);
        background-size: cover;
        width: 300px;
        height: 95px;
        margin: 0 auto;
        display: block;
        margin-top: 400px;">
    </span>
  </div>
  <iframe id="content" scrolling="no" style="display:none; width:880px; height:660px; display:block; margin:0px auto; overflow:hidden; border:0px;"></iframe>
</section>

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#production">Production Team</a></li>
        <li><a href="#standards">Teaching Standards</a></li>
        <li><a href="#resources">Teacher Resources</a></li>
        <li><a href="#source">Source Code</a></li>
        <li><a href="#funding">Funding</a></li>
        </ul>
      </div>
    </div>

    <div id="about" class="col-sm-8 about-rightpanel">
      <h2>About the Game</h2>
      <p>Play as Jo Wilder, a scrappy girl who spends her days with her pet badger Teddy and her grandpa, a historian. When some mysterious artifacts show up at the History Museum, you must unravel the clues to find the real stories behind the artifacts.</p>

<p>Students will engage with the game as a tool for critical thinking and historical inquiry. As the plot unfolds, players come across primary source materials. They use the same skills as real historians: investigation, identification, corroboration and contextualizing evidence. To win each challenge, players must piece together the evidence to argue their case.</p>

<p>Jo Wilder and the Capitol Case, a historical inquiry adventure game, was designed with a cohort of third, fourth and fifth grade social studies teachers and tested by students throughout the state of Wisconsin.
</p>
      <h2 id="production">Production Team</h2>
      <h3> Executive Producers</h3>
      <ul>
        <li>David Gagnon</li>
        <li>Alyssa Tsagong</li>
      </ul>
      <h3>Producers</h3>
      <ul>
        <li>Sarah Gagnon</li>
        <li>John Dollar</li>
      </ul>
      <h3>Education Fellows Director</h3>
      <ul>
        <li>Jim Mathews</li>
      </ul>
      <h3>Creative Director</h3>
      <ul
        <li>Sarah Gagnon</li>
      </ul>
      <h3>Art Direction and Graphic Design</h3>
      <ul
        <li>Eric Lang</li>
      </ul>
      <h3>Art & Animation</h3>
      <ul
        <li>Reyna Groff</li>
        <li>Eric Lang</li>
        <li>Rodney Lambright II</li>
        <li>Jennifer Leaver</li>
      </ul>
      <h3>Writing</h3>
      <ul>
        <li>Sarah Gagnon</li>
        <li>Lindy Biller</li>
        <li>Eric Lang</li>
        <li>Philip Dougherty</li>
      </ul>
      <h3>Original Music and Sound</h3>
      <ul>
        <li>Cyril Peck</li>
      </ul>
      <h3>Software Development</h3>
      <ul>
        <li>Phil Dougherty</li>
        <li>Mike Tolly</li>
      </ul>
      <h3>QA</h3>
      <ul>
        <li>Daniel Hying</li>
      </ul>
      <h3>Administration Support</h3>
      <ul>
        <li>Angel Cartagena</li>
        <li>Adam Chase</li>
        <li>Ahna Holliday</li>
        <li>Becki Kohl</li>
      </ul>
      <h3>Fellows</h3>
      <ul>
        <li>Andrea Bell-Myers - Brass Community School, Kenosha Unified School District</li>
        <li>Angie Bies - Waller Elementary School, Burlington Area School District</li>
        <li>Matt Daniels - Sheboygan Falls Elementary School, Sheboygan Falls School District</li>
        <li>Jennifer Guckenberger - Hadfield Elementary School, School District of Waukesha</li>
        <li>VaLisa Harmon - Wadewitz Elementary School, Racine Unified School District</li>
        <li>Tera Hollfelder - Arena Community Elementary School (ACES) - River Valley School District</li>
        <li>Jodi Kardin - Augusta Elementary School, Augusta Area School District</li>
        <li>George Klink - Elmwood Elementary School, School District of Elmwood</li>
        <li>Nikki Lutzke - Parkview Elementary School - Parkview School District</li>
        <li>Jonathan Mason - EAGLE School of Madison</li>
        <li>Peter Michaud - Reagan Elementary School, School District of New Berlin</li>
        <li>Kasey Rachu - Edgar Elementary School, Edgar School District</li>
        <li>Mary Roberts - Pardeeville Elementary School - Pardeeville Area School District </li>
        <li>Boyd Roessler - Hillcrest Elementary, School District of Waukesha</li>
        <li>Mike Scoville - Gibraltar Elementary School, Gibraltar Area School District</li>
        <li>Lisa Sorlie - School District of Bonduel</li>
        <li>Jim Tellstrom - Sunrise Elementary School, Sturgeon Bay Schools</li>
        <li>Julie Young - Minocqua-Hazelhurst-Lake Tomahawk (MHLT), Minocqua J1 School District</li>
        <li>Kati Walsh - John Muir Elementary School, Madison Metropolitan School District</li>
      </ul>
      <h3>Testing Provided By Students of:</h3>
      <ul>
        <li>Arena Community Elementary School - Arena, WI</li>
        <li>Augusta Elementary School - Augusta, WI</li>
        <li>Bonduel School District - Bonduel, WI</li>
        <li>Brillion Elementary School - Brillion, WI</li>
        <li>Eagle School - Madison, WI</li>
        <li>Edgar Elementary School - Edgar, WI</li>
        <li>Elmwood Elementary School - Elmwood, WI</li>
        <li>Gibraltar Area School District - Fish Creek, WI</li>
        <li>Hadfield Elementary School - Waukesha, WI</li>
        <li>Hillcrest Elementary School - Waukesha, WI</li>
        <li>Kenosha Unified School District - Kenosha, WI</li>
        <li>KM Explore Elementary School - Wales, WI</li>
        <li>Minocqua J1 School District - Minocqua, WI</li>
        <li>Pardeeville Elementary School - Pardeeville, WI</li>
        <li>Parkview Elementary School - Orfordville, WI</li>
        <li>Reagan Elementary School - New Berlin, WI</li>
        <li>Sheboygan Falls Elementary School - Sheboygan Falls, WI</li>
        <li>Wadewitz Elementary School - Racine, WI</li>
        <li>Waller Elementary School - Burlington, WI</li>
      </ul>
      <h3>Special Thanks</h3>
      <ul>
        <li>Keith Polkinghorne -  Brillion Elementary School, Brillion Public Schools </li>
        <li>Michael Edmonds - Director of Programs and Outreach, Wisconsin Historical Society</li>
        <li>Jenny Kalvaitis - Museum Educator, Wisconsin Historical Museum</li>
        <li>Bobbi Malone - Author, Educator, Historian</li>
        <li>Simone Munson - Archivist, Wisconsin Historical Society</li>
        <li>Philip Ashby - Wisconsin Public Television</li>
        <li>Eric Greiling</li>
        <li>Jone Kiefer</li>
        <li>Kurt Kiefer - Department of Public Instruction</li>
        <li>Bobbie Malone </li>
        <li>Robert Mathieu - Wisconsin Center for Education Research</li>
        <li>Kris McDaniels</li>
        <li>David McHugh - Department of Public Instruction</li>
        <li>Keith Polkinghorne</li>
        <li>Brandon Ribordy</li>
        <li>Ken Rosenberg</li>
        <li>BrainPop</li>
      </ul>
      <h2 id="standards">Standards</h2>
      <p>Jo Wilder and the Capitol Case leverages primary source documents. The game is aligned with the <a target="_blank" href="https://dpi.wi.gov/sites/default/files/imce/standards/New%20pdfs/2018_WI_Social_Studies_Standards.pdf">Wisconsin Department of Public Instruction’s newly revised 3-5th grade Wisconsin Standards for Social Studies.</a> These Standards for Social Studies “...provide an important foundation to prepare students to become engaged, informed participants committed to the ideas and values of our democratic republic, able to apply the skills of inquiry, collaboration, decision-making, and problem-solving (adapted from the National Council for the Social Studies definition).” Jo Wilder and the Capitol Case was designed in close partnership with the DPI and the Wisconsin Historical Society in order to embody these new standards and their shift toward inquiry-driven pedagogy, specifically targeting the 3-5th grade standards outlined below.</p>
      <h2 id="resources">Resources for Teaching</h2>
      <p>Teacher resources and tips were developed in partnership with Wisconsin Public Television.  Coming soon in the Fall of 2018</p>
      <h2 id="source">Source Code</h2>
      <p>Jo Wilder and the Capitol Case is an open source project licensed under the MIT License: <a target="_blank" href="https://hitbut.com/fielddaylab/capitol_prototype">https://hitbut.com/fielddaylab/capitol_prototype</a></p>
      <h2 id="funding">Funding</h2>
      <ul>
        <li>Wisconsin Department of Public Instruction</li>
        <li>Wisconsin Center for Education Research</li>
        <li>Ron and Colleen Weyers</li>
        <li>Francis A. and Georgia F. Ariens Fund within the Brillion Area Family of Funds</li>
        <li>Ruth St. John and John Dunham West Foundation, Inc.</li>
        <li>Conney Family in loving memory of Mildred Conney</li>
        <li>Edvest College Savings Plan</li>
        <li>Eleanor and Thomas Wildrick Family</li>
        <li>Roger and Lynn Van Vreede</li>
        <li>American Transmission Company</li>
        <li>National Guardian Life Insurance Company</li>
        <li>BMO Harris Bank</li>
        <li>Timothy William Trout Education Fund</li>
        <li>Friends of Wisconsin Public Television</li>
      </ul>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
