  
  <footer class="footer container-fluid p-5">
    <div class="container">
      <div class="row justify-content-between">
      <div class="col-4">
        <h2>logo here</h2>
        <p class="footer-subText">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quas doloribus esse.
        </p>
      </div>
      <div class="col-4">
        <h2>logo here</h2>
        <p class="footer-subText">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </p>
      </div>
    </div>
    <div class="row justify-content-between">
      <nav class="nav-list">
        <?php wp_nav_menu(array(
          'theme_location' => 'footerMenuLocation'
        )); ?>
        <!-- <ul>
          <li><a class="nav-item" href="#">Mentions légales</a></li>
          <li><a class="nav-item" href="#">Protection des données</a></li>
          <li><a class="nav-item" href="#">Gestion des cookies</a></li>
        </ul> -->
      </nav>
    </div>
    </div>
    
  </footer>
</body>

</html>