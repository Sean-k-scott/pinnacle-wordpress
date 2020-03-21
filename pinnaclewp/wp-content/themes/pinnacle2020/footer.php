    <footer>
      <div class="container">
        <div class="footer__logo">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-white.png" alt="Pinnacle Coaching" />
          <div class="footer__logo__site">
            Pinnacle Coaching
          </div>
        </div>
        <div class="divider one"></div>
        <div class="footer__contact">
          <div class="footer__contact__header">
            Contact Us:
          </div>
          <a href="mailto:contact@pinnaclecoaching.net" class="footer__contact__email">
            contact@pinnaclecoaching.net
          </a>
          <div class="footer__contact__logos">
            <a href="https://discord.gg/Wvd7vcX" title="Join Our Discord">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/discord.svg" alt="Discord" />
            </a>
            <a href="#" title="Follow Our Facebook">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/facebook.svg" alt="Facebook" />
            </a>
            <a href="#" title="Follow us on Twitter">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/twitter.svg" alt="Twitter" />
            </a>
            <a href="#" title="Subscribe to our YouTube">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/youtube.svg" alt="YouTube" />
            </a>
            <a href="#" title="Follow us on Instagram">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/instagram.svg" alt="Discord" />
            </a>
          </div>
        </div>
        <div class="divider two"></div>
        <nav class="footer__nav">
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
    </footer>
    <?php include('components/slideout.php'); ?>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/custom.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:600,800|Spectral:600&display=swap" rel="stylesheet">
  </body>
</html>
