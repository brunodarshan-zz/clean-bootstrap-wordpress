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
