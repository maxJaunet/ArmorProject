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
  
  <header class="header py-5">
    <nav class="navbar navBox navbar-expand-lg">
      <div class="container px-0 mx-0 mx-sm-auto px-sm-5">
        <?php wp_nav_menu(array(
          'menu_class' => 'header-menu navbar-nav row justify-content-between ',
          'container' => 'div',
          'container_id' => '',
          'menu_id' => '',
          'container_class' => 'px-0 px-sm-5 px-0 px-sm-5'
        )); ?>
        
      </div>
    </nav>
  </header>
    