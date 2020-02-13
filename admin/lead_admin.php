<?php

// The user id is used to compare the dB's token to the user's token
if (isset($_SESSION['userId'])) {
  $compareTokenStmt = $pdo->prepare("SELECT token FROM users WHERE user_id=:ui");
  $compareTokenStmt->execute(array(
    ':ui'=>htmlentities($_SESSION['userId'])
  ));
  $databaseToken = $compareTokenStmt->fetch(PDO::FETCH_ASSOC)['token'];
  if ($databaseToken != $_SESSION['token']) {
    session_destroy();
    $_SESSION['message'] = "<div class='loginMssg' style='color: red'>Nice try.</br>Your tokens do not match</div>";
    header('Location: ../login/login.php');
    exit;
    return false;
  };
} else {
  session_destroy();
  $_SESSION['message'] = "<div class='loginMssg' style='color: red'>Nice try.</br>You must login before entering CAMP's Staff Center</div>";
  header('Location: ../login/login.php');
  exit;
  return false;
};

// A new bulletin is added with this code
if (isset($_POST['newBulletin'])) {
  if ($_POST['newTitle'] == '') {
    $_SESSION['message'] = "<div class='loginMssg' style='color: red'>Title required</div>";
    header('Location: admin.php');
    exit;
    return false;
  } else if ($_POST['newContent'] == '') {
    $_SESSION['message'] = "<div class='loginMssg' style='color: red'>New information required</div>";
    header('Location: admin.php');
    exit;
    return false;
  } else {
    $addBulletinStmt = $pdo->prepare("INSERT INTO bulletins (title,content) VALUES (:nt,:nc)");
    $addBulletinStmt->execute(array(
      ':nt'=>htmlentities($_POST['newTitle']),
      ':nc'=>htmlentities($_POST['newContent'])
    ));
    $_SESSION['message'] = "<div class='loginMssg' style='color: #328CC1'>Bulletin added</div>";
    header('Location: admin.php');
    exit;
    return true;
  };
}

// How it logs out a user
if (isset($_POST['exitClick'])) {
  unset($_SESSION['userId']);
  unset($_SESSION['token']);
  $_SESSION['message'] = "<div class='loginMssg' style='color: #328CC1'>Logout successful</div>";
  header('Location: ../login/login.php');
  exit;
  return true;
};

?>
