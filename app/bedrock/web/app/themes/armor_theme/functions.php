<?php
  function myTheme_register_assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap', [], false, true);
  };

  function myTheme_features(){
    add_theme_support('title-tag');
  };

  add_action('after_setup_theme', 'myTheme_features');
  add_action('wp_enqueue_scripts', 'myTheme_register_assets');

?>