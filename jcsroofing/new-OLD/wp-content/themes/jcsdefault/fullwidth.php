<?php 
/*
Template Name: FullWidth
*/
get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="lfcont fullwidth">
	<h2 class="pagetitle"><?php the_title(); ?></h2>
	<?php the_content(); ?>
<div class="clear"></div>
</div>
<?php endwhile; endif; ?>
<div class="clear"></div>
<?php get_footer(); ?>