<?php

/* Template Name: Homepage Template */
$metatitle = "Home | Pinnacle Coaching";
$metadesc = "Pinnacle Coaching provides high level coaching sessions to players of all abilities, helping you improve in your game of choice and reach the level you strive for.";
$metakeywords = "Coaches, Pinnacle, Coaching, esports, learn, practice, improve, video game coaching, computer game coaching, coaching, compete, leagues, ranks, champion, legend";
$headertype = "clear";

include('header.php'); ?>

<section class="topfold home-topfold" style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/img/background/home-topfold.jpg');">
  <div class="container">
    <h1 class="centered">Reach the Top of your Game <br/>
        Compete with the Best</h1>
  </div>
  <a href="#content" title="Go To Content">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/arrow.svg" alt="To Content" class="to-content" />
  </a>
</section>

<section class="home-improve small-section">
  <div class="container">
    <h2 class="subtitle centered">Improve Your Rank</h2>
    <div class="badges-container">
      <div class="badge-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/bronze.svg" alt="Bronze Rank Medal" />
      </div>
      <div class="badge-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/silver.svg" alt="Silver Rank Medal" />
      </div>
      <div class="badge-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos-icons/gold.svg" alt="Gold Rank Medal">
      </div>
    </div>
  </div>
</section>

<section id="content" class="home-levelup standard-section">
  <div class="container">
    <div class="grid">
      <div class="image-left">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/level-up.jpg" alt="Level Up Your Game" />
      </div>
      <div class="content-right">
        <h2>Level Up Your Game</h2>
        <p>Here at Pinnacle, we are commited to helping you reach your maximum potential, whilst having the maximum fun with your favourite games and friends. We can help you with any aspect of your game, from the basics to high-level strategy.</p>
        <p>No matter what your area of expertise, from solo First Person Shooters, to Battle Royale's we have you covered. Or maybe you're a strategy person? We do that too! Team games are also our speciality so if you want to keep up with your friends check out our games!</p>
        <div class="button-align">
          <a href="/pinnaclewp/games/" title="See Our Games" class="button">See Our Games</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-levelup large-section">
  <div class="container">
    <div class="grid">
      <div class="image-right">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/team-player.jpg" alt="Lone Wolf or Team Player?" />
      </div>
      <div class="content-left">
        <h2>Lone Wolf or <br/>Team Player?</h2>
        <p>Here at Pinnacle, we are commited to helping you reach your maximum potential, whilst having the maximum fun with your favourite games and friends. We can help you with any aspect of your game, from the basics to high-level strategy.</p>
        <p>No matter what your area of expertise, from solo First Person Shooters, to Battle Royale's we have you covered. Or maybe you're a strategy person? We do that too! Team games are also our speciality so if you want to keep up with your friends meet our coaches!</p>
        <div class="button-align">
          <a href="/pinnaclewp/coaches/" title="Meet Our Coaches" class="button">Meet Our Coaches</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-yourdevice" style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/img/background/your-device.jpg');">
  <div class="container">
    <div class="device__container">
      <h2 class="centered">Whatever your device:</br>We have you covered.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin risus elit, blandit in felis ut, congue commodo mi. Nulla facilisi. Fusce tempus augue quis lectus molestie, at elementum justo consequat. Sed finibus efficitur ligula, quis rhoncus mauris auctor at. Sed pellentesque commodo facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin risus elit, blandit in felis ut, congue commodo mi.</p>
      <p>Curabitur ut convallis orci. Ut mattis ac mauris quis hendrerit. Nam mollis malesuada consectetur. Aliquam ut bibendum eros. Vestibulum sed dignissim justo. In in purus consectetur, vehicula tortor in, scelerisque ante. Vivamus sagittis lobortis nunc, nec lacinia nulla dapibus vitae. Curabitur ut convallis orci. Ut mattis ac mauris quis hendrerit. Nam mollis malesuada consectetur. Aliquam ut bibendum eros. Vestibulum sed dignissim justo.</p>
      <div class="centered">
        <a href="/pinnaclewp/games/" title="See Our Games" class="button">See Our Games</a>
      </div>
    </div>
  </div>
</section>

<section class="home-healthy large-section">
  <div class="container">
    <div class="grid">
      <div class="image-left">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/healthy-mind.jpg" alt="Healthy Body, Healthy Mind" />
      </div>
      <div class="content-right">
        <h2>Healthy Body and<br/>a Healthy Mind</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin risus elit, blandit in felis ut, congue commodo mi. Nulla facilisi. Fusce tempus augue quis lectus molestie, at elementum justo consequat. Sed finibus efficitur ligula, quis rhoncus mauris auctor at. Sed pellentesque commodo facilisis. </p>
        <p>Curabitur ut convallis orci. Ut mattis ac mauris quis hendrerit. Nam mollis malesuada consectetur. Aliquam ut bibendum eros. Vestibulum sed dignissim justo. In in purus consectetur, vehicula tortor in, scelerisque ante. Vivamus sagittis lobortis nunc, nec lacinia nulla dapibus vitae. </p>
        <div class="button-align">
          <a href="/pinnaclewp/news/" title="Latest News" class="button">Latest News</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php'); ?>
