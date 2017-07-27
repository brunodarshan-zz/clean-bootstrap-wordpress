<?php
add_theme_support("post-thumbnails");

$title = apply_filters('pre_get_document_title', '');

require_once "functions/scripts.php";
require_once "functions/settings-theme.php";
require_once "functions/navwalker-bootstrap.php";
register_nav_menus(array('primary'=>__('Principal', clean-blog)));
global $wp;
require_once "functions/meta_opengraph.php";
