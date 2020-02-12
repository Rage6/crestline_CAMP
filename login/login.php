<?php

  require_once("../required.php");
  require_once("lead_login.php");

  // var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | Crestline C.A.M.P.</title>
    <!-- Width: 0px to 360px (Default CSS) -->
    <link rel="stylesheet" type="text/css" href="css/360px_login.css" />
    <!-- Width: 361px to 375px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 361px) and (max-width: 375px)" href="css/375px_login.css" />
    <!-- Width: 376px to 414px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 376px) and (max-width: 414px)" href="css/414px_login.css"/>
    <!-- Width: 415px to 768px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 415px) and (max-width: 768px)" href="css/768px_login.css"/>
    <!-- Width: 769px to 1366px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1366px)" href="css/1366px_login.css"/>
    <!-- Width: 1367px to 1440px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1367px) and (max-width: 1440px)" href="css/1440px_login.css"/>
    <!-- Width: 1441px and above -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1441px)" href="css/1920px_login.css"/>
    <!-- All of the fonts -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Belleza|Darker+Grotesque|Francois+One|Julius+Sans+One|Lexend+Exa|Pontano+Sans|Rubik&display=swap" rel="stylesheet">
    <!-- For JS and jQuery -->
    <?php echo($jquery); ?>
    <!-- The main, custom JS -->
    <script src="login.js"></script>
  </head>
  <body>
    <div class="title">
      <div>C.A.M.P.</div>
      <div>Crestline Assistance & Ministries Program</div>
    </div>
    <div class="wholeBody">
      <div class="loginBox">
        <form method="POST">
          <div>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div>
            <input class="loginEnter" type="submit" name="login" value="ENTER" />
          </div>
        </form>
      </div>
      <?php
        if (isset($_SESSION['message'])) {
          echo($_SESSION['message']);
          unset($_SESSION['message']);
        };
      ?>
    </div>
  </body>
</html>
