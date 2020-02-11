<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crestline C.A.M.P.</title>
    <?php echo($jquery); ?>
    <script src="js/home.js"></script>
  </head>
  <body>
    <?php
      if (isset($_SESSION['message'])) {
        echo($_SESSION['message']);
        unset($_SESSION['message']);
      };
    ?>
    <div>You are in the Admin page</div>
  </body>
</html>
