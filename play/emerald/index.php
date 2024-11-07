<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
include_once($path); ?>
<title>The Legend of the Lost Emerald - Field Day</title>
<meta name="description" content="Play as a maritime archaeologist uncovering shipwrecks in the Great Lakes.">

<script>
window.onload = function()
{
  function detectMobile() {
    const toMatch = [
        /Android/i,
        /webOS/i,
        /iPhone/i,
        /iPad/i,
        /iPod/i,
        /BlackBerry/i,
        /Windows Phone/i
    ];
    return toMatch.some((toMatchItem) => {
        return navigator.userAgent.match(toMatchItem);
    });
}
  console.log("Mobile Device: " + detectMobile());
  if (detectMobile()) {
    button = document.getElementById("playButton");
    button.target="_self";
    button.href = "javascript:void(0)";
    button.classList.remove("filled");
    button.textContent = "Play on Desktop";
    console.log("In the if");
  }
};
</script>

</head>

<body class="singleapp emerald">
    <!--include Main Navigation
------------------------>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/main-nav.php";
    include_once($path); ?>

    <div id="mainwrapper">
        <!--Start page content
  ------------------------>
        <section class="app-hero">
            <div class="hero-content">
                <div class="info-panel">
                    <ul class="breadcrumbs">
                        <li><a href="/">Field Day</a></li>
                        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
                        <li>Play</li>
                        <img class="breadcrumb-arrow" src="../../assets/img/ui/breadcrumb-arrow.png">
                        <li>The legend of the Lost Emerald</li>
                    </ul>
                </div>
                <div class="app-info">
                    <h1 class="app-title">The legend of the Lost Emerald</h1>
                </div>
                <div class="app-description">
                    <p class="small">
                        Play as a maritime archaeologist uncovering shipwrecks in the Great Lakes. Made in partnership with PBS Wisconsin and Wisconsin Sea Grant.
                    </p>
                </div>
                <div class="buttons">
                    <a id = "playButton" target="_blank" href="https://pbswisconsineducation.org/emerald/about/" class="button xsmall white filled">Play</a>
                    <a target="_blank" href="#app-about" class="button xsmall white">Learn More</a>
                    <a target="_blank" href="https://medium.com/fielddaylab/shipwrecks-and-sea-shanties-designing-a-game-to-teach-the-great-lakes-3339abddd865" class="button xsmall white">Read the Story</a>
                    <a target="_blank" href="https://opengamedata.fielddaylab.wisc.edu/gamedata.php?game=SHIPWRECKS" class="button xsmall white">Research Emerald</a>
                </div>
            </div>
        </section>

        <section id="app-about" class="app-about">

            <div class="row container">
                <div class="col-sm-4">
                    <div class="about-nav follow-scroll">
                        <ul>
                            <li><a href="#glance">At a Glance</a></li>
                            <li><a href="#themes">Themes</a></li>
                            <li><a href="#partners">Partners</a></li>
                            <li><a href="#standards">Academic Standards</a></li>
                            <li><a href="#gameplay">Gameplay/Story</a></li>
                            <li><a href="#teach">Teach with Legend of the Lost Emerald </a></li>
                        </ul>
                    </div>
                </div>

                <div id="glance" class="col-sm-8 about-rightpanel">
                    <img class="awardlaurels" src="/assets/img/logos/gold_seriousplayaward.png">
                    <h2 id="glance">At a Glance</h2>
                    <ul>
                        <li>Grade Level: 4-6</li>
                        <li>Free to play</li>
                        <li>Aligned with Wisconsin Academic Standards</li>
                        <li>Playable online</li>
                        <li>Average playtime: two class periods of 35-40 minutes</li>
                        <li>Recommended browser: Google Chrome</li>
                        </li>
                    </ul>

                    <h2>About the Game</h2>

                    <p>In Legend of the Lost Emerald, kids take on the role of maritime archaeologists exploring shipwrecks on the Great Lakes. Like real archaeologists, players use sonar and GPS coordinates, dive down to take underwater photos, and search for clues in historical artifacts, like letters and ship manifests, to tell the story of each shipwreck. We teamed up with maritime archaeologists at Wisconsin Sea Grant and amazing teacher fellows from across the state of Wisconsin to design a game that works in the classroom and introduces kids to the tools and practices of the field.
                    </p>

                    <h2 id="themes">Themes</h2>
                    <ul>
                        <li>Trade/Commerce/Manufacturing</li>
                        <li>Movement of People</li>
                        <li>Historical Conservation/Preservation</li>
                        <li>Lake Ecology</li>
                        <li>Technological Change</li>
                    </ul>

                    <h2 id="partners">Partners</h2>
                    <p>We made this game with our amazing partners at PBS Wisconsin and the experts at Wisconsin Sea Grant and the Wisconsin Historical Society, including maritime archaeologists Tamara Thomsen, Caitlin Zant, and Tori Kiefer, and Education Specialist Ann Moser. Throughout the design and testing process, we relied on the insights and expertise of Field Day teacher fellows from across Wisconsin and beyond.</p>

                    <h2 id="standards">Academic Standards</h2>

                    <h3> Wisconsin Standards for Social Studies</h3>
                    <div class="row standards-block">
                        <div class="col-sm-7">
                            <p class="small"><span class="bold">SS.Inq2 </span><br>Wisconsin students will gather and evaluate sources.</p>
                            <p class="small"><span class="bold">SS.Inq3 </span><br>Wisconsin students will develop claims using evidence to support reasoning.</p>
                            <p class="small"><span class="bold">SS.Geog1 </span><br>Wisconsin students will use geographic tools and ways of thinking to analyze the world.</p>
                            <p class="small"><span class="bold">SS.Hist1</span><br>Wisconsin students will use historical evidence for determining cause and effect.</p>
                        </div>
                    </div>

                    <h3> Wisconsin Standards for English Language Arts</h3>
                    <div class="row standards-block">
                        <div class="col-sm-7">
                            <p class="small"><span class="bold">R.4.4 </span><br>Determine the meaning of words, phrases, figurative language, academic, and content-specific words within a text. (RI&RL) </p>
                            <p class="small"><span class="bold">R.4.4a </span><br>Read grade-level text with purpose and understanding</p>
                            <p class="small"><span class="bold">R.4.4c </span><br>Use context to confirm or self-correct word recognition and understanding, rereading as necessary.</p>
                        </div>
                    </div>

                    <h3> Wisconsin Standards for Information and Technology Literacy</h3>
                    <div class="row standards-block">
                        <div class="col-sm-7">
                            <p class="small"><span class="bold">ITL.KC1.c.2.i</span><br>Organize information from a variety of educator-selected, curated content and make meaningful, thematic connections between resources.</p>
                        </div>
                    </div>
                    <h2 id="gameplay">Gameplay / Story</h2>
                    <p>In this story-based game, you'll use a simple version of sonar, take underwater photos with a zoom-and-click mechanic, and connect strings on a corkboard-style evidence board to solve the mystery of each shipwreck. You play as a maritime archeologist whose grandfather captained a freighter that sank on Lake Superior. Throughout the game, you’ll use the practices of real archaeologists to locate shipwrecks, tell the stories of the past, and finally uncover the shipwreck that has haunted your family for generations.
                    </p>
                    <h2 id="teach">Teach with Legend of the Lost Emerald</h2>
                    <p>Teachers can use this game to introduce kids to historical practices and themes from ecology, technology, and Wisconsin history. Students will learn about the role of maritime archaeologists, archivists, historians, and museum curators. The game introduces four different time periods in maritime history, ranging from wooden schooners in the mid-1800s to steel freighters in the 1960s. </p>

                </div>
            </div>
        </section>













        <!----------------------
  End page content -->
    </div>

    <!--include footer
------------------------>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/footer.php";
    include_once($path); ?>

</body>

</html>
