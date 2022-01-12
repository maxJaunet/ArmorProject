<?php
  function myTheme_register_assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_style('bootstrap');
    // wp_enqueue_style('autocomplete_style', 'https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.6/dist/css/autoComplete.min.css');
    wp_enqueue_style('myTheme_main_styles', get_stylesheet_uri());
    wp_enqueue_script('bootstrap', [], false, true);
  };

function myTheme_features(){
  add_theme_support('title-tag');
  register_nav_menu('headerMenuLocation', 'Header menu location');
  register_nav_menu('footerMenuLocation', 'Footer menu location');
};

function load_scripts() {
  wp_enqueue_script('my_theme_main_script', get_theme_file_uri('index.js'), null, '1.0', true);
  wp_enqueue_script('jQuery-js', 'http://code.jquery.com/jquery.js', array(), '1.0', true);
  wp_enqueue_script('autocomplete_script', 'https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.6/dist/autoComplete.min.js', null, '1.0', true);
  wp_enqueue_script('autocomplete_js_file', get_theme_file_uri('autocomplete.js'), ['jquery', 'jquery-ui-autocomplete'], '1.0', true); 
};

function my_wp_nav_menu_items( $items, $args ) {
  $menu = wp_get_nav_menu_object($args->menu);
  if($menu->name === 'Header Menu') {
    $logo = get_field('header_logo', $menu);
    $color = get_field('logo_basic_color', $menu);
    $html_logo = '<a href="'.home_url().'"><img id="header_logo" src="'.$logo.'" alt="logo" /></a>';
    $items = '<div class="row justify-content-between"><div class="col-4">'.$html_logo .'</div><div class="col-6">'.$items.'</div>' ;	
  };
	return $items;
}

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

add_action('after_setup_theme', 'myTheme_features');
add_action('wp_enqueue_scripts', 'myTheme_register_assets');
add_action('wp_enqueue_scripts', 'load_scripts');

?>