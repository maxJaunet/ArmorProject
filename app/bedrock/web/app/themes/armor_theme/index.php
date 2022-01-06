
  <?php get_header(); ?>

  <section id="section1" class="container-fluid bg-dark p-5 justify-content-center">
    <div class="section1-text p-5 mx-auto">
      <h1 class="p-3">Besoin d'aide ?</h1>
      <p>
        Sur ce site vous trouverez des instructions et des réponses à vos questions
        sur les cartouches et toners.
      </p>
    </div>

    <div class="formBox mx-auto">
      <div class="row justify-content-center fw-bold tab-links mb-3">
          <button class="tab col-4">Code barre sur l'étiquette</button>
          <button class="tab col-4" id="defaultOpen">Modèle de cartouches</button>
          <button class="tab col-4">Code barre sur la boîte</button>
      </div>
      <div class="row justify-content-center">
        <div class="col-10">
          <p>Entrez le numéro complet présent sous le code barre de l'étiquette cartouche</p>
        </div>
        <div class="col-2">
          <p class="questionTag">?</p>
        </div>
      </div>
      <div class="input-group mb-3 searchField">
        <input type="text" class="form-control textField" placeholder="Ex: 24486715338" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div>
          <button class="btn btn-primary btn-purple" type="button">Rechercher</button>
        </div>
      </div>
    </div>
  </section>
  <section id="section2" class="container p-5 text-center">
    <div class="section2-text p-5 mx-auto">
      <h2 class="p-3">Qualité d'impression et compatibilités garanties</h2>
      <p>
        Véritable alternative aux marques d'imprimantes, les cartouches d'impression fabriquées par
        ARMOR couvrent plus de 90% du parc d'imprimante européen. C'est l'opportunité pour nos
        clients de retrouver l'ensemble des cartouches en version compatible à la marque de leur
        imprimante !
      </p>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- carousel here -->
      </div>
    </div>

  </section>

  <?php get_footer(); ?>
