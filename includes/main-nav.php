<nav class="small-nav nav-fixed">
  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/mobile-nav.php";
  include_once($path); ?>
  <div class="left">
    <ul>
      <li class="logo"><a href="/"><img class="darklogo" src="/assets/img/logos/fd-learning_games_logo_new.png"></a></li>
      <!--<li class="small-navlink hide-for-nav-narrow"><a class="drawerleft-toggle">games</a></li>-->
      <li class="small-navlink hide-for-nav-narrow"><a href="/play">games</a></li>
      <li class="small-navlink hide-for-nav-narrow"><a href="/mixedreality">mixed reality</a></li>
      <li class="small-navlink hide-for-nav-xsmall"><a href="/about">about us</a></li>
      <li class="small-navlink hide-for-nav"><a href="/research">research</a></li>
      <li class="small-navlink hide-for-nav"><a href="/fellowships">fellowships</a></li>
      <!--<li><a href="/about">About us</a></li>-->
      <!--<li class="small-navlink"><a class="drawerright-toggle">Learn</a></li>-->
    </ul>
  </div>
  <div class="right">
    <ul>
      <!--<li>
        <a class="button small yellow">gee game awards</a>
      </li>-->
      <li>
        <span class="worklink hide-for-nav"></span>
        <div class="mobile-nav-toggle-wrap">
          <div class="nav-toggle">
            <div class="icon"></div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="drawer drawer-left make">
  <img class="icon-close drawerclose" src="/assets/img/ui/close-icon-white.png" />
  <div class="drawer-contents">
    <a class="draweritem drawer-intro" href="">
      <img class="intro-bg" src="/assets/img/logos/nowonder.png" />
      <h2>Our Games</h2>
      <p>Our games get world-class research out to the public.</p>
    </a>

    <a class="draweritem" href="/play/emerald">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbs/emerald-thumb.jpg'); background-size: cover;"></div>
      <span>Legend of the Lost Emerald</span>
    </a>

    <a class="draweritem" href="/play/lakeland">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/posters/lakeland.jpg'); background-size: cover;"></div>
      <span>Lakeland</span>
    </a>

    <a class="draweritem" href="/play/forevermine">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/posters/forevermine.jpg'); background-size: cover;"></div>
      <span>Lost at the Forever Mine</span>
    </a>

    <a class="draweritem" href="/play/jowilder">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/posters/jowilder.jpg'); background-size: cover;"></div>
      <span>Jo Wilder and the Capitol Case</span>
    </a>

    <a class="draweritem" target="_blank" href="http://theyardgames.org">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/posters/yardgames.jpg'); background-size: cover;"></div>
      <span>The Yard Games</span>
    </a>

    <a class="draweritem" href="/play/atom-touch">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbnails/bg9.jpg'); background-size: cover;"></div>
      <span>Atom touch</span>
    </a>
  </div>
</div>

<div class="drawer drawer-right learn">
  <img class="icon-close drawerclose" src="/assets/img/ui/close-icon-white.png" />
  <div class="drawer-contents">

    <a class="draweritem drawer-intro" href="">
      <img class="intro-bg" src="/assets/img/logos/nowonder.png" />
      <h2>Mixed Reality</h2>
      <p>Our games get world-class research out to the public.</p>
    </a>

    <a class="draweritem" href="/make/aris">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbs/thermovr_thumb.jpg'); background-size: cover;"></div>
      <span>ThermoVR</span>
    </a>

    <a class="draweritem" href="/play/thestationmaine">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbs/stationmaine-thumb.jpg'); background-size: cover;"></div>
      <span>The Station:Maine</span>
    </a>

    <a class="draweritem" target="_blank" href="http://siftr.org">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbs/siftr-thumb.jpg'); background-size: cover;"></div>
      <span>Siftr</span>
    </a>

    <a class="draweritem" href="/play/ice-cube">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbs/icecube-thumb.png'); background-size: cover;"></div>
      <span>Ice Cube</span>
    </a>

    <a class="draweritem" href="/make/aris">
      <div class="draweritem-thumbnail" style="background: url('/assets/img/thumbs/aris-thumb.jpg'); background-size: cover;"></div>
      <span>ARIS</span>
    </a>

  </div>
</div>
