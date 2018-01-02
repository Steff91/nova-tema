<?php

/** =====================================
    Including scripts
    =====================================
*/

function nova_tema_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/nova.css', array(), '1.0.0', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/nova.js', array(), '1.0.0', true);

    //Bootstrap

    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script( 'pooper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
    wp_enqueue_script( 'tether_js', 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js');
	//Font Awesome
	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'nova_tema_script_enqueue');

/** =====================================
    Menus
    =====================================
 */

function nova_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'nova_theme_setup');

/** =====================================
    Theme support
    =====================================
 */


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image', 'video'));
add_theme_support('html5', array('search-form'));

/*
	==========================================
	 Include Walker file
	==========================================
*/


if ( ! file_exists( get_template_directory() . '/inc/walker.php' )) {
    // file does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
}

else {
    // file exists... require it.
    require_once get_template_directory() . '/inc/walker.php';
}

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

/*
	==========================================
	 Active Class
	==========================================
*/

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/*
	==========================================
	 Sidebar
	==========================================
*/

function nova_tema_widget_setup () {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
}

add_action('widgets_init','nova_tema_widget_setup');

/*
	==========================================
	 Logo
	==========================================
*/

function nova_tema_custom_logo_setup() {

	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);

	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'nova_tema_custom_logo_setup' );

/*
	==========================================
	 Read More
	==========================================
*/

function modify_read_more_link() {
	return '<a class="more" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );