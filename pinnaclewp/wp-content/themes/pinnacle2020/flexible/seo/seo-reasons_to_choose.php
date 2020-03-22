<div class="container">
  <div class="reasons__wrapper">
    <div class="image__desktop">
      <?php $imaged = get_sub_field('desktop_image'); ?>
      <img src="<?php echo $imaged['url'];?>" alt="<?php echo $imaged['alt'];?>" />
    </div>
    <div class="image__mobile">
      <?php $imagem = get_sub_field('mobile_image'); ?>
      <img src="<?php echo $imagem['url'];?>" alt="<?php echo $imagem['alt'];?>" />
    </div>
    <div class="reasons__infobox">
      <h2><?php the_sub_field('section_title');?></h2>
      <?php if( have_rows('reasons_list')): ?>
        <?php $i = 1;?>
      <ul class="reasons__list">
        <?php while ( have_rows('reasons_list') ): the_row(); ?>
        <li><span class="number"><?php echo $i ;?> /</span> <?php the_sub_field('reason'); ?></li>
        <?php $i++; ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;?>
    <?php if(get_sub_field('section_content')): ?>
      <div class="mt2">
        <?php the_sub_field('section_content'); ?>
      </div>
    <?php endif; ?>
    <?php get_template_part('flexible/seo/buttons'); ?>
    </div>
  </div>
</div>
