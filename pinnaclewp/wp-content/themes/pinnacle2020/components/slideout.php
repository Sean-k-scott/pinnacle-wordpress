<div class="slideout" style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/img/background/slideout-bg.jpg')">
  <div class="slideout__container">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/menu-close.svg" alt="Close Menu" class="close toggle-menu" />
      <div class="slideout__logo">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-white.png" alt="Pinnacle Logo" />
        <div class="slideout__logo__site">
          Pinnacle Coaching
        </div>
      </div>
      <nav class="slideout__nav">
        <ul>
          <?php
            $homepage = "/";
            $currentpage = $_SERVER['REQUEST_URI'];
          if($homepage!==$currentpage) { ?>
          <a href="/pinnaclewp/" title="Return To Homepage">
            <li>Home</li>
          </a>
          <?php } ?>
          <a href="/pinnaclewp/games/" title="See Our Games">
            <li>Games</li>
          </a>
          <a href="/pinnaclewp/coaches/" title="Meet Our Coaches">
            <li>Coaches</li>
          </a>
          <a href="/pinnaclewp/book/" title="Book A Session">
            <li>Book</li>
          </a>
          <a href="/pinnaclewp/news/" title="Latest News">
            <li>News</li>
          </a>
          <a href="/pinnaclewp/about/" title="About Us">
            <li>About</li>
          </a>
        </ul>
      </nav>
  </div>
</div>
