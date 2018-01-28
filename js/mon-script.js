$( document ).ready(function() {
    $('.nav-link').click(function(){
      loadpage($(this));
      $('.nav-item').removeClass('active');
      $(this).closest('.nav-item').addClass('active');
    });
    $('.navbar-brand').click(function(){
      loadpage($(this));
      $('.nav-item').removeClass('active');
      $('.nav-link[page="home"]').closest('.nav-item').addClass('active');
    });
});

function loadpage(selector){
  if(selector.attr('page')!=null){
  $.ajax({url: "loadWrapper.php",
  data:{
    page:selector.attr('page')
  },
  success: function(result){
    $("#wrapper").html(result);
    $('.voyage').click(function(){
      var voyageid=$(this).attr('voyageid');
        loadVoyage(voyageid);
    });
}});
}
}

function loadVoyage(id){
  $.ajax({url: "loadVoyage.php",
  data:{
    voyageid:id
  },
  success: function(result){
    $("#wrapper").html(result);
}})
}
