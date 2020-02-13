$(()=>{

  console.log("The admin worked");

  $("#newBttn").click(()=>{
    if ($("#newMain").css('display') == "none") {
      $("#newMain").css('display','block')
      $("#newBttn").css('border-radius','10px 10px 0 0');
    } else {
      $("#newMain").css('display','none');
      $("#newBttn").css('border-radius','10px');
    };
  });

});
