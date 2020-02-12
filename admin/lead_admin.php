<?php

// The user id will be used to compare the dB's token to the user's token
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

if (isset($_POST['exitClick'])) {
  unset($_SESSION['userId']);
  unset($_SESSION['token']);
  $_SESSION['message'] = "<div class='loginMssg' style='color: #328CC1'>Logout successful</div>";
  header('Location: ../login/login.php');
  exit;
  return true;
};

?>
