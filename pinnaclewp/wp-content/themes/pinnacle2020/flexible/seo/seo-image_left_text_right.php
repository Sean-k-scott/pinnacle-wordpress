<div class="container">
  <div class="grid">
    <div class="image-left">
      <?php $image = get_sub_field('image_left'); ?>
        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
    </div>
    <div class="content-right">
      <h2><?php the_sub_field('section_title'); ?></h2>
      <?php the_sub_field('section_content'); ?>
      <?php get_template_part('flexible/seo/buttons'); ?>
    </div>
  </div>
</div>
