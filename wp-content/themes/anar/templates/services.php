<?php
/*
  Template Name: Services
*/
    get_header();
    if (have_posts()):while (have_posts()):the_post();
?>
    <h1><?= the_title(); ?></h1>
    <div class="content">
    	<?php the_content(); ?>
    </div>
<?php
    endwhile; endif;
    get_footer();