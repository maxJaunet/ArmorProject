
  <?php get_header(); ?>

  <section id="section1" class="container-fluid bg-dark p-5">
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

  <?php get_footer(); ?>
