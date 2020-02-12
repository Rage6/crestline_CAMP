<?php

  require_once("required.php");
  require_once("index/lead_index.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crestline C.A.M.P.</title>
    <!-- Width: 0px to 360px (Default CSS) -->
    <link rel="stylesheet" type="text/css" href="index/css/360px_index.css" />
    <!-- Width: 361px to 375px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 361px) and (max-width: 375px)" href="css/index/375px_index.css" />
    <!-- Width: 376px to 414px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 376px) and (max-width: 414px)" href="css/index/414px_index.css"/>
    <!-- Width: 415px to 768px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 415px) and (max-width: 768px)" href="css/index/768px_index.css"/>
    <!-- Width: 769px to 1366px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1366px)" href="css/index/1366px_index.css"/>
    <!-- Width: 1367px to 1440px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1367px) and (max-width: 1440px)" href="css/index/1440px_index.css"/>
    <!-- Width: 1441px and above -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1441px)" href="css/index/1920px_index.css"/>
    <!-- All of the fonts -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Belleza|Darker+Grotesque|Francois+One|Julius+Sans+One|Lexend+Exa|Pontano+Sans|Rubik&display=swap" rel="stylesheet">
    <!-- For JS and jQuery -->
    <?php echo($jquery); ?>
    <!-- The main, custom JS -->
    <script src="index/index.js"></script>
    <!-- The source of the Google Map -->
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key= &callback=initMap"></script> -->
  </head>
  <body>
    <!-- <div>
      </br>
      </br>
      Font Test:</br>
      <div style="font-family:'Acme';font-size:1.2rem">Acme</div>
      <div style="font-family:'Belleza';font-size:1.2rem">Belleza</div>
      <div style="font-family:'Darker Grotesque';font-size:1.2rem">D. Grotesque</div>
      <div style="font-family:'Francois One';font-size:1.2rem">Francois One</div>
      <div style="font-family:'Julius Sans One';font-size:1.2rem">Julius</div>
      <div style="font-family:'Lexend Exa';font-size:1.2rem">Lexend Exa</div>
      <div style="font-family:'Pontano Sans';font-size:1.2rem">Pontano</div>
      <div style="font-family:'Rubik';font-size:1.2rem">Rubik</div>
    </div> -->
    <div class="album">
      <div class="allFrame tiltLeft frame1">
        <div class="allPhotos photo1"></div>
      </div>
      <div class="allFrame tiltRight frame2">
        <div class="allPhotos photo2"></div>
      </div>
    </div>
    <div class="titleBox">
      <div class="homeTitle">C.A.M.P.</div>
      <div class="homeSubtitle">Crestline Assistance & Ministries Program</div>
    </div>
    <div id="menuBttn" class="menuBttn menu">
      MENU
    </div>
    <div id="menuBox" class="menuBox menu">
      <div id="offer" class="menuOption">> WHAT WE OFFER</div>
      <div id="whenAndWhere" class="menuOption">> WHERE & WHEN</div>
      <div id="specialPrograms" class="menuOption">> SPECIAL PROGRAMS</div>
      <div id="helping" class="menuOption">> HOW YOU CAN HELP</div>
      <div id="bulletin" class="menuOption">> NEWS & ANNOUNCEMENTS</div>
      <div id="about" class="menuOption">> ABOUT C.A.M.P.</div>
      <div id="contact" class="menuOption">> CONTACT INFORMATION</div>
    </div>
    <div class="contentDiv">
      <div id="offerBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          WHAT WE OFFER
        </div>
        <div style="height:1000px" class="infoContent">
          This is "WHAT WE OFFER"
        </div>
      </div>
      <div id="whenAndWhereBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          WHERE & WHEN
        </div>
        <div class="infoContent">
          This is "WHERE & WHEN"
          <div id="mapBox"></div>
        </div>
      </div>
      <div id="specialProgramsBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          SPECIAL PROGRAMS
        </div>
        <div class="infoContent">
          In addition to our food pantry, C.A.M.P. extends our services in programs such as:
          <div class="programList">
            <div>
              <div>
                SCHOOL CLOTHES VOUCHER PROGRAM
              </div>
              Promoting health and wellness to our local children by aiding in school clothing and supplies.
            </div>
            <div>
              <div>
                POOL PASS PROGRAM
              </div>
              Giving local children the opportunity to enjoy Crestline City Pool throughout the summer.
            </div>
            <div>
              <div>
                THANKSGIVING DINNER PROGRAM
              </div>
              Thanksgiving is a time of family and food. C.A.M.P. distributes whole turkey dinners to families.
            </div>
            <div>
              <div>
                COMMUNITY CHRISTMAS PROGRAM
              </div>
              C.A.M.P. and local churches host a community event aiding in toys, food, clothing, and coats during the Christmas season.
            </div>
            <div>
              <div>
                EASTER DINNERS
              </div>
              Like Thanksgiving, C.A.M.P. assists families with dinner items such as ham, sides, rolls, and desserts.
            </div>
            <div>
              <div>
                SENIOR BOX PROGRAM
              </div>
              Seniors (must be 60+ years old and meet income guidelines) can receive a 30 .lbs box of food. Boxes include: cereal, milk, cheese, fruit, vegetables, tuna fish, poasta, and fresh produce.
            </div>
          </div>
        </div>
      </div>
      <div id="helpingBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          HOW YOU CAN HELP
        </div>
        <div style="height:1000px" class="infoContent">
          This is "HOW YOU CAN HELP"
        </div>
      </div>
      <div id="bulletinBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          NEWS & ANNOUNCEMENTS
        </div>
        <div style="height:1000px" class="infoContent">
          This is "NEWS & ANNOUNCEMENTS"
        </div>
      </div>
      <div id="aboutBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          ABOUT C.A.M.P.
        </div>
        <div class="infoContent">
          The <i>Crestline Assistance & Ministry Program</i> is a faith-based non-profit ministry represented by local churches in the Crestline area. We dedicate ourselves to assisting anyone in the Crestline and Crawford county area
        </div>
      </div>
      <div id="contactBox" class="infoSpace"></div>
      <div class="infoBox">
        <div class="infoTitle">
          CONTACT INFORMATION
        </div>
        <div style="height:1000px" class="infoContent">
          This is "CONTACT INFORMATION"
        </div>
      </div>
    </div>
    <footer>This is the footer</footer>
  </body>
</html>
