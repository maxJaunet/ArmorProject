<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <?php wp_head(); ?>
</head>
<body>
  
  <header class="header">
    <nav class="navbar navBox navbar-expand-lg">
      <div class="container justify-content-between">
        <a class="navbar-brand" href="<?php echo home_url() ;?>">
        <!-- image non chargée -->
          <img src="<?php the_field('header_logo') ;?>" alt="logo">
        </a>
        <div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
                'menu_class' => 'header-menu navbar-nav',
              )); ?>
          </div>
        </div>
      </div>
    </nav>
  </header>
    