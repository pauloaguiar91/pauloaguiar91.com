$(document).ready(function () {
  $(".aboutFeature").click(function () {
      
  var colors = ["#EDEDED","white"];                
  var rand = Math.floor(Math.random()*colors.length);           
  $('.aboutFeature').css("background-color", colors[rand]);   });
});

$(document).ready(function () {
  $('.divider').animate({ height: 30 },1500);
});


$(document).ready(function () {

$('.type').typist({

  textColor: "#4185C1",
  height:35,
  backgroundColor: "#EDEDED"

});

$('.type').typist('prompt')
  .typist('type', 'Web, Software & Game Developer')
  
  });
