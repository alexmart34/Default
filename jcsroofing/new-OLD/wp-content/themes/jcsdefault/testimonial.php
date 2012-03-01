<?php 
/*
Template Name: Testimonials
*/
get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="lfcont">
<h2 class="pagetitle"><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php $testimonial = new WP_Query('category_name=Testimonial');
		  while ($testimonial->have_posts()) : $testimonial->the_post(); ?>
		<div class="testimonialcont">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
	<?php wp_reset_query(); ?>
	<?php endwhile; ?>
</div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>