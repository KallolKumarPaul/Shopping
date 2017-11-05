var num=0;
  $(document).ready(function(){
let btn = $("#btn");
let div = $("#bot");
let bot = new RiveScript();

// Load a directory full of RiveScript documents (.rive files). This is for
// Node.JS only: it doesn't work on the web!
bot.loadFile("http://localhost/Shopping/public/bot_brain/bot.rive", loading_done, loading_error);

function loading_done(){
console.log("Loaded Successfully");
bot.sortReplies();
}
function loading_error(){
console.log("Loading Failed");
}

$(document).keypress(function(e) {
if(e.which == 13) {
let input = $("#msg").val();
let reply = bot.reply("local-user",input);
// div.html(reply);
div.append(reply+'<br><br>');

$("#msg").val('');
$("#msg").focus();
// let n = reply.search("id.");
var r = /\d+/;
var n = (reply.match(r));
if(n!=null){
  // $('#data').val(n);
  $.ajax({
    url: 'http://localhost/CodeIgniter-3.1.6/Chatbot/get_data',
    method: 'POST',
    data: {data:n},
    success: function(data){
      div.append('Your status is: '+data+'<br>');
    }
  });
          }
      }
  });
});
