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
    <script src="admin.js"></script>
  </head>
  <body>
    <div class="topBanner">
      <form method="POST" name="logOut" />
        <input class="logOutBttn" type="SUBMIT" name="exitClick" value="LOGOUT" />
      </form>
    </div>
    <div class="mainTitle">
      STAFF CENTER
    </div>
    <?php
      if (isset($_SESSION['message'])) {
        echo($_SESSION['message']);
        unset($_SESSION['message']);
      };
    ?>
    <div class="newBox">
      <div id="newBttn" class="newBttn">NEW +</div>
      <div id="newMain" class="newMain">
      <form method="POST">
        <input class="newEntry" type='text' name='newTitle' placeholder='Enter a title' />
        <textarea class="newEntry" name='newContent' placeholder='Enter your new information'></textarea/>
        <input class='newClick' type='submit' name='newBulletin' value='ENTER' />
      </form>
      </div>
    </div>
    <div class="bulletinList">
      <?php
        $bulletinListStmt = $pdo->prepare("SELECT * FROM bulletins ORDER BY post_time DESC");
        $bulletinListStmt->execute();
        $bulletinList = array();
        while ($oneBulletin = $bulletinListStmt->fetch(PDO::FETCH_ASSOC)) {
          $bulletinList[] = $oneBulletin;
        };
        if (count($bulletinList) > 0) {
          for ($bulletinNum = 0; $bulletinNum < count($bulletinList); $bulletinNum++) {
            echo("
            <div class='bulletinPost'>
              <form method='POST'>
                <input type='hidden' value='".$bulletinList[$bulletinNum]['bulletin_id']."'/>
                <div class='bulletinTitle'>
                  <input type='text' name='updateTitle' value='".$bulletinList[$bulletinNum]['title']."' placeholder='Enter a title'
                </div>
                <div class='bulletinContent'>
                  <textarea name='updateContent' placeholder='Enter your information'>
                    ".$bulletinList[$bulletinNum]['content']."
                  </textarea>
                </div>
                <div>
                  <input type='submit' name='changeBulletin' value='CHANGE' />
                  <input type='submit' name='deleteBulletin' value='DELETE' />
                </div>
              </form>
            </div>");
          };
        } else {
            echo("There are no bulletins at this time.");
        }
      ?>
    </div>
  </body>
</html>
