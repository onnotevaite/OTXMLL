<?php
if(isset($_GET["voyageid"])){
  $voyageid = $_GET["voyageid"];
  loadVoyage($voyageid);
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
        echo "<div class='container'>";
          echo "<div>";
            echo "<h4>".$titre."</h4>";
          echo "</div>";
          echo "<div class='masonry-wrapper'>";
            echo "<div class='masonry gutterless'>";
              foreach ($voyage->photo as $photo){
                $titre_photo=$photo->titre;
                  if($titre_photo==""){$titre_photo="-";}
                $description_photo=$photo->description;
                  if($description_photo==""){$description_photo="-";}
                $chemin_photo=$photo->chemin_miniature;
                  if($chemin_photo==""){$chemin_photo="-";}

                echo "<div class='brick'><img src='".$chemin_photo."' class='img-fluid'/></div>";
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
?>
