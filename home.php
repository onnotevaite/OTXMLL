  <?php include("header.php"); ?>

  <!-- Body -->
  <body class="home">

    <?php include("navbar.php"); ?>

    <!--========== SECTION 1 : DERNIER VOYAGE ==========-->
    <? function load_last_trip(){
    		if(file_exists('voyages.xml')){
    			$voyages = simplexml_load_file('voyages.xml');
          $voyage_count = count($voyages);

          $voyageid=$voyages->voyage[$voyage_count-1]->ID;
          $banner=$voyages->voyage[$voyage_count-1]->banner;
          $titre=$voyages->voyage[$voyage_count-1]->titre;
            if($titre==""){$titre="Mon voyage ...";}
          $pays=$voyages->voyage[$voyage_count-1]->pays;
            if($pays==""){$pays="-";}
          $ville=$voyages->voyage[$voyage_count-1]->ville;
            if($ville==""){$ville="-";}
          $date=$voyages->voyage[$voyage_count-1]->date;
            if($date==""){$date="-/-/-";}
          $colorhover=$voyages->voyage[$voyage_count-1]->colorhover;
            if($colorhover==""){$colorhover="hm-white-light";}

          echo "<div class='last-trip view hm-zoom hoverable' voyageid='".$voyageid."' style='background: url(".$banner.") no-repeat center; background-size: cover;'>";
            echo "<a href='voyage.php?voyageID=".$voyageid."'>";
              echo "<div class='last-trip-content'>"; echo "<div class='mask flex-center'></div>";
                echo "<p class='title'>".$pays." - ".$ville."</p>";
              echo "</div>";
            echo "</a>";
          echo "</div>";
    		}
    		else
    		{
    			exit('Echec lors de l\'ouverture du fichier db.xml.');
    		}
    	}
    ?>

    <section id="last-trip">
      <p class="titre-page">VOYAGES</p>
      <hr class="hr-titre-page">
      <?
        echo load_last_trip();
      ?>
    </section>
    <!--========== END SECTION 1 ==========-->

    <!--========== SECTION 2 : AUTRES VOYAGES ==========-->
      <? function load(){
    		if(file_exists('voyages.xml')){
    			$voyages = simplexml_load_file('voyages.xml');
          $voyage_count = count($voyages);
          if($voyage_count<=5){
            for ($voyage_number = $voyage_count-2; $voyage_number >= 0; $voyage_number--){
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

                echo "<div class='voyage-content col-9 col-md-5 col-lg-4 p-0 view overlay ".$colorhover." hm-zoom' voyageid='".$voyageid."'>";
                  echo "<a href='voyage.php?voyageID=".$voyageid."'>";
                    echo "<img src='".$miniature."'/>";
                    echo '<div class="mask flex-center flex-column">
                              <p class="titre-voyage">'.$ville.'</p>
                              <p class="sous-titre-voyage">'.$pays.'</p>
                          </div>';
                    echo "</a>";
                echo "</div>";
        		}
          } else {
            for ($voyage_number = $voyage_count-2; $voyage_number >= $voyage_count-5; $voyage_number--){
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
    		}
    		else
    		{
    			exit('Echec lors de l\'ouverture du fichier db.xml.');
    		}
    	}
    ?>
    <section id="trip" class="trip">
      <div class="asterisk">
        <p>* * *</p>
      </div>
      <div class="container">
          <div class="row justify-content-center">
            <?
              echo load();
            ?>
      		</div>
      </div>
    </section>
    <!--========== END SECTION 2 ==========-->

    <!--========== SECTION 3 : INSTA ==========-->
    <section id="insta" class="insta">
    </section>
    <!--========== END SECTION 3 ==========-->

  <?php include("footer.php"); ?>
