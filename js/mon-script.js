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

// Gestion du bouton Like
$(document).ready(function() {
  $('.like').click(function(e) {
    console.log('Start first function');
    var voyageid = $('#voyage').attr('voyageid');
    console.log('voyageid = ' + voyageid);
    var photoID = $(this).attr('photoid');
    console.log('photoID = ' + photoID);
    var likeNumber = parseInt($(this).attr('likenumber'));
    console.log('likeNumber = ' + likeNumber);
    var newLikeNumber;

    if ($('#photo_' + photoID).hasClass('fa-heart-o')) {
        $('#photo_' + photoID).addClass('fa-heart pink-text');
        $('#photo_' + photoID).removeClass('fa-heart-o');

        newLikeNumber = likeNumber+1;
        console.log('newLikeNumber = ' + newLikeNumber);
        $('span.photo_' + photoID).text(newLikeNumber);
    }
    else {
      $('#photo_' + photoID).addClass('fa-heart-o');
      $('#photo_' + photoID).removeClass('fa-heart pink-text');

      // newLikeNumber = likeNumber-1;
      // console.log('newLikeNumber = ' + newLikeNumber);
      $('span.photo_' + photoID).text(likeNumber);
    }
    return false;
  });
});

// Deuxieme AJAX mode
/*
function loadXMLDoc(photoID, likeNumber) {
  console.log('Start loadXMLDoc function');
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "voyages.xml" , true);
  xmlhttp.send();
  console.log('End loadXMLDoc function');
}

function myFunction(xml) {
    console.log('Start myFunction function');
    var xmlDoc = xml.responseXML;

    $('.like').click(function(e) {
        console.log('Start first function');
        var voyageid = $('#voyage').attr('voyageid');
        console.log('voyageid = ' + voyageid);
        var photoID = $(this).attr('photoid');
        console.log('photoID = ' + photoID);
        var likeNumber = parseInt($(this).attr('likenumber'));
        console.log('likeNumber = ' + likeNumber);
        var newLikeNumber;

        if ($('#photo_' + photoID).hasClass('fa-heart-o')) {
            $('#photo_' + photoID).addClass('fa-heart pink-text');
            $('#photo_' + photoID).removeClass('fa-heart-o');

            newLikeNumber = likeNumber+1;
            console.log('newLikeNumber = ' + newLikeNumber);
            $('span.photo_' + photoID).text(newLikeNumber);
        }
        else {
          $('#photo_' + photoID).addClass('fa-heart-o');
          $('#photo_' + photoID).removeClass('fa-heart pink-text');

          // newLikeNumber = likeNumber-1;
          // console.log('newLikeNumber = ' + newLikeNumber);
          $('span.photo_' + photoID).text(likeNumber);
        }

        var x = xmlDoc.getElementsByTagName('voyage');
        console.log('x = ' + x);

        var y = x[voyageid].getElementsByTagName('photo');
        console.log('y = ' + y);

        var z = y[photoID].getElementsByTagName('like')[0].childNodes[0].nodeValue;
        console.log('z = ' + z);

        xx = xmlDoc.getElementsByTagName('voyage');
        yy = xx[0].getElementsByTagName('photo');
        yy.item(0).setAttribute("like", "1000");

        return false;
    });
    console.log('End myFunction function');
}

function updateLike() {
  console.log('START JS updateLike()');
  $.ajax({ url: 'voyage.php',
           data: {action: 'updateLike2',
                  voyageID: $("#voyage").attr('voyageid')
                  //photoID: $("#inputprenom").attr('photoID'),
                  //likeNumber: $("#inputdate").val('like')
                 },
           type: 'post',
           success: function(output) {
             console.log('Like number updated !');
           }
  });
  console.log('END JS updateLike()');
}
*/

// Gestion du bouton Share sur la page footer.php
$(document).ready(function() {
  $('a.share').click(function() {
    $(this).toggleClass('active');
    $('.share-menu').toggle();
  });
});
