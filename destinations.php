<?

function load(){
	if(file_exists('voyages.xml')){
		$voyages = simplexml_load_file('voyages.xml');
	foreach ($voyages as $voyage){
      $voyageid=$voyage->ID;
       $miniature=$voyage->photo_miniature;
        $titre=$voyage->titre;
		if($titre==""){$titre="-";}
        $pays=$voyage->pays;
		if($pays==""){$pays="-";}
        $ville=$voyage->ville;
		if($ville==""){$ville="-";}
        $date=$voyage->date;
    if($date==""){$date="-/-/-";}
    echo "<div class='col-12 col-md-4 p-0 voyage view overlay hm-blue-light' voyageid='".$voyageid."'>";
    /*
      foreach ($voyage->photos as $photo)
      {
            $titre_photo=$photo->titre;
        if($titre_photo==""){$titre_photo="-";}
            $description_photo=$photo->description;
        if($description_photo==""){$description_photo="-";}
            $chemin_photo=$photo->chemin;
        if($chemin_photo==""){$chemin_photo="-";}
      }
      */
        echo "<img src='".$miniature."'/>";
        echo '<div class="mask flex-center">
                  <p class="white-text">'.$titre.'</p>
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


<div class='container'>
    <div class='row'>
      <?
        echo load();
      ?>
</div>
  <p class='pt-5'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
