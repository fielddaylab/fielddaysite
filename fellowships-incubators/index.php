<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Fellowships and Incubators - Field Day</title>
<style>
/* Gridder injects .gridder-show (float:left) inside ul.gridder. The ul has no
   clearfix, so its height collapses and the expanded panel renders underneath
   the following section instead of pushing it down (looks like a blank card). */
.fellowships-content ul.gridder::after { content: ""; display: block; clear: both; }

/* Featured partner quote — right below hero, above What Is an Incubator */
.featured-partner-quote {
  background: #fff;
  padding: 48px 24px;
}
.featured-partner-quote .partner-quote-inner {
  max-width: 900px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  gap: 40px;
}
.featured-partner-quote .partner-quote-photo {
  flex: 0 0 140px;
}
.featured-partner-quote .partner-quote-photo img {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  object-fit: cover;
  object-position: center top;
  display: block;
}
.featured-partner-quote .partner-quote-text {
  flex: 1;
}
.featured-partner-quote .impact-quote {
  font-size: 1.15em;
  line-height: 1.55;
  margin: 0 0 10px 0;
  font-style: italic;
  color: #333;
}
/* In-the-news pull-quotes inside the fact sections.
   Echoes the featured partner quote above: no container, heavy left rule,
   headline set as display type, outlet as the attribution line. */
