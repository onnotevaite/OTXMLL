// Animation du logo "Objectif" de la page index.php
$('#fullLogo').mouseenter(function() {
  AnimateRotate(30);
  AnimateRotate(-30);
  AnimateRotate(0);
});

function AnimateRotate(myAngle){
    $("#objectif").animate({deg: myAngle}, {
        duration: 1000,
        step: function(now){
            $("#objectif").css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
}

// Gestion du fond d'ecran de la page index.php
$(document).ready(function() {
  var tabImg = new Array();
    tabImg[0]  = "1.jpg";
    tabImg[1]  = "2.jpg";
    tabImg[2]  = "3.jpg";
    tabImg[3]  = "4.jpg";
    tabImg[4]  = "5.jpg";

  var randomImage = tabImg[Math.round(Math.random()*4)];
  var background_info = "url(\"img/background_index/" + randomImage + "\") fixed no-repeat center";
  $('#banner').css({
   'background': background_info,
   'background-size' : 'cover'
  });
});

// Gestion du Thumbnails sur la page home.php
$(document).ready(function() {
      $("#liste_voyage > #voyage_link").on('click', function() {
          var voyageID = $(this).attr("voyageid");
          var voyageURL = "voyage.php?voyageID=" + voyageID;
          $(this).attr("href", voyageURL);
      });
});

// Gestion du Ninja-Slider sur les pages voyage.php
function lightbox(idx) {
    var ninjaSldr = document.getElementById("ninja-slider");
    ninjaSldr.parentNode.style.display = "block";
    nslider.init(idx);
    var fsBtn = document.getElementById("fsBtn");
    fsBtn.click();
}

function fsIconClick(isFullscreen, ninjaSldr) {
    if (isFullscreen) {
        ninjaSldr.parentNode.style.display = "none";
    }
}

// Gestion du bouton Share sur la page footer.php
$(document).ready(function() {
  $('a.share').click(function() {
    $(this).toggleClass('active');
    $('.share-menu').toggle();
  });
});
