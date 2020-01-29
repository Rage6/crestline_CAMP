$(()=>{
  // console.log("The home page worked");

  // Presets the menu button and box
  let windowHeight = $(window).outerHeight();
  let windowWidth = $(window).outerWidth();
  let menuBttnHeight = $("#menuBttn").outerHeight();
  let initBttnTop = windowHeight - menuBttnHeight;
  let initBttnPx = initBttnTop + "px";
  $("#menuBttn").css('top',initBttnPx);
  $("#menuBox").css('top',initBttnPx);
  $(".menu").css('visibility','visible');

  $("#menuBttn").click(()=>{
    let boxHeight = $("#menuBox").outerHeight();
    let newBoxTop = $("#menuBox").position().top;
    let newBttnTop = $("#menuBttn").position().top;
    if (newBoxTop == newBttnTop) {
      let newBoxTop = newBttnTop - boxHeight;
      let newBoxPx = newBoxTop + "px";
      $("#menuBox").animate({"top":newBoxTop},400);
    } else {
      let newBoxPx = newBttnTop + "px";
      $("#menuBox").animate({"top":newBttnTop},400);
    };

  })

});
