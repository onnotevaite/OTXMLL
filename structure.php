<!DOCTYPE html>

<html>
  <head>

    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OT x LLM</title>
    <meta name="keywords" content="Voyages Photos" />
    <meta name="description" content="Site de voyages">
    <meta name="author" content="OT x LLM">

    <!-- Twitter Card data : For Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="OT x LLM">
    <meta name="twitter:description" content="Site de voyages">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">

    <!-- Open Graph data : For Facebook -->
    <meta property="og:title" content="OT x LLM" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.example.com/" />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:description" content="BSite de voyages" />
    <meta property="og:site_name" content="Les voyages de OT x LLM" />
    <meta property="fb:admins" content="Facebook numeric ID" />

    <!-- Theme Styles -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  </head>
  <!-- End Head -->

  <!-- Body -->
  <body>

    <!--===== NAVBAR =====-->
    <nav class="navbar navbar-light navbar-expand-md fixed-top">
      <a class="navbar-brand" page='home' href="./index.php"><img id="logo" src="img/logo/rondLogoB.png" width="80" height="80" alt="Logo navbar"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <hr>
        <ul class="navbar-nav">
          <li class="nav-item active"><a class="nav-link" page='home' href="#">ACCUEIL</a></li>
          <li class="nav-item"><a class="nav-link" page='destinations'>DESTINATIONS</a></li>
          <li class="nav-item"><a class="nav-link" page='home' href="#insta">INSTA</a>
          <li class="nav-item"><a class="nav-link" page='contact'>CONTACT</a></li>
        </ul>
      </div>
    </nav>
    <!--===== END NAVBAR =====-->

    <!--===== HOME =====-->
    <div id="wrapper">
          <?php include('home.php'); ?>
    </div>
    <!--===== END HOME =====-->

    <!--========== Footer ==============-->
    <footer id="footer">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-md-4">
                    <div class="social-networks">
                      <a href="#insta" class="instagram"><i class="fa fa-instagram"></i></a>
                      <a page='contact' class="mail"><i class="fa fa-envelope-o"></i></a>
                      <a class="share" style="font-size: 18px;">Share</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
          <hr>
            <p>© 2017 Copyright OT X LLM </p>
        </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/mon-script.js"></script>

  </body>
</html>
