  
  <footer class="footer container-fluid p-5">
    <div class="container">
        <?php wp_nav_menu(array(
          'theme_location' => 'footerMenuLocation',
          'container' => 'div',
          'container_id' => '',
          'menu_id' => '',
        )); ?>
      </nav>
    </div>
  </footer>
  <?php wp_footer() ;?>
</body>

</html>