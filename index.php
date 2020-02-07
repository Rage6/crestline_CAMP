<?php

  $currentPath = $_SERVER['SERVER_NAME'];

  // Connects with jQuery
  if ($currentPath == "localhost") {
    $jquery = "<script src='/jquery.js'></script>";
  } else {
    $jquery = "<script src='https://code.jquery.com/jquery-3.4.1.js' integrity='sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=' crossorigin='anonymous'></script>";
  };

  //
  if ($currentPath == "localhost") {
    if (isset($_GET['admin'])) {
      require_once("php/admin.php");
      require_once("html/admin.php");
    } elseif (isset($_GET['login'])) {
      require_once("php/login.php");
      require_once("html/login.php");
    } else {
      require_once("php/home.php");
      require_once("html/home.php");
    };
  };

?>
