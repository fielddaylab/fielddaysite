
<nav class="small-nav nav-fixed">
  <!--<span class="curtain-toggle"><img src="/assets/img/ui/icon-ornament.png" /></span>-->
  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/mobile-nav.php";  include_once($path); ?>
  <div class="left">
    <ul>
      <li class="logo"><a href="/"><img class="darklogo" src="/assets/img/logos/fd-logo-nav.png"></a></li>
      <li class="small-navlink"><a class="drawerleft-toggle">games</a></li>
      <li class="small-navlink"><a class="drawerright-toggle">mixed reality</a></li>
      <li class="small-navlink hide-for-nav"><a href="/research">research</a></li>
      <li class="small-navlink hide-for-nav"><a href="/fellowships">fellowships</a></li>
      <!--<li><a href="/about">About us</a></li>-->
      <!--<li class="small-navlink"><a class="drawerright-toggle">Learn</a></li>-->
    </ul>
  </div>
  <div class="right">
    <ul>
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
  <img class="icon-close drawerclose" src="/assets/img/ui/close-icon-white.png"/>
  <div class="drawer-contents">
    <a class="draweritem drawer-intro" href="">
      <img class="intro-bg" src="/assets/img/logos/nowonder.png" />
      <h2>Our Games</h2>
      <p>Our games get world-class research out to the public. Play the games and find teaching resources here.</p>
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
  <div class="drawer-contents">

    <a class="draweritem drawer-intro" href="">
      <img class="intro-bg" src="/assets/img/logos/nowonder.png" />
      <h2>Mixed Reality</h2>
      <p>Our games get world-class research out to the public. Play the games and find teaching resources here.</p>
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
