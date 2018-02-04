<? function load(){
		if(file_exists('voyages.xml')){
			$voyages = simplexml_load_file('voyages.xml');
			$voyage_count = count($voyages);
			for ($voyage_number = $voyage_count-1; $voyage_number >= 0; $voyage_number--){
				$voyageid=$voyages->voyage[$voyage_number]->ID;
				$miniature=$voyages->voyage[$voyage_number]->photo_miniature;
				$titre=$voyages->voyage[$voyage_number]->titre;
					if($titre==""){$titre="-";}
				$pays=$voyages->voyage[$voyage_number]->pays;
					if($pays==""){$pays="-";}
				$ville=$voyages->voyage[$voyage_number]->ville;
					if($ville==""){$ville="-";}
				$date=$voyages->voyage[$voyage_number]->date;
					if($date==""){$date="-/-/-";}
				$colorhover=$voyages->voyage[$voyage_number]->colorhover;
					if($colorhover==""){$colorhover="hm-white-light";}

		    echo "<div class='voyage-content col-9 col-md-5 col-lg-4 p-0 voyage view overlay ".$colorhover." hm-zoom' voyageid='".$voyageid."'>";
			    echo "<img src='".$miniature."'/>";
			    echo '<div class="mask flex-center flex-column">
			              <p class="titre-voyage">'.$ville.'</p>
										<p class="sous-titre-voyage">'.$pays.'</p>
			          </div>';
		    echo "</div>";
			}
		}
		else
		{
			exit('Echec lors de l\'ouverture du fichier db.xml.');
		}
	}
?>

<div class="container">
	<p class="titre-page">DESTINATIONS</p>
	<hr class="hr-titre-page">
    <div class="row justify-content-center">
      <?
        echo load();
      ?>
		</div>
</div>
