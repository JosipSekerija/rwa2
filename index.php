<?php
include "inc/header.php"
?>

    <!-- prva sekcija -->

    <section class="bg-dark text-light p-5 text-center text-sm-start my-5">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Iznajmite vozila po povoljnim cijenama</h1>
            <p class="lead my-4">
              Nađite što vam odgovara iz široke ponude vozila! Preuzimanje moguće na više lokacija.
            </p>
         <a href="registracija.html" class="btn btn-primary btn-lg">  Registriraj se</a> 
          </div>
          <img
            class="img-fluid w-50 my-3 d-none d-md-block"
            src="img/auto.jpg"
          />
        </div>
      </div>
    </section>
    <!-- Druga sekcija  -->
    <section class="p-5">
      <div class="container">
        <div class="row text-center">
          <div class="col-md mb-3">
            <div class="card bg-dark text-light h-200">
              <div class="h1 mb-3">
                <i class="bi bi-laptop"></i>
              </div>
              <h3 class="card-title mb-3">Tehnologije</h3>
              <p class="card-text p-3 lead">
                Tehnologije koje ćemo koristiti u ovom projektu su: JavaScript,
                PhP ,Laravel i SQL.
              </p>
            </div>
          </div>
          <div class="col-md mb-3">
            <div class="card bg-dark text-light h-200">
              <div class="h1 mb-3">
                <i class="bi bi-file-earmark-text"></i>
              </div>
              <h3 class="card-title mb-3">O projektu</h3>
              <p class="card-text p-3 lead">
                Rent a car app je zamišljen kao online platforma za
                iznajmljivanje automobila.Više na
                <a
                  href="https://docs.google.com/document/d/1-gAQ07bSQetRfWTnfe_Tlx70LxNhsLUD6u9ZmAhjeZA/edit"
                  >viziji</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 3 sekcija -->
    <section class="p-5 bg-primary">
      <div class="container">
        <h2 class="text-center text-white mb-5">Autori</h2>
        <div class="row g-4">
          <div class="col-sm-4">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="img/profilna.png "
                  class="rounded-circle img-fluid w-50"
                />
                <h3 class="card-title mb-3">Josip Galić</h3>
                <p class="card-text">
                  Student sam 3. godine računarstva, dolazim iz Mostara
                </p>
                <a href="#" class="bi bi-twitter text-dark mx-1"></a>
                <a href="#" class="bi bi-facebook text-dark mx-1"></a>
                <a href="#" class="bi bi-instagram text-dark mx-1"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="img/profilna.png "
                  class="rounded-circle img-fluid w-50"
                />
                <h3 class="card-title mb-3">Josip Šekerija</h3>
                <p class="card-text">
                  Student sam 3. godine računarstva, dolazim iz Mostara
                </p>
                <a href="#" class="bi bi-twitter text-dark mx-1"></a>
                <a href="#" class="bi bi-facebook text-dark mx-1"></a>
                <a href="#" class="bi bi-instagram text-dark mx-1"></a>
              </div>

        </div>
      </div>
    </section>

    <?php

    include "inc/footer.php";
    ?>
