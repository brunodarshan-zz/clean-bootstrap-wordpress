<?php
add_action('init', 'cleanblog_load_scripts');
function cleanblog_load_scripts() {
    wp_enqueue_style('font-awesome', get_template_directory_uri()."/vendor/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style('bootstrap', get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style('clean', get_template_directory_uri()."/css/clean-blog.min.css");

  add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
	}
}

  wp_enqueue_script('jquery', get_template_directory_uri()."/vendor/jquery/jquery.min.js");
  wp_enqueue_script('bootstrap', get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.min.js");
  wp_enqueue_script('clean-blog', get_template_directory_uri()."/js/clean-blog.min.js");

}

add_action('after_setup_theme', 'clean_header_custom');
function clean_header_custom() {
$args = array(
  	'flex-width'    => true,
  	'width'         => 980,
  	'flex-height'    => true,
  	'height'        => 200,
  	'uploads'=>true,
    'videos'=> true
  );
  add_theme_support( 'custom-header', $args );
}

require_once "functions/navwalker-bootstrap.php";
register_nav_menus(array('primary'=>__('Principal', clean-blog)));
