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
  wp_enqueue_script('navbar_toggler_js_file', get_theme_file_uri('navbar_toggler.js'), ['jquery'], '1.0', true); 
};


// load header logo in nav menu
function my_wp_nav_menu_items( $items, $args ) {
  $menu = wp_get_nav_menu_object($args->menu);
  if($menu->name === 'Header Menu') {
    $logo = get_field('header_logo', $menu);
    $html_logo = '<a href="'.home_url().'"><img id="header_logo" src="'.$logo.'" alt="logo" /></a>';
    $items = 
      '<div class="row justify-content-between navbar-nav">
        <div class="col-sm-4 col-4 navbar-brand">'.$html_logo .'</div>
        <button id="nav-toggler" class="navbar-toggler px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><hr/><hr/><hr/></span>
        </button>
        <div class="col-6">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          '.$items.'
          </div>
        </div>
        
      </div>';	
  };
	return $items;
}

// create FAQ post type
function faq_post_type() {
	    $labels = array(
        'name' => 'faq section 3',
        'all_items' => 'Tous les faq',
        'singular_name' => 'faq',
        'add_new_item' => 'Ajouter un FAQ',
        'edit_item' => 'Modifier le FAQ',
        'menu_name' => 'faq section 3'
    );
	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
        'hierarchical' => true,
	);
	register_post_type( 'faq_post_type', $args );
}

// create Card post type
function section4_post_type() {
	    $labels = array(
        'name' => 'Cards',
        'all_items' => 'Tous les Cards',
        'singular_name' => 'Card',
        'add_new_item' => 'Nouveau Card',
        'edit_item' => 'Modifier',
        'menu_name' => 'Cards'
    );
	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 6, 
        'menu_icon' => 'dashicons-images-alt2',
        'hierarchical' => true,
	);
	register_post_type( 'section4_post_type', $args );
};

add_action( 'init', 'section4_post_type' );
add_action( 'init', 'faq_post_type' );

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

add_action('after_setup_theme', 'myTheme_features');
add_action('wp_enqueue_scripts', 'myTheme_register_assets');
add_action('wp_enqueue_scripts', 'load_scripts');

?>