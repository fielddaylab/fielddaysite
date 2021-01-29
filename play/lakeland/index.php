<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>

<title>Lakeland - Field Day</title>
<meta name="description" content="In this Math Drama, Play a scientist who just crash-landed on an abandoned mining planet. With your oxygen dwindling, you must use mathematical models to predict how you can get enough fuel to escape before time runs out." />
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
<body class="singleapp lakeland">

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
        <li>Lakeland</li>
      </ul>
    </div>
    <div class="app-info">
      <h1 class="app-title">Lakeland</h1>
    </div>
    <div class="app-description"><p class="small">This town-building game teaches complex systems. Made in partnership with the Scalable Systems Lab at UW-Madison. Played by thousands of kids a month.</p></div>
    <div class="buttons">
      <a class="button xsmall white filled" href="javascript:window.open('game/iframe.html','lakeland','width=1024,height=660')">Play the Game</a>
      <a href="#teach" class="button xsmall white">Teach with the Game</a>
      <a target="_blank" href="https://medium.com/fielddaylab/kids-are-using-lakeland-to-play-through-the-phosphorus-cycle-and-talk-about-poop-in-class-7c5bed32461c
" class="button xsmall white">Read the Story</a>
    </div>
  </div>
</section>
<!--<section id="app-intro">
  <h2>Welcome to Lakeland</h2>
  <div class="iframe-bg" id="clickload" scrolling="no" style="background-image: url(game/assets/menu-bg.jpg); background-size: cover;">

  </div>
  <iframe id="content" scrolling="no" style="display:none; width:1024px; height:660px; margin:0px auto; overflow:hidden; border:0px;"></iframe>
</section>-->

