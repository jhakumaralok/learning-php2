<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action = "ifsatatement3.php" method = "post">
    First Num :<input type = "number" name = "num1"><br><br>
    OP        :       <input type ="text" name = "op"><br><br>
    Second Num:<input type = "number" name = "num2"><br><br>
    <input type ="submit">
    </form>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$OP = $_POST["OP"]

     ?>

  </body>
</html>
