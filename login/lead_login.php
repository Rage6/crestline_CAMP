<?php

  if (isset($_POST['login'])) {
    // This is where the username compares the posted username to all of the rows
    $findUserStmt = $pdo->prepare("SELECT * FROM users WHERE username=:un");
    $findUserStmt->execute(array(
      ':un'=>htmlentities($_POST['username'])
    ));
    $userInfo = $findUserStmt->fetch(PDO::FETCH_ASSOC);
    // The discovered row's encrypted password is compared to the current user's encrypted password
    $enteredPw = htmlentities($_POST['password']);
    if (password_verify($_POST['password'],$userInfo['password']) == true) {
      $_SESSION['userId'] = $userInfo['user_id'];
      $_SESSION['token'] = $userInfo['token'];
      $_SESSION['message'] = "<div>Welcome, ".$userInfo['first_name']."</div>";
      header('Location: ?admin');
      return true;
    } else {
      $_SESSION['message'] = "<div>Incorrect password</div>";
      unset($_SESSION['userId']);
      unset($_SESSION['token']);
      header('Location: ?login');
      return false;
    };
  }

?>
