<?php
function twpp_enqueue_styles()
{
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

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

//コンタクトフォーム７読み込み制限 
function wpcf7_file_load()
{
  add_filter('wpcf7_load_js', '__return_false');
  add_filter('wpcf7_load_css', '__return_false');
  if (is_page('otoiawase')) {
    if (function_exists('wpcf7_enqueue_scripts')) {
      wpcf7_enqueue_scripts();
    }
    if (function_exists('wpcf7_enqueue_styles')) {
      wpcf7_enqueue_styles();
    }
  }
}
add_action('template_redirect', 'wpcf7_file_load');