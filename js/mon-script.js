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
