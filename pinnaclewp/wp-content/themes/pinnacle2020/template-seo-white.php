<?php

/* Template Name: SEO Standard Template */
$metadesc = "Pinnacle Coaching provides high level coaching sessions to players of all abilities, helping you improve in your game of choice and reach the level you strive for.";
$metakeywords = "Coaches, Pinnacle, Coaching, esports, learn, practice, improve, video game coaching, computer game coaching, coaching, compete, leagues, ranks, champion, legend";
$headertype = "white";

include('header.php'); ?>

<section class="seo topfold seo__topfold">
  <div class="container">
    <h1 class="centered"><?php the_field('page_heading'); ?></h1>
  </div>
</section>

<?php if(have_rows('flexible_content')): ?>
  <?php while (have_rows('flexible_content')): the_row(); ?>
    <section
      class="seo seo__<?php print get_row_layout(); ?> <?php the_sub_field('custom_padding'); ?> <?php the_sub_field('custom_margin'); ?>"
      style="<?php if(get_sub_field('background_color')): ?>background-color: <?php the_sub_field('background_color'); ?>;<?php endif; ?>
      <?php if(get_sub_field('background_image')): ?>background-image: url('<?php the_sub_field('background_image')?>');<?php endif;?>"
    >

    <?php get_template_part('flexible/seo/seo-'. get_row_layout() .''); ?>

    </section>
  <?php endwhile; ?>
<?php endif; ?>


<?php include('footer.php'); ?>
