$(()=>{

  console.log("The admin worked again");

  $("#newBttn").click(()=>{
    if ($("#newMain").css('display') == "none") {
      $("#newMain").css('display','block')
      $("#newBttn").css('border-radius','10px 10px 0 0');
    } else {
      $("#newMain").css('display','none');
      $("#newBttn").css('border-radius','10px');
    };
  });

  $("[data-type='button']").click(()=>{
    let thisEvent = "[data-type='box'][data-number='" + event.target.dataset.number + "']";
    console.log($(thisEvent).css('display'));
    if ($(thisEvent).css('display') == 'block') {
      $(thisEvent).css('display','none');
    } else {
      $(thisEvent).css('display','block');
    };
  });

});
