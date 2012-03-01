<?php get_header(); ?>
<div class="lfcont">
	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<!-- <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?> -->

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>We're sorry, there were no search results.</h2>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>