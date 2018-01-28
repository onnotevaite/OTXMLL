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
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

  </head>
  <!-- End Head -->

  <!-- Body -->
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top transparent-style">
      <a class="navbar-brand" page='home' href="#banner"><img id="logo" src="img/logo/logonavW.png" width="80" height="80" alt="Logo navbar"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav">
          <li class="hidden"><a href="#page-top"></a></li>
          <li class="nav-item active"><a class="nav-link" page='home' href="#accueil">ACCUEIL</a></li>
          <li class="nav-item"><a class="nav-link" page='destinations' href="#destinations">DESTINATIONS</a></li>
          <li class="nav-item"><a class="nav-link" href="#insta">INSTA</a></li>
          <li class="nav-item"><a class="nav-link" page='contact' href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </nav>

    <!--=====HOME=====-->
    <div id="wrapper">
          <?php include('home.php'); ?>

    </div>
    <!--=====END HOME=====-->



    <!--========== Footer ==============-->
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <a href="#"><img id="logoFooter" src="img/logo/rondLogoW.png" width="150" height="150" alt="Logo footer"/></a>
                </div>
                <div class="col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
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
