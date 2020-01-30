$(()=>{
  // console.log("The home page worked");

  // Presets the menu button and box
  let windowHeight = $(window).outerHeight();
  let windowWidth = $(window).outerWidth();
  let menuBttnHeight = $("#menuBttn").outerHeight();
  let initBoxHeight = $("#menuBox").outerHeight();
  let initBoxTop = (initBoxHeight - menuBttnHeight) * (-1);
  $(".menuBox").css('top',initBoxTop);
  $(".menu").css('visibility','visible');

  // Makes the options slide up or down
  $("#menuBttn").click(()=>{
    let newBttnTop = $("#menuBttn").position().top;
    let newBttnHeight = $("#menuBttn").outerHeight();
    let newBoxTop = $("#menuBox").position().top;
    let newBoxHeight = $("#menuBox").outerHeight();
    let newBoxPx = null;
    if (newBoxTop == newBttnHeight) {
      newBoxTop = (newBoxHeight - newBttnHeight) * (-1);
      newBoxPx = newBttnTop + "px";
      $("#menuBox").animate({"top":newBoxTop},400);
    } else {
      newBoxTop = newBttnHeight;
      newBoxPx = newBttnTop + "px";
      $("#menuBox").animate({"top":newBoxTop},400);
    };
  })

  // Makes the options slide up after selecting an option
  $(".menuOption").click(()=>{
    let newBttnHeight = $("#menuBttn").outerHeight();
    let newBttnTop = $("#menuBttn").position().top;
    let newBoxHeight = $("#menuBox").outerHeight();
    newBoxTop = (newBoxHeight - newBttnHeight) * (-1);
    newBoxPx = newBttnTop + "px";
    $("#menuBox").animate({"top":newBoxTop},400);
  })

});
