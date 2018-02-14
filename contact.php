  <?php include("header.php"); ?>

  <!-- Body -->
  <body class="contact">

    <?php include("navbar.php"); ?>

    <!--========== CONTACT ==========-->
    <p class="titre-page">CONTACT</p>
  	<hr class="hr-titre-page">
    <section id="contact" class="contact no-body-padding">
      <!-- FORM -->
      <div class="mon-contact-background">
        <img src="img/contact.jpg" alt="Background de la page contact"/>
      </div>

      <div class="container">
          <div class="row justify-content-center">
            <div class="contact-form col-10 col-md-8 col-lg-6">
              <div class="form-group row justify-content-center">
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Nom" id="username" required>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-10">
                  <input class="form-control" type="email" placeholder="Mail" id="email" required>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-10">
                  <textarea class="form-control" type="text" placeholder="Message" id="message" rows="6" required></textarea>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-4">
                  <button type="submit" class="btn btn-secondary">Envoyer</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- FORM END -->
    </section>
    <!--========== END CONTACT ==========-->

  <?php include("footer.php"); ?>
