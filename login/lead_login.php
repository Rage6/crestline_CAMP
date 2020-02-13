<?php

  if (isset($_POST['login'])) {
    // This is where the username compares the posted username to all of the rows
    $findUserStmt = $pdo->prepare("SELECT * FROM users WHERE username=:un");
    $findUserStmt->execute(array(
      ':un'=>htmlentities($_POST['username'])
    ));
    $userInfo = $findUserStmt->fetch(PDO::FETCH_ASSOC);

    // The number of failed attempts is checked. A 6+ attemp is blocked.
    if ($userInfo['attempts'] >= 5) {
      $_SESSION['message'] = "<div class='loginMssg' style='color: red'>Your account is locked due to multiple failed attempts.</br> Contact the website director to unlock your account.</div>";
      header('Location: ../login/login.php');
      exit;
      return false;
    };

    // The encrypted password in the dB is compared to the current user's encrypted password
    if (password_verify($_POST['password'],$userInfo['password']) == true) {
      $_SESSION['userId'] = $userInfo['user_id'];
      $token = bin2hex(random_bytes(64));
      $updateTokenStmt = $pdo->prepare('UPDATE users SET token=:tk WHERE user_id=:ui');
      $updateTokenStmt->execute(array(
        ':tk'=>$token,
        ':ui'=>$_SESSION['userId']
      ));
      $_SESSION['token'] = $token;
      $_SESSION['message'] = "<div class='adminMssg' style='color: #328CC1'>Welcome, ".$userInfo['first_name']."</div>";
      $updateAttemptStmt = $pdo->prepare('UPDATE users SET attempts = 0 WHERE user_id=:ui');
      $updateAttemptStmt->execute(array(
        ':ui'=>$userInfo['user_id']
      ));
      $updateLogHistory = $pdo->prepare('INSERT INTO history (ip_address,user_id) VALUES (:ip,:ud)');
      $updateLogHistory->execute(array(
        ':ip'=>$_SERVER['REMOTE_ADDR'],
        ':ud'=>$userInfo['user_id']
      ));
      header('Location: ../admin/admin.php');
      exit;
      return true;
    } else {
      $updateAttemptStmt = $pdo->prepare('UPDATE users SET attempts = attempts + 1 WHERE user_id=:ui');
      $updateAttemptStmt->execute(array(
        ':ui'=>$userInfo['user_id']
      ));
      $attemptsLeft = 4 - $userInfo['attempts'];
      $_SESSION['message'] = "<div class='loginMssg' style='color: red'>Incorrect password</br>You have ".$attemptsLeft." more tries.</div>";
      header('Location: login.php');
      exit;
      return false;
    };
  }

?>
