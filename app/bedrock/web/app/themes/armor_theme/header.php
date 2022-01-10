<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <?php wp_head(); ?>
</head>
<body id="body">
  
  <header class="header">
    <nav class="navbar navBox navbar-expand-lg">
      <div class="container justify-content-between px-0 px-sm-5">
        <a class="navbar-brand" href="<?php echo home_url() ;?>">
        <!-- image non chargée -->
          <img id="headerLogo" src="<?php the_field('header_logo') ;?>" alt="logo">
        </a>
      <div class="menuBox">
        <?php wp_nav_menu(array(
          'theme_location' => 'headerMenuLocation',
          'menu_class' => 'header-menu navbar-nav',
          'container' => 'div',
          'container_class' => 'menuItems'
        )); ?>
        </div>
      </div>
      </div>
    </nav>
  </header>
    