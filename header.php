<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/whiteboard_favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wptf.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wptf.js" type="text/javascript"></script>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/960_24_col.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class(); ?>>
	
	<header>
	<div id="header">
		<div class="container_24">
			<!--#logo--><div id="logo" class="grid_6">
				<a href="<?php bloginfo('url'); ?>">
					<?php $logo = get_bloginfo('template_directory').'/imgs/logo.png'; ?>
					<img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" class="logo"/>
				</a>
			</div><!--#logo-->
			<!--nav--><nav><div id="nav"  class="prefix_1 grid_17">
				<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div></nav><!--nav-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
		</div>
	</div>
	</header>
	

