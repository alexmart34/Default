<?php 
/*
Template Name: Default w/ RtSidebar
*/
get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="lfcont">
	<h2 class="pagetitle"><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>