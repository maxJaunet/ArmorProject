
  <?php get_header(); ?>
  <?php $section1 = get_post(39);?>
  <?php $section2 = get_post(55);?>
  <?php $section3 = get_post(72);?>
  <?php $section4 = get_post(82);?>
  
  <section
    id="section1"
    class="container-fluid p-sm-5 p-0 justify-content-center"
    style="background-image: url(<?php echo get_field('background_image', $section1->ID) ;?>);"
    >
    <div class="section1-text p-3 mt-5 mb-2 mx-auto">
      <?php echo $section1->post_content;?>
    </div>
    <div class="formBox mx-auto p-sm-5 p-3 mb-5">
      <div class="row justify-content-center fw-bold tab-links mb-3">
          <button value="tabStickerBarCode" class="tab col-4">Code barre sur l'étiquette</button>
          <button value="tabCartridgeType" class="tab col-4 active" id="defaultOpen">Modèle de cartouches</button>
          <button value="tabBoxBarCode" class="tab col-4">Code barre sur la boîte</button>
      </div>
      <div class="row justify-content-center py-2">
        <div class="col-10">
          <p>Entrez le numéro complet présent sous le code barre de l'étiquette cartouche</p>
        </div>
        <div class="col-2">
          <p class="questionTag">?</p>
        </div>
      </div>
      <form class="input-group mb-auto mb-md-3 searchField justify-content-between" method="POST">
        <input id="autoComplete" type="text" class="form-control textField" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="mx-auto mx-sm-0">
          <button class="btn btn-primary btn-purple" type="button">Rechercher</button>
        </div>
      </form>
    </div>
  </section>


  <section id="section2" class="text-center">
    <div class="section2-text px-0 p-sm-5 mx-auto my-sm-5">
      <?php echo $section2->post_content ;?>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- carousel here -->
        
      </div>
    </div>
  </section>


  <section id="section3" class="container p-md-5 p-0 text-center">
    <div class="section3-frame p-0 py-3 p-md-5"
      style="background: url(<?php echo get_field('background_image', $section3->ID)?>) <?php echo get_field('add_color_filter', $section3->ID);?> ;">
      <div class="section3-text pb-5">
        <?php echo $section3->post_content ;?>
      </div>  
      <div class="faq-box container">
      <?php
        $postType_faq_args = array(
          'post_type' => 'faq_post_type',
          'posts_per_page' => 5,
        );
        $faqQuery = new WP_Query($postType_faq_args);
          while ( $faqQuery->have_posts() ) : $faqQuery->the_post();
            ?>
            <div class="row justify-content-between questionItem p-0 p-sm-2 mb-4 align-middle">
              <div class="faq-text col-9 text-start">
                <p class="m-0 py-2 py-md-3"><?php the_content();?></p>
              </div>
              <div class="col-3 text-end py-3">
                <a href="<?php echo get_theme_file_uri() . get_field('faq_url') ;?>" class="btn btn-purple p-4 px-sm-4 py-md-2">Lire</a>
              </div>
            </div>
            <?php
          endwhile;
        ?>
      </div>
      <a href="/archive"><button class="btn btn-purple btn-lg px-4 mt-4 mb-2">
        Accéder à l'ensemble de la F.A.Q
      </button></a>
    </div>
  </section>


  <section id="section4" class="container p-sm-4 p-0">
    <div class="section4-text p-sm-5 p-0 mx-auto text-center">
      <?php echo $section4->post_content ;?>
    </div>
    <div class="row justify-content-center gx-5 px-4">

      <?php
        $postType_cards_args = array(
          'post_type' => 'section4_post_type',
          'posts_per_page' => 4,
        );
        $cardQuery = new WP_Query($postType_cards_args);
        $cardQuery->set('order_by', 'date');
        $cardQuery->set('order', 'desc');
          while ( $cardQuery->have_posts() ) : $cardQuery->the_post();
            ?>
            <div class="col-10 col-md-6 col-lg-4 mb-3">
              <div class="cardBox p-4">
                <?php echo get_field('card_icon');?>
                <?php the_content() ;?>
              </div>
            </div>
            <?php
          endwhile;
        ?>

    </div>
  </section>
  <?php get_footer(); ?>
