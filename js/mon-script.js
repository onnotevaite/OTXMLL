$( document ).ready(function() {
    $('.nav-link').click(function(){
      loadpage($(this));
    });
    $('.logo').click(function(){
      loadpage($(this));
    });
});

function loadpage(selector)
{
  if(selector.attr('page')!=null)
  {
  $.ajax({url: "loadWrapper.php",
  data:{
    page:selector.attr('page')
  },
  success: function(result){
    $("#wrapper").html(result);
}});
}
}
