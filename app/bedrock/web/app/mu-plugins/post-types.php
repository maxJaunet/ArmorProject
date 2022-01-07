<?php
  function armor_theme_post_types() {
    register_post_type('partenaires', array(
      'has_archive' => true,
      'menu_icon' => 'dashicons-image-flip-horizontal',

    ));
  };
  add_action('init','armor_theme_post_types');

?>