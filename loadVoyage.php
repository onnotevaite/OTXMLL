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
       echo "<div class='row'>";
         echo "<div class='col-8'>";
            echo "<h4>".$titre."</h4>";
         echo "</div>";
         echo "<div class='col-4'  style='height:200px;!important'>";
            echo "<img src='".$miniature."' class='img-fluid'/>";
         echo "</div>";
       echo "</div>";
       echo "<div class='row'>";
       foreach ($voyage->photo as $photo){
             $titre_photo=$photo->titre;
         if($titre_photo==""){$titre_photo="-";}
             $description_photo=$photo->description;
         if($description_photo==""){$description_photo="-";}
             $chemin_photo=$photo->chemin;
         if($chemin_photo==""){$chemin_photo="-";}
         echo "<div class='col-4'  style='height:350px;!important'>";
         echo "<img src='".$chemin_photo."' class='img-fluid'/>";
         echo "</div>";
       }
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
