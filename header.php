<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

	<title><?php wp_title(); ?></title>
	
	<meta name="author" content="<?php the_author_meta( 'display_name', 1 ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	
	<?php
	// CSS
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	
	// ADD your css here
	
	
	// Use jquery and jquery core from the google cdn instead of wordpress included
	wp_deregister_script( 'jquery-ui-core' );
	wp_deregister_script( 'jquery-ui-tab' );
	wp_deregister_script( 'jquery-ui-autocomplete' );
	wp_deregister_script( 'jquery-ui-accordion' );
	wp_deregister_script( 'jquery-ui-autocomplete' );
	wp_deregister_script( 'jquery-ui-button' );
	wp_deregister_script( 'jquery-ui-datepicker');
	wp_deregister_script( 'jquery-ui-dialog' );
	wp_deregister_script( 'jquery-ui-draggable' );
	wp_deregister_script( 'jquery-ui-droppable' );
	wp_deregister_script( 'jquery-ui-mouse' );
	wp_deregister_script( 'jquery-ui-position' );
	wp_deregister_script( 'jquery-ui-progressbar');
	wp_deregister_script( 'jquery-ui-resizable' );
	wp_deregister_script( 'jquery-ui-selectable');
	wp_deregister_script( 'jquery-ui-slider' );
	wp_deregister_script( 'jquery-ui-sortable' );
	wp_deregister_script( 'jquery-ui-tabs' );
	wp_deregister_script( 'jquery-ui-widget' );
	wp_deregister_script( 'jquery' );
	
	wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3' );
	wp_enqueue_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js', array( 'jquery' ), '1.9.2', true);
	
	// Modernizr for html5 and CSS3 support
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js' , array(), '2.6.2', true);
	
	// Default js of your theme to add your own js scripts
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js' , array( 'jquery' ), '1.0', true);
	
	// ADD your js here
	
	
	wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
	<header id="header" role="banner">
		
	</header>
	<section id="content" role="main">