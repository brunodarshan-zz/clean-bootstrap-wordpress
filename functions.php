<?php
add_theme_support("post-thumbnails");
require_once "functions/scripts.php";
require_once "functions/settings-theme.php";
require_once "functions/navwalker-bootstrap.php";
register_nav_menus(array('primary'=>__('Principal', clean-blog)));
