
<div class="rtsidebar">
	<h2><a href="<?php bloginfo('home');?>/?page_id=8">What We Offer &raquo;</a></h2>
		<?php $whatweoffer_sb = new WP_Query('category_name=what-we-offer&posts_per_page=1');
		  while ($whatweoffer_sb->have_posts()) : $whatweoffer_sb->the_post(); ?>
			<?php the_content(); ?>
		<?php wp_reset_query(); ?>
		<?php endwhile; ?>
	<h2><a href="<?php bloginfo('home');?>/?page_id=30">Testimonials &raquo;</a></h2>
	<div class="testimonial">
		<div class="quote-first"></div>
		<?php $testimonial_sb = new WP_Query('category_name=Testimonial&posts_per_page=1');
		  while ($testimonial_sb->have_posts()) : $testimonial_sb->the_post(); ?>
			<?php the_content(); ?>
		<?php wp_reset_query(); ?>
		<?php endwhile; ?>
		<div class="quote-last"></div>
	</div>
</div>
<div class="clear"></div>

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

<?php endif; ?>
