<?php




function load_stylesheets()
{


	wp_register_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');


	wp_register_style('flexslider', get_template_directory_uri() . '/plugins/flexslider/flexslider.css', array(), 1, 'all');
	wp_enqueue_style('flexslider');


	wp_register_style('slick', get_template_directory_uri() . '/plugins/slick/slick.css', array(), 1, 'all');
	wp_enqueue_style('slick');


	wp_register_style('slicktheme', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), 1, 'all');
	wp_enqueue_style('slicktheme');


	wp_register_style('fancybox', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css', array(), 1, 'all');
	wp_enqueue_style('fancybox');


	wp_register_style('font', get_template_directory_uri() . '/plugins/fontawesome/css/all.min.css', array(), 1, 'all');
	wp_enqueue_style('font');


	wp_register_style('animate', get_template_directory_uri() . '/plugins/animation/animate.min.css', array(), 1, 'all');
	wp_enqueue_style('animate');


	wp_register_style('animate', get_template_directory_uri() . '/plugins/animation/animate.min.css', array(), 1, 'all');
	wp_enqueue_style('animate');


	wp_register_style('jqueryui', get_template_directory_uri() . '/plugins/jquery-ui/jquery-ui.css', array(), 1, 'all');
	wp_enqueue_style('jqueryui');


	wp_register_style('timePicker', get_template_directory_uri() . '/plugins/timePicker/timePicker.css', array(), 1, 'all');
	wp_enqueue_style('timePicker');


	wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
	wp_enqueue_style('stylesheet');


	wp_register_style('favicon', get_template_directory_uri() . '/images/favicon.png', array(), 1, 'all');
	wp_enqueue_style('favicon');


	wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
	wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts','load_stylesheets');






//load scripts


function addjs()
{

	wp_deregister_script('jquery');


	wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery.min.js', '', 1, 1, 1);
	wp_enqueue_script('jquery');


	wp_register_script('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js', '', 1, 1, 1);
	wp_enqueue_script('bootstrap');


	wp_register_script('flexslider', get_template_directory_uri() . '/plugins/flexslider/jquery.flexslider-min.js', '', 1, 1, 1);
	wp_enqueue_script('flexslider');


	wp_register_script('slick', get_template_directory_uri() . '/plugins/slick/slick.min.js', '', 1, 1, 1);
	wp_enqueue_script('slick');


	wp_register_script('slick-animation', get_template_directory_uri() . '/plugins/slick/slick-animation.min.js', '', 1, 1, 1);
	wp_enqueue_script('slick-animation');


	wp_register_script('fancybox', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', '', 1, 1, 1);
	wp_enqueue_script('fancybox');


	wp_register_script('google-map', get_template_directory_uri() . '/plugins/google-map/gmap.js', '', 1, 1, 1);
	wp_enqueue_script('google-map');


	wp_register_script('jqueryui', get_template_directory_uri() . '/plugins/jquery-ui/jquery-ui.js', '', 1, 1, 1);
	wp_enqueue_script('jqueryui');


	wp_register_script('timePicker', get_template_directory_uri() . '/plugins/timePicker/timePicker.js', '', 1, 1, 1);
	wp_enqueue_script('timePicker');


	wp_register_script('scriptjs', get_template_directory_uri() . '/js/script.js', '', 1, 1, 1);
	wp_enqueue_script('scriptjs');


	wp_register_script('custom', get_template_directory_uri() . '/custom.js', '', 1, 1, 1);
	wp_enqueue_script('custom');



}
add_action('wp_enqueue_scripts','addjs');



//add theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');



//Register menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
        'footer-menu' => __( 'Footer Menu', 'theme' ),
) );






/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



//Register sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'page sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'

		)
	);

	
		register_sidebar(
		array(
			'name' => 'Footer Sidebar 1',
			'id' => 'footer-sidebar-1',
			'description' => 'Appears in the footer area',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'

		)
	);
	
}
add_action( 'widgets_init','my_sidebars' );


add_image_size('slider',150, 150, false);