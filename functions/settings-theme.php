<?php

function setup_theme() {
  add_theme_support('title-tag');
}


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

add_action('after_setup_theme', 'setup_theme');
add_action('after_setup_theme', 'clean_header_custom');
