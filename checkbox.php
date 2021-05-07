<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action = "checkbox.php" method = "post">
    Apples : <input type = "checkbox" name = "fruits[]" value = "Apples"><br>
    Oranges : <input type = "checkbox" name = "fruits[]" value = "Oranges"><br>
    Bananas : <input type = "checkbox" name = "fruits[]" value = "Bananas"><br>
    <input type = "submit">
    </form>

<?php

$fruits = $_POST["fruits"];
echo $fruits[0];


     ?>

  </body>
</html>
