$(()=>{

  console.log("The admin worked again");

  // Shows and hides the 'new bulletin' option
  $("#newBttn").click(()=>{
    if ($("#newMain").css('display') == "none") {
      $("#newMain").css('display','block')
      $("#newBttn").css('border-radius','10px 10px 0 0');
    } else {
      $("#newMain").css('display','none');
      $("#newBttn").css('border-radius','10px');
    };
  });

  // Opens and closes the selected 'Delete' option
  $("[data-type='button']").click(()=>{
    let thisEvent = "[data-type='box'][data-number='" + event.target.dataset.number + "']";
    if ($(thisEvent).css('display') == 'block') {
      $(thisEvent).css('display','none');
    } else {
      $(thisEvent).css('display','block');
    };
  });

});
