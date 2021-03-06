<?php
include "inc/header.php";

?>


<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
  $username= escape($_POST['username']);
  $email= escape($_POST['email']);
  $password= escape($_POST['password']);
  $password=password_hash($password,PASSWORD_DEFAULT);

$sql="INSERT INTO korisnici(username,email,lozinka) ";
$sql.= "VALUES('$username','$email','$password')";

confirm(query($sql));

}



?>

    <div class="mask d-flex align-items-center h-100 gradient-custom-3 mt-5">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Napravi račun</h2>

                <form method="POST">
                  <div class="form-outline mb-4">
                    <input
                      type="text"
                      name="username"
                      class="form-control form-control-lg"
                      placeholder="username"

                      required
                    />
                    <label class="form-label" for="form3Example1cg"
                    
                      >Korisničko ime</label
                    >
                  </div>

                  <div class="form-outline mb-4">
                    <input
                      type="email"
                      name="email"
                      class="form-control form-control-lg"
                      placeholder="email"
                      required
                    />
                    <label class="form-label" for="form3Example3cg"
                      >Vaš Email</label
                    >
                  </div>

                  <div class="form-outline mb-4">
                    <input
                      type="password"
                      name="password"
                      class="form-control form-control-lg"
                      placeholder="lozinka"
                      required
                    />
                    <label class="form-label" for="form3Example4cg"
                      >Lozinka</label
                    >
                  </div>

                  <div class="form-outline mb-4">
                    <input
                      type="password"
                      name="repeat_password"
                      class="form-control form-control-lg"
                      placeholder="ponovite lozinku"
                    />
                    <label class="form-label" for="form3Example4cdg"
                      >Ponovite lozinku</label
                    >
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3cg"
                    />
                    <label class="form-check-label" form="form2Example3g" required>
                      Prihvatam sve
                      <a href="#!" class="text-body"
                        ><u>Uvjete korištenja</u></a
                      >
                    </label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button
                      type="submit"
                      class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body"
                      placeholder= "submit"
                      required
                    >
                      Registriraj se
                    </button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">
                    Već imaš račun?
                    <a href="#!" class="fw-bold text-body"
                      ><u>Prijavi se ovdje</u></a
                    >
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <?php 
   include "inc/footer.php";
   
   
   ?>
