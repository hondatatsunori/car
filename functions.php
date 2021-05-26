<?php
function twpp_enqueue_styles()
{
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