<section id="app-about" class="app-about">

  <div class="row container">
    <div class="col-sm-4">
      <div class="about-nav follow-scroll">
        <ul>
        <li><a href="#glance">At a Glance</a></li>
        <li><a href="#about">About the Game</a></li>
        <li><a href="#teach">Teach with Lakeland</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="#production">Production Team</a></li>
        <li><a href="#source">Source Code</a></li>
        </ul>
      </div>
    </div>

    <div id="glance" class="col-sm-8 about-rightpanel">
      <h2 id="glance">At a Glance</h2>
      <ul>
        <li>Subject: Sciences and Agriculture </li>
        <li>Grades: 7-12 </li>
        <li>Playtime: 30-45 minutes </li>
        <li>Play from a web browser—no logins or downloads required</li>
        <li>Free to play </li>
      </ul>
      <h2 id="About">About the Game</h2>
      <p>In this strategic building game, you’ve decided to build a new town called Lakeland. In order to grow your town and keep your people alive, you need food and resources.</p>
      <p>Luckily, you’ve got some friendly advisors to help you get started. Your Farm Advisor shows you how to grow corn. Now your people have food! Then you start a dairy farm. People love dairy. Milk, cheese, ice cream… what could go wrong?</p>
      <p>As it turns out, a lot. Cows don’t just produce milk. They also produce lots and lots of poop, which means the lakes your people love are about to turn into a toxic cesspool of blue-green algae. Your mission: grow your town without destroying their lakes.</p>
      <p>This game puts kids in charge of building their own town. Players add houses and farms, export produce, and manage resources like food, money, and manure. Students will get an introduction to the complex relationship between farming, soil nutrition, and lake pollution.</p>
      <p>Want to learn more about Lakeland and Victor Zavala's research? <a href="https://medium.com/fielddaylab/kids-are-using-lakeland-to-play-through-the-phosphorus-cycle-and-talk-about-poop-in-class-7c5bed32461c" target="_blank">Read the Story</a></p>

      <h2 id="teach">Teach with Lakeland</h2>
      <p>Teachers can use Lakeland to explore the dynamics of the nutrient system and help students recognize the impact humans have on the world.</p>
      <p>This game helps students visualize the complex relationship between dairy farming, soil nutrition, and lake pollution. Time is compressed so that students can see the long-term effects within a 20-30 minute game. Students will get a sense of the difficulty of balancing farming and business demands with sustainability and happiness. </p>
      <p>Let kids figure out how the game works with little introduction. Remember, struggling to figure it out is part of the fun process. It’s okay for kids to experiment, fail, and start again. </p>

      <h2>Teaching Standards</h2>
      <p>The game addresses the Next Generation Science Standards essential practice of Modeling alongside the cross-cutting concepts of Patterns, Cause and Effect, and Systems and System Models. The game also relates to the below Next Generation Science Standards: </p>
      <h3>Middle School Standards:</h3>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">MS-LS2-1</span><br>Analyze and interpret data to provide evidence for the effects of resource availability on organisms and populations of organisms in an ecosystem.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">MS-LS2-2</span><br>Construct an explanation that predicts patterns of interactions among organisms across multiple ecosystems.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">MS-LS2-3</span><br>Develop a model to describe the cycling of matter and flow of energy among living and nonliving parts of an ecosystem.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">MS-LS2-4</span><br>Construct an argument supported by empirical evidence that changes to physical or biological components of an ecosystem affect populations.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">MS-LS2-5</span><br>Evaluate competing design solutions for maintaining biodiversity and ecosystem services.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">MS-ESS3-3</span><br>Apply scientific principles to design a method for monitoring and minimizing a human impact on the environment.</p>
        </div>
      </div>
      <h3>High School Standards:</h3>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">HS-LS2-1</span><br>Use mathematical and/or computational representations to support explanations of factors that affect carrying capacity of ecosystems at different scales.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">HS-LS2-2</span><br>Use mathematical representations to support and revise explanations based on evidence about factors affecting biodiversity and populations in ecosystems of different scales.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">HS-LS2-6</span><br>Evaluate the claims, evidence, and reasoning that the complex interactions in ecosystems maintain relatively consistent numbers and types of organisms in stable conditions, but changing conditions may result in a new ecosystem.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">HS-LS2-7</span><br>Design, evaluate, and refine a solution for reducing the impacts of human activities on the environment and biodiversity.</p>
        </div>
      </div>
      <div class="row standards-block">
        <div class="col-sm-12">
          <p class="small"><span class="bold">HS-LS4-6</span><br>Create or revise a simulation to test a solution to mitigate adverse impacts of human activity on biodiversity.</p>
        </div>
      </div>
      <h3>Executive Producer</h3>
      <p>Victor M. Zavala</p>

      <h3>Producer</h3>
      <p>David Gagnon</p>

      <h3>Game Design</h3>
      <p>Philip Dougherty</p>

      <h3>Creative Direction</h3>
      <p>Sarah Gagnon</p>

      <h3>Software Development</h3>
      <p>Philip Dougherty</p>

      <h3>Education Fellows Director</h3>
      <p>Jim Mathews</p>

      <h3>User Interface</h3>
      <p>Eric Lang</p>

      <h3>Art & Animation</h3>
      <p>Eric Lang</p>

      <h3>Subject Expertise</h3>
      <p>Victor M. Zavala <br />Rebecca Larson</p>


      <h3>Writing</h3>
      <p>Lindy Biller <br />Philip Dougherty</p>


      <h3>Original Music & Sound</h3>
      <p>Cyril Peck</p>

      <h3>Playtesting and Evaluation Coordination</h3>
      <p>
        Jim Mathews<br />
        Jenn Scianna</p>

      <h3>Data Analytics</h3>
      <p>
        John Mcclosky<br />
        Luke Swanson<br />
        Jenn Scianna<br />
        Erik Harpstead<br />
        Stefan Slater<br />
        Philip Dougherty<br />
        David Gagnon
      <p>

      <h3>Administration Support</h3>
      <p>
        Angel Cartagena<br />
        Adam Chase<br />
        Ahna Holliday<br />
        Becki Kohl<br />
        Jim Lyne
      </p>

      <h3>Farming and Phosphorus Educator Fellows</h3>
      <p>
        Amy Workman<br />
        Anthony Schnell<br />
        Benjamin Stern<br />
        Craig Corcoran<br />
        Heather Messer<br />
        Meghan Sawdy<br />
        Olivia Dachel<br />
        Robert Turner<br />
        Zeth Engel
      </p>

      <h3>Testing and Design Feedback</h3>
      <p>
        Students of Reedsburg Area High School<br />
        Students of Lodi High School<br />
        Students of Fox Valley Lutheran High School<br />
        Students of Guilford High School<br />
        Students of Clark Street Community School<br />
        Students of Vincent High School<br />
        Students of Merrill High School<br />
        Students of Omro High School<br />
        Students of DeForest High School<br />
      </p>

      <h3>WCATY Coding Camp at UW Madison</h3>
      <p>
        Jayvyn G.<br />
        Henry T.<br />
        Nethra G.<br />
        Zane Y.<br />
        Sidney M.<br />
        Brennan R.<br />
        Lucy W.<br />
      </p>

      <h3>MSCR STEM Camp at UW Madison</h3>
      <p>
        Gabe W.<br />
        Ava E.<br />
      </p>

      <h3>Cambridge School District Summer School</h3>
      <p>Jacob S.</p>

      <h3>Special Thanks</h3>
      <p>
        Travis Tangen<br />
        Dan Murphy<br />
        Jerrod Buckner<br />
        Bryan Knowles<br />
        Students and Staff of the Scalable Systems Laboratory<br />
      </p>

      <h2>Ideas for Implementation</h2>
      <h3>Discussion Questions:</h3>
      <ul>
        <li>What happens to your farms and the algae in response to nutrient levels?</li>
        <li>What could be done to prevent future algae blooms?</li>
        <li>If you were to start your towns over, knowing what you know now, what would you do differently? What impact do you think those decisions would have?</li>
        <li>As you were growing your town, what conflicts arose between different priorities?</li>
        <li>What solutions are available in the real word that are not represented in the game? </li>
      </ul>

      <h3>Activities:</h3>
      <ul>
      <li>Create a gallery walk by having students take screenshots of their final towns. Analyze similarities and differences in town structure, algae growth, and resource accumulation.</li>
      <li>Construct a flow chart of how nutrients move through the town system. Adapt the flow chart to include other factors not depicted in the game. Infer what effect the additions would have on the lake’s algae status.</li>
      <li>Investigate a local waterway and develop a plan for nutrient management as a component of water quality.</li>
      </ul>

      <h2 id="source">Source Code</h2>
      <p>Lakeland is an open-source project licensed under the MIT license.  <a target="_blank" href="https://opensource.org/licenses/MIT">learn more</a></p>
      <h3>Funding Provided By</h3>
      <p>United States Department of Agriculture Innovations at the Nexus of Food, Energy, and Water (USDA INFEWS). Principal Investigator: Victor M. Zavala</p>
      <h3>Additional Funding Provided By</h3>
      <p>Wisconsin Department of Public Instruction,<br />
      Wisconsin Center for Education Research</p>
    </div>
  </div>
</section>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/modals.php";  include_once($path); ?>

</body>
</html>
