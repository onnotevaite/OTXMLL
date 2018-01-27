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
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">



  </head>
  <!-- End Head -->

  <!-- Body -->
  <body>

    <!--========== HEADER ==========-->
    <header class="header fixed clearfix navbar navbar-fixed-top">
      <div class="container">
          <div class="row">

            <div class="col-xs-4 col-sm-4 col-md-4">

              <!-- header-left start -->
  						<!-- ================ -->
              <div class="header-left clearfix">

                  <!-- logo-->
                <div class="div-logo smooth-scroll">
                  <a  class="logo" page='home' href="#banner"><img id="logo" src="img/logo/logonavW.png" width="80" height="80" alt="Logo navbar"/>  </a>
                </div>

              </div>
              <!-- header-left end -->
            </div>

            <div class="col-md-8">

              <!-- header-right start -->
  						<!-- ================ -->
              <div class="header-right clearfix">
                <!-- main-navigation start -->
  							<!-- ================ -->
                <div class="main-navigation animated">
                  <!-- navbar start -->
  								<!-- ================ -->
                  <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                      <!-- Toggle get grouped for better mobile display -->
                      <div class="navbar-header page-scroll">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" style="margin-top:50px">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="background-color:#DDD;"></span>
                            <span class="icon-bar" style="background-color:#DDD;"></span>
                            <span class="icon-bar" style="background-color:#DDD;"></span>
                        </button>
                      </div>

                      <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden"><a href="#page-top"></a></li>
                            <li><a class="nav-link" page='home' href="#accueil">ACCUEIL</a></li>
                            <li><a class="nav-link" page='destinations' href="#destinations">DESTINATIONS</a></li>
                            <li><a class="nav-link" href="#insta">INSTA</a></li>
                            <li><a class="nav-link" page='contact' href="#contact">CONTACT</a></li>
                        </ul>
                      </div> <!-- /.navbar-collapse -->
                    </div> <!-- /.container -->
                  </nav>
                  <!-- navbar end -->
                </div>
                <!-- main-navigation end -->
              </div>
              <!-- header-right end -->

            </div>
          </div>
      </div>
    </header>
    <!--========== END HEADER ==========-->

    <!--=====HOME=====-->
    <div id="wrapper">
          <?php include('home.html'); ?>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mon-script.js"></script>
  </body>
</html>
