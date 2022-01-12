
  <?php get_header(); ?>
  <?php $section1 = get_post(39);?>
  <?php $section2 = get_post(55);?>
  <?php $section3 = get_post(72);?>
  
  <section
    id="section1"
    class="container-fluid bg-dark p-5 justify-content-center"
    style="background-image: url(<?php echo get_field('background_image', $section1->ID) ;?>);"
    >
    <div class="section1-text p-sm-5 py-5 mx-auto">
      <?php echo $section1->post_content;?>
    </div>

    <div class="formBox mx-auto">
      <div class="row justify-content-center fw-bold tab-links mb-3">
          <button value="tabStickerBarCode" class="tab col-4">Code barre sur l'étiquette</button>
          <button value="tabCartridgeType" class="tab col-4 active" id="defaultOpen">Modèle de cartouches</button>
          <button value="tabBoxBarCode" class="tab col-4">Code barre sur la boîte</button>
      </div>
      <div class="row justify-content-center">
        <div class="col-10">
          <p>Entrez le numéro complet présent sous le code barre de l'étiquette cartouche</p>
        </div>
        <div class="col-2">
          <p class="questionTag">?</p>
        </div>
      </div>
      <form class="input-group mb-3 searchField justify-content-between" method="POST">
        <input id="autoComplete" type="text" class="form-control textField" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div>
          <button class="btn btn-primary btn-purple" type="button">Rechercher</button>
        </div>
      </form>
    </div>
  </section>
  <section id="section2" class="container p-5 text-center">
    <div class="section2-text p-5 mx-auto">
      <?php echo $section2->post_content ;?>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- carousel here -->
        
      </div>
    </div>
  </section>
  <section id="section3" class="container p-5 text-center">
    <div class="section3-frame"
      style="background: url(<?php echo get_field('background_image', $section3->ID)?>) <?php echo get_field('add_color_filter', $section3->ID);?> ;">
      <div class="section3-text pb-5">
        <?php $section3->post_content ;?>
      </div>  
      <div class="faq-box container">
        <?php
          if(have_posts()) {
            while(have_posts()) {
              the_post();
              ?>
              <div class="row justify-content-between questionItem p-3 mb-4 align-middle">
                <div class="col-8 text-start">
                  <p class="m-0 py-2">Question text here</p>
                </div>
                <div class="col-3 text-end">
                  <button class="btn btn-purple p-2 px-4">Lire</button>
                </div>
              </div>
              <?php
            }
          }
          else {
            ?>
              <p>Aucune question diponible pour le moment</p>
            <?php
          }
        ?>
      </div>
      <button class="btn btn-purple btn-lg px-4 mt-4">
        Accéder à l'ensemble de la F.A.Q
      </button>
    </div>
  </section>
  <?php get_footer(); ?>
