
$(document).ready(function(){
  $(".head").click(function(){
    $("#home").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#navbar").click(function(){
  	$("#bar").slideToggle();
  });
});

$(document).ready(function(){
  $("#tableC").click(function(){
    $("#tableC").fadeToggle("slow");
  });
});


$(document).ready(function(){
    $(".drag").draggable({ axis: "x",containment: "body", scroll: false,stack: '.drag' });
  });