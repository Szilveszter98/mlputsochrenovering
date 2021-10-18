<?php

namespace WA\WP;


add_action('wp_enqueue_scripts', function () {

    $version = wp_get_theme()->Version;


    // styles
    wp_enqueue_style("main", get_template_directory_uri() . "/css/main.css", [], $version);
    wp_enqueue_script("contactform", get_template_directory_uri() . "/js/contactform.js", [], $version, true);
    wp_enqueue_script("puff_gallery", get_template_directory_uri() . "/js/puff_gallery.js", [], $version, true);
    wp_enqueue_script("slider", get_template_directory_uri() . "/js/slider.js", [], $version, true);
    wp_enqueue_script("header", get_template_directory_uri() . "/js/header.js", [], $version, true);
});
