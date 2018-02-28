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

      <form method="POST" action="contact.php" enctype="multipart/form-data" class="container">
          <div class="row justify-content-center">
            <div class="contact-form col-10 col-md-8 col-lg-6">
              <div class="form-group row justify-content-center">
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Nom" id="username" name="username" required>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-10">
                  <input class="form-control" type="email" placeholder="Mail" id="email" name="email" required>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-10">
                  <textarea class="form-control" type="text" placeholder="Message" id="message" name="message" rows="6" required></textarea>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-4">
                  <button type="submit" class="btn btn-secondary" name="contact-form">Envoyer</button>
                </div>
              </div>
            </div>
          </div>
      </form>
      <!-- FORM END -->

      <!-- RECUPERATION ET ENVOIE DES DONNEES EN PHP -->
      <!-- L'envoi d'un mail() en localhost ne fonctionne pas ... -->
      <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['contact-form']))
        {
            sendMail($username, $email, $message);
        }
        function sendMail($username, $email, $message){
          $username = $_POST['username']; echo "<script>console.log('Username: ".$username."');</script>";
          $email = $_POST['email']; echo "<script>console.log('Username: ".$email."');</script>";
          $message = $_POST['message']; echo "<script>console.log('Username: ".$message."');</script>";

          $headers ='From: "'.$username.'"<'.$email.'>'."\n";
          $headers .='Reply-To: tevaite.onno@outlook.fr'."\n";
          $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
          $headers .='Content-Transfer-Encoding: 8bit';

          if(mail('tevaite.onno@outlook.fr', 'Contact from OTxLLM.com', $message, $headers)) {
               echo "<script>console.log( 'Le message a bien été envoyé' );</script>";
               // Ajout d'un pop up pour avertir que le mail a bien était envoyé
          } else {
               echo "<script>console.log( 'Le message n\'a pas pu être envoyé' );</script>";
               // Ajout d'un pop up pour avertir que le mail n'a pas était envoyé
          }
        }
      ?>
      <!-- RECUPERATION ET ENVOIE DES DONNEES EN PHP END -->

    </section>
    <!--========== END CONTACT ==========-->

  <?php include("footer.php"); ?>
