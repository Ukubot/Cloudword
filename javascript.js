$(document).ready(function() {
  $("#input-word").change(function(evt) {
    console.log(evt);
    var wordVal = $("#input-word").val();
    console.log(wordVal);
    if(wordVal.length >= 10)
    {
      console.log("No more wordspls");
    }
  });
});