.pullnews {
  margin: 22px 0 4px;
  padding-left: 22px;
  border-left: 5px solid #1C1D0A;
}
.pullnews .pullnews-headline {
  font-family: brandon-grotesque, futura-pt, sans-serif;
  font-size: 1.32em;
  line-height: 1.24;
  font-weight: 700;
  margin: 0 0 8px 0;
  color: #1C1D0A;
}
.pullnews .pullnews-attrib {
  font-size: 0.78em;
  letter-spacing: 0.02em;
  text-transform: uppercase;
  opacity: 0.72;
  margin: 0 0 8px 0;
}
.pullnews a.pullnews-link {
  font-family: brandon-grotesque, futura-pt, sans-serif;
  text-transform: uppercase;
  font-size: 0.76em;
  letter-spacing: 0.06em;
  color: #1C1D0A;
  text-decoration: none;
  border-bottom: 2px solid #E0BC4E;
  padding-bottom: 2px;
}
.pullnews a.pullnews-link:hover { border-bottom-color: #1C1D0A; }
@media (max-width: 600px) {
  .pullnews { padding-left: 16px; }
  .pullnews .pullnews-headline { font-size: 1.15em; }
}
@media (max-width: 600px) {
  .featured-partner-quote .partner-quote-inner {
    flex-direction: column;
    text-align: center;
  }
}

/* Colour contrast fixes (WCAG 2.1 AA) */
/* FAQ active question: #D6A718 is 2.23:1 on white; #7A5B0B is ~7:1 */
.page #faq .questions ul li.active { color: #7A5B0B !important; }
/* Reach-out mailto link: #E0BC4E is 1.83:1; override to #7A5B0B */
a[href^='mailto:'] { color: #7A5B0B; }
a[href^='mailto:']:hover { color: #5A4208; }

/* Cohort status badges on teaser cards */
.cohort-status-badge {
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #1C1D0A;
  background: #E0BC4E;
  border-radius: 3px;
  padding: 2px 7px;
  margin-top: 4px;
}
.cohort-status { font-style: italic; }

/* How an Incubator Works — tighten spacing between the three phases
   (site-wide .page-facts .info padding is 8vw on every side) */
#how-it-works .fact .info {
  padding-top: 32px;
  padding-bottom: 32px;
}
</style>
<meta name="description" content="Field Day Game Incubators bring researchers, educators, game designers, and sponsors together to create learning games for classrooms everywhere.">
</head>

<style>
li.gridder-list:focus-visible {
  outline: 3px solid #7A5B0B;
  outline-offset: 2px;
  z-index: 1;
  position: relative;
}
.gridder-content:focus {
  outline: 2px solid #7A5B0B;
  outline-offset: 2px;
}
</style>
<body class="nav-fixed teachers link-teachers page">
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

  <div id="mainwrapper">
    <section class="singlehero page_hero">
      <div class="info">
        <h1 class="corrected">Game<br />Incubators</h1>
        <p class="corrected">Researchers, educators, game designers, and sponsors — together in a room, building something new. Each incubator cohort turns cutting-edge science into a free learning game that reaches classrooms everywhere.</p>
        <div class="hero-cta-row">
          <a href="#what-is-an-incubator" class="button pink filled small">Learn More</a>
          <a href="#incubators" class="button pink filled small">Current Opportunities</a>
        </div>
      </div>
      <div class="graphic">
        <img class="cloud one" alt="cloud outline" src="/assets/img/illustrations/cloud-outline.png">
        <img class="cloud two" alt="cloud outline" src="/assets/img/illustrations/cloud-outline.png">
        <div class="starfield topright hide-for-small">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <div class="starfield bottomright hide-for-small">
          <span class="star star1"></span>
          <span class="star star2"></span>
          <span class="star star3"></span>
          <span class="star star4"></span>
          <span class="star star5"></span>
        </div>
        <img class="teachernaut float" alt="Teacher Astronaut" src="/assets/img/illustrations/teachernaut2.png">
        <img class="kidstronaut floatslow" alt="Kid Astronaut" src="/assets/img/illustrations/kidstronaut2.png">
        <img class="kidstronaut two float" alt="Kid Astronaut" src="/assets/img/illustrations/kidstronaut1.png">
        <img class="kidstronaut three floatslow" alt="Kid Astronaut" src="/assets/img/illustrations/kidstronaut3.png">
      </div>
    </section>

    <!-- Sue Robinson Featured Quote -->
    <section class="featured-partner-quote">
      <div class="partner-quote-inner">
        <div class="partner-quote-photo">
          <img src="/assets/img/people/sue-robinson.jpg" alt="Sue Robinson, Helen Firstbrook Franklin Professor of Journalism, UW-Madison">
        </div>
        <div class="partner-quote-text">
          <blockquote class="impact-quote">
            &ldquo;Working with Field Day Lab on our Headlines and High Water journalism video game has been a highlight of my career to date. The team is competent, responsive, creative, and brilliant and, furthermore, they are a dream to collaborate with. I am already seeking new projects we might do together!&rdquo;
          </blockquote>
          <p class="small"><strong>Sue Robinson</strong>, Helen Firstbrook Franklin Professor of Journalism, UW-Madison</p>
        </div>
      </div>
    </section>


    <div class="intro-section">
      <section id="what-is-an-incubator" class="page-facts">
        <h2 class="section-title centered">What Is an Incubator?</h2>

        <div class="fact">
          <div class="photo">
            <img class="astro-book" alt="Astronaut reading" src="/assets/img/illustrations/astro-book.png">
            <img class="astro-confused" alt="Curious astronaut" src="/assets/img/illustrations/astro-confused.png">
          </div>
          <div class="info">
            <h3>Scientists Who Want to Reach the World</h3>
            <p class="small">Research is only as powerful as the people it reaches. Each incubator starts with a sponsor — a research lab, grant-funded project, or community organization — that has a topic they care deeply about and the resources to do something about it.</p>
            <p>Researcher participants aren't just advisors. They're in the room, designing alongside educators and game experts. They bring the science; they learn what actually lands with a 7th grader. And when the game ships, their discovery is in the hands of students across the country.</p>
            <div class="pullnews">
              <p class="pullnews-headline">South Pole neutrino research became a game about reading the night sky.</p>
              <p class="pullnews-attrib">Wisconsin IceCube Particle Astrophysics Center &middot; on <em>Project Hercules</em></p>
              <a class="pullnews-link" href="https://icecube.wisc.edu/news/outreach/2025/10/exploring-the-universe-through-a-new-astrophysics-video-game/" target="_blank" rel="noopener">Read the story</a>
            </div>

            <div class="pullnews">
              <p class="pullnews-headline">A chemical engineering professor turned phosphorus runoff into a systems-thinking game.</p>
              <p class="pullnews-attrib">UW&ndash;Madison School of Education &middot; on <em>Bloom</em></p>
              <a class="pullnews-link" href="https://education.wisc.edu/news/uw-madisons-zavala-and-field-day-lab-develop-educational-game-tackling-algae-blooms/" target="_blank" rel="noopener">Read the story</a>
            </div>
          </div>
        </div>

        <div class="fact">
          <div class="info">
            <h3>Teachers Who Shape What Gets Built</h3>
            <p class="small">Educators are the experts on learners. They know what confuses a 6th grader, what gets a class excited, and what a teacher can realistically fit into their week. In every incubator cohort, classroom educators sit at the design table from day one.</p>
            <p>This isn't professional development you sit through — you're brought in as a professional. Your expertise shapes the game. You'll work side-by-side with researchers and designers over an intensive kickoff event plus follow-up online meetups, contribute to playtesting in your classroom, and end up with a game your students helped build. Fellows receive a stipend and travel costs, because your time is worth it.</p>
            <div class="pullnews">
              <p class="pullnews-headline">Teachers helped build a journalism game. It won two national awards.</p>
              <p class="pullnews-attrib">2024 Games for Change Awards &middot; on <em>Headlines and High Water</em></p>
              <a class="pullnews-link" href="https://education.wisc.edu/news/media-literacy-game-from-uw-madisons-field-day-lab-wins-big-at-games-for-change-awards/" target="_blank" rel="noopener">Read the story</a>
            </div>

            <div class="pullnews">
              <p class="pullnews-headline">500 students in 14 districts playtested a shipwreck game into a national honor.</p>
              <p class="pullnews-attrib">54th Annual Public Media Awards &middot; on <em>The Legend of the Lost Emerald</em></p>
              <a class="pullnews-link" href="https://education.wisc.edu/news/educational-video-game-created-at-uw-madison-earns-national-public-media-awards-honor/" target="_blank" rel="noopener">Read the story</a>
            </div>
          </div>
        </div>

        <div class="fact">
          <div class="info">
            <h3>Organizations That Make It Happen</h3>
            <p class="small">Every incubator runs because a sponsor believes in the mission. Sponsors provide the funding that makes the cohort possible, help define the thematic focus, and participate in the creative process alongside researchers and educators.</p>
            <p>At the end of each incubator, sponsors have a seat at the green-light decision: which game concepts move forward to full production? It's a genuine creative partnership — not just a check. Past sponsors include the Howard Hughes Medical Institute, the Wisconsin IceCube Particle Astrophysics Center, and NSF-funded research projects from UW-Madison.</p>
            <a href="/getinvolved/#s6" class="button pink filled small">Become a Sponsor</a>
          </div>
          <div class="photo">
            <img class="flight-lines" alt="" src="/assets/img/illustrations/flight-lines.png">
            <img class="astro-flight float" alt="Flying astronaut" src="/assets/img/illustrations/astro-flight.png">
            <img class="astro-flame" alt="" src="/assets/img/illustrations/astro-flame.png">
            <img class="astro-flame2" alt="" src="/assets/img/illustrations/astro-flame.png">
            <img class="flight-lines two" alt="" src="/assets/img/illustrations/flight-lines2.png">
          </div>
        </div>
      </section>
    </div>

    <section id="how-it-works" class="page-facts">
      <h2 class="section-title centered">How an Incubator Works</h2>

      <div class="fact">
        <div class="info">
          <h3>Phase 1 — Kickoff Event</h3>
          <p>A sponsor brings a theme and a question. We recruit a cohort: researchers with deep expertise, educators who know the classroom, and game designers from Field Day. Over one to two days at our Madison studio, the teams form and generate game "pitches" — rough concepts that map the sponsor's research onto compelling gameplay.</p>
        </div>
      </div>

      <div class="fact">
        <div class="info">
          <h3>Phase 2 — Concept Development</h3>
          <p>The best pitches are refined. Educators take early prototypes into their classrooms. Students play, break things, and give real feedback. Researchers check the science. Designers translate everything into a tighter, buildable concept.</p>
        </div>
      </div>

      <div class="fact">
        <div class="info">
          <h3>Phase 3 — Green Light</h3>
          <p>The sponsor and Field Day review the strongest concept. If it's greenlit, Field Day's team moves it into full production — and a game is born. Field Day games are free, play-tested with real students, and reach classrooms worldwide. A typical game costs $250k–$2M to produce, takes 18–24 months, and reaches hundreds of thousands of students annually.</p>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
      <h2 class="section-title centered">Common Questions</h2>
      <div id="faq" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="questions">
          <ul class="carousel-indicators">
            <li class="active" data-target="#faq" data-slide-to="0">For Educators: What do I receive for participating?</li>
            <li class="" data-target="#faq" data-slide-to="1">For Educators: Will my students be involved?</li>
            <li class="" data-target="#faq" data-slide-to="2">For Educators: Can I get PD credit?</li>
            <li class="" data-target="#faq" data-slide-to="3">For Educators: Can I join future incubators?</li>
            <li class="" data-target="#faq" data-slide-to="4">For Researchers: What does Field Day need from me?</li>
            <li class="" data-target="#faq" data-slide-to="5">For Researchers: What broader impacts does this satisfy?</li>
            <li class="" data-target="#faq" data-slide-to="6">For Researchers: Can my lab send graduate students?</li>
            <li class="" data-target="#faq" data-slide-to="7">For Sponsors: What does a sponsor get?</li>
            <li class="" data-target="#faq" data-slide-to="8">For Sponsors: How do I start a conversation?</li>
          </ul>
        </div>
        <div class="answers carousel-inner" role="listbox">
          <div class="item active">
            <h3>A stipend and travel costs.</h3>
            <p class="small">Each cohort pays a different stipend — see individual incubator pages for details. We always cover your travel expenses to the kickoff event. And can pay for substitute teachers to free you up for a day or two. This isn't a training you pay for. You are coming as a professional; we see educators as experts.</p>
          </div>
          <div class="item">
            <h3>Yes — and they'll love it.</h3>
            <p class="small">Your class will test the game at multiple stages of development and their feedback directly shapes the final product. Kids love getting behind the scenes. It opens their eyes to careers in science, design, and research they might never have imagined.</p>
          </div>
          <div class="item">
            <h3>Absolutely.</h3>
            <p class="small">We'll help with the paperwork you need to receive your required PD credits.</p>
          </div>
          <div class="item">
            <h3>Yes — and we hope you will.</h3>
            <p class="small">We give priority to educators who've participated before. Once you're part of the Field Day community, you're on the team. More than anything, we want to build a lasting community of like-minded educators.</p>
          </div>
          <div class="item">
            <h3>A compelling topic and willingness to collaborate.</h3>
            <p class="small">You don't need game experience — that's what we bring. You bring the science, the questions, and the passion. We'll handle the translation into gameplay.</p>
          </div>
          <div class="item">
            <h3>Massive, lasting public outreach.</h3>
            <p class="small">Field Day games are played 1.5 million times per year, free, by students across the country. A game built on your research is a powerful artifact that directly demonstrates broader impacts for your grant — and keeps delivering for years after the grant ends.</p>
          </div>
          <div class="item">
            <h3>Yes! Graduate students are welcome.</h3>
            <p class="small">While this is an incredible opportunity for PIs to interact with partners and educators, we love working with passionate and experienced graduate students.</p>
          </div>
          <div class="item">
            <h3>A cohort, a creative seat, and reach at scale.</h3>
            <p class="small">A cohort organized around your theme, participation in the full creative process, a seat at the green-light decision, and your research reaching classrooms via a professionally designed, free game.</p>
          </div>
          <div class="item">
            <h3>Contact us and let's talk.</h3>
            <p class="small">Costs vary by cohort size and scope. <a href="mailto:djgagnon@wisc.edu">Reach out</a> and we'll explore what a partnership looks like for your organization or grant.</p>
          </div>
        </div>
      </div>
    </section>


        <!-- Incubator Cohorts -->
    <section id="incubators" class="section grid fellowships-content">
      <ul class="gridder">
        <h2 class="section-title centered">Incubator Cohorts</h2>

<li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#incubator-food">
          <div class="game-thumbnail">
            <img alt="Autonomous farm robot working a crop field" src="/assets/img/fellowships/incubator-foodsystems.jpg">
          </div>
          <div class="card-summary">
            <div class="info">
              <h3>2026 Computation and Food Systems</h3>
              <h4 class="date">December 2026 &middot; Recruitment coming soon</h4>
              <span class="cohort-status-badge" aria-label="Status: Recruitment coming soon">Recruitment coming soon</span>
              <p>A new incubator exploring the robotics, drones, sensing, and data tools reshaping modern agriculture &mdash; from farm to farmers market.</p>
            </div>
            <span class="card-triangle"></span>
          </div>
        </li>

        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#incubator2">
          <div class="game-thumbnail">
            <img alt="Researcher working at a microscope in a biomedical lab" src="/assets/img/fellowships/incubator-biotech.jpg">
          </div>
          <div class="card-summary">
            <div class="info">
              <h3>2026 Frontiers of Biotechnology</h3>
              <h4 class="date">May 2026</h4>
              <span class="cohort-status-badge" aria-label="Status: Concepts In Review">Concepts In Review</span>
              <p>Partnering with HHMI Tangled Bank Studios to develop game concepts exploring cutting-edge biotechnology research and the careers of tomorrow.</p>
            </div>
            <span class="card-triangle"></span>
          </div>
        </li>


        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#incubator-ais">
          <div class="game-thumbnail">
                        <img alt="Zebra mussels encrusting a shell" src="/assets/img/fellowships/incubator-ais.jpg">
          </div>
          <div class="card-summary">
            <div class="info">
              <h3>Aquatic Invasive Species Game Incubator</h3>
              <h4 class="date">November 2025</h4>
              <span class="cohort-status-badge" aria-label="Status: Game In Production">Game In Production</span>
              <p>Partnering with Illinois-Indiana Sea Grant to develop a game exploring aquatic invasive species and their impact on Great Lakes ecology.</p>
            </div>
            <span class="card-triangle"></span>
          </div>
        </li>

        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#incubator-envhealth">
          <div class="game-thumbnail">
                        <img alt="Indoor air quality sensor in a home" src="/assets/img/fellowships/incubator-envhealth.jpg">
          </div>
          <div class="card-summary">
            <div class="info">
              <h3>Environmental Health Game Incubator</h3>
              <h4 class="date">October 2025</h4>
              <span class="cohort-status-badge" aria-label="Status: Game In Production">Game In Production</span>
              <p>Partnering with dfusion and NIH-funded researchers to develop a game building players' environmental health literacy around indoor air quality.</p>
            </div>
            <span class="card-triangle"></span>
          </div>
        </li>

        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#incubator-auv">
          <div class="game-thumbnail">
                        <img alt="Autonomous underwater vehicle navigating the ocean" src="/assets/img/fellowships/incubator-auv.jpg">
          </div>
          <div class="card-summary">
            <div class="info">
              <h3>Ocean Explorers: AUV Game Incubator</h3>
              <h4 class="date">September 2025</h4>
              <span class="cohort-status-badge" aria-label="Status: Game In Production">Game In Production</span>
              <p>Partnering with IEEE TryEngineering to develop a game around autonomous underwater vehicles and the engineers who design them.</p>
            </div>
            <span class="card-triangle"></span>
          </div>
        </li>

        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#incubator1">
          <div class="game-thumbnail">
            <img alt="Ladybug on a leaf — life science field research" src="/assets/img/fellowships/incubator-lifescience.jpg">
          </div>
          <div class="card-summary">
            <div class="info">
              <h3>2025 Practices of Life Science</h3>
              <h4 class="date">2025</h4>
              <span class="cohort-status-badge" aria-label="Status: Game In Production">Game In Production</span>
              <p>Exploring how science is actually done — four game concepts developed; one selected for a $250,000 production round.</p>
            </div>
            <span class="card-triangle"></span>
          </div>
        </li>

      </ul>
    </section>

    <!-- Incubator expanded content panels -->
        <div id="incubator-food" class="gridder-content">
      <div class="row game-inner">
        <h3>2026 Computation and Food Systems</h3>
        <span>Partners: UW&ndash;Madison Dept. of Planning and Landscape Architecture &middot; Wisconsin DPI</span>
        <span>Early December 2026 &middot; Recruitment coming soon &middot; date and location TBA</span>
        <span class="cohort-status">Status: Recruitment coming soon</span>
<!-- <img class="groupshot" alt="Autonomous farm robot working a crop field" src="/assets/img/fellowships/incubator-foodsystems.jpg"> -->

        <div class="col-md-6 game-expanded fellows-list cohort-people">
          <h4>Leadership:</h4>
          <div class="fellows">
            <span class="person">David Gagnon (PI, Field Day Lab)</span>

            <span class="person">Alfonso Morales (Co-PI, Dept. of Planning and Landscape Architecture)</span>

          </div>
          <h4>Researchers &amp; Educators:</h4>
          <div class="fellows">
            <span class="cohort-tba">To be announced &mdash; recruitment coming soon.</span>
          </div>
        </div>
        <div class="col-md-6 cta fellowship-summary cohort-cta">
          <h4>About the Incubator</h4>
          <p>This incubator brings together farmers, food transportation and retail professionals, community leaders, educators, librarians, and UW&ndash;Madison researchers to explore challenges facing Wisconsin&rsquo;s interconnected food systems and how emerging technologies might help address them. The community&rsquo;s first project will be the collaborative design of a free learning game that helps students and adults understand how food moves from field to table&mdash;and how robotics, AI, sensors, and other technologies are changing the systems that make it possible.</p>
          <p>Partially funded by the Reimagining Next Phase Research Initiative at UW&ndash;Madison and Wisconsin DPI. Additional sponsorship is being sought.</p>
          <a class="button small black" href="https://docs.google.com/document/d/1zrlSgH1G9wnGwyUdYBwmv3JeUBPMFUmJNWMskx9_vHc/edit" target="_blank" rel="noopener" aria-label="Learn More: 2026 Computation and Food Systems (opens in Google Docs)">Learn More</a>
          <a class="button small black" href="mailto:djgagnon@wisc.edu" aria-label="Sponsor this incubator">Sponsor This Incubator</a>
        </div>
      </div>
    </div>

<div id="incubator2" class="gridder-content">
      <div class="row game-inner">
        <h3>2026 Frontiers of Biotechnology</h3>
        <span>Sponsor: Howard Hughes Medical Institute &mdash; Tangled Bank Studios</span>
        <span>May 5, 2026 &middot; UW&ndash;Madison</span>
        <span class="cohort-status">Status: Concepts In Review</span>
<!-- <img class="groupshot" alt="Researcher working at a microscope in a biomedical lab" src="/assets/img/fellowships/incubator-biotech.jpg"> -->

        <div class="col-md-6 game-expanded fellows-list cohort-people">
          <h4>Researchers:</h4>
          <div class="fellows">
            Krishanu Saha<br />
            Francisco Pelegri<br />
            Melissa Skala<br />
          </div>
          <h4>HHMI Tangled Bank Studios:</h4>
          <div class="fellows">
            Alex Duckles<br />
            Emiley Garcia-Zych<br />
          </div>
          <h4>Educator Fellows:</h4>
          <div class="fellows">
            Jennifer Bindl<br />
            Shane Cullian<br />
            Shari Graffunder<br />
            Ryley Hartwig<br />
            Dawn Jewell<br />
            Kristyn Joyes<br />
            Heather Meixelsperger<br />
            Bridget Moylan<br />
            Steven Rogg<br />
            MacKenzie Saha<br />
          </div>
        </div>
        <div class="col-md-6 cta fellowship-summary cohort-cta">
          <h4>About the Incubator</h4>
          <p>Field Day partnered with Tangled Bank Studios at the Howard Hughes Medical Institute to develop learning game concepts exploring cutting-edge biotechnology research and the careers it opens up. Over a full day at UW&ndash;Madison, researchers in biomedical engineering, conservation genetics, and biomedical imaging worked shoulder-to-shoulder with Wisconsin educators, HHMI media producers, and the Field Day design team.</p>
          <p>The day moved from open brainstorming to lab tours with the Skala and Saha groups, then to researcher interviews and a second design session that turned real laboratory practice into playable ideas. It closed with team game pitches. Those concepts are now in review with HHMI.</p>
          <a class="button small black" href="https://docs.google.com/document/d/1lF7dXQfFvWfRmKtryryqbQhTbPj4UUzH5dx4z8IyXHI/edit" target="_blank" rel="noopener" aria-label="Learn More: 2026 Frontiers of Biotechnology (opens in Google Docs)">Learn More</a>
        </div>
      </div>
    </div>

    <div id="incubator1" class="gridder-content">
      <div class="row game-inner">
        <h3>2025 Practices of Life Science</h3>
        <span>Sponsor: NSF (PI Gagnon) &middot; Wisconsin DPI</span>
        <span>2025 &middot; UW&ndash;Madison</span>
        <span>Status: Game In Production</span>
<!-- <img class="groupshot" alt="Ladybug on a leaf &mdash; life science field research" src="/assets/img/fellowships/incubator-lifescience.jpg"> -->

        <div class="col-md-6 game-expanded fellows-list cohort-people">
          <h4>Researchers:</h4>
          <div class="fellows">
            Styliani Avraamidou<br />
            Eric Booth<br />
            David Ehrlich<br />
            Emile Gluck-Thaler<br />
            Claudio Gratton<br />
            Andrew Greenberg<br />
            Christina Hull<br />
            Ann Marsh<br />
            Megan McClean<br />
            Francisco Pelegri<br />
            Mohan Qin<br />
            John Strauser<br />
            Annette Zimmermann<br />
          </div>
          <h4>Educators &amp; Librarians:</h4>
          <div class="fellows">
            Joy Aragones<br />
            Chris Baker<br />
            Tim Fischer<br />
            Michele Huppert<br />
            Ben Stern<br />
            Beth VanCurine<br />
          </div>
        </div>
        <div class="col-md-6 cta fellowship-summary cohort-cta">
          <h4>About the Incubator</h4>
          <p>A cohort built around a single question: what does it actually look like to do science? Thirteen UW&ndash;Madison researchers &mdash; from systematic entomology to fungal biology to hydroecology &mdash; joined Wisconsin educators and librarians and the Field Day design team to turn the daily practice of their labs into game mechanics.</p>
          <p>Six design sessions took the group from free-form brainstorming to naming the &ldquo;boss levels&rdquo; of each discipline and pitching new research stations in the style of Field Day&rsquo;s game <em>Wake</em>. Four concepts came out of the day. One &mdash; anchored in UW entomology research &mdash; has been greenlit for a $250,000 production round.</p>
          <a class="button small black" href="https://docs.google.com/document/d/1_Ys3TQ19cYKtFCwhJ95X8v4meWKtUTCVYlOVmFAVLk4/edit" target="_blank" rel="noopener" aria-label="Learn More: 2025 Practices of Life Science (opens in Google Docs)">Learn More</a>
          <a class="button small black" href="https://wcer.wisc.edu/2025/06/05/field-day-lab-game-incubator/" target="_blank" aria-label="Read The News: 2025 Practices of Life Science">Read the News</a>
        </div>
      </div>
    </div>


    <div id="incubator-ais" class="gridder-content">
      <div class="row game-inner">
        <h3>Aquatic Invasive Species Game Incubator</h3>
        <span>Partners: Illinois-Indiana Sea Grant &middot; Wisconsin Center for Education Research</span>
        <span>November 17, 2025 &middot; Chicago Botanic Garden, Glencoe, IL</span>
        <span>Status: Game In Production</span>
<!-- <img class="groupshot" alt="Zebra mussels encrusting a shell" src="/assets/img/fellowships/incubator-ais.jpg"> -->

        <div class="col-md-6 game-expanded fellows-list cohort-people">
          <h4>Scientists &amp; Outreach Specialists:</h4>
          <div class="fellows">
            <span class="person">John Bieber (Loyola University)</span>

            <span class="person">Karter Burgdorf (Illinois-Indiana Sea Grant)</span>

            <span class="person">Julie Fiorito (Illinois-Indiana Sea Grant)</span>

            <span class="person">Greg Hitzroth (Illinois-Indiana Sea Grant)</span>

            <span class="person">Parker Maynard (Illinois-Indiana Sea Grant)</span>

            <span class="person">Peter Nagle (Chicago Botanic Garden)</span>

            Katie O&rsquo;Reilly &mdash; Illinois-Indiana Sea Grant<br />
            <span class="person">Claire Snyder (Illinois DNR)</span>

          </div>
        </div>
        <div class="col-md-6 cta fellowship-summary cohort-cta">
          <h4>About the Incubator</h4>
          <p>Field Day partnered with Illinois-Indiana Sea Grant to develop a learning game concept exploring aquatic invasive species and their impact on Great Lakes health. Over a day at the Chicago Botanic Garden, educators and invasive species scientists worked together to translate ecological research into game mechanics building players&rsquo; ecological literacy.</p>
          <a class="button small black" href="https://docs.google.com/document/d/1Ifuce1ulsZhh0TjaZ8UOsY6ZhX_Z5ay640EdXuTN5LM/edit" target="_blank" rel="noopener" aria-label="Learn More: 2025 Practices of Life Science (opens in Google Docs)">Learn More</a>
        </div>
      </div>
    </div>

    <div id="incubator-envhealth" class="gridder-content">
      <div class="row game-inner">
        <h3>Environmental Health Game Incubator</h3>
        <span>Partners: dfusion &middot; Wisconsin Center for Education Research &middot; NIH/NIEHS</span>
        <span>October 24, 2025 &middot; UW&ndash;Madison, Madison WI</span>
        <span>Status: Game In Production</span>
<!-- <img class="groupshot" alt="Indoor air quality sensor in a home" src="/assets/img/fellowships/incubator-envhealth.jpg"> -->

        <div class="col-md-6 game-expanded fellows-list cohort-people">
          <h4>Scientists &amp; Health Advocates:</h4>
          <div class="fellows">
            <span class="person">Neil Klepeis (San Diego State University)</span>

            <span class="person">BA Laris (dfusion)</span>

            Jonathan Patz &mdash; UW&ndash;Madison<br />
            Michelle Robinson &mdash; Foundation for Black Women&rsquo;s Wellness<br />
          </div>
          <h4>Educators:</h4>
          <div class="fellows">
            <span class="person">Joy Aragones (The Prairie School)</span>

            <span class="person">Abbey Brown (Bartels Middle School)</span>

            <span class="person">Michael Caliendo (Madison Metropolitan School District)</span>

            <span class="person">Craig Corcoran (Rockford Public Schools)</span>

            <span class="person">Heather Messer (Clark Street Community School)</span>

            <span class="person">Robert Turner (Omro High School)</span>

          </div>
        </div>
        <div class="col-md-6 cta fellowship-summary cohort-cta">
          <h4>About the Incubator</h4>
          <p>Field Day partnered with dfusion and the Wisconsin Center for Education Research on a NIH-funded incubator focused on environmental health literacy. The one-day workshop at UW&ndash;Madison brought together public health scientists and classroom teachers to generate game concepts centered on indoor air quality &mdash; helping players understand how their environment affects their health and how to use data to assess and communicate environmental risks.</p>
          <a class="button small black" href="https://docs.google.com/document/d/10ksfvYo4rmFifI1iMlK1NingY1-Ebm58J3eii3FV7aI/edit" target="_blank" rel="noopener" aria-label="Learn More: 2025 Practices of Life Science (opens in Google Docs)">Learn More</a>
        </div>
      </div>
    </div>

    <div id="incubator-auv" class="gridder-content">
      <div class="row game-inner">
        <h3>Ocean Explorers: AUV Game Incubator</h3>
        <span>Partners: IEEE TryEngineering &middot; IEEE Oceanic Engineering Society &middot; Wisconsin Center for Education Research</span>
        <span>September 29, 2025 &middot; Navy Pier, Chicago</span>
        <span class="cohort-status">Status: Game In Production</span>
<!-- <img class="groupshot" alt="Autonomous underwater vehicle navigating the ocean" src="/assets/img/fellowships/incubator-auv.jpg"> -->

        <div class="col-md-6 game-expanded fellows-list cohort-people">
          <h4>Engineers &amp; Experts:</h4>
          <div class="fellows">
            <span class="person">Nuno Alexandre Cruz (INESC TEC / University of Porto)</span>

            <span class="person">Jacqueline Nichols (Cellula Robotics)</span>

            <span class="person">Luyuan Peng (Acoustic Research Laboratory, NUS)</span>

            <span class="person">Dawna J. Schultz (IEEE)</span>

            <span class="person">Sophie Scopazzi (Aspect Wave LLC)</span>

            <span class="person">Christopher Whitt (Whitt Consulting)</span>

          </div>
          <h4>Educators:</h4>
          <div class="fellows">
            <span class="person">Craig Corcoran (Rockford Public Schools)</span>

            <span class="person">Raul Figueroa-Rivera (CTU Foundation Quest Center)</span>

            <span class="person">Raymond Mitchell (Curie Metropolitan HS, CPS)</span>

            <span class="person">Mike Stachyra (Von Steuben Metro Science Center, CPS)</span>

          </div>
        </div>
        <div class="col-md-6 cta fellowship-summary cohort-cta">
          <h4>About the Incubator</h4>
          <p>Field Day partnered with IEEE TryEngineering and the IEEE Oceanic Engineering Society to develop a learning game concept around autonomous underwater vehicles. At Navy Pier in Chicago, educators and practicing engineers translated cutting-edge AUV and ROV design practices into playable game concepts for middle and high school science classrooms.</p>
          <a class="button small black" href="https://docs.google.com/document/d/1MQsqX2ZH5IecKftDO5_bt7FlWMpoDdzMNSLUYii_SsU/edit" target="_blank" rel="noopener" aria-label="Learn More: 2025 Practices of Life Science (opens in Google Docs)">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Original Fellowships -->    <section id="fellowships" class="section grid fellowships-content">

      <ul class="gridder">
        <h2 class="section-title centered legacy-header">Original Fellowships</h2>
        <p class="centered legacy-intro">Before the incubator model, Field Day ran educator fellowships — intensive design events focused on teacher expertise. This work shaped everything we do today.</p>

        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game21">
          <div class="game-thumbnail"><img alt="PolarVR Fellowship" src="/assets/img/fellowships/waddle.jpg"></div>
          <div class="card-summary"><div class="info"><h3>PolarVR Fellowship</h3><h4 class="date">Summer 2024 - Spring 2025</h4><p>Explore how Virtual Reality can be used to bring polar research to life in your public or school library.</p></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game20">
          <div class="game-thumbnail"><img alt="Astrophysics Game Design Fellowship" src="/assets/img/fellowships/icecube.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Astrophysics Game Design Fellowship</h3><h4 class="date">Spring + Summer 2024</h4><p>Join public librarians, school librarians, and science teachers to develop a new desktop educational game exploring key concepts in space science.</p></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game19">
          <div class="game-thumbnail"><img alt="Aqualab Implementation Fellowship" src="/assets/img/fellowships/aqualab_dive.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Aqualab Implementation Fellowship</h3><h4 class="date">August + Fall 2022</h4><p>6th-9th grade science teachers exploring how Aqualab guides students in using science practices to investigate ocean ecosystems.</p></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game18">
          <div class="game-thumbnail"><img alt="Library VR Fellowship" src="/assets/img/fellowships/libraryVR.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Virtual Reality Expeditions in your Library</h3><h4 class="date">August, Fall, Winter 2022-2023</h4><p>Librarians in rural Wisconsin communities exploring VR to communicate cutting-edge NSF research and engage local Latinx audiences.</p></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game17">
          <div class="game-thumbnail"><img alt="Journalism Game Fellowship" src="/assets/img/fellowships/journalism.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Journalism Game Fellowship</h3><h4 class="date">Winter / Spring 2021 [Virtual]</h4><p>Educators who teach journalism and news media help create a game about journalistic practices and news literacy.</p></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game16">
          <div class="game-thumbnail"><img alt="Aqualab Game Production Fellowship" src="/assets/img/fellowships/aqualab.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Aqualab Game Production Fellowship</h3><h4 class="date">Winter / Spring 2021 [Virtual]</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game15">
          <div class="game-thumbnail"><img alt="Shipwrecks Game Production Fellowship" src="/assets/img/fellowships/gague.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Shipwrecks Game Production Fellowship</h3><h4 class="date">Fall 2020 [Virtual]</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game14">
          <div class="game-thumbnail"><img alt="Game Dashboard Fellowship" src="/assets/img/fellowships/dashboard-group.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Game Dashboard Fellowship</h3><h4 class="date">Spring 2020</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game13">
          <div class="game-thumbnail"><img alt="Shipwrecks Game Design Fellowship" src="/assets/img/fellowships/shipwreck-group.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Shipwrecks Game Design Fellowship</h3><h4 class="date">Fall 2019</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game12">
          <div class="game-thumbnail"><img alt="Farming and Phosphorus Game Design Fellowship" src="/assets/img/fellowships/farmingandphosphorus.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Farming and Phosphorus Game Design Fellowship</h3><h4 class="date">Fall 2018</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game11">
          <div class="game-thumbnail"><img alt="Doing History with Games Fellowship" src="/assets/img/fellowships/jowilder.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Doing History with Games Fellowship</h3><h4 class="date">Fall 2018</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game10">
          <div class="game-thumbnail"><img alt="State Capitol Game Production Fellowship" src="/assets/img/fellowships/jowilder2.jpg"></div>
          <div class="card-summary"><div class="info"><h3>State Capitol Game Production Fellowship</h3><h4 class="date">Spring 2018</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game9">
          <div class="game-thumbnail"><img alt="Fieldwork Across the Curriculum Fellowship" src="/assets/img/fellowships/fieldwork.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Fieldwork Across the Curriculum Fellowship</h3><h4 class="date">Spring 2018</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game8">
          <div class="game-thumbnail"><img alt="Wisconsin State Capitol Game Design Fellowship" src="/assets/img/fellowships/doinghistory.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Wisconsin State Capitol Game Design Fellowship</h3><h4 class="date">Summer and Fall 2017</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game7">
          <div class="game-thumbnail"><img alt="Material Science Research Experience" src="/assets/img/fellowships/mrsec.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Material Science Research Experience</h3><h4 class="date">Summer 2017</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game6">
          <div class="game-thumbnail"><img alt="Material Science Game Design" src="/assets/img/fellowships/material.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Material Science Game Design</h3><h4 class="date">Spring 2017</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game5">
          <div class="game-thumbnail"><img alt="Games for Humanity Fellowship" src="/assets/img/fellowships/gameon.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Games for Humanity Fellowship</h3><h4 class="date">Spring 2017</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game4">
          <div class="game-thumbnail"><img alt="Game On" src="/assets/img/fellowships/gameon.png"></div>
          <div class="card-summary"><div class="info"><h3>Game On</h3><h4 class="date">Fall 2016</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game3">
          <div class="game-thumbnail"><img alt="WDLC Game Design Course" src="/assets/img/fellowships/wdlc.jpg"></div>
          <div class="card-summary"><div class="info"><h3>WDLC Game Design Course</h3><h4 class="date">Summer 2016</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game2">
          <div class="game-thumbnail"><img alt="Student Game Design" src="/assets/img/fellowships/studentgamedesign.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Student Game Design</h3><h4 class="date">Spring 2016</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game1">
          <div class="game-thumbnail"><img alt="Science Mini Games" src="/assets/img/fellowships/yardgames.jpg"></div>
          <div class="card-summary"><div class="info"><h3>Science Mini Games</h3><h4 class="date">Spring 2016</h4></div><span class="card-triangle"></span></div>
        </li>
        <li class="gridder-list" role="button" tabindex="0" aria-expanded="false" data-griddercontent="#game0">
          <div class="game-thumbnail"><img alt="Field Research" src="/assets/img/fellowships/fieldresearch.jpeg"></div>
          <div class="card-summary"><div class="info"><h3>Field Research</h3><h4 class="date">Fall 2015 and Spring 2016</h4></div><span class="card-triangle"></span></div>
        </li>

      </ul>
    </section>

    <!-- Legacy fellowship expanded panels — copied verbatim from fellowships/index.php -->
    <div id="game21" class="gridder-content">
  <div class="row game-inner game20-inner">
    <h3>PolarVR Fellowship</h3>
    <span>Application Deadline: May 29, 2024</span>
    <span>Stipend: $150</span>
    <span><a target="_blank" href="https://docs.google.com/document/d/1kBZhFFH-LmWI7F4zk4stHorFDMsttUr4FSw2fflotYg/edit#heading=h.gjdgxs" aria-label="More Info: PolarVR Fellowship">More Info</a></span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>We're looking for librarians in rural communities throughout Wisconsin to help us grow our PolarVR project, which focuses on designing Virtual Reality (VR) experiences for use in informal learning spaces. We are specifically seeking participants who are motivated to develop, promote, and implement VR-based library programming focused specifically on Latine audiences.</p>
        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd7k-_t-EnOobxzszKgJ3LGYZ1iRx0h0rTU7a3auCSPgRXFYw/viewform" class="button small black" target="_blank">Apply</a>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="game dashboard" src="/assets/img/fellowships/argo.jpg">
      </div>
    </div>
  </div>
</div>
<div id="game20" class="gridder-content">
  <div class="row game-inner game20-inner">
    <h3>Astrophysics Game Design Fellowship</h3>
    <span>We are no longer accepting applications</span>
    <span>Stipend: $200</span>
    <span>More Info</span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>Want to help envision and bring to life a new desktop video game? We are looking for public librarians, school librarians and science teachers throughout Wisconsin to help us envision and develop a new desktop educational game based on current research happening at the <a href="https://wipac.wisc.edu/learn/explore/">Wisconsin IceCube Particle Astrophysics Center</a></p>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="game dashboard" src="/assets/img/fellowships/icecube.jpg">
      </div>
    </div>
  </div>
</div>

<div id="game19" class="gridder-content">
  <div class="row game-inner game17-inner">
    <h3>Aqualab Implementation Fellowship</h3>
    <span>Application Deadline: [For Early Consideration] June 21, 2022 </span>
    <span>Stipend: $500 / Teacher</span>
    <span><a target="_blank" href="https://docs.google.com/document/d/1mefrRJig7obFUio-mdK604PLnb1Cnvlw2SzvPNwtAYM/edit" aria-label="More Info: Aqualab Implementation Fellowship">More Info</a></span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>Join us to explore how Aqualab, a new game being developed by Field Day with the help of an amazing group of Wisconsin teachers, can be used in the classroom to teach science practices. You'll work with the Field Day team and a cohort of science teachers from around the state to develop activities for your own classroom that will deepen what students do and learn in the game. </p>
        <a href="https://education.wisc.edu/news/a-very-deep-dive-uw-madisons-award-winning-field-day-lab-releases-its-most-ambitious-educational-game-yet/" class="button small black" target="_blank" aria-label="Read The Story: Aqualab Implementation Fellowship">Read the Story</a>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="game dashboard" src="/assets/img/fellowships/aqualab_dive.jpg">
      </div>
    </div>
  </div>
</div>

<div id="game18" class="gridder-content">
  <div class="row game-inner game17-inner">
    <h3>Virtual Reality Expeditions in your Library</h3>
    <span>August, Fall, Winter 2022-2023</span>
    <span>Stipend: $300</span>
    <span><a target="_blank" href="https://docs.google.com/document/d/1Z0N_lRfnFDyVM84Th5Uwc6yUYgzI9QNFLAkeXCXmwE0/edit#heading=h.gjdgxs" aria-label="More Info: Virtual Reality Expeditions in your Library">More Info</a></span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>We're looking for librarians in rural communities throughout Wisconsin to help us envision and implement a series of new Virtual Reality (VR) experiences designed for use in informal learning spaces. These experiences will focus on sharing cutting edge research currently being done by scientists in the Arctic and Antarctic polar regions. Additionally, we are interested in exploring how these experiences might be designed and promoted to specifically attract and engage Latinx audiences. </p>
        <a class="button small black" target="_blank">We are not accepting new applicants at this time.</a>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="game dashboard" src="/assets/img/fellowships/libraryVR.jpg">
      </div>
    </div>
  </div>
</div>

<div id="game17" class="gridder-content">
  <div class="row game-inner game17-inner">
    <h3>Journalism Game Fellowship</h3>
    <span>Winter / Spring 2021 [Virtual] </span>
    <span>Stipend: $250 / teacher</span>
    <span><a target="_blank" href="https://docs.google.com/document/d/1nPb0fABDncZN5GFVg0-WA3uQ84xkRHNmLwasPc9sPy0/edit#heading=h.gjdgxs" aria-label="More Info: Journalism Game Fellowship">More Info</a></span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>Team up with Field Day to help create a game that will reach millions of kids! We're looking for innovative teachers to serve as advisors on a new online game about journalism and news literacy. Kids will learn journalistic practices like checking sources, gaining public trust, and meeting deadlines under pressure. You'll work alongside game designers, other teachers, journalists from USA Today, PBS Milwaukee, and Buzzfeed, and the co-founder and editor of The Open Notebook, a craft guide for science writers. Join our pop-up community and help create something awesome that will get used by kids all across the country.</p>
        <a href="https://tonemadison.com/articles/a-new-video-game-immerses-players-in-a-flood-of-journalistic-decisions/" class="button small black" target="_blank" aria-label="Read The Story: Journalism Game Fellowship">Read the Story</a>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="game dashboard" src="/assets/img/fellowships/journalism.jpg">
      </div>
    </div>
  </div>
</div>

<div id="game16" class="gridder-content">
  <div class="row game-inner game15-inner">
    <h3>Aqualab Game Production Fellowship</h3>
    <span>Application Deadline: December 1, 2020 </span>
    <span>Stipend: $500 / teacher</span>
    <span><a target="_blank" href="https://docs.google.com/document/d/1peGixGZx-AKuy4_qHnl80b-S0lBlVZca4U0XBo7JaNg/edit#" aria-label="More Info: Aqualab Game Production Fellowship">More Info</a></span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>Come design a game with us! We're looking for innovative 6th-9th grade science teachers to join our team and help create a new online game called AquaLab! Kids will need to use experimentation, modeling, and evidence-based argumentation to keep a marine research station running. Join a community of scientists, game designers, and researchers to create something awesome that will get used by kids all across the country! </p>
        <a class="button small black" target="_blank">We are not accepting new applicants at this time.</a>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="Shipwreck Teachers" src="/assets/img/fellowships/shipwreck-teachers.jpg">
      </div>
    </div>
  </div>
</div>

<div id="game15" class="gridder-content">
  <div class="row game-inner game15-inner">
    <h3>Shipwrecks Game Production Fellowship</h3>
    <span>Deadline: October 15th, 2020</span>
    <span>Stipend: $200 / teacher</span>
    <span><a target="_blank" href="https://docs.google.com/document/d/1MoVcYijT1KhM95Xh_MbaH6v1RKJG5ZL4nwNPFBRu1Rc/edit?usp=sharing" aria-label="More Info: Shipwrecks Game Production Fellowship">More Info</a></span>
    <div class="wrapper">
      <div class="col-md-7 game-expanded">
        <p>Want to give your kids a front row seat to the incredible world of underwater archaeology? Come design a game with us! We're looking for a group of 3rd-5th grade teachers to help create and test an online game about maritime archaeology and Great Lakes shipwrecks. You'll join a community of game designers, researchers, and maritime archaeologists. Together, we'll create a game that will get used by kids across the state and beyond.</p>
        <a class="button small black" target="_blank">We are not accepting new applicants at this time.</a>
      </div>
      <div class="col-md-5 cta">
        <img class="expanded-thumb img-responsive" alt="game dashboard" src="/assets/img/fellowships/game-dashboard.jpg">
      </div>
    </div>
  </div>
</div>

<div id="game14" class="gridder-content">
  <div class="row game-inner game14-inner">
    <h3>Game Dashboard Fellowship</h3>
    <span>Deadline has passed</span>
    <img class="groupshot" alt="dashboard group" src="/assets/img/fellowships/dashboard-group.jpg">
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Craig Corcoran<br />
        David Fitzpatrick<br />
        Nathan Breitholtz<br />
        Dominique Lark<br />
        Joy Aragones<br />
        Sedate Kohler<br />
        Zachary Geiger<br />
        Corey C Foght<br />
        Julie Poetzel<br />
        Peter Bertling<br />
        Kristyn Joyes<br />
        Jeff Paradis<br />
        </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>12 Wisconsin teachers came out to UW-Madison for an overnight event. They worked with data scientists, researchers, and the Field Day team to generate ideas for the dashboard.</p>
    <a class="button small black" href="https://medium.com/fielddaylab/data-nerds-unite-how-teachers-and-scientists-are-changing-the-future-of-teaching-with-games-3d43c74e0210" target="_blank" aria-label="Read The Story: Game Dashboard Fellowship">Read the Story</a>
  </div>
</div>

<div id="game13" class="gridder-content fellowship-finished">
  <div class="row game-inner game13-inner">
    <h3>Shipwrecks Game Design Fellowship</h3>
    <span>Deadline has passed</span>
    <img class="groupshot" alt="shipwreck group" src="/assets/img/fellowships/shipwreck-group.jpg">
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Joy Aragones<br />
        Angela Bies<br />
        Michelle Carlile<br />
        Larry Gundlach<br />
        VaLisa Harmon<br />
        Jodi Kardin<br />
        Juliana Kelly<br />
        Kelly Koller<br />
        Elizabeth Rivera<br />
        Daniel Scherbert<br />
        Mike Scoville<br />
        Katherine Seibel<br />
        Perry Smith<br />
        Wanda Welch<br />
        </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>14 teacher fellows came out for a unique 2-day event at the Manitowoc Maritime Museum. The teachers met marine archaeologists, game designers, and content producers. First they learned about game design and shipwrecks in the Great Lakes and got inspired by our surroundings. Then they worked to come up with design ideas for a free online game about Great Lakes shipwrecks!</p>
    <a class="button small black" href="https://medium.com/fielddaylab/shipwrecks-and-sea-shanties-designing-a-game-to-teach-the-great-lakes-3339abddd865" target="_blank" aria-label="Read The Story: Shipwrecks Game Design Fellowship">Read the Story</a>
    </div>
  </div>
</div>

<div id="game12" class="gridder-content fellowship-finished">
  <div class="row game-inner game12-inner">
    <h3>Farming and Phosphorus</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Craig Corcoran<br />
        Olivia Dachel<br />
        Zeth Engel<br />
        Heather Messer<br />
        Meghan Sawdy<br />
        Anthony Schnell<br />
        Ben Stern<br />
        Robert Turner<br />
        Amy Workman<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>Eight teacher fellows worked with us to develop a new science game, Lakeland, in collaboration with Victor Zavala at UW's Scalable Systems Lab. The teachers came on location in Madison, where they met with Victor, toured the campus, and went behind the scenes at Victor's lab. The teachers helped come up with ideas for Lakeland, did user testing with their students, and gave us input that informed the final version of the game. </p>
    </div>
  </div>
</div>

<div id="game11" class="gridder-content fellowship-finished">
  <div class="row game-inner game11-inner">
    <h3>Doing History with Games Fellowship</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Niki Shafer<br />
        Nicole Lutzke<br />
        Katherine Seibel<br />
        Jodi Kardin<br />
        Heidi Konop<br />
        Peter Michaud<br />
        Andrea Lindberg<br />
        Bridget Grindle<br />
        Mike Scoville<br />
        Andrea Bell-Myers<br />
        Boyd Roessler<br />
        Jennifer Gavin<br />
        Jennifer Baldridge<br />
        Stephanie Markman<br />
        Annie Teufel<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>For this unique fellowship, teachers worked with their students to "do history" with a combination of games and inquiry-based lessons. The fellows met with historians and museum educators. They used our history game, Jo Wilder and the Capitol Case, as a jumping-off point and a source of inspiration for developing inquiry-based activities for their classrooms. </p>
    </div>
  </div>
</div>

<div id="game10" class="gridder-content fellowship-finished">
  <div class="row game-inner game10-inner">
    <h3>Wisconsin State Capitol Game Production Fellowship</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Andrea Bell-Myers<br />
        Angela Bies<br />
        Matthew Daniels<br />
        Jennifer Guckenberger<br />
        VaLisa Harmon<br />
        Jodi Kardin<br />
        Nicole Lutzke<br />
        Jonathan Mason<br />
        Peter Michaud<br />
        Rachel Nolan<br />
        Kasey Rachu<br />
        Mike Scoville<br />
        LIsa Sorlie<br />
        Jim Tellstrom<br />
        Julie Young<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>This fellowship brought elementary school teachers to UW-Madison to help develop ideas for a game about Wisconsin history. The teachers worked alongside archivists, historians, and game designers to build game design concepts based on historical artifacts. One of the design ideas from this fellowship grew into a level of our Wisconsin history game, Jo Wilder and the Capitol Case. </p>
    </div>
  </div>
</div>

<div id="game9" class="gridder-content fellowship-finished">
  <div class="row game-inner game9-inner">
    <h3>Fieldwork Across the Curriculum Fellowship</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Jennifer Degner<br />
        Julia Hanson<br />
        Jenny Karpelenia<br />
        Patrick Keelty<br />
        Teresa Lakowske<br />
        Jamie Lauer<br />
        Cowell Lora<br />
        Allison Madison<br />
        Jennisa Novitski<br />
        Joe Riederer<br />
        Amanda Semrad<br />
        Benjamin Smejkal<br />
        Jeremy Wallace<br />
        Amy Workman<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>This fellowship invited K-12 teachers from all across WIsconsin to design fieldwork activities for their students. Teachers used SIftr, Field Day's citizen science app, to bridge the gap between the classroom and the rest of their students' lives. Using papers, clipboards, and Siftr, kids went out in the world to make observations and then used the data they collected to spark discussions in their classrooms. </p>
    </div>
  </div>
</div>

<div id="game8" class="gridder-content fellowship-finished">
  <div class="row game-inner game8-inner">
    <h3>Wisconsin State Capitol Game Design Fellowship </h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Angela Bies<br />
        Tera Hollfelder <br />
        George Klink<br />
        Nicole Lutzke<br />
        Mary Roberts<br />
        Boyd Roessler<br />
        Mike Scoville<br />
        Lisa Sorlie<br />
        Micki Uppena<br />
        Kati Walsh<br />
        Jonathan <br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>Our 3rd-5th grade teacher fellows came on location in Madison to develop ideas for a Wisconsin history game. The teachers toured the Wisconsin Historical Society, explored the Capitol building, and met with archivists. The fellows worked with Field Day's design team and experts from PBS Wisconsin to develop a concept that would later become our WIsconsin history game, Jo Wilder and the Capitol Case. </p>
    </div>
  </div>
</div>

<div id="game7" class="gridder-content fellowship-finished">
  <div class="row game-inner game7-inner">
    <h3>Material Science Research Experience</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">

      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>For this on-site fellowship, teachers put on a lab coat and joined the University of Wisconsin's Materials Research Science and Engineering Center. The teachers spent the summer working in the lab alongside experts. Then they designed digital or hands-on laboratory activities for their students based on their research experiences.  </p>
    </div>
  </div>
</div>

<div id="game6" class="gridder-content fellowship-finished">
  <div class="row game-inner game6-inner">
    <h3>Material Science Game Design</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Marsella Aguilar<br />
        Eryca Card<br />
        Renee Corcoran<br />
        Jake Eaton<br />
        Ryan Guza<br />
        Tracy Jaconette<br />
        Jamian Knuth<br />
        Jessica North<br />
        Amanda Semrad<br />
        Sarah Sprangers<br />
        Melissa Wojcik<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>For this fellowship, 6 middle-schools science teachers worked as part of a crack team to help conceptualize, design, and test two science games to join our Yard Games collection. The teachers met with leading scientists from the Materials Research Science and Engineering Center, education experts, and the design team here at Field Day. </p>
    </div>
  </div>
</div>

<div id="game5" class="gridder-content fellowship-finished">
  <div class="row game-inner game5-inner">
    <h3>Games for Humanity Fellowship</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Eric Anderson<br />
        Traci Davis<br />
        Joe Dawidziak<br />
        JIay Garvey Shah<br />
        Eric Gietzen<br />
        Amy King<br />
        Jeffrey Klaisner<br />
        Daphne Kohnke<br />
        Vanessa Moran<br />
        Dan Uttech<br />
        William White<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>For this fellowship, 15 teachers used ARIS, Field Day's game design platform, to integrate game design into their curriculum. Instead of having their students write final papers, the teachers designed and implemented a project where their students built mobile games to demonstrate their understanding.</p>
    </div>
  </div>
</div>

<div id="game4" class="gridder-content fellowship-finished">
  <div class="row game-inner game4-inner">
    <h3>Game On</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Beth Bolling<br />
        Cindy Byers<br />
        David Cusma<br />
        Susan Ferguson<br />
        Sheila Flox<br />
        Jeanine Gelhaus<br />
        Ryan Guza<br />
        Josh Hames<br />
        Pete Jaeger<br />
        Jenny Karpelenia<br />
        Dan Krolow<br />
        Alexandra Krucas<br />
        Jessica Leahy<br />
        Joanie McGowan-Merlin<br />
        Heather Meixelsperger<br />
        Peggy Moriarty<br />
        Rita Mullen<br />
        Darsha Olsen<br />
        Elizabeth Ramsay<br />
        Peter Swenson<br />
        Amy Veit<br />
        Jennifer Voigt<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>This fellowship recruited 22 teachers from across Wisconsin who were excited about using learning games with their students. The teacher fellows used at least two of the Yard Games with their students, reported back on their experiences, and attended online meet-ups. </p>
    </div>
  </div>
</div>

<div id="game3" class="gridder-content fellowship-finished">
  <div class="row game-inner game3-inner">
    <h3>WDLC Game Design Course</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Dave Strong<br />
        Dan Rhode<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>For this fellowship, two teachers—Dave Strong and Dan Rhode—worked with designers and experts to develop a game design course for high school students. The online course includes a six-part video, discussion questions, and online resources (like slides and worksheets) that teachers can print, download, and edit. This course was developed in partnership with Field Day, DPI, and WDLC. You can learn more visiting our
online course
</p>
    </div>
  </div>
</div>

<div id="game2" class="gridder-content fellowship-finished">
  <div class="row game-inner game2-inner">
    <h3>Student Game Design</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Beth Stofflet<br />
        Larry Moberly<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>Two innovative teachers from DeForest Middle School, Beth Stofflet and Larry Moberly, worked with Field Day to help their seventh-graders become game designers. The kids used ARIS, Field Day's game design platform, to design digital games based on what they were learning about Africa. Beth and Larry asked their students to investigate issues like gold mining, education, or the ivory trade. By the end of the project, 250 students had created video games based on their research. </p>
    </div>
  </div>
</div>

<div id="game1" class="gridder-content fellowship-finished">
  <div class="row game-inner game1-inner">
    <h3>Science Mini Games</h3>
    <span>Deadline has passed</span>
    <img class="groupshot" alt="yard games group" src="/assets/img/fellowships/yardgames.jpg">
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Brian Miles<br />
        Dominique Lark<br />
        Jenny Karpelenia<br />
        Robyn Kademan<br />
        Joe Riederer<br />
        Jeanine Gelhaus<br />
        Matt Regan<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>For this fellowship, science teachers from across the state came to Madison to help develop nine new online science games, the Yard Games. The teachers worked side-by-side with our design team and offered their real-world expertise to help us understand what would really work in the middle-school classrooms. </p>
    </div>
  </div>
</div>

<div id="game0" class="gridder-content fellowship-finished">
  <div class="row game-inner game0-inner">
    <h3>Field Research</h3>
    <span>Deadline has passed</span>
    <div class="col-md-6 game-expanded fellows-list">
      <h4>Teacher Fellows:</h4>
      <div class="fellows">
        Larry Gundlach<br />
        Amy Workman <br />
        Brenna Holzhauer<br />
      </div>
    </div>
    <div class="col-md-6 cta fellowship-summary">
      <h4>About the Fellowship</h4>
      <p>We worked with three awesome research fellows to refine our citizen science app, Siftr. The Field Research fellows helped us explore the best way to do field research activities in formal and informal settings. The teachers were super important in helping us create Siftr. Check out how one of our awesome fellows, Larry Gundlach, used SIftr to teach poetry: </p>
      <a class="button small black" href="https://medium.com/fielddaylab/kids-in-verona-wisconsin-use-siftr-to-write-poetry-b8e14fa6f147?#.z23kxu4ja " target="_blank" aria-label="Read The Story: Field Research">Read the Story</a>
    </div>
  </div>
</div>

  </div><!-- /mainwrapper -->

<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php"; include_once($path); ?>

<script>
  $('#faq').carousel({interval: false });

  $(function() {
    $('.gridder').gridderExpander({
      scroll: true,
      scrollOffset: 100,
      scrollTo: "listitem",
      animationSpeed: 900,
      animationEasing: "easeInOutExpo",
      showNav: true,
      nextText: "Next",
      prevText: "Previous",
      closeText: "<img src=\"/assets/img/ui/close-icon.png\">",
      onStart: function(){},
      onContent: function(){},
      onClosed: function(){}
    });
  });

  // Keyboard accessibility for gridder cards (WCAG 2.1 AA)
  $(function() {
    $(document).on('keydown', '.gridder-list', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        $(this).trigger('click');
      }
    });
    $(document).on('click', '.gridder-list', function() {
      var clicked = this;
      setTimeout(function() {
        $('.gridder-list').attr('aria-expanded', 'false');
        var target = $(clicked).data('griddercontent');
        if (target) {
          var panel = $(target);
          if (panel.length && panel.is(':visible')) {
            $(clicked).attr('aria-expanded', 'true');
            if (!panel.attr('tabindex')) { panel.attr('tabindex', '-1'); }
            // Focus the panel for keyboard/screen-reader users without re-scrolling
            // the page — a plain focus() scrolls the whole panel into view, which
            // fights the gridder scroll and leaves the clicked card out of view.
            panel[0].focus({ preventScroll: true });
          }
        }
      }, 950);
    });
  });
