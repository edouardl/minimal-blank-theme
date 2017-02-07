<?php

function enqueueTheThemeScriptsAndStyles() {

	// Comment reply JS
	if( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// @TODO : Uncomment what you need

	// Modernizr for html5 and CSS3 support
	//wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' , array(), '2.8.3', true);

	// Normalize
	//wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' );

	// Bootstrap
	//wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array('jquery'), '3.3.7', true);
	//wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	// Animate CSS
	//wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );


	// ENQUEUE your css below

	// ENQUEUE your js below


	// Default theme stylesheet
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

	// Default js of your theme to add your own js scripts, add dependances if needed
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js' , array( 'jquery' ), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueueTheThemeScriptsAndStyles');

/**
 * Unregister jQuery and jQueryUI from WP Core
 * and load them from google CDN
 *
 * @return void
 */
function registerJqueryFromCdn() {
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

	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3' );
	wp_register_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array( 'jquery' ), '1.11.4', true);
}
add_action('wp_head', 'registerJqueryFromCdn', 1 );
