<?php include("header.php"); ?>

<!-- Body -->
<body class="voyage">

  <?php include("navbar.php"); ?>

  <?php
  if(file_exists('voyages.xml')){
    $voyages = simplexml_load_file('voyages.xml');
    $voyage_count = count($voyages);

    if(isset($_GET['voyageID'])){
      $voyageid = $_GET['voyageID'];
        if($voyageid >= 0 && $voyageid < $voyage_count) {
          loadVoyage($voyageid);
          echo "<section id='voyage' voyageid='".$voyageid."'>";
            echo "<div style='display:none;'>";
                echo "<div id='ninja-slider'>";
                    echo "<div class='slider-inner'>";
                        echo "<ul>";
                          loadPhoto($voyageid);
                        echo "</ul>";
                        echo "<div id='fsBtn' class='fs-icon' title='Expand/Close'></div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
          echo "</section>";
        } else {
          echo "<div><p>Sorry, there is no voyage number ".$voyageid." </p></div>";
        }
    }
  }

  function loadVoyage($voyageID){
  	if(file_exists('voyages.xml')){
  		$voyages = simplexml_load_file('voyages.xml');
    	foreach ($voyages as $voyage){
        if($voyage->ID==$voyageID){
          $miniature=$voyage->photo_miniature;
          $titre=$voyage->titre;
            if($titre==""){$titre="-";}
          $pays=$voyage->pays;
            if($pays==""){$pays="-";}
          $ville=$voyage->ville;
            if($ville==""){$ville="-";}
          $date=$voyage->date;
            if($date==""){$date="-/-/-";}
          $description=$voyage->description;
            if($description==""){$description="-";}

          echo "<p class='titre-page'>".$titre."</p>";
          echo "<hr class='hr-titre-page'>";
          echo "<p class='description-voyage'>".$description."</p>";
          echo "<div class='gallery'>";
            echo "<div class='masonry-wrapper'>";
                echo "<div class='masonry gutterless'>";
                  $i = 0;
                  foreach ($voyage->photo as $photo){
                    $titre_photo=$photo->titre;
                      if($titre_photo==""){$titre_photo="-";}
                    $description_photo=$photo->description;
                      if($description_photo==""){$description_photo="-";}
                    $chemin_photo=$photo->chemin_miniature;
                      if($chemin_photo==""){$chemin_photo="-";}

                     echo "<div class='brick'><img src='".$chemin_photo."' onclick='lightbox(".$i.")'/></div>";
                    $i = $i+1;
                  }
                echo "</div>";
            echo "</div>";
          echo "</div>";
        }
    	}
  	}
  	else{
  		exit('Echec lors de l\'ouverture du fichier db.xml.');
  	}
  }

  function loadPhoto($voyageID){
  	if(file_exists('voyages.xml')){
  		$voyages = simplexml_load_file('voyages.xml');
    	foreach ($voyages as $voyage){
        if($voyage->ID==$voyageID){
          $miniature=$voyage->photo_miniature;
          $titre=$voyage->titre;
            if($titre==""){$titre="-";}
          $pays=$voyage->pays;
            if($pays==""){$pays="-";}
          $ville=$voyage->ville;
            if($ville==""){$ville="-";}
          $date=$voyage->date;
            if($date==""){$date="-/-/-";}

          foreach ($voyage->photo as $photo){
            $photoID=$photo->photo_ID;
              if($photoID==""){$photoID="0";}
            $titre_photo=$photo->titre;
              if($titre_photo==""){$titre_photo="-";}
            $description_photo=$photo->description;
              if($description_photo==""){$description_photo="-";}
            $chemin_photo=$photo->chemin_original;
              if($chemin_photo==""){$chemin_photo="-";}
            $like=$photo->like;
              if($like==""){$like="0";}

            echo "<li>";
                echo "<a class='ns-img' href='".$chemin_photo."'></a>";
                echo "<div class='caption'>";
                  echo "<h3>".$titre_photo."</h3>";
                  echo "<p>".$description_photo."</p>";
                  echo "<p class='share-photo'>";
                    echo "<span id='likeNumber' class='photo_".$photoID." like-number'>".$like."</span><i id='photo_".$photoID."' class='like fa fa-heart-o fa-lg mx-2' photoid='".$photoID."' likenumber='".$like."' aria-hidden='true'></i>";
                    echo " | ";
                    echo "<span class='fb-share-button' data-href='http://localhost:8888/OTXMLL/' data-mobile-iframe='false'><a target='_blank' class='icons-sm fb-ic' href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8888%2FOTXMLL%2F&amp;src=sdkpreparse' title='Share to Facebook'><i class='fa fa-facebook fa-lg'></i></a></span>";
                    echo "<a class='icons-sm tw-ic' href='' title='Share to Twitter'><i class='fa fa-twitter fa-lg'></i></a>";
                    echo "<a class='icons-sm tblr-ic' href='' title='Post to Tumblr'><i class='fa fa-tumblr fa-lg'></i></a>";
                    echo "<a class='icons-sm pin-ic' href='https://www.pinterest.com/pin/create/button/' title='Post to Pinterest'><i class='fa fa-pinterest fa-lg'></i></a>";
                    echo "<a class='icons-sm email-ic' href='' title='email'><i class='fa fa-paper-plane-o fa-lg'></i></a>";
                  echo "</p>";
                echo "</div>";
            echo "</li>";
          }
        }
    	}
  	}
  	else{
  		exit('Echec lors de l\'ouverture du fichier db.xml.');
  	}
  }
  ?>

  <?php include("footer.php"); ?>
