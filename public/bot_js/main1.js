$(document).ready(function(){
    $("#search").keypress(function(){
      var v = $("#search").val();
      $.ajax({
          url: 'http://localhost/Shopping/index.php/Shoppy/search_data',
          method: 'POST',
          data:{ data:v},
          success: function(success){
            $("#sear").html(success);
          }
      });
    });
});
