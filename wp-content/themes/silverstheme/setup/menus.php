<?php

namespace WA\WP;

//Register menus function
add_action('after_setup_theme', function () {
  register_nav_menus([
    'primary_menu' => __('Primary menu', 'theme'),
    'footer_menu'  => __('Footer menu', 'theme'),
  ]);
});
