$(document).ready(()=>{
  // console.log("The home page worked");

  // Presets the menu button and box
  let windowHeight = $(window).outerHeight(true);
  let windowWidth = $(window).outerWidth(true);
  let menuBttnHeight = $("#menuBttn").outerHeight(true);
  let initBoxHeight = $("#menuBox").outerHeight(true);
  let initBoxTop = initBoxHeight * (-1);
  $(".menuBox").css('top',initBoxTop);
  $(".menu").css('visibility','visible');

  // To set up the Google Map
  const initMap() {
    const campLocation = {lat: 40.779604, lng: -82.730721};
    let mapImg = new google.maps.Map(
      $("#mapBox"), {
        zoom: 4,
        center: campLocation
      }
    );
    let marker = new google.maps.Marker(
      {
        position: campLocation,
        map: mapImg
      }
    );
  };

  // Makes the options slide up or down
  $("#menuBttn").click(()=>{
    let newBttnTop = $("#menuBttn").position().top;
    let newBttnHeight = $("#menuBttn").outerHeight();
    let newBoxTop = $("#menuBox").position().top;
    let newBoxHeight = $("#menuBox").outerHeight();
    if (newBoxTop == newBttnHeight) {
      newBoxTop = (newBoxHeight - newBttnHeight) * (-1);
      $("#menuBox").animate({"top":newBoxTop},400);
    } else {
      newBoxTop = newBttnHeight;
      $("#menuBox").animate({"top":newBoxTop},400);
    };
  })

  // Makes the options slide up after selecting an option
  $(".menuOption").click(()=>{
    let newBttnHeight = $("#menuBttn").outerHeight();
    let newBttnTop = $("#menuBttn").position().top;
    let newBoxHeight = $("#menuBox").outerHeight();
    newBoxTop = (newBoxHeight - newBttnHeight) * (-1);
    $("#menuBox").animate({"top":newBoxTop},200);
  })

  // Function to slide the window to the appropriate topic
  const clickForBox = (boxId) => {
    let currentMenuHeight = $("#menuBttn").outerHeight();
    $(boxId).css('height',currentMenuHeight);
    let boxTop = $(boxId).position().top;
    $('html,body').animate({
      scrollTop: $(boxId).offset().top
    },800);
  };

  $("#offer").click(()=>{
    clickForBox("#offerBox");
  })

  $("#whenAndWhere").click(()=>{
    clickForBox("#whenAndWhereBox");
  })

  $("#specialPrograms").click(()=>{
    clickForBox("#specialProgramsBox");
  })

  $("#helping").click(()=>{
    clickForBox("#helpingBox");
  })

  $("#bulletin").click(()=>{
    clickForBox("#bulletinBox");
  })

  $("#about").click(()=>{
    clickForBox("#aboutBox");
  })

  $("#contact").click(()=>{
    clickForBox("#contactBox");
  })



});
