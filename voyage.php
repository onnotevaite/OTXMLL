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

          echo "<p class='titre-page'>".$titre."</p>";
          echo "<hr class='hr-titre-page'>";
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
            $titre_photo=$photo->titre;
              if($titre_photo==""){$titre_photo="-";}
            $description_photo=$photo->description;
              if($description_photo==""){$description_photo="-";}
            $chemin_photo=$photo->chemin_original;
              if($chemin_photo==""){$chemin_photo="-";}

            echo "<li>";
                echo "<a class='ns-img' href='".$chemin_photo."'></a>";
                echo "<div class='caption'>";
                    echo "<h3>".$titre_photo."</h3>";
                    echo "<p>".$description_photo."</p>";
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
