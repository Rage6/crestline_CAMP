<?php

if (isset($_SESSION['userId'])) {
  // if () {
  //
  // } else {
  //
  // };
} else {
  session_destroy();
  header('Location: ../login/login.php');
  exit;
  return true;
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
