<?php
// Include your functions files here


// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
add_theme_support( 'menus' );

// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => __( 'Menu principal', 'minimal-blank-theme' )
) );

// Register sidebars
if( function_exists( 'register_sidebar' ) ) {	
    register_sidebar( array(
        'name' => 'Sidebar - Pied de page',
        'id' => 'footer-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}