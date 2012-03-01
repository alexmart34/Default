<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="container">
	<div id="header">
		<div class="tagline">
			<img src="<?php bloginfo('template_url');?>/images/tagline.png">
		</div>
		<div class="phone">
			<img src="<?php bloginfo('template_url');?>/images/phone.png">
		</div>
	</div>
	<div id="main">
		<div class="logo">
			<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url');?>/images/jcslogo.gif"></a>
		</div>
		<div id="topnav">
			<?php wp_nav_menu(array('menu' => 'Top Nav' )); ?>
			<div class="searchcontainer"><?php get_search_form(); ?></div>
		</div>
		<div class="clear"></div>
		<div class="content">