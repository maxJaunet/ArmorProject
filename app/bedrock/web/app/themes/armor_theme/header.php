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
  <header>
    <nav class="navbar navBox navbar-expand-lg">
      <div class="container justify-content-between">
        <a class="navbar-brand" href="#">
          logo here
        </a>
        <div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Questions fréquentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Glossaire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Certifications</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Où acheter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Nous contacter</a>
              </li>
              <li class="nav-item dropdown">
                <select class="form-select">
                  <option default value="FR">FR</option>
                  <option value="EN">EN</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </nav>
  </header>
    