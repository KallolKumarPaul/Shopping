$(document).ready(function(){
  $("#search").blur(function(){
      $("#sear").html('');
  });
    $("#search").keypress(function(e){
      var v = $("#search").val();
      if(e.which == 13) {
        window.location.href = "index.php/Shoppy/search_view";
      }
      $.ajax({
          url: 'http://localhost/Shopping/index.php/Shoppy/search_data',
          method: 'POST',
          data:{ data:v},
          success: function(success){
            $("#sear").html(success);
            // console.log(success);
          }
      });
    });
});
