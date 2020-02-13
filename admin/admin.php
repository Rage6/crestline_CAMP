<?php

  require_once("../required.php");
  require_once("lead_admin.php");

  // var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crestline C.A.M.P.</title>
    <!-- Width: 0px to 360px (Default CSS) -->
    <link rel="stylesheet" type="text/css" href="css/360px_admin.css" />
    <!-- Width: 361px to 375px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 361px) and (max-width: 375px)" href="css/375px_admin.css" />
    <!-- Width: 376px to 414px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 376px) and (max-width: 414px)" href="css/414px_admin.css"/>
    <!-- Width: 415px to 768px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 415px) and (max-width: 768px)" href="css/768px_admin.css"/>
    <!-- Width: 769px to 1366px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1366px)" href="css/1366px_admin.css"/>
    <!-- Width: 1367px to 1440px -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1367px) and (max-width: 1440px)" href="css/1440px_admin.css"/>
    <!-- Width: 1441px and above -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1441px)" href="css/1920px_admin.css"/>
    <!-- All of the fonts -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Belleza|Darker+Grotesque|Francois+One|Julius+Sans+One|Lexend+Exa|Pontano+Sans|Rubik&display=swap" rel="stylesheet">
    <?php echo($jquery); ?>
    <script src="js/home.js"></script>
  </head>
  <body>
    <div class="topBanner">
      <form method="POST" name="logOut" />
        <input class="logOutBttn" type="SUBMIT" name="exitClick" value="LOGOUT" />
      </form>
    </div>
    <div>STAFF CENTER</div>
    <?php
      if (isset($_SESSION['message'])) {
        echo($_SESSION['message']);
        unset($_SESSION['message']);
      };
    ?>
    <div>
      <form method="POST">
        <div>
          <input type='text' name='title' placeholder='Enter a title' />
        </div>
        <div>
          <textarea name='title' placeholder='Enter your '></textarea/>
        </div>
      </form>
    </div>
    <div class="bulletinList">
      <?php
        $bulletinListStmt = $pdo->prepare("SELECT * FROM bulletins ORDER BY post_time ASC");
        $bulletinListStmt->execute();
        $bulletinList = array();
        while ($oneBulletin = $bulletinListStmt->fetch(PDO::FETCH_ASSOC)) {
          $bulletinList[] = $oneBulletin;
        };
        if (count($bulletinList) > 0) {
          for ($bulletinNum = 0; $bulletinNum < count($bulletinList); $bulletinNum++) {
            echo("
            <div class='bulletinPost'>
              <div class='bulletinTitle'>
                ".$bulletinList[$bulletinNum]['title']."
              </div>
              <div class='bulletinContent'>
                ".$bulletinList[$bulletinNum]['content']."
              </div>
            </div>");
          };
        } else {
            echo("There are no bulletins at this time.");
        }
      ?>
    </div>
  </body>
</html>
