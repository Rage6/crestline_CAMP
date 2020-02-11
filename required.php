<?php

  session_start();
  require_once("pdo.php");

  $currentPath = $_SERVER['SERVER_NAME'];
  // Connects with jQuery
  if ($currentPath == "localhost") {
    $jquery = "<script src='/jquery.js'></script>";
  } else {
    $jquery = "<script src='https://code.jquery.com/jquery-3.4.1.js' integrity='sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=' crossorigin='anonymous'></script>";
  };

?>
