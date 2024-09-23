<div class="spotlight hide"></div>
<nav class="small-nav nav-fixed">
  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/mobile-nav.php";
  include_once($path); ?>
  <div class="left">
    <ul>
      <li class="logo"><a href="/"><img class="darklogo" src="/assets/img/logos/fd-learning_games_logo_new.png"></a></li>
      <li class="small-navlink hide-for-nav-narrow"><a href="/play">games</a></li>
      <li class="small-navlink hide-for-nav-narrow"><a href="/about">about us</a></li>
      <li class="small-navlink hide-for-nav-xsmall"><a href="/fellowships">fellowships</a></li>
      <li class="small-navlink hide-for-nav"><a href="/research">research</a></li>
      <li class="small-navlink hide-for-nav"><a href="/work">work with us</a></li>
    </ul>
  </div>
  <div class="right">
    <ul>
      <li>
        <!-- <a class="button xsmall yellow filled hideforsmall" tabindex="0">get involved</a> -->
        <div class="mobile-nav-toggle-wrap">
          <button class="btn-link nav-toggle">
            <span class="icon"></span>
          </button>
        </div>
      </li>
    </ul>
  </div>
</nav>

