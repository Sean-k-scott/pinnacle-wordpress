<!DOCTYPE html>
<html lang="en-gb">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $metadesc; ?>">
    <meta name="keywords" content="<?php echo $metakeywords; ?>">
    <title><?php wp_title(''); ?> | Pinnacle Coaching</title>
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/pinnacle.min.css">
  </head>
  <body>
    <header class="header <?php
    if($headertype == "white") { echo "header-white"; } else { echo "header-clear"; }?>">
    <div class="container">
        <div class="logos">
        <?php
          $homepage = "/";
          $currentpage = $_SERVER['REQUEST_URI'];
        if($homepage==$currentpage) { ?>
          <?php if($headertype == "white") { ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-black.png" class="logo" alt="Pinnacle Logo" />
          <?php } else { ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-white.png" alt="Pinnacle Logo" class="logo non-transformed" />
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-black.png" alt="Pinnacle Logo" class="logo transformed" />
          <?php } } else {
            if($headertype == "white") { ?>
              <a href="/pinnaclewp/" title="To Homepage">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-black.png" class="logo" alt="Pinnacle Logo" />
              </a>
          <?php } else { ?>
              <a href="/pinnaclewp/" title="To Homepage">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-white.png" alt="Pinnacle Logo" class="logo non-transformed" />
              </a>
              <a href="/pinnaclewp/" title="To Homepage" class="logo transformed">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/logo-black.png" alt="Pinnacle Logo" class="logo transformed" />
              </a>
              <?php } ?>
            <?php } ?>
            <div class="header__site__desktop">
              Pinnacle Coaching
            </div>
          </div>
          <div class="header__site">
            Pinnacle Coaching
          </div>
          <div class="nav-button">
            <div class="toggle-menu">
              <?php include('assets/img/logos-icons/menu.svg'); ?>
            </div>
          </div>
          <div class="nav-wrapper">
            <nav class="header__nav">
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
            <a href="https://discord.gg/Wvd7vcX" title="Join our Discord!">
              <?php include('assets/img/logos-icons/discord.svg'); ?>
            </a>
          </div>
        </div>
    </header>
