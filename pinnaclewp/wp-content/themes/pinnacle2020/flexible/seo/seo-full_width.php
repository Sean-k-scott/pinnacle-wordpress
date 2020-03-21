<div class="container">
  <h2 class="centered"><?php the_sub_field('the_title'); ?></h2>
  <div class="mt4">
    <?php the_sub_field('the_content'); ?>
  </div>
  <?php if(get_sub_field('include_games_button') || get_sub_field('include_coaches_button') || get_sub_field('include_book_button') || get_sub_field('include_news_button') || get_sub_field('include_custom_button')):?>
  <div class="button-container mt2">
    <?php if(get_sub_field('include_games_button')):?>
      <div class="button-align">
        <a href="/pinnaclewp/games/" title="See Our Games" class="button">See Our Games</a>
      </div>
      <?php endif; ?>
      <?php if(get_sub_field('include_coaches_button')):?>
        <div class="button-align">
          <a href="/pinnaclewp/coaches/" title="Meet Our Coaches" class="button">Meet Our Coaches</a>
        </div>
      <?php endif; ?>
      <?php if(get_sub_field('include_book_button')):?>
        <div class="button-align">
          <a href="/pinnaclewp/book/" title="Book A Session" class="button">Book A Session</a>
        </div>
      <?php endif; ?>
      <?php if(get_sub_field('include_news_button')):?>
        <div class="button-align">
          <a href="/pinnaclewp/news/" title="See The Latest News" class="button">Latest News</a>
        </div>
      <?php endif; ?>
      <?php if(get_sub_field('include_custom_button')):?>
        <div class="button-align">
          <a href="<?php get_sub_field('custom_button_url_full');?>" title="<?php print get_sub_field('custom_button_text');?>" class="button"><?php print get_sub_field('custom_button_text');?></a>
        </div>
      <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
