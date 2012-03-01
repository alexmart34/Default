<?php 
	/*
	Template Name: Homepage
	*/
	
	get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="topimg">
			<?php the_content(); ?>
			</div>
			<div class="lfcont">
				<div class="welcometext">
					<h1>Welcome to JCS Roofing!</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum.</p>
				</div>
				<div class="service-links">
					<div class="service">
						<h3>Areas We Service</h3>
						<p>Click on the map below to See the areas we service!</p>
						<a href="" class="servicemap"><img src="<?php bloginfo('template_url');?>/images/servicemap.gif"></a>
					</div>
					<div class="custlinks">					
						<h3>Quick Links</h3>
						<p><ul class="content-list">
							<?php wp_nav_menu(array('menu' => 'HP Quick Links' )); ?>
						</ul></p>
					</div>
				</div>
			</div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>