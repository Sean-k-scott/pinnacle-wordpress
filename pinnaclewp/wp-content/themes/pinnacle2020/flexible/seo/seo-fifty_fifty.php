<?php $bgimage = get_sub_field('right_background'); ?>
<img src="<?php echo $bgimage['url']; ?>" alt="<?php echo $bgimage['alt']; ?>" class="image__design" />
<div class="image__right" style="background-image:url(<?php echo $bgimage['url']; ?>);">
</div>
<div class="container">
  <div class="section__content">
    <h2><?php the_sub_field('section_title');?></h2>
    <div class="mt3">
      <?php the_sub_field('section_content'); ?>
    </div>
    <?php get_template_part('flexible/seo/buttons'); ?>
  </div>
</div>
