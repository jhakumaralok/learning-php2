<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="userinput2.php" method="post">
  password : <input type = "password" name = "password"><br>

  <input type = "submit">
</form>

    <?php
    echo $_POST["password"];

     ?>
  </body>
</html>
