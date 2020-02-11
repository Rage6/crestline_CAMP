<?php

  $serverName = $_SERVER['SERVER_NAME'];

  if ($serverName == "localhost") {
    $pdo = new PDO('mysql:host=localhost;port=8888;dbname=crestline_camp','Nick','Ike');
    // $rootURL = $currentHost."/Crestline_CAMP/";
    $jquery = "../jquery.js";
  };

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