</script>


<style>
/* Hero buttons (2026-09-21): Current Opportunities sits to the right of
   Learn More when the info column is wide enough; when the column narrows
   (small screens) it wraps to its own line, left-justified. */
.page .page_hero .info .hero-cta-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-items: center;
  column-gap: 12px;
  row-gap: 8px;
}
.page .page_hero .info .hero-cta-row .button { margin: 0 0 20px 0; }
/* Expanded-cohort-card readability pass (2026-09-21).
   Scoped to .cohort-people / .cohort-cta (classes on the inner column
   divs — the outer panel div's classes do not survive Gridder's clone
   into .gridder-expanded-content). Legacy fellowship panels keep their
   base styling. groupshot images are commented out of the cohort
   panels; person lines render "Name (Organization)", one per line. */
.teachers .fellowships-content .gridder-expanded-content .cohort-people .fellows {
  column-count: 1 !important;
  margin-bottom: 30px !important;
}
.teachers .fellowships-content .gridder-expanded-content .cohort-people .fellows .person {
  display: block;
  white-space: normal;
  line-height: 1.7;
  margin-bottom: 4px;
}
.teachers .fellowships-content .gridder-expanded-content .cohort-people .fellows .cohort-tba {
  display: block;
  line-height: 1.7;
}
.teachers .fellowships-content .gridder-expanded-content .cohort-people h4 {
  margin: 30px 0 8px;
}
.teachers .fellowships-content .gridder-expanded-content .cohort-people h4:first-child {
  margin-top: 0;
}
.teachers .fellowships-content .gridder-expanded-content .cohort-cta h4 {
  margin: 30px 0 8px;
}
.teachers .fellowships-content .gridder-expanded-content .cohort-cta h4:first-child {
  margin-top: 0;
}
</style>
</body></html>