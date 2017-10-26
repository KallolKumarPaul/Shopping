$(document).ready(function()
{
  $("#search").blur(function()
  {
      $("#sear").html('');
  });
    $("#search").keypress(function()
    {
      var v = $("#search").val();
      $.ajax
      ({
          url: 'http://localhost/xampp/Shopping/Shoppy/search_data',
          method: 'POST',
          data:{ data:v},
          success: function(success)
          {
            $("#sear").html(success);
          }
      });
    });
});
