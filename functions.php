<?php
add_action('admin_menu','bhhidenag');
function bhhidenag(){
	remove_action( 'admin_notices', 'update_nag', 3 );
}

//* Enable Options page in Advanced Custom Fields Pro
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

//* Add image sizes
add_image_size( 'blog-size', 433, 9999 );
 
//* Allow shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

function remove_submenu() {
global $submenu;
//remove Theme editor
unset($submenu['themes.php'][10]); //menus
unset($submenu['themes.php'][12]); //background
unset($submenu['themes.php'][13]); //header
//print_r($GLOBALS['submenu']); //prints out submenu array - use to get ids
}

function remove_menu() {
global $menu;
//remove post top level menu
//unset($menu[5]);
//print_r($GLOBALS['menu']); //prints our menu array - use to get ids
}
add_action('admin_head', 'remove_menu');
add_action('admin_head', 'remove_submenu');


register_sidebar( array(
		'name' => __( 'Home Page News', 'twentyten' ),
		'id' => 'home-news-widget-area',
		'description' => __( 'The home page news widget area', 'twentyten' ),
/*		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>', */
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
) );


register_sidebar( array(
		'name' => __( 'Home Page Events', 'twentyten' ),
		'id' => 'home-events-widget-area',
		'description' => __( 'The home page events widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>[',
		'after_title' => ']</h3>',
) );

register_sidebar( array(
		'name' => __( 'Puzzle Sidebar', 'twentyten' ),
		'id' => 'puzzle-widget-area',
		'description' => __( 'The puzzle widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
) );

register_sidebar( array(
		'name' => __( 'Page Intro Sidebar', 'twentyten' ),
		'id' => 'pageintro-widget-area',
		'description' => __( 'The page intro widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
) );

register_sidebar( array(
		'name' => __( 'Statistic Intro Sidebar', 'twentyten' ),
		'id' => 'statistic-widget-area',
		'description' => __( 'The Statistic widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
) );

register_sidebar( array(
		'name' => __( 'News Sidebar', 'twentyten' ),
		'id' => 'news-widget-area',
		'description' => __( 'The News widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
) );
?>